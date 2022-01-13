<?php

namespace App\Http\Livewire;
use App\Models\ShareWorkbook;
use App\Models\User;
use App\Models\WorkbookResponse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PractitionerViewTopic1 extends Component
{
    public $character1_name;
    public $character1_age;
    public $character1_occupation;
    public $character1_home;
    public $character1_personality;
    public $character1_role;
    public $character1_notes;

    public $character2_name;
    public $character2_age;
    public $character2_occupation;
    public $character2_home;
    public $character2_personality;
    public $character2_role;
    public $character2_notes;

    public $checkbox35 =[];
    public $checkbox36 = [];
    public $checkbox37 = [];
    public $checkbox38 = [];
    public $checkbox39 = [];
    public $checkbox40 = [];
    public $checkbox41 = [];
    public $checkbox42 = [];
    public $checkbox43 = [];
    public $checkbox44 = [];
    public $checkbox45 = [];
    public $checkbox46 = [];
    public $checkbox47 = [];
    public $checkbox48 = [];
    public $checkbox49 = [];
    public $checkbox50 = [];
    public $checkbox51 = [];
    public $checkbox52 = [];
    public $checkbox53 = [];
    public $checkbox54 = [];
    public $checkbox55 = [];
    public $checkbox56 = [];
    public $checkbox57 = [];
    public $checkbox58 = [];
    public $checkbox59 = [];

    public $totalSteps = 7;
    public $currentstep = 1;
    public $percent;
    public $currstep = 1;
    public $userid;
    public $username;
    
    public function mount()
    {
        $user= User::find($this->userid);
        $this->username=$user->name;
        $ans7 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 7)->where('user_id', $this->userid)->pluck('answer')->toArray();
        // dd($ans7);
        $this->character1_name=$ans7[0];
        $this->character1_age=$ans7[1];
        $this->character1_occupation=$ans7[2];
        $this->character1_home=$ans7[3];
        $this->character1_personality=$ans7[4];
        $this->character1_role=$ans7[5];
        $this->character1_notes=$ans7[6];
        $this->character2_name=$ans7[7];
        $this->character2_age=$ans7[8];
        $this->character2_occupation=$ans7[9];
        $this->character2_home=$ans7[10];
        $this->character2_personality=$ans7[11];
        $this->character2_role=$ans7[12];
        $this->character2_notes=$ans7[13];

        $ans10 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 10)->where('user_id', $this->userid)->pluck('answer')->toArray();
        // dd($ans10[0]);
       
        $this->checkbox35=json_decode($ans10[0]);
        $this->checkbox36=json_decode($ans10[1]);
        $this->checkbox37=json_decode($ans10[2]);
        $this->checkbox38=json_decode($ans10[3]);
        $this->checkbox39=json_decode($ans10[4]);
        $this->checkbox40=json_decode($ans10[5]);
        $this->checkbox41=json_decode($ans10[6]);
        $this->checkbox42=json_decode($ans10[7]);
        $this->checkbox43=json_decode($ans10[8]);
        $this->checkbox44=json_decode($ans10[9]);
        $this->checkbox45=json_decode($ans10[10]);
        $this->checkbox46=json_decode($ans10[11]);
        $this->checkbox47=json_decode($ans10[12]);
        $this->checkbox48=json_decode($ans10[13]);
        $this->checkbox49=json_decode($ans10[14]);
        $this->checkbox50=json_decode($ans10[15]);
        $this->checkbox51=json_decode($ans10[16]);
        $this->checkbox52=json_decode($ans10[17]);
        $this->checkbox53=json_decode($ans10[18]);
        $this->checkbox54=json_decode($ans10[19]);
        $this->checkbox55=json_decode($ans10[20]);
        $this->checkbox56=json_decode($ans10[21]);
        $this->checkbox57=json_decode($ans10[22]);
        $this->checkbox58=json_decode($ans10[23]);
        $this->checkbox59=json_decode($ans10[24]);

      

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
        return view('livewire.practitioner-view-topic1');
    }
}