<?php

namespace App\Http\Livewire;
use App\Models\User;
use App\Models\ShareWorkbook;
use App\Models\WorkbookResponse;
use Livewire\Component;

class ViewTopic4 extends Component
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

    public $totalSteps = 8;
    public $currentstep = 1;

    public $currstep = 1;
    public $workbookanswer;
    public $percent;
    public $username;
    public $userid;


    public function mount()
    {
        $user= User::find($this->userid);
        $this->username=$user->name;

        $ans34 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 34)->where('user_id', $this->userid)->pluck('answer')->toArray();
        $this->comment148=$ans34[0];
        $this->comment149=$ans34[1];

        $ans36 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 36)->where('user_id', $this->userid)->pluck('answer')->toArray();
        $this->comment150=$ans36[0];
        $this->comment151=$ans36[1];
        $this->comment152=$ans36[2];

        $ans38 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 38)->where('user_id', $this->userid)->pluck('answer')->toArray();
        $this->comment153=$ans38[0];
        $this->comment154=$ans38[1];
        $this->comment155=$ans38[2];
        $this->comment156=$ans38[3];

        $ans39 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 39)->where('user_id', $this->userid)->pluck('answer')->toArray();
        $this->comment157=$ans39[0];
        $this->comment158=$ans39[1];
        $this->comment159=$ans39[2];
        $this->comment160=$ans39[3];
        $this->comment161=$ans39[4];
        $this->comment162=$ans39[5];
        $this->comment163=$ans39[6];
        $this->comment164=$ans39[7];
        $this->comment165=$ans39[8];
        $this->comment166=$ans39[9];
        $this->comment167=$ans39[10];
        $this->comment168=$ans39[11];
        $this->comment169=$ans39[12];
        $this->comment170=$ans39[13];
        $this->comment171=$ans39[14];
        $this->comment172=$ans39[15];
        $this->comment173=$ans39[16];
        $this->comment174=$ans39[17];
        $this->comment175=$ans39[18];
        $this->comment176=$ans39[19];
        $this->comment177=$ans39[20];
    }

    public function increaseStep()
    {
        $this->resetErrorBag();
        // $this->validateData();
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

    public function render()
    {
        return view('livewire.view-topic4');
    }
}
