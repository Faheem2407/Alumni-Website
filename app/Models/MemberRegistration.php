<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberRegistration extends Model
{
    use HasFactory;
	
	protected $fillable = [
		'name',
		'fname',
		'mname',
		'phone',
		'email',
		'department',
		'session',
		'address',
		'job',
		'blood',
		'image',
		'password',
		'confirm_password'
	];
}
