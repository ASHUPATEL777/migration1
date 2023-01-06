<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class contactmodel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=['firstname','email','phone','message'];
    protected $table="contacts";



    // protected $table="contacts";
    // protected $primarykey="contact_id";
}
