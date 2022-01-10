<?php

namespace App\Http\Livewire;

use App\Models\ShareWorkbook;
use App\Models\WorkbookResponse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Workbooktopic2 extends Component
{

    public $dtquestion60 = 60;
    public $dtquestion61 = 61;
    public $dtquestion62 = 62;
    public $dtquestion63 = 63;
    public $dtquestion64 = 64;
    public $dtquestion65 = 65;
    public $dtquestion66 = 66;
    public $dtquestion67 = 67;
    public $dtquestion68 = 68;
    public $dtquestion69 = 69;

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

    public $dtquestion70 = 70;
    public $dtquestion71 = 71;
    public $dtquestion72 = 72;
    public $dtquestion73 = 73;
    public $dtquestion74 = 74;
    public $dtquestion75 = 75;
    public $dtquestion76 = 76;
    public $dtquestion77 = 77;
    public $dtquestion78 = 78;
    public $dtquestion79 = 79;
    public $dtquestion80 = 80;
    public $dtquestion81 = 81;
    public $dtquestion82 = 82;
    public $dtquestion83 = 83;
    public $dtquestion84 = 84;
    public $dtquestion85 = 85;
    public $dtquestion86 = 86;
    public $dtquestion87 = 87;
    public $dtquestion88 = 88;
    public $dtquestion89 = 89;
    public $dtquestion90 = 90;
    public $dtquestion91 = 91;
    public $dtquestion92 = 92;
    public $dtquestion93 = 93;
    public $dtquestion94 = 94;
    public $dtquestion95 = 95;
    public $dtquestion96 = 96;
    public $dtquestion97 = 97;

    public $dtquestion98 = 98;
    public $dtquestion99 = 99;
    public $dtquestion100 = 100;
    public $dtquestion101 = 101;
    public $dtquestion102 = 102;
    public $dtquestion103 = 103;
    public $dtquestion104 = 104;
    public $dtquestion105 = 105;
    public $dtquestion106 = 106;
    public $dtquestion107 = 107;
    public $dtquestion108 = 108;
    public $dtquestion109 = 109;
    public $dtquestion110 = 110;
    public $dtquestion111 = 111;
    public $dtquestion112 = 112;
    public $dtquestion113 = 113;
    public $dtquestion114 = 114;
    public $dtquestion115 = 115;
    public $dtquestion116 = 116;
    public $dtquestion117 = 117;
    public $dtquestion118 = 118;
    public $dtquestion119 = 119;

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

    public $dtquestion120=120;
    public $dtquestion121=121;

    public $heart120;
    public $heart121;

    public $totalSteps = 10;
    public $currentstep = 1;

    public $currstep = 1;
    public $workbookanswer;
    public $percent;

    public function mount()
    {
        $q1 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 11)->where('user_id', Auth::user()->id)->first();
        $q2 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 12)->where('user_id', Auth::user()->id)->first();
        $q3 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 13)->where('user_id', Auth::user()->id)->first();
        $q4 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 14)->where('user_id', Auth::user()->id)->first();
        $q5 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 23)->where('user_id', Auth::user()->id)->first();
        $q6 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 24)->where('user_id', Auth::user()->id)->first();
        $q7 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 25)->where('user_id', Auth::user()->id)->first();
        $q8 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 26)->where('user_id', Auth::user()->id)->first();
        $q9 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 27)->where('user_id', Auth::user()->id)->first();
        if (empty($q1)) {
            $this->currentstep = 1;
        } elseif (empty($q2)) {
            $this->currentstep = 2;
        } elseif (empty($q3)) {
            $this->currentstep = 3;
        } elseif (empty($q4)) {
            $this->currentstep = 4;
        } elseif(empty($q5)) {
            $this->currentstep = 5;
        }elseif (empty($q6)) {
            $this->currentstep = 6;
        } elseif (empty($q7)) {
            $this->currentstep = 7;
        } elseif (empty($q8)) {
            $this->currentstep = 8;
        } elseif(empty($q9)) {
            $this->currentstep = 9;
        }else {
           $this->currentstep = 10; 
        }

        

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

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 11)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::create([
                    'workbook_id' => 1,
                    'user_id' => Auth::user()->id,
                    'question_id' => 11,
                    'status' => 'completed',
                    'complete_date' => now(),
                ]);
                return response()->json(['status' => 'Success', 'message' => 'response save Qs 11'], 200);
            }

        } elseif ($this->currentstep == 2) {
            $this->validate([
                'quiz60' => 'required',
                'quiz61' => 'required',
                'quiz62' => 'required',
                'quiz63' => 'required',
                'quiz64' => 'required',
                'quiz65' => 'required',
                'quiz66' => 'required',
                'quiz67' => 'required',
                'quiz68' => 'required',
                'quiz69' => 'required',
            ]);
            $data = [
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 12, 'detailquest_id' => $this->dtquestion60, 'answer' => $this->quiz60, 'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 12, 'detailquest_id' => $this->dtquestion61, 'answer' => $this->quiz61, 'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 12, 'detailquest_id' => $this->dtquestion62, 'answer' => $this->quiz62, 'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 12, 'detailquest_id' => $this->dtquestion63, 'answer' => $this->quiz63, 'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 12, 'detailquest_id' => $this->dtquestion64, 'answer' => $this->quiz64, 'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 12, 'detailquest_id' => $this->dtquestion65, 'answer' => $this->quiz65, 'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 12, 'detailquest_id' => $this->dtquestion66, 'answer' => $this->quiz66, 'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 12, 'detailquest_id' => $this->dtquestion67, 'answer' => $this->quiz67, 'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 12, 'detailquest_id' => $this->dtquestion68, 'answer' => $this->quiz68, 'status' => 'completed', 'complete_date' => now()],
                ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 12, 'detailquest_id' => $this->dtquestion69, 'answer' => $this->quiz69, 'status' => 'completed', 'complete_date' => now()],
            ];
            $id = array();
            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 12)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                foreach ($data as $key => $value) {
                    $id[] = WorkbookResponse::insertGetId(
                        ['workbook_id' => $value['workbook_id'], 'user_id' => $value['user_id'], 'question_id' => $value['question_id'], 'detailquest_id' => $value['detailquest_id'], 'answer' => $value['answer'], 'status' => $value['status'], 'complete_date' => $value['complete_date']]
                    );
                }
            } else {
                $answerdata = [
                    $this->quiz60,
                    $this->quiz61,
                    $this->quiz62,
                    $this->quiz63,
                    $this->quiz64,
                    $this->quiz65,
                    $this->quiz66,
                    $this->quiz67,
                    $this->quiz68,
                    $this->quiz69,
                ];
                $questid = [
                    ['question_id' => 12],
                    ['question_id' => 12],
                    ['question_id' => 12],
                    ['question_id' => 12],
                    ['question_id' => 12],
                    ['question_id' => 12],
                    ['question_id' => 12],
                    ['question_id' => 12],
                    ['question_id' => 12],
                    ['question_id' => 12],
                    ['question_id' => 12],
                ];
                $dtid = [
                    ['detailquest_id' => $this->dtquestion60],
                    ['detailquest_id' => $this->dtquestion61],
                    ['detailquest_id' => $this->dtquestion62],
                    ['detailquest_id' => $this->dtquestion63],
                    ['detailquest_id' => $this->dtquestion64],
                    ['detailquest_id' => $this->dtquestion65],
                    ['detailquest_id' => $this->dtquestion66],
                    ['detailquest_id' => $this->dtquestion67],
                    ['detailquest_id' => $this->dtquestion68],
                    ['detailquest_id' => $this->dtquestion69],

                ];

                for ($i = 0; $i <= 9; $i++) {
                    WorkbookResponse::where(['question_id' => $questid[$i]])->where('detailquest_id', $dtid[$i])->where('user_id', Auth::user()->id)
                        ->update(['answer' => $answerdata[$i]]);
                }

            }

        } elseif ($this->currentstep == 3) {
            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 13)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::create([
                    'workbook_id' => 1,
                    'user_id' => Auth::user()->id,
                    'question_id' => 13,
                    'status' => 'completed',
                    'complete_date' => now(),
                ]);
                return response()->json(['status' => 'Success', 'message' => 'response save Qs 13'], 200);
            }
        } elseif ($this->currentstep == 4) {
            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 14)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::create([
                    'workbook_id' => 1,
                    'user_id' => Auth::user()->id,
                    'question_id' => 14,
                    'status' => 'completed',
                    'complete_date' => now(),
                ]);
                return response()->json(['status' => 'Success', 'message' => 'response save Qs 14'], 200);
            }
        } elseif ($this->currentstep == 5) {
            $this->validate([
                'radio70' => 'required',
                'radio71' => 'required',
                'radio72' => 'required',
                'radio73' => 'required',
                'radio74' => 'required',
                'radio75' => 'required',
                'radio76' => 'required',
                'radio77' => 'required',
                'radio78' => 'required',
                'radio79' => 'required',
                'radio80' => 'required',
                'radio81' => 'required',
                'radio82' => 'required',
                'radio83' => 'required',
                'radio84' => 'required',
                'radio85' => 'required',
                'radio86' => 'required',
                'radio87' => 'required',
                'radio88' => 'required',
                'radio89' => 'required',
                'radio90' => 'required',
                'radio91' => 'required',
                'radio92' => 'required',
                'radio93' => 'required',
                'radio94' => 'required',
                'radio95' => 'required',
                'radio96' => 'required',
                'radio97' => 'required',
            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 23)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion70, 'answer' => $this->radio70, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion71, 'answer' => $this->radio71, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion72, 'answer' => $this->radio72, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion73, 'answer' => $this->radio73, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion74, 'answer' => $this->radio74, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion75, 'answer' => $this->radio75, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion76, 'answer' => $this->radio76, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion77, 'answer' => $this->radio77, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion78, 'answer' => $this->radio78, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion79, 'answer' => $this->radio79, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion80, 'answer' => $this->radio80, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion81, 'answer' => $this->radio81, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion82, 'answer' => $this->radio82, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion83, 'answer' => $this->radio83, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion84, 'answer' => $this->radio84, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion85, 'answer' => $this->radio85, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion86, 'answer' => $this->radio86, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion87, 'answer' => $this->radio87, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion88, 'answer' => $this->radio88, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion89, 'answer' => $this->radio89, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion90, 'answer' => $this->radio90, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion91, 'answer' => $this->radio91, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion92, 'answer' => $this->radio92, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion93, 'answer' => $this->radio93, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion94, 'answer' => $this->radio94, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion95, 'answer' => $this->radio95, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion96, 'answer' => $this->radio96, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 23, 'detailquest_id' => $this->dtquestion97, 'answer' => $this->radio97, 'status' => 'completed', 'complete_date' => now()],

                ]);
            } else {
                $answerdata = [
                    $this->radio70,
                    $this->radio71,
                    $this->radio72,
                    $this->radio73,
                    $this->radio74,
                    $this->radio75,
                    $this->radio76,
                    $this->radio77,
                    $this->radio78,
                    $this->radio79,
                    $this->radio80,
                    $this->radio81,
                    $this->radio82,
                    $this->radio83,
                    $this->radio84,
                    $this->radio85,
                    $this->radio86,
                    $this->radio87,
                    $this->radio88,
                    $this->radio89,
                    $this->radio90,
                    $this->radio91,
                    $this->radio92,
                    $this->radio93,
                    $this->radio94,
                    $this->radio95,
                    $this->radio96,
                    $this->radio97,

                ];

                $dtid = [
                    [$this->dtquestion70],
                    [$this->dtquestion71],
                    [$this->dtquestion72],
                    [$this->dtquestion73],
                    [$this->dtquestion74],
                    [$this->dtquestion75],
                    [$this->dtquestion76],
                    [$this->dtquestion77],
                    [$this->dtquestion78],
                    [$this->dtquestion79],
                    [$this->dtquestion80],
                    [$this->dtquestion81],
                    [$this->dtquestion82],
                    [$this->dtquestion83],
                    [$this->dtquestion84],
                    [$this->dtquestion85],
                    [$this->dtquestion86],
                    [$this->dtquestion87],
                    [$this->dtquestion88],
                    [$this->dtquestion89],
                    [$this->dtquestion90],
                    [$this->dtquestion91],
                    [$this->dtquestion92],
                    [$this->dtquestion93],
                    [$this->dtquestion94],
                    [$this->dtquestion95],
                    [$this->dtquestion96],
                    [$this->dtquestion97],

                ];

                $questid = [
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],
                    ['question_id' => 23],

                ];
                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 23)->where('user_id', Auth::user()->id)->pluck('id')->toArray();
                // dd($responseid);
                for ($i = 0; $i <= 27; $i++) {

                    WorkbookResponse::where('workbook_id', 1)->where(['question_id' => $questid[$i]])->where(['id' => $responseid[$i]])->where('user_id', Auth::user()->id)
                        ->update(['answer' => $answerdata[$i]]);

                }
            }
        } elseif ($this->currentstep == 6) {
            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 24)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::create([
                    'workbook_id' => 1,
                    'user_id' => Auth::user()->id,
                    'question_id' => 24,
                    'status' => 'completed',
                    'complete_date' => now(),
                ]);
                return response()->json(['status' => 'Success', 'message' => 'response save Qs 24'], 200);
            }
        } elseif ($this->currentstep == 7) {
            // dd($this->healthy_unhealthy98);
            $this->validate([
                'agree98' => 'required',
                'agree99' => 'required',
                'agree100' => 'required',
                'agree101' => 'required',
                'agree102' => 'required',
                'agree103' => 'required',
                'agree104' => 'required',
                'agree105' => 'required',
                'agree106' => 'required',
                'agree107' => 'required',
                'agree108' => 'required',
                'agree109' => 'required',
                'agree110' => 'required',
                'agree111' => 'required',
                'agree112' => 'required',
                'agree113' => 'required',
                'agree114' => 'required',
                'agree115' => 'required',
                'agree116' => 'required',
                'agree117' => 'required',
                'agree118' => 'required',
                'agree119' => 'required',

                'healthy_unhealthy98' => 'required',
                'healthy_unhealthy99' => 'required',
                'healthy_unhealthy100' => 'required',
                'healthy_unhealthy101' => 'required',
                'healthy_unhealthy102' => 'required',
                'healthy_unhealthy103' => 'required',
                'healthy_unhealthy104' => 'required',
                'healthy_unhealthy105' => 'required',
                'healthy_unhealthy106' => 'required',
                'healthy_unhealthy107' => 'required',
                'healthy_unhealthy108' => 'required',
                'healthy_unhealthy109' => 'required',
                'healthy_unhealthy110' => 'required',
                'healthy_unhealthy111' => 'required',
                'healthy_unhealthy112' => 'required',
                'healthy_unhealthy113' => 'required',
                'healthy_unhealthy114' => 'required',
                'healthy_unhealthy115' => 'required',
                'healthy_unhealthy116' => 'required',
                'healthy_unhealthy117' => 'required',
                'healthy_unhealthy118' => 'required',
                'healthy_unhealthy119' => 'required',

            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 25)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion98,  'answer' => $this->agree98, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion99,  'answer' => $this->agree99, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion100, 'answer' => $this->agree100, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion101, 'answer' => $this->agree101, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion102, 'answer' => $this->agree102, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion103, 'answer' => $this->agree103, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion104, 'answer' => $this->agree104, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion105, 'answer' => $this->agree105, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion106, 'answer' => $this->agree106, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion107, 'answer' => $this->agree107, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion108, 'answer' => $this->agree108, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion109, 'answer' => $this->agree109, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion110, 'answer' => $this->agree110, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion111, 'answer' => $this->agree111, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion112, 'answer' => $this->agree112, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion113, 'answer' => $this->agree113, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion114, 'answer' => $this->agree114, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion115, 'answer' => $this->agree115, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion116, 'answer' => $this->agree116, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion117, 'answer' => $this->agree117, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion118, 'answer' => $this->agree118, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion119, 'answer' => $this->agree119, 'status' => 'completed', 'complete_date' => now()],

                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion98,  'answer' => $this->healthy_unhealthy98, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion99,  'answer' => $this->healthy_unhealthy99, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion100, 'answer' => $this->healthy_unhealthy100, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion101, 'answer' => $this->healthy_unhealthy101, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion102, 'answer' => $this->healthy_unhealthy102, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion103, 'answer' => $this->healthy_unhealthy103, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion104, 'answer' => $this->healthy_unhealthy104, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion105, 'answer' => $this->healthy_unhealthy105, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion106, 'answer' => $this->healthy_unhealthy106, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion107, 'answer' => $this->healthy_unhealthy107, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion108, 'answer' => $this->healthy_unhealthy108, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion109, 'answer' => $this->healthy_unhealthy109, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion110, 'answer' => $this->healthy_unhealthy110, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion111, 'answer' => $this->healthy_unhealthy111, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion112, 'answer' => $this->healthy_unhealthy112, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion113, 'answer' => $this->healthy_unhealthy113, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion114, 'answer' => $this->healthy_unhealthy114, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion115, 'answer' => $this->healthy_unhealthy115, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion116, 'answer' => $this->healthy_unhealthy116, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion117, 'answer' => $this->healthy_unhealthy117, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion118, 'answer' => $this->healthy_unhealthy118, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 25, 'detailquest_id' => $this->dtquestion119, 'answer' => $this->healthy_unhealthy119, 'status' => 'completed', 'complete_date' => now()],
                ]);
            } else {
                $answerdata = [
                    $this->agree98,
                    $this->agree99,
                    $this->agree100,
                    $this->agree101,
                    $this->agree102,
                    $this->agree103,
                    $this->agree104,
                    $this->agree105,
                    $this->agree106,
                    $this->agree107,
                    $this->agree108,
                    $this->agree109,
                    $this->agree110,
                    $this->agree111,
                    $this->agree112,
                    $this->agree113,
                    $this->agree114,
                    $this->agree115,
                    $this->agree116,
                    $this->agree117,
                    $this->agree118,
                    $this->agree119,

                    $this->healthy_unhealthy98,
                    $this->healthy_unhealthy99,
                    $this->healthy_unhealthy100,
                    $this->healthy_unhealthy101,
                    $this->healthy_unhealthy102,
                    $this->healthy_unhealthy103,
                    $this->healthy_unhealthy104,
                    $this->healthy_unhealthy105,
                    $this->healthy_unhealthy106,
                    $this->healthy_unhealthy107,
                    $this->healthy_unhealthy108,
                    $this->healthy_unhealthy109,
                    $this->healthy_unhealthy110,
                    $this->healthy_unhealthy111,
                    $this->healthy_unhealthy112,
                    $this->healthy_unhealthy113,
                    $this->healthy_unhealthy114,
                    $this->healthy_unhealthy115,
                    $this->healthy_unhealthy116,
                    $this->healthy_unhealthy117,
                    $this->healthy_unhealthy118,
                    $this->healthy_unhealthy119,
                ];

                $dtid = [
                    [$this->dtquestion98],
                    [$this->dtquestion99],
                    [$this->dtquestion100],
                    [$this->dtquestion101],
                    [$this->dtquestion102],
                    [$this->dtquestion103],
                    [$this->dtquestion104],
                    [$this->dtquestion105],
                    [$this->dtquestion106],
                    [$this->dtquestion107],
                    [$this->dtquestion108],
                    [$this->dtquestion109],
                    [$this->dtquestion110],
                    [$this->dtquestion111],
                    [$this->dtquestion112],
                    [$this->dtquestion113],
                    [$this->dtquestion114],
                    [$this->dtquestion115],
                    [$this->dtquestion116],
                    [$this->dtquestion117],
                    [$this->dtquestion118],
                    [$this->dtquestion119],

                ];

               
                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 25)->where('user_id', Auth::user()->id)->pluck('id')->toArray();
                // dd($responseid);
                for ($i = 0; $i <= 43; $i++) {

                    WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 25])->where(['id' => $responseid[$i]])->where('user_id', Auth::user()->id)
                        ->update(['answer' => $answerdata[$i]]);

                }
            }
        } elseif ($this->currentstep == 8) {
            $this->validate([
                'heart120' => 'required',
                'heart121' => 'required',
                
            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 26)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 26, 'detailquest_id' => $this->dtquestion120,  'answer' => $this->heart120, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 26, 'detailquest_id' => $this->dtquestion121,  'answer' => $this->heart121, 'status' => 'completed', 'complete_date' => now()],
                    
                ]);
            } else {
                $answerdata = [
                    $this->heart120,
                    $this->heart121,
                   
                ];

                $dtid = [
                    [$this->dtquestion120],
                    [$this->dtquestion121],
                  
                ];

               
                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 26)->where('user_id', Auth::user()->id)->pluck('id')->toArray();
                // dd($responseid);
                for ($i = 0; $i <= 1; $i++) {

                    WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 26])->where(['id' => $responseid[$i]])->where('user_id', Auth::user()->id)
                        ->update(['answer' => $answerdata[$i]]);

                }
            }
        } elseif ($this->currentstep == 9) {
            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 27)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::create([
                    'workbook_id' => 1,
                    'user_id' => Auth::user()->id,
                    'question_id' => 27,
                    'status' => 'completed',
                    'complete_date' => now(),
                ]);
                return response()->json(['status' => 'Success', 'message' => 'response save Qs 27'], 200);
            }
        }
    }

    public function submittopic2()
    {
        ShareWorkbook::where('user_id', Auth::user()->id)->where('workbook_id', 1)->where('topic_id', 4)->update(['status' => 'complete', 'complete_date' => now()]);
        return redirect()->route('serviceuser.myworkbook');

    }

    public function render()
    {
        return view('livewire.workbooktopic2')->layoutData(['percent' => $this->percent]);
    }
}
