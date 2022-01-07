<?php

namespace App\Http\Livewire;
use App\Models\ShareWorkbook;
use App\Models\WorkbookResponse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Workbooktopic1 extends Component
{

    public $character1_name;
    public $character1_age;
    public $character1_occupation;
    public $character1_home;
    public $character1_personality;
    public $character1_role;
    public $character1_notes;

    public $dtquestion21=21;
    public $dtquestion22=22;
    public $dtquestion23=23;
    public $dtquestion24=24;
    public $dtquestion25=25;
    public $dtquestion26=26;
    public $dtquestion27=27;
    public $dtquestion28=28;
    public $dtquestion29=29;
    public $dtquestion30=30;
    public $dtquestion31=31;
    public $dtquestion32=32;
    public $dtquestion33=33;
    public $dtquestion34=34;

    public $dtquestion35=35;
    public $dtquestion36=36;
    public $dtquestion37=37;
    public $dtquestion38=38;
    public $dtquestion39=39;
    public $dtquestion40=40;
    public $dtquestion41=41;
    public $dtquestion42=42;
    public $dtquestion43=43;
    public $dtquestion44=44;
    public $dtquestion45=45;
    public $dtquestion46=46;
    public $dtquestion47=47;
    public $dtquestion48=48;
    public $dtquestion49=49;
    public $dtquestion50=50;
    public $dtquestion51=51;
    public $dtquestion52=52;
    public $dtquestion53=53;
    public $dtquestion54=54;
    public $dtquestion55=55;
    public $dtquestion56=56;
    public $dtquestion57=57;
    public $dtquestion58=58;
    public $dtquestion59=59;

    public $character2_name;
    public $character2_age;
    public $character2_occupation;
    public $character2_home;
    public $character2_personality;
    public $character2_role;
    public $character2_notes;

    public $checkbox35 = [];
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

    public function mount()
    {
        // $q1 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 1)->where('user_id', Auth::user()->id)->first();
        // $q2 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 2)->where('user_id', Auth::user()->id)->first();
        // $q3 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 3)->where('user_id', Auth::user()->id)->first();
        // $q4 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 4)->where('user_id', Auth::user()->id)->first();
        // if (empty($q1)) {
        //     $this->currentstep = 1;
        // } elseif (empty($q2)) {
        //     $this->currentstep = 2;
        // } elseif (empty($q3)) {
        //     $this->currentstep = 3;
        // } elseif (empty($q4)) {
        //     $this->currentstep = 4;
        // } else {
        //     $this->currentstep = 5;
        // }

        $this->currentstep = 1;

    }

    public function increaseStep()
    {
        $this->resetErrorBag();
        $this->validateData();
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

    public function validateData()
    {
        if ($this->currentstep == 1) {

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 5)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::create([
                    'workbook_id' => 1,
                    'user_id' => Auth::user()->id,
                    'question_id' => 5,
                    'status' => 'completed',
                    'complete_date' => now(),
                ]);
                return response()->json(['status' => 'Success', 'message' => 'response save Qs 5'], 200);
            }

        } elseif ($this->currentstep == 2) {
            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 6)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::create([
                    'workbook_id' => 1,
                    'user_id' => Auth::user()->id,
                    'question_id' => 6,
                    'status' => 'completed',
                    'complete_date' => now(),
                ]);
                return response()->json(['status' => 'Success', 'message' => 'response save Qs 6'], 200);
            }
        } elseif ($this->currentstep == 3) {

            $this->validate([
                'character1_name'=>'required',
                'character1_age'=>'required',
                'character1_occupation'=>'required',
                'character1_home'=>'required',
                'character1_personality'=>'required',
                'character1_role'=>'required',
                'character1_notes'=>'required',

                'character2_name'=>'required',
                'character2_age'=>'required',
                'character2_occupation'=>'required',
                'character2_home'=>'required',
                'character2_personality'=>'required',
                'character2_role'=>'required',
                'character2_notes'=>'required'

            ]);
            $data = [
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 7, 'detailquest_id' => $this->dtquestion21, 'answer' => $this->character1_name, 'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 7, 'detailquest_id' => $this->dtquestion22, 'answer' => $this->character1_age, 'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 7, 'detailquest_id' => $this->dtquestion23, 'answer' => $this->character1_occupation, 'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 7, 'detailquest_id' => $this->dtquestion24, 'answer' => $this->character1_home, 'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 7, 'detailquest_id' => $this->dtquestion25, 'answer' => $this->character1_personality, 'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 7, 'detailquest_id' => $this->dtquestion26, 'answer' => $this->character1_role, 'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 7, 'detailquest_id' => $this->dtquestion27, 'answer' => $this->character1_notes, 'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 7, 'detailquest_id' => $this->dtquestion28, 'answer' => $this->character2_name,'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 7, 'detailquest_id' => $this->dtquestion29, 'answer' => $this->character2_age,'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 7, 'detailquest_id' => $this->dtquestion30, 'answer' => $this->character2_occupation, 'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 7, 'detailquest_id' => $this->dtquestion31, 'answer' => $this->character2_home, 'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 7, 'detailquest_id' => $this->dtquestion32, 'answer' => $this->character2_personality,'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 7, 'detailquest_id' => $this->dtquestion33, 'answer' => $this->character2_role, 'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 7, 'detailquest_id' => $this->dtquestion34, 'answer' => $this->character2_notes, 'status' => 'completed', 'complete_date' => now()],
            ];
            $id = array();
            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 7)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                foreach ($data as $key => $value) {
                    $id[] = WorkbookResponse::insertGetId(
                        ['workbook_id' => $value['workbook_id'], 'user_id' => $value['user_id'], 'question_id' => $value['question_id'], 'detailquest_id' => $value['detailquest_id'], 'answer' => $value['answer'], 'status' => $value['status'], 'complete_date' => $value['complete_date']]
                    );
                }
            } else {
                $answerdata = [
                    $this->character1_name,
                    $this->character1_age,
                    $this->character1_occupation,
                    $this->character1_home,
                    $this->character1_personality,
                    $this->character1_role,
                    $this->character1_notes,
                    $this->character2_name,
                    $this->character2_age,
                    $this->character2_occupation,
                    $this->character2_home,
                    $this->character2_personality,
                    $this->character2_role,
                    $this->character2_notes,
                ];
                $questid = [
                    ['question_id' => 7],
                    ['question_id' => 7],
                    ['question_id' => 7],
                    ['question_id' => 7],
                    ['question_id' => 7],
                    ['question_id' => 7],
                    ['question_id' => 7],
                    ['question_id' => 7],
                    ['question_id' => 7],
                    ['question_id' => 7],
                    ['question_id' => 7],
                    ['question_id' => 7],
                    ['question_id' => 7],
                    ['question_id' => 7],
                ];
                $dtid = [
                    ['detailquest_id' => $this->dtquestion21],
                    ['detailquest_id' => $this->dtquestion22],
                    ['detailquest_id' => $this->dtquestion23],
                    ['detailquest_id' => $this->dtquestion24],
                    ['detailquest_id' => $this->dtquestion25],
                    ['detailquest_id' => $this->dtquestion26],
                    ['detailquest_id' => $this->dtquestion27],
                    ['detailquest_id' => $this->dtquestion28],
                    ['detailquest_id' => $this->dtquestion29],
                    ['detailquest_id' => $this->dtquestion30],
                    ['detailquest_id' => $this->dtquestion31],
                    ['detailquest_id' => $this->dtquestion32],
                    ['detailquest_id' => $this->dtquestion33],
                    ['detailquest_id' => $this->dtquestion34],
                ];

                for ($i = 0; $i <= 13; $i++) {
                    WorkbookResponse::where(['question_id' => $questid[$i]])->where('detailquest_id', $dtid[$i])->where('user_id', Auth::user()->id)
                        ->update(['answer' => $answerdata[$i]]);
                }

            }
        } elseif ($this->currentstep ==4) {
            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 8)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::create([
                    'workbook_id' => 1,
                    'user_id' => Auth::user()->id,
                    'question_id' => 8,
                    'status' => 'completed',
                    'complete_date' => now(),
                ]);
                return response()->json(['status' => 'Success', 'message' => 'response save Qs 8'], 200);
            }
        } elseif ($this->currentstep ==5) {
            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 9)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::create([
                    'workbook_id' => 1,
                    'user_id' => Auth::user()->id,
                    'question_id' => 9,
                    'status' => 'completed',
                    'complete_date' => now(),
                ]);
                return response()->json(['status' => 'Success', 'message' => 'response save Qs 9'], 200);
            }
        } elseif ($this->currentstep == 6) {
            $this->validate([
                'checkbox35'=>'required|array',
                'checkbox36'=>'required|array',
                'checkbox37'=>'required|array',
                'checkbox38'=>'required|array',
                'checkbox39'=>'required|array',
                'checkbox40'=>'required|array',
                'checkbox41'=>'required|array',
                'checkbox42'=>'required|array',
                'checkbox43'=>'required|array',
                'checkbox44'=>'required|array',
                'checkbox45'=>'required|array',
                'checkbox46'=>'required|array',
                'checkbox47'=>'required|array',
                'checkbox48'=>'required|array',
                'checkbox49'=>'required|array',
                'checkbox50'=>'required|array',
                'checkbox51'=>'required|array',
                'checkbox52'=>'required|array',
                'checkbox53'=>'required|array',
                'checkbox54'=>'required|array',
                'checkbox55'=>'required|array',
                'checkbox56'=>'required|array',
                'checkbox57'=>'required|array',
                'checkbox58'=>'required|array',
                'checkbox59'=>'required|array',
            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 10)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion35, 'answer' => json_encode($this->checkbox35), 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion36, 'answer' => json_encode($this->checkbox36), 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion37, 'answer' => json_encode($this->checkbox37),  'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion38, 'answer' => json_encode($this->checkbox38),  'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion39, 'answer' => json_encode($this->checkbox39), 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion40, 'answer' => json_encode($this->checkbox40), 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion41, 'answer' => json_encode($this->checkbox41),  'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion42, 'answer' => json_encode($this->checkbox42),  'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion43, 'answer' => json_encode($this->checkbox43),  'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion44, 'answer' => json_encode($this->checkbox44), 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion45, 'answer' => json_encode($this->checkbox45),  'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion46, 'answer' => json_encode($this->checkbox46),  'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion47, 'answer' => json_encode($this->checkbox47),  'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion48, 'answer' => json_encode($this->checkbox48), 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion49, 'answer' => json_encode($this->checkbox49),  'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion50, 'answer' => json_encode($this->checkbox50),  'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion51, 'answer' => json_encode($this->checkbox51),  'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion52, 'answer' => json_encode($this->checkbox52), 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion53, 'answer' => json_encode($this->checkbox53),  'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion54, 'answer' => json_encode($this->checkbox54),  'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion55, 'answer' => json_encode($this->checkbox55), 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion56, 'answer' => json_encode($this->checkbox56), 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion57, 'answer' => json_encode($this->checkbox57),  'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion58, 'answer' => json_encode($this->checkbox58),  'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 10, 'detailquest_id' => $this->dtquestion59, 'answer' => json_encode($this->checkbox59),  'status' => 'completed', 'complete_date' => now()],
                    
                ]);
            } else {
                $answerdata = [
                    $this->checkbox35,
                    $this->checkbox36,
                    $this->checkbox37,
                    $this->checkbox38,
                    $this->checkbox39,
                    $this->checkbox40,
                    $this->checkbox41,
                    $this->checkbox42,
                    $this->checkbox43,
                    $this->checkbox44,
                    $this->checkbox45,
                    $this->checkbox46,
                    $this->checkbox47,
                    $this->checkbox48,
                    $this->checkbox49,
                    $this->checkbox50,
                    $this->checkbox51,
                    $this->checkbox52,
                    $this->checkbox53,
                    $this->checkbox54,
                    $this->checkbox55,
                    $this->checkbox56,
                    $this->checkbox57,
                    $this->checkbox58,
                    $this->checkbox59,
                ];

                $dtid = [
                    [$this->dtquestion35],
                    [$this->dtquestion36],
                    [$this->dtquestion37],
                    [$this->dtquestion38],
                    [$this->dtquestion39],
                    [$this->dtquestion40],
                    [$this->dtquestion41],
                    [$this->dtquestion42],
                    [$this->dtquestion43],
                    [$this->dtquestion44],
                    [$this->dtquestion45],
                    [$this->dtquestion46],
                    [$this->dtquestion47],
                    [$this->dtquestion48],
                    [$this->dtquestion49],
                    [$this->dtquestion50],
                    [$this->dtquestion51],
                    [$this->dtquestion52],
                    [$this->dtquestion53],
                    [$this->dtquestion54],
                    [$this->dtquestion55],
                    [$this->dtquestion56],
                    [$this->dtquestion57],
                    [$this->dtquestion58],
                    [$this->dtquestion59],
                ];

                $questid = [
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                    ['question_id' => 10],
                ];
              
                for ($i = 0; $i <= 24; $i++) {
                    WorkbookResponse::where(['question_id' => $questid[$i]])->where('detailquest_id', $dtid[$i])->where('user_id', Auth::user()->id)
                        ->update(['answer' => json_encode($answerdata[$i])]);
                }
            }
        }
    }

    public function submittopic1()
    {
        ShareWorkbook::where('user_id', Auth::user()->id)->where('workbook_id', 1)->where('topic_id', 2)->update(['status' => 'complete', 'complete_date' => now()]);
        return redirect()->route('serviceuser.myworkbook');

    }
    public function render()
    {
        return view('livewire.workbooktopic1')->layoutData(['percent' => $this->percent]);
    }
}
