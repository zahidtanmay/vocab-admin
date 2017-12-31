<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAndChangeAColumToQuestionTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questions', function($table)
        {
            $from = 'correct_answer_no';
            $to = 'answer_one';

            $table->renameColumn($from, $to);
        });

        Schema::table('questions', function($table)
        {
            $table->integer('answer_two');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
