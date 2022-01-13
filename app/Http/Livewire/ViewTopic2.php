<?php

namespace App\Http\Livewire;
use App\Models\User;
use App\Models\ShareWorkbook;
use App\Models\WorkbookResponse;
use Livewire\Component;

class ViewTopic2 extends Component
{
    public $quiz60;
    public $quiz61;
    public $quiz62;
    public $quiz63;
    public $quiz64;
    public $quiz65;
    public $quiz66;
    public $quiz67;
    public $quiz68;
    public $quiz69;

    public $radio70 = [];
    public $radio71 = [];
    public $radio72 = [];
    public $radio73 = [];
    public $radio74 = [];
    public $radio75 = [];
    public $radio76 = [];
    public $radio77 = [];
    public $radio78 = [];
    public $radio79 = [];
    public $radio80 = [];
    public $radio81 = [];
    public $radio82 = [];
    public $radio83 = [];
    public $radio84 = [];
    public $radio85 = [];
    public $radio86 = [];
    public $radio87 = [];
    public $radio88 = [];
    public $radio89 = [];
    public $radio90 = [];
    public $radio91 = [];
    public $radio92 = [];
    public $radio93 = [];
    public $radio94 = [];
    public $radio95 = [];
    public $radio96 = [];
    public $radio97 = [];

    public $agree98;
    public $agree99;
    public $agree100;
    public $agree101;
    public $agree102;
    public $agree103;
    public $agree104;
    public $agree105;
    public $agree106;
    public $agree107;
    public $agree108;
    public $agree109;
    public $agree110;
    public $agree111;
    public $agree112;
    public $agree113;
    public $agree114;
    public $agree115;
    public $agree116;
    public $agree117;
    public $agree118;
    public $agree119;

    public $healthy_unhealthy98;
    public $healthy_unhealthy99;
    public $healthy_unhealthy100;
    public $healthy_unhealthy101;
    public $healthy_unhealthy102;
    public $healthy_unhealthy103;
    public $healthy_unhealthy104;
    public $healthy_unhealthy105;
    public $healthy_unhealthy106;
    public $healthy_unhealthy107;
    public $healthy_unhealthy108;
    public $healthy_unhealthy109;
    public $healthy_unhealthy110;
    public $healthy_unhealthy111;
    public $healthy_unhealthy112;
    public $healthy_unhealthy113;
    public $healthy_unhealthy114;
    public $healthy_unhealthy115;
    public $healthy_unhealthy116;
    public $healthy_unhealthy117;
    public $healthy_unhealthy118;
    public $healthy_unhealthy119;

    public $heart120;
    public $heart121;

    public $totalSteps = 10;
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

        $ans12 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 12)->where('user_id', $this->userid)->pluck('answer')->toArray();
        $this->quiz60=$ans12[0];
        $this->quiz61=$ans12[1];
        $this->quiz62=$ans12[2];
        $this->quiz63=$ans12[3];
        $this->quiz64=$ans12[4];
        $this->quiz65=$ans12[5];
        $this->quiz66=$ans12[6];
        $this->quiz67=$ans12[7];
        $this->quiz68=$ans12[8];
        $this->quiz69=$ans12[9];

       
        $ans23 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 23)->where('user_id', $this->userid)->pluck('answer')->toArray();
        $this->radio70=$ans23[0];
        $this->radio71=$ans23[1];
        $this->radio72=$ans23[2];
        $this->radio73=$ans23[3];
        $this->radio74=$ans23[4];
        $this->radio75=$ans23[5];
        $this->radio76=$ans23[6];
        $this->radio77=$ans23[7];
        $this->radio78=$ans23[8];
        $this->radio79=$ans23[9];
        $this->radio80=$ans23[10];
        $this->radio81=$ans23[11];
        $this->radio82=$ans23[12];
        $this->radio83=$ans23[13];
        $this->radio84=$ans23[14];
        $this->radio85=$ans23[15];
        $this->radio86=$ans23[16];
        $this->radio87=$ans23[17];
        $this->radio88=$ans23[18];
        $this->radio89=$ans23[19];
        $this->radio90=$ans23[20];
        $this->radio91=$ans23[21];
        $this->radio92=$ans23[22];
        $this->radio93=$ans23[23];
        $this->radio94=$ans23[24];
        $this->radio95=$ans23[25];
        $this->radio96=$ans23[26];
        $this->radio97=$ans23[27];

        $ans25 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 25)->where('user_id', $this->userid)->pluck('answer')->toArray();
        // dd($ans25);
        $this->agree98=$ans25[0];
        $this->agree99=$ans25[1];
        $this->agree100=$ans25[2];
        $this->agree101=$ans25[3];
        $this->agree102=$ans25[4];
        $this->agree103=$ans25[5];
        $this->agree104=$ans25[6];
        $this->agree105=$ans25[7];
        $this->agree106=$ans25[8];
        $this->agree107=$ans25[9];
        $this->agree108=$ans25[10];
        $this->agree109=$ans25[11];
        $this->agree110=$ans25[12];
        $this->agree111=$ans25[13];
        $this->agree112=$ans25[14];
        $this->agree113=$ans25[15];
        $this->agree114=$ans25[16];
        $this->agree115=$ans25[17];
        $this->agree116=$ans25[18];
        $this->agree117=$ans25[19];
        $this->agree118=$ans25[20];
        $this->agree119=$ans25[21];

        $this->healthy_unhealthy98=$ans25[22];
        $this->healthy_unhealthy99=$ans25[23];
        $this->healthy_unhealthy100=$ans25[24];
        $this->healthy_unhealthy101=$ans25[25];
        $this->healthy_unhealthy102=$ans25[26];
        $this->healthy_unhealthy103=$ans25[27];
        $this->healthy_unhealthy104=$ans25[28];
        $this->healthy_unhealthy105=$ans25[29];
        $this->healthy_unhealthy106=$ans25[30];
        $this->healthy_unhealthy107=$ans25[31];
        $this->healthy_unhealthy108=$ans25[32];
        $this->healthy_unhealthy109=$ans25[33];
        $this->healthy_unhealthy110=$ans25[34];
        $this->healthy_unhealthy111=$ans25[35];
        $this->healthy_unhealthy112=$ans25[36];
        $this->healthy_unhealthy113=$ans25[37];
        $this->healthy_unhealthy114=$ans25[38];
        $this->healthy_unhealthy115=$ans25[39];
        $this->healthy_unhealthy116=$ans25[40];
        $this->healthy_unhealthy117=$ans25[41];
        $this->healthy_unhealthy118=$ans25[42];
        $this->healthy_unhealthy119=$ans25[43];

        $ans26 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 26)->where('user_id', $this->userid)->pluck('answer')->toArray();
        $this->heart120=$ans26[0];
        $this->heart121=$ans26[1];
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
        return view('livewire.view-topic2');
    }
}
