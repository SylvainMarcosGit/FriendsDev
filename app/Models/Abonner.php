<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonner extends Model
{
    use HasFactory;
    protected $fillable = [
       'email'];
}