<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('profile')->default(fake()->imageUrl);
            $table->string('email')->unique();
            $table->string('mailing')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('rule')->default('user');
            $table->string('phoneNumber')->nullable();
            $table->string('emergency')->nullable();
            $table->string('passportNumber')->nullable();
            $table->string('expiryDate')->nullable();
            $table->string('firstLanguage')->nullable();
            $table->string('langStudy')->nullable();
            $table->string('highestLevelEducation')->default('None');
            $table->string('countryEducation')->default('Canada');
            $table->string('fieldStudy')->nullable();
            $table->string('yearGraduation')->nullable();
            $table->string('GPA')->nullable();
            $table->string('givenName')->nullable();
            $table->string('middleName')->nullable();
            $table->string('familyName')->nullable();
            $table->date('birthDate')->nullable();
            $table->string('countryCitizenship')->nullable();
            $table->string('gender')->nullable();
            $table->string('status')->nullable();
            $table->string('countryInsert')->default('Canada');
            $table->string('fieldInsert')->nullable();
            $table->string('address')->nullable();
            $table->json('language')->nullable();
            $table->text('detail_job')->nullable();
            $table->text('passportBio')->nullable();
            $table->text('NationalIDCard')->nullable();
            $table->text('educationCertificate')->nullable();
            $table->text('certificate_language_file')->nullable();
            $table->text('CV')->nullable();
            $table->text('GRE')->nullable();
            $table->text('pending')->default(false);
            $table->json('school')->default('[]');
            $table->integer('status_request')->default(6);
            $table->text('last_seen')->default('false');
            $table->string('google_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
