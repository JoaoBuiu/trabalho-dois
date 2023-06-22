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
        Schema::create('Sensor', function (Blueprint $table) {
            $table->id();
            $table->string('Nome');
            $table->string('Contador');
            $table->timestamps();
        });

        Schema::disableForeignKeyConstraints();

        Schema::table('leiturabejo', function (Blueprint $table) {
            $table->foreignId('Sensor_id')->nullable()->constrained('Sensor')->default(null);
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sensor');
    }
};
