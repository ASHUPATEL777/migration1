<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class accountmodel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=['name','phone','email','password','state','city','message'];
    protected $table="registers";
}
