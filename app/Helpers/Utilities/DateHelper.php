<?php

namespace App\Helpers\Utilities;

use Carbon\Carbon;

class DateHelper
{
    public static function generateDateRange($month, $year)
    {
        $baseDate = '0-0-01';
        $splittedBaseDate = explode('-', $baseDate);

        $splittedBaseDate[1] = $month ?? Carbon::now()->format('m');
        $splittedBaseDate[0] = $year ?? Carbon::now()->year;
        $startDate = implode('-', $splittedBaseDate);
        $endDate = Carbon::parse($startDate)->endOfMonth()->format('Y-m-d');

        return (object) [
            'start_date' => $startDate,
            'end_date' => $endDate
        ];
    }
}