<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
	protected $fillable = [ 'user_id' , 'body'];
    public function user()
    {
    	return $this->belongsTo(User::class)->select(['id', 'name']);
    }
}
