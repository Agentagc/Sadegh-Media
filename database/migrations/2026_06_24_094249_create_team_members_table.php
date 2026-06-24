<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('team_members', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->nullable()
                ->unique()
                ->constrained()
                ->nullOnDelete();

            $table->foreignId('team_group_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->string('full_name');

            $table->string('slug')->unique();

            $table->string('role_title')->nullable();

            $table->text('bio')->nullable();

            $table->string('avatar')->nullable();

            $table->string('cover_image')->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};
