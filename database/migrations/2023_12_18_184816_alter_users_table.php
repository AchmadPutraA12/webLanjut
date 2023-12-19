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
        Schema::table('users', function (Blueprint $table) {
            $table->string('foto')->nullable()->after('email');
            $table->text('telepon')->nullable()->after('foto');
            $table->string('alamat')->nullable()->after('telepon');
            $table->string('provider_id')->nullable('alamat');
            $table->string('avatar')->nullable()->after('provider_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('foto');
            $table->dropColumn('telepon');
            $table->dropColumn('alamat');
            $table->dropColumn('provider_id');
            $table->dropColumn('avatar');
        });
    }
};
