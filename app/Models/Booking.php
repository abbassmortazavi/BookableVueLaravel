<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class Booking extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function bookable()
    {
        return $this->belongsTo(Bookable::class);
    }
    public function scopeBetweenDates(Builder $query , $from,$to)
    {
        return $query->where('to' , '>=' , $from)
            ->where('from' , '=<' , $to);
    }
}
