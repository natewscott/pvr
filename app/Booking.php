<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'book_hunting';

    protected $fillable = ['check-in', 'check-out', 'number-guests', 'hunting-package'];

    public function customer() {
    	return $this->belongsTo('App\Customer');
    }
}
