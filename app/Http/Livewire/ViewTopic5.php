<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\WorkbookResponse;
use Livewire\Component;

class ViewTopic5 extends Component
{
   

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
    public $username;
    public $userid;

    public function mount()
    {
        $user = User::find($this->userid);
        $this->username = $user->name;

        $ans45 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 45)->where('user_id', $this->userid)->pluck('answer')->toArray();
        // dd($ans45);
        $this->feelings178 = json_decode($ans45[0]);
        $this->comment179 = $ans45[1];

        $ans46 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 46)->where('user_id', $this->userid)->pluck('answer')->toArray();
        $this->comment180 = $ans46[0];

        $ans48 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 48)->where('user_id', $this->userid)->pluck('answer')->toArray();
        $this->embarrassed181 = $ans48[0];
        $this->scared182 = $ans48[1];
        $this->scared183 = $ans48[2];
        $this->guilty184 = $ans48[3];
        $this->guilty185 = $ans48[4];
        $this->anxious186 = $ans48[5];
        $this->anxious187 = $ans48[6];
        $this->stressed188 = $ans48[7];
        $this->stressed189 = $ans48[8];
        $this->uneasy190 = $ans48[9];
        $this->uneasy191 = $ans48[10];
        $this->frustrated192 = $ans48[11];
        $this->frustrated193 = $ans48[12];

        $ans49 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 49)->where('user_id', $this->userid)->pluck('answer')->toArray();
        $this->rest199 = $ans49[0];
        $this->rest200 = $ans49[1];
        $this->rest201 = $ans49[2];
        $this->rest202 = $ans49[3];
        $this->rest203 = $ans49[4];
        
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
        return view('livewire.view-topic5');
    }
}
