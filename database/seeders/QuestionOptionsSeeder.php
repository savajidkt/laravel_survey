<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\QuestionOption;

class QuestionOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $options = array(
            array(
            'question_id'=>1,
            'option'=>'Welcome the client and share your agenda for the meeting. Ask if there are any other areas they would like to focus on during your time together.',
            'order_sorting'=>'0',
            'establishing_report'=>'0.406324865',
            'understanding_others'=>'0.646171638',
            'embracing_individual_differences'=>'0',
            'developing_trust'=>'0.205391687',
            'cultivating_influence'=>'-0.232959965',
            'lacking_self_awareness'=>'0',
            'lacking_social_awareness'=>'0',
            'self_serving'=>'0',
            'breaking_trust'=>'0',
            'poor_management_of_emotions'=>'0',
            'status'=>'1'
            ),            
            array(
            'question_id'=>1,
            'option'=>'Start the meeting and explain to the client that there have been some communication issues in the past and you want to avoid any moving forward.',
            'order_sorting'=>'2',
            'establishing_report'=>'-1.117875033',
            'understanding_others'=>'-0.849165689',
            'embracing_individual_differences'=>'0',
            'developing_trust'=>'-0.148374086',
            'cultivating_influence'=>'-0.225612932',
            'lacking_self_awareness'=>'1.32292204',
            'lacking_social_awareness'=>'0.157711156',
            'self_serving'=>'0.452480115',
            'breaking_trust'=>'1.008175242',
            'poor_management_of_emotions'=>'0',
            'status'=>'1'
            ),            
            array(
            'question_id'=>1,
            'option'=>'Greet the client and ask them if there have been any challenges in the past with how your team supports their group. Take notes so you can bring them back to your direct reports.',
            'order_sorting'=>'0',
            'establishing_report'=>'0.167958993',
            'understanding_others'=>'0.859073759',
            'embracing_individual_differences'=>'0.205391687',
            'developing_trust'=>'0.424264676',
            'cultivating_influence'=>'0.252813008',
            'lacking_self_awareness'=>'0',
            'lacking_social_awareness'=>'0',
            'self_serving'=>'0',
            'breaking_trust'=>'0',
            'poor_management_of_emotions'=>'0',
            'status'=>'1'
            ),            
            array(
            'question_id'=>1,
            'option'=>'Greet the client and spend the first 10-15 minutes learning about their background and experiences. Share some of your prior consulting experiences as well.',
            'order_sorting'=>'1',
            'establishing_report'=>'1.387367303',
            'understanding_others'=>'0.784280334',
            'embracing_individual_differences'=>'0.509118691',
            'developing_trust'=>'0.38096585',
            'cultivating_influence'=>'0.561317623',
            'lacking_self_awareness'=>'0',
            'lacking_social_awareness'=>'0',
            'self_serving'=>'0',
            'breaking_trust'=>'0',
            'poor_management_of_emotions'=>'0',
            'status'=>'1'
            ),            
            array(
            'question_id'=>1,
            'option'=>'Prepare to pay special attention to getting to know the client as a person because, for people like this, personally connecting with them is more important than discussing tasks with them.',
            'order_sorting'=>'0',
            'establishing_report'=>'0.777498261',
            'understanding_others'=>'0.754266635',
            'embracing_individual_differences'=>'0.424264676',
            'developing_trust'=>'0.424264676',
            'cultivating_influence'=>'0.167958993',
            'lacking_self_awareness'=>'0',
            'lacking_social_awareness'=>'0',
            'self_serving'=>'0.693428443',
            'breaking_trust'=>'0',
            'poor_management_of_emotions'=>'0',
            'status'=>'1'
            ));

            if (!empty($options)) {
                foreach ($options as $option) {
                   $question = QuestionOption::create($option);
                }
            }
    }
}
