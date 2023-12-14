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
        if (!Schema::hasColumn('test' , 'number1')) {
            
            Schema::table('test', function (Blueprint $table) {
                $table->integer('number1')->nullable();
            });
        }

        if (!Schema::hasColumn('test' , 'number2')) {
            Schema::table('test', function (Blueprint $table) {
                $table->integer('number2')->nullable();
            });
        }

        if (!Schema::hasColumn('test' , 'text')) {
            Schema::table('test', function (Blueprint $table) {
                $table->string('text')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        

    }
};
