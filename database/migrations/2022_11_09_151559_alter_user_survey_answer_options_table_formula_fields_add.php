<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUserSurveyAnswerOptionsTableFormulaFieldsAdd extends Migration
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
            $table->decimal('establishing_rapport_point')->after('question_option_id')->nullable();
            $table->decimal('understanding_others_point')->after('establishing_rapport_point')->nullable();
            $table->decimal('embracing_individual_differences_point')->after('understanding_others_point')->nullable();
            $table->decimal('developing_trust_point')->after('embracing_individual_differences_point')->nullable();
            $table->decimal('cultivating_influence_point')->after('developing_trust_point')->nullable();
            $table->decimal('lacking_self_awareness_point')->after('cultivating_influence_point')->nullable();
            $table->decimal('lacking_social_awareness_point')->after('lacking_self_awareness_point')->nullable();
            $table->decimal('self_serving_point')->after('lacking_social_awareness_point')->nullable();
            $table->decimal('breaking_trust_point')->after('self_serving_point')->nullable();
            $table->decimal('poor_management_of_emotions_point')->after('breaking_trust_point')->nullable();
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
