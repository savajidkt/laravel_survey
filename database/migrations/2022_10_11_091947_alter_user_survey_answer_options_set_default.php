<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUserSurveyAnswerOptionsSetDefault extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_survey_answer_options', function (Blueprint $table) {
            //
            $table->string('is_correct')->default(0)->comment('0=False,1=True')->change();
            $table->string('correct_order')->default(0)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_survey_answer_options', function (Blueprint $table) {
            //
        });
    }
}
