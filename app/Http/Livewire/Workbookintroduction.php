<?php

namespace App\Http\Livewire;

use App\Models\WorkbookResponse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
class Workbookintroduction extends Component
{

    public $dtquestion1 = 1;
    public $dtquestion2 = 2;
    public $dtquestion3 = 3;
    public $dtquestion4 = 4;
    public $dtquestion5 = 5;
    public $dtquestion6 = 6;
    public $dtquestion7 = 7;
    public $dtquestion8 = 8;
    public $dtquestion9 = 9;
    public $dtquestion10 = 10;
    public $dtquestion11 = 11;

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

    public $dtquestion13 = 13;
    public $details13;
    public $agreed13;
    public $by_who13;

    public $dtquestion14 = 14;
    public $details14;
    public $agreed14;
    public $by_who14;

    public $dtquestion15 = 15;
    public $details15;
    public $agreed15;
    public $by_who15;

    public $dtquestion16 = 16;
    public $details16;
    public $agreed16;
    public $by_who16;

    public $dtquestion17 = 17;
    public $details17;
    public $agreed17;
    public $by_who17;

    public $dtquestion18 = 18;
    public $details18;
    public $agreed18;
    public $by_who18;

    public $dtquestion19 = 19;
    public $details19;
    public $agreed19;
    public $by_who19;

    public $dtquestion20 = 20;
    public $details20;
    public $agreed20;
    public $by_who20;

    

    public $totalSteps = 5;
    public $currentstep;

    public $workbookanswer;

    private $stepActions = [
        'submit1',
        'submit2',
        'submit3',
        'submit4',
    ];

    public function submit()
    {

        $action = $this->stepActions[$this->currentstep];

        $this->$action();
    }

    public function mount()
    {
        $this->currentstep = 0;

    }

