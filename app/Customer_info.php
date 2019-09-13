<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer_info extends Model
{
    protected $table = 'Customer_info';

    protected $fillable = ['first-name', 'last-name', 'address', 'city', 'state', 'email', 'phone',];

    public function bookings() {
    	return $this->hasMany('App\booking');
    }
}
