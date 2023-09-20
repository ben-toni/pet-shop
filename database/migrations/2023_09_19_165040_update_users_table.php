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
            $table->uuid()->after('id');

            $table->boolean('is_admin')
                ->default(0)
                ->after('name');
            $table->string('last_name')
                ->after('name');


            $table->boolean('is_marketing')
                ->default(0)
                ->after('password');
            $table->string('phone_number')
                ->after('password');
            $table->string('address')
                ->after('password');
            $table->string('avatar')
                ->nullable()
                ->after('password');

            $table->timestamp('last_login_at')
                ->nullable()
                ->after('updated_at');

            $table->renameColumn('name', 'first_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'uuid',
                'is_admin',
                'last_name',
                'is_marketing',
                'phone_number',
                'address',
                'avatar',
                'last_login_at'
            ]);
        });
    }
};
