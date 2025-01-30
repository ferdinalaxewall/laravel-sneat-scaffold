<?php

namespace App\Helpers\Utilities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Visitor
{
    public static function recordVisitor(Model $modelData, string $visitor_column = 'total_visitor'): void
    {
        $clientIp = request()->getClientIp();
        $cacheKey = "{$modelData->getTable()}:{$clientIp}={$modelData->id}";

        if (! Cache::has($cacheKey)) {
            Cache::remember($cacheKey, config('visitor.cache_time'), fn(): array => [
                'client_ip' => $clientIp,
                'id' => $modelData->id,
            ]);

            $modelData->increment($visitor_column);
        }
    }
}
