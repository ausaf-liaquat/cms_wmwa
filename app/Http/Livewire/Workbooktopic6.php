<?php

namespace App\Http\Livewire;
use App\Models\ShareWorkbook;
use App\Models\WorkbookResponse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Workbooktopic6 extends Component
{
    public $dtquestion204=204;
    public $dtquestion205=205;

    public $dtquestion206=206;
    public $dtquestion207=207;
    public $dtquestion208=208;
    public $dtquestion209=209;
    public $dtquestion210=210;
    public $dtquestion211=211;
    public $dtquestion212=212;
    public $dtquestion213=213;
    public $dtquestion214=214;
    public $dtquestion215=215;
    public $dtquestion216=216;
    public $dtquestion217=217;
    public $dtquestion218=218;
    public $dtquestion219=219;
    public $dtquestion220=220;
    public $dtquestion221=221;
    public $dtquestion222=222;
    public $dtquestion223=223;
    public $dtquestion224=224;
    public $dtquestion225=225;
    public $dtquestion226=226;
    public $dtquestion227=227;
    public $dtquestion228=228;
    public $dtquestion229=229;
    public $dtquestion230=230;

    public $dtquestion231=231;
    public $dtquestion232=232;
    public $dtquestion233=233;
    public $dtquestion234=234;
    public $dtquestion235=235;
    public $dtquestion236=236;


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
    public function mount()
    {
        $this->currentstep=4;
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

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 50)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::create([
                    'workbook_id' => 1,
                    'user_id' => Auth::user()->id,
                    'question_id' => 50,
                    'status' => 'completed',
                    'complete_date' => now(),
                ]);
                return response()->json(['status' => 'Success', 'message' => 'response save Qs 50'], 200);
            }

        } elseif ($this->currentstep == 2) {
            $this->validate([
                'comment204' => 'required',
                'comment205' => 'required',
            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 51)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 51, 'detailquest_id' => $this->dtquestion204, 'answer' => $this->comment204, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 51, 'detailquest_id' => $this->dtquestion205, 'answer' => $this->comment205, 'status' => 'completed', 'complete_date' => now()],
                ]);
            } else {

                $answerdata = [
                    $this->comment204,
                    $this->comment205,
                ];

                $dtid = [
                    [$this->dtquestion204],
                    [$this->dtquestion205],
                ];

                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 51)->where('user_id', Auth::user()->id)->pluck('id')->toArray();
                // dd($responseid);
                for ($i = 0; $i <= 1; $i++) {

                    WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 51])->where(['id' => $responseid[$i]])->where('user_id', Auth::user()->id)
                        ->update(['answer' => $answerdata[$i]]);

                }

            }
        } elseif ($this->currentstep == 3) {

            $this->validate([
                'agree206'=>'required',
                'agree207'=>'required',
                'agree208'=>'required',
                'agree209'=>'required',
                'agree210'=>'required',
                'agree211'=>'required',
                'agree212'=>'required',
                'agree213'=>'required',
                'agree214'=>'required',
                'agree215'=>'required',
                'agree216'=>'required',
                'agree217'=>'required',
                'agree218'=>'required',
                'agree219'=>'required',
                'agree220'=>'required',
                'agree221'=>'required',
                'agree222'=>'required',
                'agree223'=>'required',
                'agree224'=>'required',
                'agree225'=>'required',
                'agree226'=>'required',
                'agree227'=>'required',
                'agree228'=>'required',
                'agree229'=>'required',
                'agree230'=>'required',

                'healthy_harmful206'=>'required',
                'healthy_harmful207'=>'required',
                'healthy_harmful208'=>'required',
                'healthy_harmful209'=>'required',
                'healthy_harmful210'=>'required',
                'healthy_harmful211'=>'required',
                'healthy_harmful212'=>'required',
                'healthy_harmful213'=>'required',
                'healthy_harmful214'=>'required',
                'healthy_harmful215'=>'required',
                'healthy_harmful216'=>'required',
                'healthy_harmful217'=>'required',
                'healthy_harmful218'=>'required',
                'healthy_harmful219'=>'required',
                'healthy_harmful220'=>'required',
                'healthy_harmful221'=>'required',
                'healthy_harmful222'=>'required',
                'healthy_harmful223'=>'required',
                'healthy_harmful224'=>'required',
                'healthy_harmful225'=>'required',
                'healthy_harmful226'=>'required',
                'healthy_harmful227'=>'required',
                'healthy_harmful228'=>'required',
                'healthy_harmful229'=>'required',
                'healthy_harmful230'=>'required',
            ]);
            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 52)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion206, 'answer' => $this->agree206, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion207, 'answer' => $this->agree207, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion208, 'answer' => $this->agree208, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion209, 'answer' => $this->agree209, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion210, 'answer' => $this->agree210, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion211, 'answer' => $this->agree211, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion212, 'answer' => $this->agree212, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion213, 'answer' => $this->agree213, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion214, 'answer' => $this->agree214, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion215, 'answer' => $this->agree215, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion216, 'answer' => $this->agree216, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion217, 'answer' => $this->agree217, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion218, 'answer' => $this->agree218, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion219, 'answer' => $this->agree219, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion220, 'answer' => $this->agree220, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion221, 'answer' => $this->agree221, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion222, 'answer' => $this->agree222, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion223, 'answer' => $this->agree223, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion224, 'answer' => $this->agree224, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion225, 'answer' => $this->agree225, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion226, 'answer' => $this->agree226, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion227, 'answer' => $this->agree227, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion228, 'answer' => $this->agree228, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion229, 'answer' => $this->agree229, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion230, 'answer' => $this->agree230, 'status' => 'completed', 'complete_date' => now()],


                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion206, 'answer' => $this->healthy_harmful206, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion207, 'answer' => $this->healthy_harmful207, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion208, 'answer' => $this->healthy_harmful208, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion209, 'answer' => $this->healthy_harmful209, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion210, 'answer' => $this->healthy_harmful210, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion211, 'answer' => $this->healthy_harmful211, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion212, 'answer' => $this->healthy_harmful212, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion213, 'answer' => $this->healthy_harmful213, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion214, 'answer' => $this->healthy_harmful214, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion215, 'answer' => $this->healthy_harmful215, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion216, 'answer' => $this->healthy_harmful216, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion217, 'answer' => $this->healthy_harmful217, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion218, 'answer' => $this->healthy_harmful218, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion219, 'answer' => $this->healthy_harmful219, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion220, 'answer' => $this->healthy_harmful220, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion221, 'answer' => $this->healthy_harmful221, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion222, 'answer' => $this->healthy_harmful222, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion223, 'answer' => $this->healthy_harmful223, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion224, 'answer' => $this->healthy_harmful224, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion225, 'answer' => $this->healthy_harmful225, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion226, 'answer' => $this->healthy_harmful226, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion227, 'answer' => $this->healthy_harmful227, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion228, 'answer' => $this->healthy_harmful228, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion229, 'answer' => $this->healthy_harmful229, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 52, 'detailquest_id' => $this->dtquestion230, 'answer' => $this->healthy_harmful230, 'status' => 'completed', 'complete_date' => now()],
                ]);
            } else {
                $answerdata = [
                    $this->agree206,
                    $this->agree207,
                    $this->agree208,
                    $this->agree209,
                    $this->agree210,
                    $this->agree211,
                    $this->agree212,
                    $this->agree213,
                    $this->agree214,
                    $this->agree215,
                    $this->agree216,
                    $this->agree217,
                    $this->agree218,
                    $this->agree219,
                    $this->agree220,
                    $this->agree221,
                    $this->agree222,
                    $this->agree223,
                    $this->agree224,
                    $this->agree225,
                    $this->agree226,
                    $this->agree227,
                    $this->agree228,
                    $this->agree229,
                    $this->agree230,
                    $this->healthy_harmful206,
                    $this->healthy_harmful207,
                    $this->healthy_harmful208,
                    $this->healthy_harmful209,
                    $this->healthy_harmful210,
                    $this->healthy_harmful211,
                    $this->healthy_harmful212,
                    $this->healthy_harmful213,
                    $this->healthy_harmful214,
                    $this->healthy_harmful215,
                    $this->healthy_harmful216,
                    $this->healthy_harmful217,
                    $this->healthy_harmful218,
                    $this->healthy_harmful219,
                    $this->healthy_harmful220,
                    $this->healthy_harmful221,
                    $this->healthy_harmful222,
                    $this->healthy_harmful223,
                    $this->healthy_harmful224,
                    $this->healthy_harmful225,
                    $this->healthy_harmful226,
                    $this->healthy_harmful227,
                    $this->healthy_harmful228,
                    $this->healthy_harmful229,
                    $this->healthy_harmful230,
                ];

                $dtid = [
                    [$this->dtquestion206],
                    [$this->dtquestion207],
                    [$this->dtquestion208],
                    [$this->dtquestion209],
                    [$this->dtquestion210],
                    [$this->dtquestion211],
                    [$this->dtquestion212],
                    [$this->dtquestion213],
                    [$this->dtquestion214],
                    [$this->dtquestion215],
                    [$this->dtquestion216],
                    [$this->dtquestion217],
                    [$this->dtquestion218],
                    [$this->dtquestion219],
                    [$this->dtquestion220],
                    [$this->dtquestion221],
                    [$this->dtquestion222],
                    [$this->dtquestion223],
                    [$this->dtquestion224],
                    [$this->dtquestion225],
                    [$this->dtquestion226],
                    [$this->dtquestion227],
                    [$this->dtquestion228],
                    [$this->dtquestion229],
                    [$this->dtquestion230],
                ];

                
                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 52)->where('user_id', Auth::user()->id)->pluck('id')->toArray();
                // dd($responseid);
                for ($i = 0; $i <= 49; $i++) {

                    WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 52])->where(['id' => $responseid[$i]])->where('user_id', Auth::user()->id)
                        ->update(['answer' => $answerdata[$i]]);

                }
            }
        } elseif ($this->currentstep == 4) {
            $this->validate([
                'mindfulness231' => 'required',
                'mindfulness232' => 'required',
                'mindfulness233' => 'required',
                'mindfulness234' => 'required',
                'mindfulness235' => 'required',
                'mindfulness236' => 'required',
            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 53)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 53, 'detailquest_id' => $this->dtquestion231, 'answer' => $this->mindfulness231, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 53, 'detailquest_id' => $this->dtquestion232, 'answer' => $this->mindfulness232, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 53, 'detailquest_id' => $this->dtquestion233, 'answer' => $this->mindfulness233, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 53, 'detailquest_id' => $this->dtquestion234, 'answer' => $this->mindfulness234, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 53, 'detailquest_id' => $this->dtquestion235, 'answer' => $this->mindfulness235, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 53, 'detailquest_id' => $this->dtquestion236, 'answer' => $this->mindfulness236, 'status' => 'completed', 'complete_date' => now()],
                ]);
            } else {

                $answerdata = [
                    $this->mindfulness231,
                    $this->mindfulness232,
                    $this->mindfulness233,
                    $this->mindfulness234,
                    $this->mindfulness235,
                    $this->mindfulness236,

                ];

                $dtid = [
                    [$this->dtquestion231],
                    [$this->dtquestion232],
                    [$this->dtquestion233],
                    [$this->dtquestion234],
                    [$this->dtquestion235],
                    [$this->dtquestion236],
                ];

                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 53)->where('user_id', Auth::user()->id)->pluck('id')->toArray();
                // dd($responseid);
                for ($i = 0; $i <= 5; $i++) {

                    WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 53])->where(['id' => $responseid[$i]])->where('user_id', Auth::user()->id)
                        ->update(['answer' => $answerdata[$i]]);

                }

            }
        }
    }

    public function submittopic6()
    {
        ShareWorkbook::where('user_id', Auth::user()->id)->where('workbook_id', 1)->where('topic_id', 12)->update(['status' => 'complete', 'complete_date' => now()]);
        return redirect()->route('serviceuser.myworkbook');

    }
    public function render()
    {
        return view('livewire.workbooktopic6');
    }
}
