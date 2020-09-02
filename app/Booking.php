<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'reserved_date', 'reserved_time', 'message',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'formatted_reserved_date',
        'formatted_reserved_time',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'reserved_date',
        'reserved_time',
    ];

    /**
     * Get the formatted residential address
     *
     * @return string
     */
    public function getFormattedReservedDateAttribute()
    {
        return $this->reserved_date->format('D m Y');
    }

    /**
     * Get the formatted residential address
     *
     * @return string
     */
    public function getFormattedReservedTimeAttribute()
    {
        return $this->reserved_time->format('H:ia');
    }

    /**
     * Scope a query to only include future bookings only
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActiveReservation($query)
    {
        return $query->where('reserved_date', '>=', Carbon::now()->format('Y-m-d'))
                ->orderBy('id', 'desc');
    }
}
