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
        Schema::create('law_cases', function (Blueprint $table) {
            $table->id();
            $table->string('case_number');
            $table->string('case_title');
            $table->enum('case_status', ['active', 'pending', 'closed', 'urgent']);
            $table->string('client_name');
            $table->string('lawyer_name');
            $table->date('case_date');
            $table->string('case_category');
            $table->longText('case_description');
            $table->string('court_name');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('law_cases');
    }
};
