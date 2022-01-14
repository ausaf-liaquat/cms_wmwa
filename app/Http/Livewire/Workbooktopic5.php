<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Workbooktopic5 extends Component
{
    public $totalSteps = 6;
    public $currentstep = 1;

    public $currstep = 1;
    public $workbookanswer;
    public $percent;


    public function mount()
    {
        
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
        return view('livewire.workbooktopic5');
    }
}
