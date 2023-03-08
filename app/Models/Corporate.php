<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corporate extends Model
{

    public $fillable = ['logo', 'name', 'description', 'industry', 'email', 'website', 'contactNumber'];

}
