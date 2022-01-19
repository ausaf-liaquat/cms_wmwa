<?php

namespace App\Http\Livewire;
use App\Models\User;
use App\Models\WorkbookResponse;
use Livewire\Component;

class ViewTopic8 extends Component
{

    public $reflection331;
    public $reflection332;
    public $reflection333;
    public $reflection334;

    public $totalSteps = 2;
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
        
        $ans61 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 61)->where('user_id', $this->userid)->pluck('answer')->toArray();
        $this->reflection331=$ans61[0];
        $this->reflection332=$ans61[1];
        $this->reflection333=$ans61[2];
        $this->reflection334=$ans61[3];
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
        return view('livewire.view-topic8');
    }
}
