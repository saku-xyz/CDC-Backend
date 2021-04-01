<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    protected $table = 'citizens';
    protected $fillable = [
        'fname',
        'lname',
        'dob',
        'telephone',
        'email',
        'address',
        'lng',
        'lat',
        'health_status'];
}
