<?php

namespace App\Http\Controllers\Workbook;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Topic;
use App\Models\WorkbookResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkbookController extends Controller
{
    public function openWorkbook($id)
    {

        $workbookresponse = WorkbookResponse::where('user_id', Auth::user()->id)->where('workbook_id', 1)->latest()->first();

        // if (empty($workbookresponse)) {

        if ($id == 1) {
            $topics = Topic::where('id', $id)->with('questions')->first();

            return view('Workbook.topic_introduction', compact('topics'));
        } elseif ($id == 2) {
            $topics = Topic::where('id', $id)->with('questions')->first();

            return view('Workbook.topic_introduction', compact('topics'));
        }{
            # code...
        }

        // } else {
        //     $workbook = Workbook::where('id', 1)->with('questions', function ($q) use ($workbookresponse) {
        //         $q->where('id', '>', $workbookresponse->question_id);
        //     })->first();

        //     return view('Workbook.Introduction.topic_introduction', compact('workbook'));
        // }

    }
    public function storeWorkbook(Request $request)
    {
        if ($request->question1) {
            $find = WorkbookResponse::where('workbook_id', $request->workbook_id)->where('question_id', $request->question1)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::create([
                    'workbook_id' => $request->workbook_id,
                    'user_id' => Auth::user()->id,
                    'question_id' => $request->question1,
                    'status' => 'completed',
                    'complete_date' => now(),
                ]);
                return response()->json(['status' => 'Success', 'message' => 'response save Qs 1'], 200);
            }

        } elseif ($request->question2) {
            $find = WorkbookResponse::where('workbook_id', $request->workbook_id)->where('question_id', $request->question2)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::create([
                    'workbook_id' => $request->workbook_id,
                    'user_id' => Auth::user()->id,
                    'question_id' => $request->question2,
                    'status' => 'completed',
                    'complete_date' => now(),
                ]);
                return response()->json(['status' => 'Success', 'message' => 'response save Qs 2'], 200);
            }

        } elseif ($request->question3) {

            $detailqs = array('id1' => $request->detailqs1, 'id2' => $request->detailqs2, 'id3' => $request->detailqs3, 'id4' => $request->detailqs4, 'id5' => $request->detailqs5, 'id6' => $request->detailqs6, 'id7' => $request->detailqs7, 'id8' => $request->detailqs8, 'id9' => $request->detailqs9, 'id10' => $request->detailqs10, 'id11' => $request->detailqs11);

            foreach ($detailqs as $value) {
                if ($value == 1) {
                    $find = WorkbookResponse::where('workbook_id', $request->workbook_id)->where('question_id', $request->question3)->where('user_id', Auth::user()->id)->where('detailquest_id', $value)->first();
                    if (empty($find)) {
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
                    } else {
                        $answers = Answer::where('detailquest_id', $value)->update([
                            'question_id' => $request->question3,
                            'detailquest_id' => $value,
                            'answer' => $request->dtanswer1,
                            'workbook_id' => $request->workbook_id,
                        ]);
                    }
                } elseif ($value == 2) {
                    $find = WorkbookResponse::where('workbook_id', $request->workbook_id)->where('question_id', $request->question3)->where('user_id', Auth::user()->id)->where('detailquest_id', $value)->first();
                    if (empty($find)) {
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
                    } else {
                        $answers = Answer::where('detailquest_id', $value)->update([
                            'question_id' => $request->question3,
                            'detailquest_id' => $value,
                            'answer' => $request->dtanswer2,
                            'workbook_id' => $request->workbook_id,
                        ]);
                    }
                } elseif ($value == 3) {

                    $find = WorkbookResponse::where('workbook_id', $request->workbook_id)->where('question_id', $request->question3)->where('user_id', Auth::user()->id)->where('detailquest_id', $value)->first();
                    if (empty($find)) {$answers = Answer::create([
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
                    } else {
                        $answers = Answer::where('detailquest_id', $value)->update([
                            'question_id' => $request->question3,
                            'detailquest_id' => $value,
                            'answer' => $request->dtanswer3,
                            'workbook_id' => $request->workbook_id,
                        ]);
                    }

                } elseif ($value == 4) {

                    $find = WorkbookResponse::where('workbook_id', $request->workbook_id)->where('question_id', $request->question3)->where('user_id', Auth::user()->id)->where('detailquest_id', $value)->first();
                    if (empty($find)) {$answers = Answer::create([
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
                    } else {
                        $answers = Answer::where('detailquest_id', $value)->update([
                            'question_id' => $request->question3,
                            'detailquest_id' => $value,
                            'answer' => $request->dtanswer4,
                            'workbook_id' => $request->workbook_id,
                        ]);
                    }
                } elseif ($value == 5) {

                    $find = WorkbookResponse::where('workbook_id', $request->workbook_id)->where('question_id', $request->question3)->where('user_id', Auth::user()->id)->where('detailquest_id', $value)->first();
                    if (empty($find)) {$answers = Answer::create([
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
                    } else {
                        $answers = Answer::where('detailquest_id', $value)->update([
                            'question_id' => $request->question3,
                            'detailquest_id' => $value,
                            'answer' => $request->dtanswer5,
                            'workbook_id' => $request->workbook_id,
                        ]);
                    }
                } elseif ($value == 6) {

                    $find = WorkbookResponse::where('workbook_id', $request->workbook_id)->where('question_id', $request->question3)->where('user_id', Auth::user()->id)->where('detailquest_id', $value)->first();
                    if (empty($find)) {$answers = Answer::create([
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
                    } else {
                        $answers = Answer::where('detailquest_id', $value)->update([
                            'question_id' => $request->question3,
                            'detailquest_id' => $value,
                            'answer' => $request->dtanswer6,
                            'workbook_id' => $request->workbook_id,
                        ]);
                    }
                } elseif ($value == 7) {

                    $find = WorkbookResponse::where('workbook_id', $request->workbook_id)->where('question_id', $request->question3)->where('user_id', Auth::user()->id)->where('detailquest_id', $value)->first();
                    if (empty($find)) {$answers = Answer::create([
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
                    } else {
                        $answers = Answer::where('detailquest_id', $value)->update([
                            'question_id' => $request->question3,
                            'detailquest_id' => $value,
                            'answer' => $request->dtanswer7,
                            'workbook_id' => $request->workbook_id,
                        ]);
                    }
                } elseif ($value == 8) {

                    $find = WorkbookResponse::where('workbook_id', $request->workbook_id)->where('question_id', $request->question3)->where('user_id', Auth::user()->id)->where('detailquest_id', $value)->first();
                    if (empty($find)) {$answers = Answer::create([
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
                    } else {
                        $answers = Answer::where('detailquest_id', $value)->update([
                            'question_id' => $request->question3,
                            'detailquest_id' => $value,
                            'answer' => $request->dtanswer8,
                            'workbook_id' => $request->workbook_id,
                        ]);
                    }
                } elseif ($value == 9) {

                    $find = WorkbookResponse::where('workbook_id', $request->workbook_id)->where('question_id', $request->question3)->where('user_id', Auth::user()->id)->where('detailquest_id', $value)->first();
                    if (empty($find)) {$answers = Answer::create([
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
                    } else {
                        $answers = Answer::where('detailquest_id', $value)->update([
                            'question_id' => $request->question3,
                            'detailquest_id' => $value,
                            'answer' => $request->dtanswer9,
                            'workbook_id' => $request->workbook_id,
                        ]);
                    }
                } elseif ($value == 10) {
                    $find = WorkbookResponse::where('workbook_id', $request->workbook_id)->where('question_id', $request->question3)->where('user_id', Auth::user()->id)->where('detailquest_id', $value)->first();
                    if (empty($find)) {
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
                    } else {
                        $answers = Answer::where('detailquest_id', $value)->update([
                            'question_id' => $request->question3,
                            'detailquest_id' => $value,
                            'answer' => $request->dtanswer10,
                            'workbook_id' => $request->workbook_id,
                        ]);
                    }
                } elseif ($value == 11) {
                    $find = WorkbookResponse::where('workbook_id', $request->workbook_id)->where('question_id', $request->question3)->where('user_id', Auth::user()->id)->where('detailquest_id', $value)->first();
                    if (empty($find)) {
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
                    } else {
                        $answers = Answer::where('detailquest_id', $value)->update([
                            'question_id' => $request->question3,
                            'detailquest_id' => $value,
                            'answer' => $request->dtanswer11,
                            'workbook_id' => $request->workbook_id,
                        ]);
                    }
                }
            }

            return response()->json(['status' => 'Success', 'message' => 'response save Qs 3', 'question' => $detailqs, $request->all()], 200);
        } elseif ($request->question4) {
            $detailqs = array('id13' => $request->detailqs13, 'id14' => $request->detailqs14, 'id15' => $request->detailqs15, 'id16' => $request->detailqs16, 'id17' => $request->detailqs17, 'id18' => $request->detailqs18, 'id19' => $request->detailqs19, 'id20' => $request->detailqs20);

            foreach ($detailqs as $value) {
                if ($value == 13) {
                    $find = WorkbookResponse::where('workbook_id', $request->workbook_id)->where('question_id', $request->question4)->where('user_id', Auth::user()->id)->where('detailquest_id', $value)->first();
                    if (empty($find)) {
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

                    } else {
                        $answers1 = Answer::where('detailquest_id', $value)->update([
                            'question_id' => $request->question4,
                            'detailquest_id' => $value,
                            'answer' => $request->safety13,
                            'workbook_id' => $request->workbook_id,
                        ]);
                        $answers2 = Answer::where('detailquest_id', $value)->update([
                            'question_id' => $request->question4,
                            'detailquest_id' => $value,
                            'answer' => $request->detail13,
                            'workbook_id' => $request->workbook_id,
                        ]);
                        $answers3 = Answer::where('detailquest_id', $value)->update([
                            'question_id' => $request->question4,
                            'detailquest_id' => $value,
                            'answer' => $request->action13,
                            'workbook_id' => $request->workbook_id,
                        ]);
                        $answers4 = Answer::where('detailquest_id', $value)->update([
                            'question_id' => $request->question4,
                            'detailquest_id' => $value,
                            'answer' => $request->action13,
                            'workbook_id' => $request->workbook_id,
                        ]);
                    }
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
                        'detailquest_id' => $value,
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
                        'detailquest_id' => $value,
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
                        'detailquest_id' => $value,
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
                        'detailquest_id' => $value,
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
                if ($value == 35) {

                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox35),
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
                } elseif ($value == 36) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox36),
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
                } elseif ($value == 37) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox37),
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
                } elseif ($value == 38) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox38),
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
                } elseif ($value == 39) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox39),
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
                } elseif ($value == 40) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox40),
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
                } elseif ($value == 41) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox41),
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
                } elseif ($value == 42) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox42),
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
                } elseif ($value == 43) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox43),
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
                } elseif ($value == 44) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox44),
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
                } elseif ($value == 45) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox45),
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
                } elseif ($value == 46) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox46),
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
                } elseif ($value == 47) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox47),
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
                } elseif ($value == 48) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox48),
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
                } elseif ($value == 49) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox49),
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
                } elseif ($value == 50) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox50),
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
                } elseif ($value == 51) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox51),
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
                } elseif ($value == 52) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox52),
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
                } elseif ($value == 53) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox53),
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
                } elseif ($value == 54) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox54),
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
                } elseif ($value == 55) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox55),
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
                } elseif ($value == 56) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox56),
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
                } elseif ($value == 57) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox57),
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
                } elseif ($value == 58) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox58),
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
                } elseif ($value == 59) {
                    $answers = Answer::create([
                        'question_id' => $request->question10,
                        'detailquest_id' => $value,
                        'answer' => implode(", ", $request->checkbox59),
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

            return response()->json(['status' => 'Success', 'message' => 'response save Qs 10', 'checkbox' => implode(", ", $request->checkbox35)], 200);
        } elseif ($request->question11) {
            $WorkbookResponse = WorkbookResponse::create([
                'workbook_id' => $request->workbook_id,
                'user_id' => Auth::user()->id,
                'question_id' => $request->question11,
                'status' => 'completed',
                'complete_date' => now(),
            ]);
            return response()->json(['status' => 'Success', 'message' => 'response save Qs 11'], 200);
        } elseif ($request->question12) {
            $detailqs = array('id60' => $request->detailqs60, 'id61' => $request->detailqs61, 'id62' => $request->detailqs62, 'id63' => $request->detailqs63, 'id64' => $request->detailqs64, 'id65' => $request->detailqs65, 'id66' => $request->detailqs66, 'id67' => $request->detailqs67, 'id68' => $request->detailqs68, 'id69' => $request->detailqs69);

            foreach ($detailqs as $value) {
                if ($value == 60) {
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
                } elseif ($value == 61) {
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
                } elseif ($value == 62) {
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
                } elseif ($value == 63) {
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
                } elseif ($value == 64) {
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
                } elseif ($value == 65) {
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
                } elseif ($value == 66) {
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
                } elseif ($value == 67) {
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
                } elseif ($value == 68) {
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
                } elseif ($value == 69) {
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

            return response()->json(['status' => 'Success', 'message' => 'response save Qs 12', $detailqs], 200);
        } elseif ($request->question13) {
            $WorkbookResponse = WorkbookResponse::create([
                'workbook_id' => $request->workbook_id,
                'user_id' => Auth::user()->id,
                'question_id' => $request->question13,
                'status' => 'completed',
                'complete_date' => now(),
            ]);
            return response()->json(['status' => 'Success', 'message' => 'response save Qs 13'], 200);
        } elseif ($request->question14) {
            $WorkbookResponse = WorkbookResponse::create([
                'workbook_id' => $request->workbook_id,
                'user_id' => Auth::user()->id,
                'question_id' => $request->question14,
                'status' => 'completed',
                'complete_date' => now(),
            ]);
            return response()->json(['status' => 'Success', 'message' => 'response save Qs 14'], 200);
        } elseif ($request->question23) {
            $detailqs = array('id70' => $request->detailqs70,
                'id71' => $request->detailqs71,
                'id72' => $request->detailqs72,
                'id73' => $request->detailqs73,
                'id74' => $request->detailqs74,
                'id75' => $request->detailqs75,
                'id76' => $request->detailqs76,
                'id77' => $request->detailqs77,
                'id78' => $request->detailqs78,
                'id79' => $request->detailqs79,
                'id80' => $request->detailqs80,
                'id81' => $request->detailqs81,
                'id82' => $request->detailqs82,
                'id83' => $request->detailqs83,
                'id84' => $request->detailqs84,
                'id85' => $request->detailqs85,
                'id86' => $request->detailqs86,
                'id87' => $request->detailqs87,
                'id88' => $request->detailqs88,
                'id89' => $request->detailqs89,
                'id90' => $request->detailqs90,
                'id91' => $request->detailqs91,
                'id92' => $request->detailqs92,
                'id93' => $request->detailqs93,
                'id94' => $request->detailqs94,
                'id95' => $request->detailqs95,
                'id96' => $request->detailqs96,
                'id97' => $request->detailqs97,
                'id77' => $request->detailqs77,
            );

            foreach ($detailqs as $value) {
                if ($value == 70) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio70),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 71) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio71),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 72) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio72),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 73) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio73),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 74) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio74),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 75) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio75),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 76) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio76),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 77) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio77),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 78) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio78),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 79) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio79),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 80) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio80),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 81) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio81),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 82) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio82),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 83) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio83),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 84) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio84),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 85) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio85),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 86) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio86),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 87) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio87),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 88) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio88),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 89) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio89),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 90) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio90),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 91) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio91),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 92) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio92),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 93) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio93),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 94) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio94),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 95) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio95),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 96) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio96),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 97) {
                    $answers = Answer::create([
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer' => implode(',', $request->radio97),
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question23,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }

            }
            return response()->json(['status' => 'Success', 'message' => 'response save Qs 23', 'question' => $detailqs], 200);

        } elseif ($request->question24) {
            $WorkbookResponse = WorkbookResponse::create([
                'workbook_id' => $request->workbook_id,
                'user_id' => Auth::user()->id,
                'question_id' => $request->question24,
                'status' => 'completed',
                'complete_date' => now(),
            ]);
            return response()->json(['status' => 'Success', 'message' => 'response save Qs 24'], 200);
        } elseif ($request->question25) {
            $detailqs = array(
                'id98' => $request->detailqs98,
                'id99' => $request->detailqs99,
                'id100' => $request->detailqs100,
                'id101' => $request->detailqs101,
                'id102' => $request->detailqs102,
                'id103' => $request->detailqs103,
                'id104' => $request->detailqs104,
                'id105' => $request->detailqs105,
                'id106' => $request->detailqs106,
                'id107' => $request->detailqs107,
                'id108' => $request->detailqs108,
                'id109' => $request->detailqs109,
                'id110' => $request->detailqs110,
                'id111' => $request->detailqs111,
                'id112' => $request->detailqs112,
                'id113' => $request->detailqs113,
                'id114' => $request->detailqs114,
                'id115' => $request->detailqs115,
                'id116' => $request->detailqs116,
                'id117' => $request->detailqs117,
                'id118' => $request->detailqs118,
                'id119' => $request->detailqs119,

            );
            foreach ($detailqs as $value) {
                if ($value == 98) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree98,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy98,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 99) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree99,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy99,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 100) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree100,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy100,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 101) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree101,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy101,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 102) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree102,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy102,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 103) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree103,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy103,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 104) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree104,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy104,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 105) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree105,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy105,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 106) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree106,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy106,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 107) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree107,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy107,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 108) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree108,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy108,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 109) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree109,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy109,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 110) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree110,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy110,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 111) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree111,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy111,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 112) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree112,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy112,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 113) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree113,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy113,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 114) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree114,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy114,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 115) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree115,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy115,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 116) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree116,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy116,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 117) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree117,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy117,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 118) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree118,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy118,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 119) {
                    $answers1 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->agree119,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers1->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                    $answers2 = Answer::create([
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer' => $request->healthy_unhealthy119,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question25,
                        'detailquest_id' => $value,
                        'answer_id' => $answers2->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }

            }
            return response()->json(['status' => 'Success', 'message' => 'response save Qs 2', $detailqs], 200);
        } elseif ($request->question26) {
            $detailqs = array(
                'id120' => $request->detailqs120,
                'id121' => $request->detailqs121,
            );
            foreach ($detailqs as $value) {
                if ($value == 120) {
                    $answers = Answer::create([
                        'question_id' => $request->question26,
                        'detailquest_id' => $value,
                        'answer' => $request->heart120,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question26,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                } elseif ($value == 121) {
                    $answers = Answer::create([
                        'question_id' => $request->question26,
                        'detailquest_id' => $value,
                        'answer' => $request->heart121,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question26,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }
            }

            return response()->json(['status' => 'Success', 'message' => 'response save Qs 26', $detailqs], 200);
        } elseif ($request->question27) {
            $WorkbookResponse = WorkbookResponse::create([
                'workbook_id' => $request->workbook_id,
                'user_id' => Auth::user()->id,
                'question_id' => $request->question27,
                'status' => 'completed',
                'complete_date' => now(),
            ]);
            return response()->json(['status' => 'Success', 'message' => 'response save Qs 27'], 200);
        } elseif ($request->question28) {
            $WorkbookResponse = WorkbookResponse::create([
                'workbook_id' => $request->workbook_id,
                'user_id' => Auth::user()->id,
                'question_id' => $request->question28,
                'status' => 'completed',
                'complete_date' => now(),
            ]);
            return response()->json(['status' => 'Success', 'message' => 'response save Qs 28'], 200);
        } elseif ($request->question29) {
            $detailqs = array(
                'id122' => $request->detailqs122,

            );
            foreach ($detailqs as $value) {
                if ($value == 122) {
                    $answers = Answer::create([
                        'question_id' => $request->question29,
                        'detailquest_id' => $value,
                        'answer' => $request->comment122,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question29,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }

            }
            return response()->json(['status' => 'Success', 'message' => 'response save Qs 29'], 200);
        } elseif ($request->question30) {
            $detailqs = array(
                'id123' => $request->detailqs123,

            );
            foreach ($detailqs as $value) {
                if ($value == 123) {
                    $answers = Answer::create([
                        'question_id' => $request->question30,
                        'detailquest_id' => $value,
                        'answer' => $request->comment123,
                        'workbook_id' => $request->workbook_id,
                    ]);

                    WorkbookResponse::create([
                        'workbook_id' => $request->workbook_id,
                        'user_id' => Auth::user()->id,
                        'question_id' => $request->question30,
                        'detailquest_id' => $value,
                        'answer_id' => $answers->id,
                        'status' => 'completed',
                        'complete_date' => now(),
                    ]);
                }

            }
            return response()->json(['status' => 'Success', 'message' => 'response save Qs 30'], 200);
        }
    }
}
