<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminRegistration extends Model
{
    use HasFactory;
	
	
	protected $fillable = [
		'admin_name',
		'admin_email',
		'admin_password',
		'admin_confirm_password',
		'department',
	];
	protected $hidden = [
        'admin_password',
		'admin_confirm_password',
    ];
    protected function casts(): array
    {
        return [
            'admin_password' => 'hashed',
            'admin_confirm_password' => 'hashed',
        ];
    }
}

