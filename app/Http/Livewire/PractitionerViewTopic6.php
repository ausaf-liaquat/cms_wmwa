<?php

namespace App\Http\Livewire;
use App\Models\User;
use App\Models\WorkbookResponse;
use Livewire\Component;

class PractitionerViewTopic6 extends Component
{
    public $comment204;
    public $comment205;

    public $agree206;
    public $agree207;
    public $agree208;
    public $agree209;
    public $agree210;
    public $agree211;
    public $agree212;
    public $agree213;
    public $agree214;
    public $agree215;
    public $agree216;
    public $agree217;
    public $agree218;
    public $agree219;
    public $agree220;
    public $agree221;
    public $agree222;
    public $agree223;
    public $agree224;
    public $agree225;
    public $agree226;
    public $agree227;
    public $agree228;
    public $agree229;
    public $agree230;
    

    public $healthy_harmful206;
    public $healthy_harmful207;
    public $healthy_harmful208;
    public $healthy_harmful209;
    public $healthy_harmful210;
    public $healthy_harmful211;
    public $healthy_harmful212;
    public $healthy_harmful213;
    public $healthy_harmful214;
    public $healthy_harmful215;
    public $healthy_harmful216;
    public $healthy_harmful217;
    public $healthy_harmful218;
    public $healthy_harmful219;
    public $healthy_harmful220;
    public $healthy_harmful221;
    public $healthy_harmful222;
    public $healthy_harmful223;
    public $healthy_harmful224;
    public $healthy_harmful225;
    public $healthy_harmful226;
    public $healthy_harmful227;
    public $healthy_harmful228;
    public $healthy_harmful229;
    public $healthy_harmful230;

    public $mindfulness231;
    public $mindfulness232;
    public $mindfulness233;
    public $mindfulness234;
    public $mindfulness235;
    public $mindfulness236;

    public $totalSteps = 5;
    public $currentstep = 1;

    public $currstep = 1;
    public $workbookanswer;
    public $percent;
    public $username;
    public $userid;

    public function mount()
    {
        $user = User::find($this->userid);
        $this->username = $user->name;
        $ans51 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 51)->where('user_id', $this->userid)->pluck('answer')->toArray();
        // dd($ans45);
        $this->comment204 = $ans51[0];
        $this->comment205= $ans51[1];

        $ans52 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 52)->where('user_id', $this->userid)->pluck('answer')->toArray();
        $this->agree206=$ans52[0];
        $this->agree207=$ans52[1];
        $this->agree208=$ans52[2];
        $this->agree209=$ans52[3];
        $this->agree210=$ans52[4];
        $this->agree211=$ans52[5];
        $this->agree212=$ans52[6];
        $this->agree213=$ans52[7];
        $this->agree214=$ans52[8];
        $this->agree215=$ans52[9];
        $this->agree216=$ans52[10];
        $this->agree217=$ans52[11];
        $this->agree218=$ans52[12];
        $this->agree219=$ans52[13];
        $this->agree220=$ans52[14];
        $this->agree221=$ans52[15];
        $this->agree222=$ans52[16];
        $this->agree223=$ans52[17];
        $this->agree224=$ans52[18];
        $this->agree225=$ans52[19];
        $this->agree226=$ans52[20];
        $this->agree227=$ans52[21];
        $this->agree228=$ans52[22];
        $this->agree229=$ans52[23];
        $this->agree230=$ans52[24];

        $this->healthy_harmful206=$ans52[25];
        $this->healthy_harmful207=$ans52[26];
        $this->healthy_harmful208=$ans52[27];
        $this->healthy_harmful209=$ans52[28];
        $this->healthy_harmful210=$ans52[29];
        $this->healthy_harmful211=$ans52[30];
        $this->healthy_harmful212=$ans52[31];
        $this->healthy_harmful213=$ans52[32];
        $this->healthy_harmful214=$ans52[33];
        $this->healthy_harmful215=$ans52[34];
        $this->healthy_harmful216=$ans52[35];
        $this->healthy_harmful217=$ans52[36];
        $this->healthy_harmful218=$ans52[37];
        $this->healthy_harmful219=$ans52[38];
        $this->healthy_harmful220=$ans52[39];
        $this->healthy_harmful221=$ans52[40];
        $this->healthy_harmful222=$ans52[41];
        $this->healthy_harmful223=$ans52[42];
        $this->healthy_harmful224=$ans52[43];
        $this->healthy_harmful225=$ans52[44];
        $this->healthy_harmful226=$ans52[45];
        $this->healthy_harmful227=$ans52[46];
        $this->healthy_harmful228=$ans52[47];
        $this->healthy_harmful229=$ans52[48];
        $this->healthy_harmful230=$ans52[49];

        $ans53 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 53)->where('user_id', $this->userid)->pluck('answer')->toArray();
        $this->mindfulness231=$ans53[0];
        $this->mindfulness232=$ans53[1];
        $this->mindfulness233=$ans53[2];
        $this->mindfulness234=$ans53[3];
        $this->mindfulness235=$ans53[4];
        $this->mindfulness236=$ans53[5];
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
        return view('livewire.practitioner-view-topic6');
    }
}
