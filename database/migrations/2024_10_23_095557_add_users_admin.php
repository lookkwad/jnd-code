<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('users')->insert([
            'firstname' => 'jnd',
            'lastname' => 'code',
            'email' => 'jnd-admin@mail.com',
            'password' => '$2y$12$AIkyCNzLkqRx6Ysf2jWtf.MmH.O5STxW3wSZBfNSSLQ4kb4neScri',  // P@ssw0rd
            'type' => 'admin',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
