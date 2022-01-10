<?php

namespace App\Http\Livewire;

use App\Models\ShareWorkbook;
use App\Models\WorkbookResponse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Workbooktopic3 extends Component
{

    public $comment122;
    public $comment123;

    public $who124;
    public $what125;
    public $good126;

    public $who127;
    public $what128;
    public $good129;

    public $who130;
    public $what131;
    public $good132;

    public $who133;
    public $what134;
    public $good135;

    public $who136;
    public $what137;
    public $good138;

    public $who139;
    public $what140;
    public $good141;

    public $who142;
    public $what143;
    public $good144;

    public $comment145;
    public $comment146;
    public $comment147;

    public $dtquestion122 = 122;
    public $dtquestion123 = 123;

    public $dtquestion124 = 124;
    public $dtquestion125 = 125;
    public $dtquestion126 = 126;

    public $dtquestion127 = 127;
    public $dtquestion128 = 128;
    public $dtquestion129 = 129;

    public $dtquestion130 = 130;
    public $dtquestion131 = 131;
    public $dtquestion132 = 132;

    public $dtquestion133 = 133;
    public $dtquestion134 = 134;
    public $dtquestion135 = 135;

    public $dtquestion136 = 136;
    public $dtquestion137 = 137;
    public $dtquestion138 = 138;

    public $dtquestion139 = 139;
    public $dtquestion140 = 140;
    public $dtquestion141 = 141;

    public $dtquestion142 = 142;
    public $dtquestion143 = 143;
    public $dtquestion144 = 144;

    public $dtquestion145 = 145;
    public $dtquestion146 = 146;
    public $dtquestion147 = 147;

    public $totalSteps = 6;
    public $currentstep = 1;

    public $currstep = 1;
    public $workbookanswer;
    public $percent;

    public function mount()
    {
        $q1 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 28)->where('user_id', Auth::user()->id)->first();
        $q2 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 29)->where('user_id', Auth::user()->id)->first();
        $q3 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 30)->where('user_id', Auth::user()->id)->first();
        $q4 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 31)->where('user_id', Auth::user()->id)->first();
        $q5 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 32)->where('user_id', Auth::user()->id)->first();
        if (empty($q1)) {
            $this->currentstep = 1;
        } elseif (empty($q2)) {
            $this->currentstep = 2;
        } elseif (empty($q3)) {
            $this->currentstep = 3;
        } elseif (empty($q4)) {
            $this->currentstep = 4;
        } elseif (empty($q5)) {
            $this->currentstep = 5;
        } else {
            $this->currentstep = 6;
        }

       
    }
    public function increaseStep()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentstep++;
        if ($this->currentstep > $this->totalSteps) {
            $this->currentstep = $this->totalSteps;
        }
        $this->currstep = +1;
        $this->percent = floatval(100 / $this->totalSteps) * $this->currentstep;
        $this->percent = number_format($this->percent);

    }

    public function decreaseStep()
    {
        $this->resetErrorBag();
        $this->currentstep--;
        if ($this->currentstep < 1) {
            $this->currentstep = 1;
        }
        $this->percent = floatval(100 / $this->totalSteps) * $this->currentstep;
        $this->percent = number_format($this->percent);
        // dd($this->percent);

    }

    public function validateData()
    {
        if ($this->currentstep == 1) {

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 28)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::create([
                    'workbook_id' => 1,
                    'user_id' => Auth::user()->id,
                    'question_id' => 28,
                    'status' => 'completed',
                    'complete_date' => now(),
                ]);
                return response()->json(['status' => 'Success', 'message' => 'response save Qs 28'], 200);
            }

        } elseif ($this->currentstep == 2) {
            $this->validate([
                'comment122' => 'required',
            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 29)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 29, 'detailquest_id' => $this->dtquestion122, 'answer' => $this->comment122, 'status' => 'completed', 'complete_date' => now()],
                ]);
            } else {

                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 29)->where('user_id', Auth::user()->id)->pluck('id');

                WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 29])->where(['id' => $responseid])->where('user_id', Auth::user()->id)
                    ->update(['answer' => $this->comment122]);

            }
        } elseif ($this->currentstep == 3) {

            $this->validate([
                'comment123' => 'required',
            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 30)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 30, 'detailquest_id' => $this->dtquestion123, 'answer' => $this->comment123, 'status' => 'completed', 'complete_date' => now()],
                ]);
            } else {
                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 30)->where('user_id', Auth::user()->id)->pluck('id');
                // dd($responseid);
                // for ($i = 0; $i <= 1; $i++) {

                    WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 30])->where(['id' => $responseid])->where('user_id', Auth::user()->id)
                        ->update(['answer' =>  $this->comment123]);

                // }
            }
        } elseif ($this->currentstep == 4) {
            $this->validate([
                'who124' => 'required',
                'what125' => 'required',
                'good126' => 'required',
                'who127' => 'required',
                'what128' => 'required',
                'good129' => 'required',
                'who130' => 'required',
                'what131' => 'required',
                'good132' => 'required',
                'who133' => 'required',
                'what134' => 'required',
                'good135' => 'required',
                'who136' => 'required',
                'what137' => 'required',
                'good138' => 'required',
                'who139' => 'required',
                'what140' => 'required',
                'good141' => 'required',
                'who142' => 'required',
                'what143' => 'required',
                'good144' => 'required',

            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 31)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 31, 'detailquest_id' => $this->dtquestion124, 'answer' => $this->who124, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 31, 'detailquest_id' => $this->dtquestion125, 'answer' => $this->what125, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 31, 'detailquest_id' => $this->dtquestion126, 'answer' => $this->good126, 'status' => 'completed', 'complete_date' => now()],

                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 31, 'detailquest_id' => $this->dtquestion127, 'answer' => $this->who127, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 31, 'detailquest_id' => $this->dtquestion128, 'answer' => $this->what128, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 31, 'detailquest_id' => $this->dtquestion129, 'answer' => $this->good129, 'status' => 'completed', 'complete_date' => now()],

                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 31, 'detailquest_id' => $this->dtquestion130, 'answer' => $this->who130, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 31, 'detailquest_id' => $this->dtquestion131, 'answer' => $this->what131, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 31, 'detailquest_id' => $this->dtquestion132, 'answer' => $this->good132, 'status' => 'completed', 'complete_date' => now()],

                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 31, 'detailquest_id' => $this->dtquestion133, 'answer' => $this->who133, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 31, 'detailquest_id' => $this->dtquestion134, 'answer' => $this->what134, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 31, 'detailquest_id' => $this->dtquestion135, 'answer' => $this->good135, 'status' => 'completed', 'complete_date' => now()],

                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 31, 'detailquest_id' => $this->dtquestion136, 'answer' => $this->who136, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 31, 'detailquest_id' => $this->dtquestion137, 'answer' => $this->what137, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 31, 'detailquest_id' => $this->dtquestion138, 'answer' => $this->good138, 'status' => 'completed', 'complete_date' => now()],

                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 31, 'detailquest_id' => $this->dtquestion139, 'answer' => $this->who139, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 31, 'detailquest_id' => $this->dtquestion140, 'answer' => $this->what140, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 31, 'detailquest_id' => $this->dtquestion141, 'answer' => $this->good141, 'status' => 'completed', 'complete_date' => now()],

                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 31, 'detailquest_id' => $this->dtquestion142, 'answer' => $this->who142, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 31, 'detailquest_id' => $this->dtquestion143, 'answer' => $this->what143, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 31, 'detailquest_id' => $this->dtquestion144, 'answer' => $this->good144, 'status' => 'completed', 'complete_date' => now()],

                ]);
            } else {
                $answerdata = [
                    $this->who124,
                    $this->what125,
                    $this->good126,
                    $this->who127,
                    $this->what128,
                    $this->good129,
                    $this->who130,
                    $this->what131,
                    $this->good132,
                    $this->who133,
                    $this->what134,
                    $this->good135,
                    $this->who136,
                    $this->what137,
                    $this->good138,
                    $this->who139,
                    $this->what140,
                    $this->good141,
                    $this->who142,
                    $this->what143,
                    $this->good144,
                ];

               

                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 31)->where('user_id', Auth::user()->id)->pluck('id')->toArray();
                // dd($responseid);
                for ($i = 0; $i <= 20; $i++) {

                    WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 31])->where(['id' => $responseid[$i]])->where('user_id', Auth::user()->id)
                        ->update(['answer' => $answerdata[$i]]);

                }
            }
        } elseif ($this->currentstep == 5) {
            $this->validate([
                'comment145' => 'required',
                'comment146' => 'required',
                'comment147' => 'required',

            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 32)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 32, 'detailquest_id' => $this->dtquestion145, 'answer' => $this->comment145, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 32, 'detailquest_id' => $this->dtquestion146, 'answer' => $this->comment146, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 32, 'detailquest_id' => $this->dtquestion147, 'answer' => $this->comment147, 'status' => 'completed', 'complete_date' => now()],
                ]);
            } else {
                $answerdata = [
                    $this->comment145,
                    $this->comment146,
                    $this->comment147,
                ];

                $dtid = [
                    [$this->dtquestion145],
                    [$this->dtquestion146],
                    [$this->dtquestion147],
                ];

                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 32)->where('user_id', Auth::user()->id)->pluck('id')->toArray();
                // dd($responseid);
                for ($i = 0; $i <= 2; $i++) {

                    WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 32])->where(['id' => $responseid[$i]])->where('user_id', Auth::user()->id)
                        ->update(['answer' => $answerdata[$i]]);

                }
            }
        }
    }

    public function submittopic3()
    {
        ShareWorkbook::where('user_id', Auth::user()->id)->where('workbook_id', 1)->where('topic_id', 6)->update(['status' => 'complete', 'complete_date' => now()]);
        return redirect()->route('serviceuser.myworkbook');

    }

    public function render()
    {
        return view('livewire.workbooktopic3');
    }
}