    public function increaseStep()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentstep++;
        if ($this->currentstep > $this->totalSteps) {
            $this->currentstep = $this->totalSteps;
        }
        // setProgressBar($this->currentstep++);
    }

    public function decreaseStep()
    {
        $this->resetErrorBag();
        $this->currentstep--;
        // if ($this->currentstep < 1) {
        //     $this->currentstep = 1;
        // }
        // setProgressBar($this->currentstep--);
    }

  
    public function submit1()
    {

        $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 1)->where('user_id', Auth::user()->id)->first();
        if (empty($find)) {
            $WorkbookResponse = WorkbookResponse::create([
                'workbook_id' => 1,
                'user_id' => Auth::user()->id,
                'question_id' => 1,
                'status' => 'completed',
                'complete_date' => now(),
            ]);
            return response()->json(['status' => 'Success', 'message' => 'response save Qs 1'], 200);
        }

        $this->currentstep++;
    }

    public function submit2()
    {

        $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 2)->where('user_id', Auth::user()->id)->first();
        if (empty($find)) {
            $WorkbookResponse = WorkbookResponse::create([
                'workbook_id' => 1,
                'user_id' => Auth::user()->id,
                'question_id' => 2,
                'status' => 'completed',
                'complete_date' => now(),
            ]);
            return response()->json(['status' => 'Success', 'message' => 'response save Qs 2'], 200);
        }

        $this->currentstep++;
    }

    public function submit3()
    {
        $this->validate([
            'session_days1' => 'required',
            'session_days2' => 'required',
            'session_days3' => 'required',
            'session_days4' => 'required',
            'session_days5' => 'required',
            'session_days6' => 'required',
            'session_days7' => 'required',
            'session_days8' => 'required',
            'session_days9' => 'required',
            'session_days10' => 'required',
            'session_days11' => 'required',

        ]);
        $data=[
            ['workbook_id' => 1,'user_id' => Auth::user()->id, 'question_id' => 3, 'detailquest_id' => $this->dtquestion1, 'answer' => $this->session_days1, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id' => 1,'user_id' => Auth::user()->id, 'question_id' => 3, 'detailquest_id' => $this->dtquestion2, 'answer' => $this->session_days2, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id' => 1,'user_id' => Auth::user()->id, 'question_id' => 3, 'detailquest_id' => $this->dtquestion3, 'answer' => $this->session_days3, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id' => 1,'user_id' => Auth::user()->id, 'question_id' => 3, 'detailquest_id' => $this->dtquestion4, 'answer' => $this->session_days4, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id' => 1,'user_id' => Auth::user()->id, 'question_id' => 3, 'detailquest_id' => $this->dtquestion5, 'answer' => $this->session_days5, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id' => 1,'user_id' => Auth::user()->id, 'question_id' => 3, 'detailquest_id' => $this->dtquestion6, 'answer' => $this->session_days6, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id' => 1,'user_id' => Auth::user()->id, 'question_id' => 3, 'detailquest_id' => $this->dtquestion7, 'answer' => $this->session_days7, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id' => 1,'user_id' => Auth::user()->id, 'question_id' => 3, 'detailquest_id' => $this->dtquestion8, 'answer' => $this->session_days8, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id' => 1,'user_id' => Auth::user()->id, 'question_id' => 3, 'detailquest_id' => $this->dtquestion9, 'answer' => $this->session_days9, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id' => 1,'user_id' => Auth::user()->id, 'question_id' => 3, 'detailquest_id' => $this->dtquestion10, 'answer' => $this->session_days10, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id' => 1,'user_id' => Auth::user()->id, 'question_id' => 3, 'detailquest_id' => $this->dtquestion11, 'answer' => $this->session_days11, 'status' => 'completed', 'complete_date' => now()],
        ];
        $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 3)->where('user_id', Auth::user()->id)->first();
        foreach ($data as $key => $value) {
            $id[] = WorkbookResponse::insertGetId(
                ['workbook_id' => $value['workbook_id'],'user_id' => $value['user_id'], 'question_id' => $value['question_id'], 'detailquest_id' => $value['detailquest_id'], 'answer' => $value['answer'], 'status' => $value['status'], 'complete_date' => $value['complete_date']]
            );
        }
        

        $this->currentstep++;
    }

    public function submit4()
    {
        $this->validate([
            'safety' => 'required',
            'details13' => 'required',
            'agreed13' => 'required',
            'by_who13' => 'required',

            'behaviour' => 'required',
            'details14' => 'required',
            'agreed14' => 'required',
            'by_who14' => 'required',

            'help_intervention' => 'required',
            'details15' => 'required',
            'agreed15' => 'required',
            'by_who15' => 'required',

            'domestic_abuse' => 'required',
            'details16' => 'required',
            'agreed16' => 'required',
            'by_who16' => 'required',

            'healthy_relationship' => 'required',
            'details17' => 'required',
            'agreed17' => 'required',
            'by_who17' => 'required',

            'coping' => 'required',
            'details18' => 'required',
            'agreed18' => 'required',
            'by_who18' => 'required',

            'confidence' => 'required',
            'details19' => 'required',
            'agreed19' => 'required',
            'by_who19' => 'required',

            'education' => 'required',
            'details20' => 'required',
            'agreed20' => 'required',
            'by_who20' => 'required',

        ]);
        $WorkbookResponse = WorkbookResponse::upsert([
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion13, 'answer' => $this->safety, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion13, 'answer' => $this->details13, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion13, 'answer' => $this->agreed13, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion13, 'answer' => $this->by_who13, 'status' => 'completed', 'complete_date' => now()],
            
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion14, 'answer' => $this->behaviour, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion14, 'answer' => $this->details14, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion14, 'answer' => $this->agreed14, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion14, 'answer' => $this->by_who14, 'status' => 'completed', 'complete_date' => now()],
            
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion15, 'answer' => $this->help_intervention, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion15, 'answer' => $this->details15, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion15, 'answer' => $this->agreed15, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion15, 'answer' => $this->by_who15, 'status' => 'completed', 'complete_date' => now()],

            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion16, 'answer' => $this->domestic_abuse, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion16, 'answer' => $this->details16, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion16, 'answer' => $this->agreed16, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion16, 'answer' => $this->by_who16, 'status' => 'completed', 'complete_date' => now()],
        
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion17, 'answer' => $this->healthy_relationship, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion17, 'answer' => $this->details17, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion17, 'answer' => $this->agreed17, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion17, 'answer' => $this->by_who17, 'status' => 'completed', 'complete_date' => now()],
        
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion18, 'answer' => $this->coping, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion18, 'answer' => $this->details18, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion18, 'answer' => $this->agreed18, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion18, 'answer' => $this->by_who18, 'status' => 'completed', 'complete_date' => now()],
        
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion19, 'answer' => $this->confidence, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion19, 'answer' => $this->details19, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion19, 'answer' => $this->agreed19, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion19, 'answer' => $this->by_who19, 'status' => 'completed', 'complete_date' => now()],
        
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion20, 'answer' => $this->education, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion20, 'answer' => $this->details20, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion20, 'answer' => $this->agreed20, 'status' => 'completed', 'complete_date' => now()],
            ['workbook_id'=>1,'user_id' => Auth::user()->id, 'question_id' => 4, 'detailquest_id' => $this->dtquestion20, 'answer' => $this->by_who20, 'status' => 'completed', 'complete_date' => now()],
        ], ['detailquest_id'], ['answer']);

        $this->currentstep++;
    }

    public function render()
    {
        return view('livewire.workbookintroduction');
    }
}
