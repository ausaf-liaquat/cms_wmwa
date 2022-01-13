<?php

namespace App\Http\Livewire;
use App\Models\User;
use App\Models\ShareWorkbook;
use App\Models\WorkbookResponse;
use Livewire\Component;

class PractitionerViewTopic3 extends Component
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

    public $totalSteps = 6;
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

        $ans29 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 29)->where('user_id', $this->userid)->pluck('answer')->toArray();
        $this->comment122=$ans29[0];

        $ans29 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 30)->where('user_id', $this->userid)->pluck('answer')->toArray();
        $this->comment123=$ans29[0];

        $ans31 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 31)->where('user_id', $this->userid)->pluck('answer')->toArray();
        $this->who124=$ans31[0]; 
        $this->what125=$ans31[1];
        $this->good126=$ans31[2];
        $this->who127=$ans31[3]; 
        $this->what128=$ans31[4];
        $this->good129=$ans31[5];
        $this->who130=$ans31[6]; 
        $this->what131=$ans31[7];
        $this->good132=$ans31[8];
        $this->who133=$ans31[9]; 
        $this->what134=$ans31[10];
        $this->good135=$ans31[11];
        $this->who136=$ans31[12]; 
        $this->what137=$ans31[13];
        $this->good138=$ans31[14];
        $this->who139=$ans31[15]; 
        $this->what140=$ans31[16];
        $this->good141=$ans31[17];
        $this->who142=$ans31[18]; 
        $this->what143=$ans31[19];
        $this->good144=$ans31[20];

        $ans32 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 32)->where('user_id', $this->userid)->pluck('answer')->toArray();
        $this->comment145=$ans32[0];
        $this->comment146=$ans32[1];
        $this->comment147=$ans32[2];

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
        return view('livewire.practitioner-view-topic3');
    }
}
