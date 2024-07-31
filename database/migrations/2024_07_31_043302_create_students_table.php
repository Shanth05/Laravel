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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // This creates an auto-incrementing primary key 'id' column of type BIGINT
            $table->string('name'); // Creates a VARCHAR column for student names
            $table->string('email', 191)->unique(); // Creates a unique VARCHAR column for email addresses with length of 191
            $table->string('phone')->nullable(); // Creates a nullable VARCHAR column for phone numbers
            $table->text('address'); // Creates a TEXT column for addresses
            $table->enum('gender', ['Male', 'Female', 'Other']); // Creates an ENUM column for gender with predefined options
            $table->string('department'); // Creates a VARCHAR column for the department
            $table->boolean('parttime')->default(0); // Creates a BOOLEAN column to indicate if the student is part-time
            $table->date('joined_date'); // Creates a DATE column for the date the student joined
            $table->timestamps(); // Creates 'created_at' and 'updated_at' TIMESTAMP columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};





            
