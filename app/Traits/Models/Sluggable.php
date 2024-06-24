<?php

namespace App\Traits\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait Sluggable
{
    protected static function booted()
    {
        parent::boot();

        static::creating(fn (Model $model) => $model->slug = self::generateSlug($model));
        static::updating(fn (Model $model) => $model->slug = self::generateSlug($model));
    }

    private static function generateSlug(Model $model)
    {
        $model->slug = Str::slug($model->{$model->slugReferenceColumn});
        $getLatestSlugBaseQuery = static::select(['slug'])->where(function ($query) use ($model) {
            $query->where('slug', $model->slug)->orWhere('slug', 'LIKE', "$model->slug-%");
        });
            
        if (!is_null($model->{$model->getKeyName()})) {
            $getLatestSlugBaseQuery->where($model->getKeyName(), '!=', $model->{$model->getKeyName()});
        }
        
        $latestSlug = $getLatestSlugBaseQuery->latest()->value('slug');

        if ($latestSlug ) {
            $explodedSlug = explode('-', $model->slug);
            if (is_numeric(end($explodedSlug))) {
                $latestNumber = intval(end($explodedSlug)) + 1;
                $model->slug .= "-{$latestNumber}";
            }
        }

        return $model->slug;
    }
}