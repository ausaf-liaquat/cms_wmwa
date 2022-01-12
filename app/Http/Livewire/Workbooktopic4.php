<?php

namespace App\Http\Livewire;
use App\Models\ShareWorkbook;
use App\Models\WorkbookResponse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Workbooktopic4 extends Component
{

    public $comment148;
    public $comment149;
    public $comment150;
    public $comment151;
    public $comment152;
    public $comment153;
    public $comment154;
    public $comment155;
    public $comment156;

    public $comment157;
    public $comment158;
    public $comment159;

    public $comment160;

    public $comment161;
    public $comment162;
    public $comment163;
    public $comment164;
    public $comment165;
    public $comment166;
    public $comment167;
    public $comment168;
    public $comment169;
    public $comment170;
    public $comment171;
    public $comment172;
    public $comment173;
    public $comment174;
    public $comment175;

    public $comment176;
    public $comment177;

    public $dtquestion148 = 148;
    public $dtquestion149 = 149;
    public $dtquestion150 = 150;
    public $dtquestion151 = 151;
    public $dtquestion152 = 152;
    public $dtquestion153 = 153;
    public $dtquestion154 = 154;
    public $dtquestion155 = 155;
    public $dtquestion156 = 156;

    public $dtquestion157 = 157;
    public $dtquestion158 = 158;
    public $dtquestion159 = 159;
    public $dtquestion160 = 160;
    public $dtquestion161 = 161;
    public $dtquestion162 = 162;
    public $dtquestion163 = 163;
    public $dtquestion164 = 164;
    public $dtquestion165 = 165;
    public $dtquestion166 = 166;
    public $dtquestion167 = 167;
    public $dtquestion168 = 168;
    public $dtquestion169 = 169;
    public $dtquestion170 = 170;
    public $dtquestion171 = 171;
    public $dtquestion172 = 172;
    public $dtquestion173 = 173;
    public $dtquestion174 = 174;
    public $dtquestion175 = 175;
    public $dtquestion176 = 176;
    public $dtquestion177 = 177;

    public $totalSteps = 8;
    public $currentstep = 1;

    public $currstep = 1;
    public $workbookanswer;
    public $percent;

    public function mount()
    {
        $q1 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 33)->where('user_id', Auth::user()->id)->first();
        $q2 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 34)->where('user_id', Auth::user()->id)->first();
        $q3 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 35)->where('user_id', Auth::user()->id)->first();
        $q4 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 36)->where('user_id', Auth::user()->id)->first();
        $q5 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 37)->where('user_id', Auth::user()->id)->first();
        $q6 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 38)->where('user_id', Auth::user()->id)->first();
        $q7 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 39)->where('user_id', Auth::user()->id)->first();
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
        } elseif (empty($q6)) {
            $this->currentstep = 6;
        } elseif (empty($q7)) {
            $this->currentstep = 7;
        } else {
            $this->currentstep = 8;
        }
        // $this->currentstep = 7;

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

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 33)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::create([
                    'workbook_id' => 1,
                    'user_id' => Auth::user()->id,
                    'question_id' => 33,
                    'status' => 'completed',
                    'complete_date' => now(),
                ]);
                return response()->json(['status' => 'Success', 'message' => 'response save Qs 33'], 200);
            }

        } elseif ($this->currentstep == 2) {
            $this->validate([
                'comment148' => 'required',
                'comment149' => 'required',
            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 34)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 34, 'detailquest_id' => $this->dtquestion148, 'answer' => $this->comment148, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 34, 'detailquest_id' => $this->dtquestion149, 'answer' => $this->comment149, 'status' => 'completed', 'complete_date' => now()],
                ]);
            } else {

                $answerdata = [
                    $this->comment148,
                    $this->comment149,
                ];

                $dtid = [
                    [$this->dtquestion148],
                    [$this->dtquestion149],
                ];

                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 34)->where('user_id', Auth::user()->id)->pluck('id')->toArray();
                // dd($responseid);
                for ($i = 0; $i <= 1; $i++) {

                    WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 34])->where(['id' => $responseid[$i]])->where('user_id', Auth::user()->id)
                        ->update(['answer' => $answerdata[$i]]);

                }

            }
        } elseif ($this->currentstep == 3) {

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 35)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::create([
                    'workbook_id' => 1,
                    'user_id' => Auth::user()->id,
                    'question_id' => 35,
                    'status' => 'completed',
                    'complete_date' => now(),
                ]);
                return response()->json(['status' => 'Success', 'message' => 'response save Qs 35'], 200);
            }

        } elseif ($this->currentstep == 4) {
            $this->validate([
                'comment150' => 'required',
                'comment151' => 'required',
                'comment152' => 'required',
            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 36)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 36, 'detailquest_id' => $this->dtquestion150, 'answer' => $this->comment150, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 36, 'detailquest_id' => $this->dtquestion151, 'answer' => $this->comment151, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 36, 'detailquest_id' => $this->dtquestion152, 'answer' => $this->comment152, 'status' => 'completed', 'complete_date' => now()],
                
                ]);
            } else {

                $answerdata = [
                    $this->comment150,
                    $this->comment151,
                    $this->comment152,
                ];

                $dtid = [
                    [$this->dtquestion150],
                    [$this->dtquestion151],
                    [$this->dtquestion152],
                ];

                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 36)->where('user_id', Auth::user()->id)->pluck('id')->toArray();
                // dd($responseid);
                for ($i = 0; $i <= 2; $i++) {

                    WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 36])->where(['id' => $responseid[$i]])->where('user_id', Auth::user()->id)
                        ->update(['answer' => $answerdata[$i]]);

                }

            }
        } elseif ($this->currentstep == 5) {
            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 37)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::create([
                    'workbook_id' => 1,
                    'user_id' => Auth::user()->id,
                    'question_id' => 37,
                    'status' => 'completed',
                    'complete_date' => now(),
                ]);
                return response()->json(['status' => 'Success', 'message' => 'response save Qs 37'], 200);
            }
        } elseif ($this->currentstep == 6) {
            $this->validate([
                'comment153' => 'required',
                'comment154' => 'required',
                'comment155' => 'required',
                'comment156' => 'required',
            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 38)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 38, 'detailquest_id' => $this->dtquestion153, 'answer' => $this->comment153, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 38, 'detailquest_id' => $this->dtquestion154, 'answer' => $this->comment154, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 38, 'detailquest_id' => $this->dtquestion155, 'answer' => $this->comment155, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 38, 'detailquest_id' => $this->dtquestion156, 'answer' => $this->comment156, 'status' => 'completed', 'complete_date' => now()],
                
                ]);
            } else {

                $answerdata = [
                    $this->comment153,
                    $this->comment154,
                    $this->comment155,
                    $this->comment156,
                ];

                $dtid = [
                    [$this->dtquestion153],
                    [$this->dtquestion154],
                    [$this->dtquestion155],
                    [$this->dtquestion156],
                ];

                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 38)->where('user_id', Auth::user()->id)->pluck('id')->toArray();
                // dd($responseid);
                for ($i = 0; $i <= 3; $i++) {

                    WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 38])->where(['id' => $responseid[$i]])->where('user_id', Auth::user()->id)
                        ->update(['answer' => $answerdata[$i]]);

                }

            }
        } elseif ($this->currentstep == 7) {
            $this->validate([
                'comment157' => 'required',
                'comment158' => 'required',
                'comment159' => 'required',
                'comment160' => 'required',
                'comment161' => 'required',
                'comment162' => 'required',
                'comment163' => 'required',
                'comment164' => 'required',
                'comment165' => 'required',
                'comment166' => 'required',
                'comment167' => 'required',
                'comment168' => 'required',
                'comment169' => 'required',
                'comment170' => 'required',
                'comment171' => 'required',
                'comment172' => 'required',
                'comment173' => 'required',
                'comment174' => 'required',
                'comment175' => 'required',
                'comment176' => 'required',
                'comment177' => 'required',
                
            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 39)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 39, 'detailquest_id' => $this->dtquestion157, 'answer' => $this->comment157, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 39, 'detailquest_id' => $this->dtquestion158, 'answer' => $this->comment158, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 39, 'detailquest_id' => $this->dtquestion159, 'answer' => $this->comment159, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 39, 'detailquest_id' => $this->dtquestion160, 'answer' => $this->comment160, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 39, 'detailquest_id' => $this->dtquestion161, 'answer' => $this->comment161, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 39, 'detailquest_id' => $this->dtquestion162, 'answer' => $this->comment162, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 39, 'detailquest_id' => $this->dtquestion163, 'answer' => $this->comment163, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 39, 'detailquest_id' => $this->dtquestion164, 'answer' => $this->comment164, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 39, 'detailquest_id' => $this->dtquestion165, 'answer' => $this->comment165, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 39, 'detailquest_id' => $this->dtquestion166, 'answer' => $this->comment166, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 39, 'detailquest_id' => $this->dtquestion167, 'answer' => $this->comment167, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 39, 'detailquest_id' => $this->dtquestion168, 'answer' => $this->comment168, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 39, 'detailquest_id' => $this->dtquestion169, 'answer' => $this->comment169, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 39, 'detailquest_id' => $this->dtquestion170, 'answer' => $this->comment170, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 39, 'detailquest_id' => $this->dtquestion171, 'answer' => $this->comment171, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 39, 'detailquest_id' => $this->dtquestion172, 'answer' => $this->comment172, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 39, 'detailquest_id' => $this->dtquestion173, 'answer' => $this->comment173, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 39, 'detailquest_id' => $this->dtquestion174, 'answer' => $this->comment174, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 39, 'detailquest_id' => $this->dtquestion175, 'answer' => $this->comment175, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 39, 'detailquest_id' => $this->dtquestion176, 'answer' => $this->comment176, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 39, 'detailquest_id' => $this->dtquestion177, 'answer' => $this->comment177, 'status' => 'completed', 'complete_date' => now()],
                   
                
                ]);
            } else {

                $answerdata = [
                    $this->comment157,
                    $this->comment158,
                    $this->comment159,
                    $this->comment160,
                    $this->comment161,
                    $this->comment162,
                    $this->comment163,
                    $this->comment164,
                    $this->comment165,
                    $this->comment166,
                    $this->comment167,
                    $this->comment168,
                    $this->comment169,
                    $this->comment170,
                    $this->comment171,
                    $this->comment172,
                    $this->comment173,
                    $this->comment174,
                    $this->comment175,
                    $this->comment176,
                    $this->comment177,
        
                ];

                $dtid = [
                    [$this->dtquestion157],
                    [$this->dtquestion158],
                    [$this->dtquestion159],
                    [$this->dtquestion160],
                    [$this->dtquestion161],
                    [$this->dtquestion162],
                    [$this->dtquestion163],
                    [$this->dtquestion164],
                    [$this->dtquestion165],
                    [$this->dtquestion166],
                    [$this->dtquestion167],
                    [$this->dtquestion168],
                    [$this->dtquestion169],
                    [$this->dtquestion170],
                    [$this->dtquestion171],
                    [$this->dtquestion172],
                    [$this->dtquestion173],
                    [$this->dtquestion174],
                    [$this->dtquestion175],
                    [$this->dtquestion176],
                    [$this->dtquestion177],
            
                ];

                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 39)->where('user_id', Auth::user()->id)->pluck('id')->toArray();
                // dd($responseid);
                for ($i = 0; $i <= 20; $i++) {

                    WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 39])->where(['id' => $responseid[$i]])->where('user_id', Auth::user()->id)
                        ->update(['answer' => $answerdata[$i]]);

                }

            }
        }
    }
    public function submittopic4()
    {
        ShareWorkbook::where('user_id', Auth::user()->id)->where('workbook_id', 1)->where('topic_id', 7)->update(['status' => 'complete', 'complete_date' => now()]);
        return redirect()->route('serviceuser.myworkbook');

    }
    public function render()
    {
        return view('livewire.workbooktopic4');
    }
}
