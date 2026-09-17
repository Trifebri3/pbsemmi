<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('branches', function (Blueprint $table) {
            $table->string('photo')->nullable()->after('location');
            $table->text('address')->nullable()->after('photo');
            $table->string('contact_number')->nullable()->after('address');
            $table->string('instagram_url')->nullable()->after('contact_number');
            $table->text('description')->nullable()->after('instagram_url');
        });
    }

    public function down(): void
    {
        Schema::table('branches', function (Blueprint $table) {
            $table->dropColumn(['photo', 'address', 'contact_number', 'instagram_url', 'description']);
        });
    }
};
