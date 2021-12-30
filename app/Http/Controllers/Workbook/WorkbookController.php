<?php

namespace App\Http\Controllers\Workbook;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Workbook;
use App\Models\WorkbookResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkbookController extends Controller
{
    public function openWorkbook()
    {

        $workbookresponse = WorkbookResponse::where('user_id', Auth::user()->id)->where('workbook_id', 1)->latest()->first();
        if (empty($workbookresponse)) {
            $workbook = Workbook::where('id', 1)->with('questions')->first();
            return view('Workbook.Introduction.topic_introduction', compact('workbook'));
        } else {
            $workbook = Workbook::where('id', 1)->with('questions', function ($q) use ($workbookresponse) {
                $q->where('id', '>', $workbookresponse->question_id);
            })->first();

            return view('Workbook.Introduction.topic_introduction', compact('workbook'));
        }

    }
    public function storeWorkbook(Request $request)
    {
        if ($request->question1) {
            $WorkbookResponse = WorkbookResponse::create([
                'workbook_id' => $request->workbook_id,
                'user_id' => Auth::user()->id,
                'question_id' => $request->question1,
                'status' => 'completed',
                'complete_date' => now(),
            ]);

            return response()->json(['status' => 'Success', 'message' => 'response save Qs 1'], 200);
        } elseif ($request->question2) {
            $WorkbookResponse = WorkbookResponse::create([
                'workbook_id' => $request->workbook_id,
                'user_id' => Auth::user()->id,
                'question_id' => $request->question2,
                'status' => 'completed',
                'complete_date' => now(),
            ]);

            return response()->json(['status' => 'Success', 'message' => 'response save Qs 2'], 200);
        } elseif ($request->question3) {

            $detailqs = array('id1' => $request->detailqs1, 'id2' => $request->detailqs2, 'id3' => $request->detailqs3, 'id4' => $request->detailqs4, 'id5' => $request->detailqs5, 'id6' => $request->detailqs6, 'id7' => $request->detailqs7, 'id8' => $request->detailqs8, 'id9' => $request->detailqs9, 'id10' => $request->detailqs10, 'id11' => $request->detailqs11);

            $d = array();

            foreach ($detailqs as $value) {
                if ($value == 1) {

                    $answers = Answer::create([
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer' => $request->dtanswer1,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    $WorkbookResponse = WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);

                } elseif ($value == 2) {
                    $answers = Answer::create([
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer' => $request->dtanswer2,
                        'workbook_id' => $request->workbook_id,
                    ]);
                    $WorkbookResponse = WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);

                } elseif ($value == 3) {
                    $answers = Answer::create([
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer' => $request->dtanswer3,
                        'workbook_id' => $request->workbook_id,
                    ]);
                    $WorkbookResponse = WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);

                } elseif ($value == 4) {
                    $answers = Answer::create([
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer' => $request->dtanswer4,
                        'workbook_id' => $request->workbook_id,
                    ]);
                    $WorkbookResponse = WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 5) {
                    $answers = Answer::create([
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer' => $request->dtanswer5,
                        'workbook_id' => $request->workbook_id,
                    ]);
                    $WorkbookResponse = WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 6) {
                    $answers = Answer::create([
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer' => $request->dtanswer6,
                        'workbook_id' => $request->workbook_id,
                    ]);
                    $WorkbookResponse = WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 7) {
                    $answers = Answer::create([
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer' => $request->dtanswer7,
                        'workbook_id' => $request->workbook_id,
                    ]);
                    $WorkbookResponse = WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 8) {
                    $answers = Answer::create([
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer' => $request->dtanswer8,
                        'workbook_id' => $request->workbook_id,
                    ]);
                    $WorkbookResponse = WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 9) {
                    $answers = Answer::create([
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer' => $request->dtanswer9,
                        'workbook_id' => $request->workbook_id,
                    ]);
                    $WorkbookResponse = WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 10) {
                    $answers = Answer::create([
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer' => $request->dtanswer10,
                        'workbook_id' => $request->workbook_id,
                    ]);
                    $WorkbookResponse = WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 11) {
                    $answers = Answer::create([
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer' => $request->dtanswer11,
                        'workbook_id' => $request->workbook_id,
                    ]);
                    $WorkbookResponse = WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question3,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }
            }

            return response()->json(['status' => 'Success', 'message' => 'response save Qs 3', 'question' => $detailqs], 200);
        } elseif ($request->question4) {
            $detailqs = array('id13' => $request->detailqs13, 'id14' => $request->detailqs14, 'id15' => $request->detailqs15, 'id16' => $request->detailqs16, 'id17' => $request->detailqs17, 'id18' => $request->detailqs18, 'id19' => $request->detailqs19, 'id20' => $request->detailqs20);

            foreach ($detailqs as $value) {
                if ($value == 13) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->safety13,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->detail13,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers3 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->action13,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers3->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers4 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->by_who13,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers4->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 14) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->safety14,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->detail14,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers3 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->action14,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers3->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers4 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->by_who14,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers4->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 15) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->safety15,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->detail15,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers3 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->action15,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers3->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers4 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->by_who15,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers4->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 16) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->safety16,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->detail16,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers3 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->action16,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers3->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers4 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->by_who16,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers4->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 17) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->safety17,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->detail17,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers3 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->action17,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers3->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers4 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->by_who17,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers4->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 18) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->safety18,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->detail18,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers3 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->action18,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers3->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers4 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->by_who18,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers4->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 19) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->safety19,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->detail19,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers3 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->action19,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers3->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers4 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->by_who19,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer_id' => $answers4->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 20) {

                    $answers1 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->safety20,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailqs_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->detail20,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailqs_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers3 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->action20,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailqs_id' => $value,
                        'answer_id' => $answers3->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers4 = Answer::create([
                        'question_id' => $request->question4,
                        'detailquest_id' => $value,
                        'answer' => $request->by_who20,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question4,
                        'detailqs_id' => $value,
                        'answer_id' => $answers4->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }
            }

            return response()->json(['status' => 'Success', 'message' => 'response save Qs 4', 'question' => $detailqs], 200);
        } elseif ($request->question5) {
            $WorkbookResponse = WorkbookResponse::create([
                'workbook_id' => $request->workbook_id,
                'user_id' => Auth::user()->id,
                'question_id' => $request->question5,
                'status' => 'completed',
                'complete_date' => now(),
            ]);

            return response()->json(['status' => 'Success', 'message' => 'response save Qs 5'], 200);
        } elseif ($request->question6) {
            $WorkbookResponse = WorkbookResponse::create([
                'workbook_id' => $request->workbook_id,
                'user_id' => Auth::user()->id,
                'question_id' => $request->question6,
                'status' => 'completed',
                'complete_date' => now(),
            ]);
            return response()->json(['status' => 'Success', 'message' => 'response save Qs 6'], 200);
        } elseif ($request->question7) {
            $detailqs = array('id21' => $request->detailqs21, 'id22' => $request->detailqs22, 'id23' => $request->detailqs23, 'id24' => $request->detailqs24, 'id25' => $request->detailqs25, 'id26' => $request->detailqs26, 'id27' => $request->detailqs27, 'id28' => $request->detailqs28, 'id29' => $request->detailqs29, 'id30' => $request->detailqs30, 'id31' => $request->detailqs31, 'id32' => $request->detailqs32, 'id33' => $request->detailqs33, 'id34' => $request->detailqs34);
            foreach ($detailqs as $value) {
                if ($value == 21) {
                    $answers = Answer::create([
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer' => $request->character1_name,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 22) {
                    $answers = Answer::create([
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer' => $request->character1_age,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 23) {
                    $answers = Answer::create([
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer' => $request->character1_occupation,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);

                } elseif ($value == 24) {
                    $answers = Answer::create([
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer' => $request->character1_home,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);

                } elseif ($value == 25) {
                    $answers = Answer::create([
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer' => $request->character1_personality,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);

                } elseif ($value == 26) {
                    $answers = Answer::create([
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer' => $request->character1_role,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);

                } elseif ($value == 27) {
                    $answers = Answer::create([
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer' => $request->character1_notes,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);

                } elseif ($value == 28) {
                    $answers = Answer::create([
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer' => $request->character2_name,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);

                } elseif ($value == 29) {
                    $answers = Answer::create([
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer' => $request->character2_age,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);

                } elseif ($value == 30) {
                    $answers = Answer::create([
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer' => $request->character2_occupation,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);

                } elseif ($value == 31) {
                    $answers = Answer::create([
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer' => $request->character2_home,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);

                } elseif ($value == 32) {
                    $answers = Answer::create([
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer' => $request->character2_personality,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);

                } elseif ($value == 33) {
                    $answers = Answer::create([
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer' => $request->character2_role,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);

                } elseif ($value == 34) {
                    $answers = Answer::create([
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer' => $request->character2_notes,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question7,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);

                }
            }
            return response()->json(['status' => 'Success', 'message' => 'response save Qs 7'], 200);
        } elseif ($request->question8) {
            $WorkbookResponse = WorkbookResponse::create([
                'workbook_id' => $request->workbook_id,
                'user_id' => Auth::user()->id,
                'question_id' => $request->question8,
                'status' => 'completed',
                'complete_date' => now(),
            ]);

            return response()->json(['status' => 'Success', 'message' => 'response save Qs 8'], 200);
        } elseif ($request->question9) {
            $WorkbookResponse = WorkbookResponse::create([
                'workbook_id' => $request->workbook_id,
                'user_id' => Auth::user()->id,
                'question_id' => $request->question9,
                'status' => 'completed',
                'complete_date' => now(),
            ]);

            return response()->json(['status' => 'Success', 'message' => 'response save Qs 9'], 200);
        } elseif ($request->question10) {

            $detailqs = array('id35' => $request->detailqs35,
                'id36' => $request->detailqs36,
                'id37' => $request->detailqs37,
                'id38' => $request->detailqs38,
                'id39' => $request->detailqs39,
                'id40' => $request->detailqs40,
                'id41' => $request->detailqs41,
                'id42' => $request->detailqs42,
                'id43' => $request->detailqs43,
                'id44' => $request->detailqs44,
                'id45' => $request->detailqs45,
                'id46' => $request->detailqs46,
                'id47' => $request->detailqs47,
                'id48' => $request->detailqs48,
                'id49' => $request->detailqs49,
                'id50' => $request->detailqs50,
                'id51' => $request->detailqs51,
                'id52' => $request->detailqs52,
                'id53' => $request->detailqs53,
                'id54' => $request->detailqs54,
                'id55' => $request->detailqs55,
                'id56' => $request->detailqs56,
            'id57' => $request->detailqs57, 'id58' => $request->detailqs58, 'id59' => $request->detailqs59);

            foreach ($detailqs as $value) {
                if ($value==35) {

                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox35),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==36) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox36),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==37) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox37),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==38) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox38),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==39) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox39),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==40) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox40),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==41) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox41),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==42) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox42),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==43) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox43),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]); 
                }elseif ($value==44) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox44),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==45) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox45),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==46) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox46),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==47) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox47),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==48) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox48),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==49) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox49),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==50) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox50),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==51) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox51),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==52) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox52),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==53) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox53),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==54) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox54),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==55) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox55),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==56) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox56),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==57) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox57),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==58) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox58),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==59) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ",$request->checkbox59),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }
                
            }

            return response()->json(['status' => 'Success', 'message' => 'response save Qs 10','checkbox'=>implode(", ",$request->checkbox35)], 200);
        }elseif ($request->question11) {
            $WorkbookResponse = WorkbookResponse::create([
                'workbook_id' => $request->workbook_id,
                'user_id' => Auth::user()->id,
                'question_id' => $request->question11,
                'status' => 'completed',
                'complete_date' => now(),
            ]);
            return response()->json(['status' => 'Success', 'message' => 'response save Qs 11'], 200);
        }elseif ($request->question12) {
            $detailqs = array('id60' => $request->detailqs60, 'id61' => $request->detailqs61, 'id62' => $request->detailqs62, 'id63' => $request->detailqs63, 'id64' => $request->detailqs64, 'id65' => $request->detailqs65, 'id66' => $request->detailqs66, 'id67' => $request->detailqs67, 'id68' => $request->detailqs68, 'id69' => $request->detailqs69);
            

            foreach ($detailqs as $value) {
                if ($value==60) {
                    $answers = Answer::create([
                        'question_id' => $request->question12,
                        'detailquest_id' => $value,
                        'answer' => $request->quiz60,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    $WorkbookResponse = WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question12,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==61) {
                    $answers = Answer::create([
                        'question_id' => $request->question12,
                        'detailquest_id' => $value,
                        'answer' => $request->quiz61,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    $WorkbookResponse = WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question12,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==62) {
                    $answers = Answer::create([
                        'question_id' => $request->question12,
                        'detailquest_id' => $value,
                        'answer' => $request->quiz62,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    $WorkbookResponse = WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question12,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==63) {
                    $answers = Answer::create([
                        'question_id' => $request->question12,
                        'detailquest_id' => $value,
                        'answer' => $request->quiz63,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    $WorkbookResponse = WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question12,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==64) {
                    $answers = Answer::create([
                        'question_id' => $request->question12,
                        'detailquest_id' => $value,
                        'answer' => $request->quiz64,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    $WorkbookResponse = WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question12,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==65) {
                    $answers = Answer::create([
                        'question_id' => $request->question12,
                        'detailquest_id' => $value,
                        'answer' => $request->quiz65,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    $WorkbookResponse = WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question12,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==66) {
                    $answers = Answer::create([
                        'question_id' => $request->question12,
                        'detailquest_id' => $value,
                        'answer' => $request->quiz66,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    $WorkbookResponse = WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question12,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==67) {
                    $answers = Answer::create([
                        'question_id' => $request->question12,
                        'detailquest_id' => $value,
                        'answer' => $request->quiz67,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    $WorkbookResponse = WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question12,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==68) {
                    $answers = Answer::create([
                        'question_id' => $request->question12,
                        'detailquest_id' => $value,
                        'answer' => $request->quiz68,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    $WorkbookResponse = WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question12,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }elseif ($value==69) {
                    $answers = Answer::create([
                        'question_id' => $request->question12,
                        'detailquest_id' => $value,
                        'answer' => $request->quiz69,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    $WorkbookResponse = WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question12,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }
            }

          
            return response()->json(['status' => 'Success', 'message' => 'response save Qs 12',$detailqs], 200);
        }elseif ($request->question13) {
            $WorkbookResponse = WorkbookResponse::create([
                'workbook_id' => $request->workbook_id,
                'user_id' => Auth::user()->id,
                'question_id' => $request->question13,
                'status' => 'completed',
                'complete_date' => now(),
            ]);
            return response()->json(['status' => 'Success', 'message' => 'response save Qs 13'], 200);
        }elseif ($request->question14) {
            $WorkbookResponse = WorkbookResponse::create([
                'workbook_id' => $request->workbook_id,
                'user_id' => Auth::user()->id,
                'question_id' => $request->question14,
                'status' => 'completed',
                'complete_date' => now(),
            ]);
            return response()->json(['status' => 'Success', 'message' => 'response save Qs 14'], 200);
        }elseif($request->question23){
            
        }
    }
}
