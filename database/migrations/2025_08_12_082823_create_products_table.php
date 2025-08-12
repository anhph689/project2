<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //php artisan migrate
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id'); //interger | unsigned | primary key | AI
            $table->string('name', 200);
            $table->float('price', 8, 2); //91234567.25
            $table->integer('view');
            $table->timestamps(); //created_at | updated_at
        });
    }

    //php artisan migrate:rollback | reset
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
