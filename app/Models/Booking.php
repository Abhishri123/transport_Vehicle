<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\BookingMail;

class Booking extends Model
{
    use HasFactory;
    public $timestamps = false;

    public $fillable = ['full_name', 'pax', 'contact', 'transport_vehicle', 'booking_for','duration'];

    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail = "vithalaniabhishree@gmail.com";
            Mail::to($adminEmail)->send(new BookingMail($item));
        });
    }

}
