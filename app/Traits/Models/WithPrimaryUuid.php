<?php

namespace App\Traits\Models;

use Illuminate\Support\Str;

trait WithPrimaryUuid
{
    /**
     * Override Boot Method from Model Class.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model): void {
            try {
                $model->id = Str::uuid();
            } catch (\Throwable $e) {
                abort(500, $e->getMessage());
            }
        });
    }

    public function getKeyType(): string
    {
        return 'string';
    }

    public function getIncerementing(): bool
    {
        return false;
    }
}
