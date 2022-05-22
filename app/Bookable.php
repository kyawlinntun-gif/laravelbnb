<?php

namespace App;

use App\Booking;
use Illuminate\Database\Eloquent\Model;

class Bookable extends Model
{
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function avalibaleFor($from, $to) : bool
    {
        return 0 === $this->bookings()->betweenDates($from, $to)->count();
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
