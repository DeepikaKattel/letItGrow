<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ContactUs extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'contact_us';
    protected $fillable = [
        'name', 'email', 'message', 'contact_cv'
    ];
}
