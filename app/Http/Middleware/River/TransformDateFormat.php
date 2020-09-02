<?php

namespace App\Http\Middleware\River;

use Carbon\Carbon;
use Illuminate\Foundation\Http\Middleware\TransformsRequest;

class TransformDateFormat extends TransformsRequest
{
    /**
     * Transform all numeric values with comma separator
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return mixed
     */
    protected function transform($key, $value)
    {
        try {
            if (strpos($key, '_date') === false) {
                return $value;
            }

            $date = Carbon::createFromFormat('Y-m-d\TH:i:s+', $value);
            return $date->format('Y-m-d');
        } catch (\Exception $e) {
            // do nothing
        }
        
        return $value;
    }
}
