
 <?php
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Database\Migrations\Migration;
 
 class CreateUsersTable extends Migration
 {
   public function up()
   {
     Schema::create('users', function (Blueprint $table) {
     $table->increments('userid');
     $table->string('username');
     $table->string('password');
   });
 }
 
   public function down()
   {
     Schema::drop('users');
   }
 }