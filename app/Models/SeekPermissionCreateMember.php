<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeekPermissionCreateMember extends Model
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
