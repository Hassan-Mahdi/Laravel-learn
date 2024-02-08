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

        Schema::table('all_table', function(Blueprint $table) {

            $table->dropColumn(['visitor', 'confirmed' ]);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::create ('Bangladesh', function(Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('roll');
            $table->string('class');
            $table->timestamps();
            
        } );
        
    }
};
