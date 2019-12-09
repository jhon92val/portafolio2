<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        $user = new User;

        $user->name = 'Jhonathan Perdomo';
        $user->email = 'jhon92va@gmail.com';
        $user->password = bcrypt('12345abc');

        $user->save();

        $user = new User;

        $user->name = 'Jesus Conde';
        $user->email = 'saintkonde@gmail.com';
        $user->password = bcrypt('12345abc');

        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
