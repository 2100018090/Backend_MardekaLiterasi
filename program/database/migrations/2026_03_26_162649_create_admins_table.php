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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_akun')
                ->constrained('akuns')
                ->onDelete('cascade');
            $table->string('nama', 30)->nullable();
            $table->string('alamat', 50)->nullable();
            $table->string('notlp', 15)->nullable();
            $table->string('img', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
