<?php

namespace App\Http\Controllers\Workbook;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Workbook;
use App\Models\WorkbookResponse;
use Auth;
use Illuminate\Http\Request;

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
                        'detailqs_id' => $value,
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
                        'detailqs_id' => $value,
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
                        'detailqs_id' => $value,
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
                        'detailqs_id' => $value,
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
                        'detailqs_id' => $value,
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
                        'detailqs_id' => $value,
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
                        'detailqs_id' => $value,
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
                        'detailqs_id' => $value,
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
                        'detailqs_id' => $value,
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
                        'detailqs_id' => $value,
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
                        'detailqs_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }
            }

            return response()->json(['status' => 'Success', 'message' => 'response save Qs 3', 'question' => $detailqs], 200);
        }
    }
}
