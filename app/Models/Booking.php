<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Booking extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function bookable()
    {
        return $this->belongsTo(Bookable::class);
    }
    public function scopeBetweenDates($query , $from,$to)
    {
        return $query->where('to' , '>=' , $from)
            ->where('from' , '=<' , $to);
    }
    public function review()
    {
        return $this->hasOne(Review::class);
    }
}
