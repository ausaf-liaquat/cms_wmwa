<?php

namespace App\Http\Livewire;
use App\Models\User;
use App\Models\WorkbookResponse;
use Livewire\Component;

class ViewTopic0 extends Component
{
   

    public $session_days1;
    public $session_days2;
    public $session_days3;
    public $session_days4;
    public $session_days5;
    public $session_days6;
    public $session_days7;
    public $session_days8;
    public $session_days9;
    public $session_days10;
    public $session_days11;

    public $safety;
    public $behaviour;
    public $help_intervention;
    public $domestic_abuse;
    public $healthy_relationship;
    public $coping;
    public $confidence;
    public $education;

    public $details13;
    public $agreed13;
    public $by_who13;

    public $details14;
    public $agreed14;
    public $by_who14;

    public $details15;
    public $agreed15;
    public $by_who15;

    public $details16;
    public $agreed16;
    public $by_who16;

    public $details17;
    public $agreed17;
    public $by_who17;

    public $details18;
    public $agreed18;
    public $by_who18;

    public $details19;
    public $agreed19;
    public $by_who19;

    public $details20;
    public $agreed20;
    public $by_who20;

    public $totalSteps = 5;
    public $currentstep = 1;

    public $currstep = 1;
    public $workbookanswer;
    public $percent;

    public $getQuestionOnedata;
    public $getQuestionTwodata;
    public $userid;
    public $username;
    public function mount()
    {
        $user= User::find($this->userid);
        $this->username=$user->name;
        // dd($this->userid);

        $ans3 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 3)->where('user_id', $this->userid)->pluck('answer')->toArray();
        $this->session_days1 = $ans3[0];
        $this->session_days2 = $ans3[1];
        $this->session_days3 = $ans3[2];
        $this->session_days4 = $ans3[3];
        $this->session_days5 = $ans3[4];
        $this->session_days6 = $ans3[5];
        $this->session_days7 = $ans3[6];
        $this->session_days8 = $ans3[7];
        $this->session_days9 = $ans3[8];
        $this->session_days10 = $ans3[9];
        $this->session_days11 = $ans3[10];

        $ans4 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 4)->where('user_id', $this->userid)->pluck('answer')->toArray();
        // dd($ans3);
        $this->safety = $ans4[0];
        $this->details13 = $ans4[1];
        $this->agreed13 = $ans4[2];
        $this->by_who13 = $ans4[3];
        $this->behaviour = $ans4[4];
        $this->details14 = $ans4[5];
        $this->agreed14 = $ans4[6];
        $this->by_who14 = $ans4[7];
        $this->help_intervention = $ans4[8];
        $this->details15 = $ans4[9];
        $this->agreed15 = $ans4[10];
        $this->by_who15 = $ans4[11];
        $this->domestic_abuse = $ans4[12];
        $this->details16 = $ans4[13];
        $this->agreed16 = $ans4[14];
        $this->by_who16 = $ans4[15];
        $this->healthy_relationship = $ans4[16];
        $this->details17 = $ans4[17];
        $this->agreed17 = $ans4[18];
        $this->by_who17 = $ans4[19];
        $this->coping = $ans4[20];
        $this->details18 = $ans4[21];
        $this->agreed18 = $ans4[22];
        $this->by_who18 = $ans4[23];
        $this->confidence = $ans4[24];
        $this->details19 = $ans4[25];
        $this->agreed19 = $ans4[26];
        $this->by_who19 = $ans4[27];
        $this->education = $ans4[28];
        $this->details20 = $ans4[29];
        $this->agreed20 = $ans4[30];
        $this->by_who20 = $ans4[31];
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
        return view('livewire.view-topic0');
    }
}
