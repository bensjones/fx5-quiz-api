<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        Question::create([
            'question_description' => 'Which one of these is NOT considered inventory?',
            'answer_option_1' => 'Liquor Bottles',
            'answer_option_2' => 'Fermentables/non-alcoholic material',
            'answer_option_3' => 'Beer, Wine, Cider',
            'answer_option_4' => 'Scratch and sniff stickers',
            'correct_answer' => 3,
            'wrong_answer_response' => 'This is considered inventory'
        ]);

        Question::create([
            'question_description' => 'What is a Bulk Distilled Spirit?',
            'answer_option_1' => 'A distilled spirits in a container having a capacity in excess of one wine gallon',
            'answer_option_2' => 'A distilled spirits in a package having a capacity in excess of 10 wine gallons',
            'answer_option_3' => 'A package of distilled containers',
            'answer_option_4' => 'All of your ghosts friends in the attic.',
            'correct_answer' => 0,
            'wrong_answer_response' => 'Sorry, this is the wrong answer.'
        ]);

        Question::create([
            'question_description' => 'At a minimum, how often are CFR inventories required?',
            'answer_option_1' => 'Annually',
            'answer_option_2' => 'Daily',
            'answer_option_3' => 'Decennially',
            'answer_option_4' => 'Quarterly',
            'correct_answer' => 3,
            'wrong_answer_response' => 'The answer is closer to every 3 months.'
        ]);

        Question::create([
            'question_description' => 'What should be done with spirits that are finished?',
            'answer_option_1' => 'They should be moved into storage',
            'answer_option_2' => 'They should be sold',
            'answer_option_3' => 'They should be consumed immediately',
            'answer_option_4' => 'They should be burned with hellfire',
            'correct_answer' => 0,
            'wrong_answer_response' => 'The answer is closer to putting them in a place called storage.'
        ]);

        Question::create([
            'question_description' => 'Processing inventory encompasses what goods?',
            'answer_option_1' => 'Wine only',
            'answer_option_2' => 'Bulk spirits, wine, and bottled spirits.',
            'answer_option_3' => 'Beer and Wine only',
            'answer_option_4' => 'Just juicy juice',
            'correct_answer' => 1,
            'wrong_answer_response' => 'It is the answer with more than 2 items.'
        ]);
    }
}
