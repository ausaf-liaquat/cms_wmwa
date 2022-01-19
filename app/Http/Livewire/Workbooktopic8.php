<?php

namespace App\Http\Livewire;
use App\Models\ShareWorkbook;
use App\Models\WorkbookResponse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Workbooktopic8 extends Component
{

    public $reflection331;
    public $reflection332;
    public $reflection333;
    public $reflection334;

    public $dtquestion331 = 331;
    public $dtquestion332 = 332;
    public $dtquestion333 = 333;
    public $dtquestion334 = 334;

    public $totalSteps = 2;
    public $currentstep = 1;
    public $percent;
    public $currstep = 1;

    public function mount()
    {
        // $this->currentstep = 6;
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

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 60)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::create([
                    'workbook_id' => 1,
                    'user_id' => Auth::user()->id,
                    'question_id' => 60,
                    'status' => 'completed',
                    'complete_date' => now(),
                ]);
                return response()->json(['status' => 'Success', 'message' => 'response save Qs 50'], 200);
            }

        } elseif ($this->currentstep == 2) {
            $this->validate([
                'reflection331' => 'required',
                'reflection332' => 'required',
                'reflection333' => 'required',
                'reflection334' => 'required',
            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 61)->where('user_id', Auth::user()->id)->first();
            // if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 61, 'detailquest_id' => $this->dtquestion331, 'answer' => $this->reflection331, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 61, 'detailquest_id' => $this->dtquestion332, 'answer' => $this->reflection332, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 61, 'detailquest_id' => $this->dtquestion333, 'answer' => $this->reflection333, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 61, 'detailquest_id' => $this->dtquestion334, 'answer' => $this->reflection334, 'status' => 'completed', 'complete_date' => now()],
                ]);
                ShareWorkbook::where('user_id', Auth::user()->id)->where('workbook_id', 1)->where('topic_id', 14)->update(['status' => 'complete', 'complete_date' => now()]);
                return redirect()->route('serviceuser.myworkbook');
            // } else {

                //     $answerdata = [
                //         $this->reflection331,
                //         $this->reflection332,
                //         $this->reflection333,
                //         $this->reflection334,
                //     ];

                //     $dtid = [
                //         [$this->dtquestion331],
                //         [$this->dtquestion332],
                //         [$this->dtquestion333],
                //         [$this->dtquestion334],
                //     ];

                //     $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 61)->where('user_id', Auth::user()->id)->pluck('id')->toArray();
                //     // dd($responseid);
                //     for ($i = 0; $i <= 3; $i++) {

                //         WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 61])->where(['id' => $responseid[$i]])->where('user_id', Auth::user()->id)
                //             ->update(['answer' => $answerdata[$i]]);

                //     }

            // }
        }
    }

    // public function submittopic8()
    // {
        //     ShareWorkbook::where('user_id', Auth::user()->id)->where('workbook_id', 1)->where('topic_id', 14)->update(['status' => 'complete', 'complete_date' => now()]);
        //     return redirect()->route('serviceuser.myworkbook');

    // }

    public function render()
    {
        return view('livewire.workbooktopic8');
    }
}
