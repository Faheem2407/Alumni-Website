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
        Schema::create('seek_permission_create_admins', function (Blueprint $table) {
            $table->id();
			$table->string('admin_name');
			$table->string('admin_email')->unique();
			$table->string('admin_password');
			$table->string('admin_confirm_password');
			$table->enum('department',['superadmin','cse','ese','eee','statistics','bangla','english','music','tps','film','philosophy']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seek_permission_create_admins');
    }
};
