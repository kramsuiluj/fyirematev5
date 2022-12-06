<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users', 'id');
            $table->timestamp('date');
            $table->string('owner');
            $table->string('name');
            $table->string('ops_number')->unique();
            $table->timestamp('date_released');
            $table->string('fsic_number')->unique();
            $table->string('issuance');
            $table->string('occupancy');
            $table->integer('area');
            $table->text('remarks');
            $table->timestamp('inspection_date');
            $table->string('io_number')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establishments');
    }
};
