<?php

namespace App\Http\Livewire;
use App\Models\ShareWorkbook;
use App\Models\WorkbookResponse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Workbooktopic5 extends Component
{
    public $dtquestion178 = 178;
    public $dtquestion179 = 179;
    public $dtquestion180 = 180;

    public $dtquestion181 = 181;
    public $dtquestion182 = 182;
    public $dtquestion183 = 183;
    public $dtquestion184 = 184;
    public $dtquestion185 = 185;
    public $dtquestion186 = 186;
    public $dtquestion187 = 187;
    public $dtquestion188 = 188;
    public $dtquestion189 = 189;
    public $dtquestion190 = 190;
    public $dtquestion191 = 191;
    public $dtquestion192 = 192;
    public $dtquestion193 = 193;

    public $dtquestion199 = 199;
    public $dtquestion200 = 200;
    public $dtquestion201 = 201;
    public $dtquestion202 = 202;
    public $dtquestion203 = 203;

    public $feelings178 = [];
    public $comment179;

    public $comment180;

    public $embarrassed181;
    public $scared182;
    public $scared183;
    public $guilty184;
    public $guilty185;
    public $anxious186;
    public $anxious187;
    public $stressed188;
    public $stressed189;
    public $uneasy190;
    public $uneasy191;
    public $frustrated192;
    public $frustrated193;

    public $rest199;
    public $rest200;
    public $rest201;
    public $rest202;
    public $rest203;

    public $totalSteps = 7;
    public $currentstep = 1;

    public $currstep = 1;
    public $workbookanswer;
    public $percent;

    public function mount()
    {
        // $q1 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 45)->where('user_id', Auth::user()->id)->first();
        $q2 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 45)->where('user_id', Auth::user()->id)->first();
        $q3 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 46)->where('user_id', Auth::user()->id)->first();
        $q4 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 47)->where('user_id', Auth::user()->id)->first();
        $q5 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 48)->where('user_id', Auth::user()->id)->first();
        $q6 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 49)->where('user_id', Auth::user()->id)->first();
        if (empty($q2)) {
            $this->currentstep = 2;
        } elseif (empty($q3)) {
            $this->currentstep = 3;
        } elseif (empty($q4)) {
            $this->currentstep = 4;
        } elseif (empty($q5)) {
            $this->currentstep = 5;
        } elseif (empty($q6)) {
            $this->currentstep = 6;
        } else {
            $this->currentstep = 7;
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
        if ($this->currentstep == 2) {
            $this->validate([
                'feelings178' => 'required',
                'comment179' => 'required',
            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 45)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 45, 'detailquest_id' => $this->dtquestion178, 'answer' => json_encode($this->feelings178), 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 45, 'detailquest_id' => $this->dtquestion179, 'answer' => $this->comment179, 'status' => 'completed', 'complete_date' => now()],
                ]);
            } else {

                WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 45])->where('detailquest_id', $this->dtquestion178)->where('user_id', Auth::user()->id)
                    ->update(['answer' => json_encode($this->feelings178)]);
                WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 45])->where('detailquest_id', $this->dtquestion179)->where('user_id', Auth::user()->id)
                    ->update(['answer' => $this->comment179]);

            }
        } elseif ($this->currentstep == 3) {

            $this->validate([
                'comment180' => 'required',
            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 46)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 46, 'detailquest_id' => $this->dtquestion180, 'answer' => $this->comment180, 'status' => 'completed', 'complete_date' => now()],
                ]);
            } else {

                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 46)->where('user_id', Auth::user()->id)->pluck('id');

                WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 46])->where(['id' => $responseid])->where('user_id', Auth::user()->id)
                    ->update(['answer' => $this->comment180]);

            }

        }elseif ($this->currentstep == 4) {
            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 47)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::create([
                    'workbook_id' => 1,
                    'user_id' => Auth::user()->id,
                    'question_id' => 47,
                    'status' => 'completed',
                    'complete_date' => now(),
                ]);
                return response()->json(['status' => 'Success', 'message' => 'response save Qs 47'], 200);
            }
        } elseif ($this->currentstep == 5) {
            $this->validate([
                'embarrassed181' => 'required',
                'scared182' => 'required',
                'scared183' => 'required',
                'guilty184' => 'required',
                'guilty185' => 'required',
                'anxious186' => 'required',
                'anxious187' => 'required',
                'stressed188' => 'required',
                'stressed189' => 'required',
                'uneasy190' => 'required',
                'uneasy191' => 'required',
                'frustrated192' => 'required',
                'frustrated193' => 'required',

            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 48)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 48, 'detailquest_id' => $this->dtquestion181, 'answer' => $this->embarrassed181, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 48, 'detailquest_id' => $this->dtquestion182, 'answer' => $this->scared182, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 48, 'detailquest_id' => $this->dtquestion183, 'answer' => $this->scared183, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 48, 'detailquest_id' => $this->dtquestion184, 'answer' => $this->guilty184, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 48, 'detailquest_id' => $this->dtquestion185, 'answer' => $this->guilty185, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 48, 'detailquest_id' => $this->dtquestion186, 'answer' => $this->anxious186, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 48, 'detailquest_id' => $this->dtquestion187, 'answer' => $this->anxious187, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 48, 'detailquest_id' => $this->dtquestion188, 'answer' => $this->stressed188, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 48, 'detailquest_id' => $this->dtquestion189, 'answer' => $this->stressed189, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 48, 'detailquest_id' => $this->dtquestion190, 'answer' => $this->uneasy190, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 48, 'detailquest_id' => $this->dtquestion191, 'answer' => $this->uneasy191, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 48, 'detailquest_id' => $this->dtquestion192, 'answer' => $this->frustrated192, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 48, 'detailquest_id' => $this->dtquestion193, 'answer' => $this->frustrated193, 'status' => 'completed', 'complete_date' => now()],
                ]);
            } else {

                $answerdata = [
                    $this->embarrassed181,
                    $this->scared182, 
                    $this->scared183, 
                    $this->guilty184, 
                    $this->guilty185, 
                    $this->anxious186,
                    $this->anxious187,
                    $this->stressed188,
                    $this->stressed189,
                    $this->uneasy190, 
                    $this->uneasy191, 
                    $this->frustrated192,
                    $this->frustrated193,
                ];

                $dtid = [
                    [$this->dtquestion181],
                    [$this->dtquestion182],
                    [$this->dtquestion183],
                    [$this->dtquestion184],
                    [$this->dtquestion185],
                    [$this->dtquestion186],
                    [$this->dtquestion187],
                    [$this->dtquestion188],
                    [$this->dtquestion189],
                    [$this->dtquestion190],
                    [$this->dtquestion191],
                    [$this->dtquestion192],
                    [$this->dtquestion193],
                ];

                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 48)->where('user_id', Auth::user()->id)->pluck('id')->toArray();
                // dd($responseid);
                for ($i = 0; $i <= 12; $i++) {

                    WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 48])->where(['id' => $responseid[$i]])->where('user_id', Auth::user()->id)
                        ->update(['answer' => $answerdata[$i]]);

                }

            }
        } elseif ($this->currentstep == 6) {
            $this->validate([
                'rest199' => 'required',
                'rest200' => 'required',
                'rest201' => 'required',
                'rest202' => 'required',
                'rest203' => 'required',
            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 49)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 49, 'detailquest_id' => $this->dtquestion199, 'answer' => $this->rest199, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 49, 'detailquest_id' => $this->dtquestion200, 'answer' => $this->rest200, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 49, 'detailquest_id' => $this->dtquestion201, 'answer' => $this->rest201, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 49, 'detailquest_id' => $this->dtquestion202, 'answer' => $this->rest202, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 49, 'detailquest_id' => $this->dtquestion203, 'answer' => $this->rest203, 'status' => 'completed', 'complete_date' => now()],

                ]);
            } else {

                $answerdata = [
                    $this->rest199,
                    $this->rest200,
                    $this->rest201,
                    $this->rest202,
                    $this->rest203,

                ];

                $dtid = [
                    [$this->dtquestion199],
                    [$this->dtquestion200],
                    [$this->dtquestion201],
                    [$this->dtquestion202],
                    [$this->dtquestion203],
                ];

                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 49)->where('user_id', Auth::user()->id)->pluck('id')->toArray();
                // dd($responseid);
                for ($i = 0; $i <= 4; $i++) {

                    WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 49])->where(['id' => $responseid[$i]])->where('user_id', Auth::user()->id)
                        ->update(['answer' => $answerdata[$i]]);

                }

            }
        }
    }

    public function submittopic5()
    {
        ShareWorkbook::where('user_id', Auth::user()->id)->where('workbook_id', 1)->where('topic_id', 11)->update(['status' => 'complete', 'complete_date' => now()]);
        return redirect()->route('serviceuser.myworkbook');

    }
    public function render()
    {
        return view('livewire.workbooktopic5');
    }
}
