<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->string('photo')->nullable()->after('description');
            $table->text('address')->nullable()->after('photo');
            $table->string('contact_number')->nullable()->after('address');
            $table->string('instagram_url')->nullable()->after('contact_number');
        });
    }

    public function down(): void
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->dropColumn(['photo', 'address', 'contact_number', 'instagram_url']);
        });
    }
};
