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
        Schema::create('d_e_c_m_o_n_r_o_b_o_t_s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('program');
            $table->string('email');
            $table->enum('gender', ['male', '   female']);
            $table->json('hobbies');
            $table->text('biography');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_e_c_m_o_n_r_o_b_o_t_s');
    }
};
