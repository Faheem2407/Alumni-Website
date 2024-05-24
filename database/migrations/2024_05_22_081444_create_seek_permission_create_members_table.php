<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seek_permission_create_members', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('fname');
			$table->string('mname');
			$table->string('phone');
			$table->string('email')->unique();
			$table->enum('department',['superadmin','cse','ese','eee','statistics','bangla','english','music','tps','film','philosophy']);
			$table->string('session');
			$table->string('address');
			$table->string('job');
			$table->enum('blood',['A+','A-','B+','B-','AB+','AB-','O+','O-']);
			$table->string('image')->nullable();;
			$table->string('password');
			$table->string('confirm_password');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seek_permission_create_members');
    }
};
