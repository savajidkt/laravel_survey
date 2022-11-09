<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterQuestionOptionsTableFormulaFieldsAdd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('question_options', function (Blueprint $table) {
            //
            $table->tinyInteger('order_sorting')->after('question_id')->nullable()->comment('1=Best Likely, 2=Least Likely');
            $table->decimal('establishing_rapport')->after('order_sorting')->nullable();
            $table->decimal('understanding_others')->after('establishing_rapport')->nullable();
            $table->decimal('embracing_individual_differences')->after('understanding_others')->nullable();
            $table->decimal('developing_trust')->after('embracing_individual_differences')->nullable();
            $table->decimal('cultivating_influence')->after('developing_trust')->nullable();
            $table->decimal('lacking_self_awareness')->after('cultivating_influence')->nullable();
            $table->decimal('lacking_social_awareness')->after('lacking_self_awareness')->nullable();
            $table->decimal('self_serving')->after('lacking_social_awareness')->nullable();
            $table->decimal('breaking_trust')->after('self_serving')->nullable();
            $table->decimal('poor_management_of_emotions')->after('breaking_trust')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('question_options', function (Blueprint $table) {
            //
            $table->dropColumn('order_sorting');
            $table->dropColumn('establishing_rapport');
            $table->dropColumn('understanding_others');
            $table->dropColumn('embracing_individual_differences');
            $table->dropColumn('developing_trust');
            $table->dropColumn('cultivating_influence');
            $table->dropColumn('lacking_self_awareness');
            $table->dropColumn('lacking_social_awareness');
            $table->dropColumn('self_serving');
            $table->dropColumn('breaking_trust');
            $table->dropColumn('poor_management_of_emotions');
        });
    }
}
