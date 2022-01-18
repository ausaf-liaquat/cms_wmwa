<?php

namespace App\Http\Livewire;
use App\Models\ShareWorkbook;
use App\Models\WorkbookResponse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Workbooktopic7 extends Component
{
    public $date262;
    public $what263;
    public $feel264;
    public $ant265;
    public $bat266;
    public $date267;
    public $what268;
    public $feel269;
    public $ant270;
    public $bat271;
    public $date272;
    public $what273;
    public $feel274;
    public $ant275;
    public $bat276;
    public $date277;
    public $what278;
    public $feel279;
    public $ant280;
    public $bat281;
    public $date282;
    public $what283;
    public $feel284;
    public $ant285;
    public $bat286;

    public $connect287;
    public $connect288;
    public $active289;
    public $active290;
    public $notice291;
    public $notice292;
    public $learn293;
    public $learn294;
    public $give295;
    public $give296;

    public $sentence297;
    public $sentence298;
    public $sentence299;
    public $sentence300;
    public $sentence301;
    public $sentence302;
    public $sentence303;
    public $sentence304;
    public $sentence305;
    public $sentence306;
    public $sentence307;
    public $sentence308;
    public $sentence309;
    public $sentence310;
    public $sentence311;
    public $sentence312;
    public $sentence313;
    public $sentence314;
    public $sentence315;
    public $sentence316;
    public $sentence317;

    public $affirmation318;
    public $affirmation319;
    public $affirmation320;
    public $affirmation321;
    public $affirmation322;
    public $affirmation323;
    public $affirmation324;
    public $affirmation325;
    public $affirmation326;
    public $affirmation327;

    public $tree328;
    public $tree329;
    public $tree330;

    public $dtquestion262 = 262;
    public $dtquestion263 = 263;
    public $dtquestion264 = 264;
    public $dtquestion265 = 265;
    public $dtquestion266 = 266;
    public $dtquestion267 = 267;
    public $dtquestion268 = 268;
    public $dtquestion269 = 269;
    public $dtquestion270 = 270;
    public $dtquestion271 = 271;
    public $dtquestion272 = 272;
    public $dtquestion273 = 273;
    public $dtquestion274 = 274;
    public $dtquestion275 = 275;
    public $dtquestion276 = 276;
    public $dtquestion277 = 277;
    public $dtquestion278 = 278;
    public $dtquestion279 = 279;
    public $dtquestion280 = 280;
    public $dtquestion281 = 281;
    public $dtquestion282 = 282;
    public $dtquestion283 = 283;
    public $dtquestion284 = 284;
    public $dtquestion285 = 285;
    public $dtquestion286 = 286;

    public $dtquestion287 = 287;
    public $dtquestion288 = 288;
    public $dtquestion289 = 289;
    public $dtquestion290 = 290;
    public $dtquestion291 = 291;
    public $dtquestion292 = 292;
    public $dtquestion293 = 293;
    public $dtquestion294 = 294;
    public $dtquestion295 = 295;
    public $dtquestion296 = 296;

    public $dtquestion297 = 297;
    public $dtquestion298 = 298;
    public $dtquestion299 = 299;
    public $dtquestion300 = 300;
    public $dtquestion301 = 301;
    public $dtquestion302 = 302;
    public $dtquestion303 = 303;
    public $dtquestion304 = 304;
    public $dtquestion305 = 305;
    public $dtquestion306 = 306;
    public $dtquestion307 = 307;
    public $dtquestion308 = 308;
    public $dtquestion309 = 309;
    public $dtquestion310 = 310;
    public $dtquestion311 = 311;
    public $dtquestion312 = 312;
    public $dtquestion313 = 313;
    public $dtquestion314 = 314;
    public $dtquestion315 = 315;
    public $dtquestion316 = 316;
    public $dtquestion317 = 317;

    public $dtquestion318 = 318;
    public $dtquestion319 = 319;
    public $dtquestion320 = 320;
    public $dtquestion321 = 321;
    public $dtquestion322 = 322;
    public $dtquestion323 = 323;
    public $dtquestion324 = 324;
    public $dtquestion325 = 325;
    public $dtquestion326 = 326;
    public $dtquestion327 = 327;

    public $dtquestion328 = 328;
    public $dtquestion329 = 329;
    public $dtquestion330 = 330;

    public $totalSteps = 7;
    public $currentstep = 1;

    public $currstep = 1;
    public $workbookanswer;
    public $percent;

    public function mount()
    {
        $this->currentstep = 6;
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

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 54)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::create([
                    'workbook_id' => 1,
                    'user_id' => Auth::user()->id,
                    'question_id' => 54,
                    'status' => 'completed',
                    'complete_date' => now(),
                ]);
                return response()->json(['status' => 'Success', 'message' => 'response save Qs 54'], 200);
            }

        } elseif ($this->currentstep == 2) {
            $this->validate([
                'date262' => 'required',
                'what263' => 'required',
                'feel264' => 'required',
                'ant265' => 'required',
                'bat266' => 'required',
                'date267' => 'required',
                'what268' => 'required',
                'feel269' => 'required',
                'ant270' => 'required',
                'bat271' => 'required',
                'date272' => 'required',
                'what273' => 'required',
                'feel274' => 'required',
                'ant275' => 'required',
                'bat276' => 'required',
                'date277' => 'required',
                'what278' => 'required',
                'feel279' => 'required',
                'ant280' => 'required',
                'bat281' => 'required',
                'date282' => 'required',
                'what283' => 'required',
                'feel284' => 'required',
                'ant285' => 'required',
                'bat286' => 'required',
            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 55)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion262, 'answer' => $this->date262, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion263, 'answer' => $this->what263, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion264, 'answer' => $this->feel264, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion265, 'answer' => $this->ant265, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion266, 'answer' => $this->bat266, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion267, 'answer' => $this->date267, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion268, 'answer' => $this->what268, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion269, 'answer' => $this->feel269, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion270, 'answer' => $this->ant270, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion271, 'answer' => $this->bat271, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion272, 'answer' => $this->date272, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion273, 'answer' => $this->what273, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion274, 'answer' => $this->feel274, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion275, 'answer' => $this->ant275, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion276, 'answer' => $this->bat276, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion277, 'answer' => $this->date277, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion278, 'answer' => $this->what278, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion279, 'answer' => $this->feel279, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion280, 'answer' => $this->ant280, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion281, 'answer' => $this->bat281, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion282, 'answer' => $this->date282, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion283, 'answer' => $this->what283, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion284, 'answer' => $this->feel284, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion285, 'answer' => $this->ant285, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 55, 'detailquest_id' => $this->dtquestion286, 'answer' => $this->bat286, 'status' => 'completed', 'complete_date' => now()],
                ]);
            } else {

                $answerdata = [
                    $this->date262,
                    $this->what263,
                    $this->feel264,
                    $this->ant265,
                    $this->bat266,
                    $this->date267,
                    $this->what268,
                    $this->feel269,
                    $this->ant270,
                    $this->bat271,
                    $this->date272,
                    $this->what273,
                    $this->feel274,
                    $this->ant275,
                    $this->bat276,
                    $this->date277,
                    $this->what278,
                    $this->feel279,
                    $this->ant280,
                    $this->bat281,
                    $this->date282,
                    $this->what283,
                    $this->feel284,
                    $this->ant285,
                    $this->bat286,
                ];

                $dtid = [
                    [$this->dtquestion262],
                    [$this->dtquestion263],
                    [$this->dtquestion264],
                    [$this->dtquestion265],
                    [$this->dtquestion266],
                    [$this->dtquestion267],
                    [$this->dtquestion268],
                    [$this->dtquestion269],
                    [$this->dtquestion270],
                    [$this->dtquestion271],
                    [$this->dtquestion272],
                    [$this->dtquestion273],
                    [$this->dtquestion274],
                    [$this->dtquestion275],
                    [$this->dtquestion276],
                    [$this->dtquestion277],
                    [$this->dtquestion278],
                    [$this->dtquestion279],
                    [$this->dtquestion280],
                    [$this->dtquestion281],
                    [$this->dtquestion282],
                    [$this->dtquestion283],
                    [$this->dtquestion284],
                    [$this->dtquestion285],
                    [$this->dtquestion286],
                ];

                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 55)->where('user_id', Auth::user()->id)->pluck('id')->toArray();
                // dd($responseid);
                for ($i = 0; $i <= 24; $i++) {

                    WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 55])->where(['id' => $responseid[$i]])->where('user_id', Auth::user()->id)
                        ->update(['answer' => $answerdata[$i]]);

                }

            }
        } elseif ($this->currentstep == 3) {

            $this->validate([
                'connect287' => 'required',
                'connect288' => 'required',
                'active289' => 'required',
                'active290' => 'required',
                'notice291' => 'required',
                'notice292' => 'required',
                'learn293' => 'required',
                'learn294' => 'required',
                'give295' => 'required',
                'give296' => 'required',

            ]);
            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 56)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 56, 'detailquest_id' => $this->dtquestion287, 'answer' => $this->connect287, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 56, 'detailquest_id' => $this->dtquestion288, 'answer' => $this->connect288, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 56, 'detailquest_id' => $this->dtquestion289, 'answer' => $this->active289, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 56, 'detailquest_id' => $this->dtquestion290, 'answer' => $this->active290, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 56, 'detailquest_id' => $this->dtquestion291, 'answer' => $this->notice291, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 56, 'detailquest_id' => $this->dtquestion292, 'answer' => $this->notice292, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 56, 'detailquest_id' => $this->dtquestion293, 'answer' => $this->learn293, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 56, 'detailquest_id' => $this->dtquestion294, 'answer' => $this->learn294, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 56, 'detailquest_id' => $this->dtquestion295, 'answer' => $this->give295, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 56, 'detailquest_id' => $this->dtquestion296, 'answer' => $this->give296, 'status' => 'completed', 'complete_date' => now()],

                ]);
            } else {
                $answerdata = [
                    $this->connect287,
                    $this->connect288,
                    $this->active289,
                    $this->active290,
                    $this->notice291,
                    $this->notice292,
                    $this->learn293,
                    $this->learn294,
                    $this->give295,
                    $this->give296,
                ];

                $dtid = [
                    [$this->dtquestion287],
                    [$this->dtquestion288],
                    [$this->dtquestion289],
                    [$this->dtquestion290],
                    [$this->dtquestion291],
                    [$this->dtquestion292],
                    [$this->dtquestion293],
                    [$this->dtquestion294],
                    [$this->dtquestion295],
                    [$this->dtquestion296],
                ];

                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 56)->where('user_id', Auth::user()->id)->pluck('id')->toArray();
                // dd($responseid);
                for ($i = 0; $i <= 9; $i++) {

                    WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 56])->where(['id' => $responseid[$i]])->where('user_id', Auth::user()->id)
                        ->update(['answer' => $answerdata[$i]]);

                }
            }
        } elseif ($this->currentstep == 4) {
            $this->validate([
                'sentence297' => 'required',
                'sentence298' => 'required',
                'sentence299' => 'required',
                'sentence300' => 'required',
                'sentence301' => 'required',
                'sentence302' => 'required',
                'sentence303' => 'required',
                'sentence304' => 'required',
                'sentence305' => 'required',
                'sentence306' => 'required',
                'sentence307' => 'required',
                'sentence308' => 'required',
                'sentence309' => 'required',
                'sentence310' => 'required',
                'sentence311' => 'required',
                'sentence312' => 'required',
                'sentence313' => 'required',
                'sentence314' => 'required',
                'sentence315' => 'required',
                'sentence316' => 'required',
                'sentence317' => 'required',
            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 57)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 57, 'detailquest_id' => $this->dtquestion297, 'answer' => $this->sentence297, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 57, 'detailquest_id' => $this->dtquestion298, 'answer' => $this->sentence298, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 57, 'detailquest_id' => $this->dtquestion299, 'answer' => $this->sentence299, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 57, 'detailquest_id' => $this->dtquestion300, 'answer' => $this->sentence300, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 57, 'detailquest_id' => $this->dtquestion301, 'answer' => $this->sentence301, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 57, 'detailquest_id' => $this->dtquestion302, 'answer' => $this->sentence302, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 57, 'detailquest_id' => $this->dtquestion303, 'answer' => $this->sentence303, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 57, 'detailquest_id' => $this->dtquestion304, 'answer' => $this->sentence304, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 57, 'detailquest_id' => $this->dtquestion305, 'answer' => $this->sentence305, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 57, 'detailquest_id' => $this->dtquestion306, 'answer' => $this->sentence306, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 57, 'detailquest_id' => $this->dtquestion307, 'answer' => $this->sentence307, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 57, 'detailquest_id' => $this->dtquestion308, 'answer' => $this->sentence308, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 57, 'detailquest_id' => $this->dtquestion309, 'answer' => $this->sentence309, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 57, 'detailquest_id' => $this->dtquestion310, 'answer' => $this->sentence310, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 57, 'detailquest_id' => $this->dtquestion311, 'answer' => $this->sentence311, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 57, 'detailquest_id' => $this->dtquestion312, 'answer' => $this->sentence312, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 57, 'detailquest_id' => $this->dtquestion313, 'answer' => $this->sentence313, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 57, 'detailquest_id' => $this->dtquestion314, 'answer' => $this->sentence314, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 57, 'detailquest_id' => $this->dtquestion315, 'answer' => $this->sentence315, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 57, 'detailquest_id' => $this->dtquestion316, 'answer' => $this->sentence316, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 57, 'detailquest_id' => $this->dtquestion317, 'answer' => $this->sentence317, 'status' => 'completed', 'complete_date' => now()],
                ]);
            } else {

                $answerdata = [
                    $this->sentence297,
                    $this->sentence298,
                    $this->sentence299,
                    $this->sentence300,
                    $this->sentence301,
                    $this->sentence302,
                    $this->sentence303,
                    $this->sentence304,
                    $this->sentence305,
                    $this->sentence306,
                    $this->sentence307,
                    $this->sentence308,
                    $this->sentence309,
                    $this->sentence310,
                    $this->sentence311,
                    $this->sentence312,
                    $this->sentence313,
                    $this->sentence314,
                    $this->sentence315,
                    $this->sentence316,
                    $this->sentence317,

                ];

                $dtid = [
                    [$this->dtquestion297],
                    [$this->dtquestion298],
                    [$this->dtquestion299],
                    [$this->dtquestion300],
                    [$this->dtquestion301],
                    [$this->dtquestion302],
                    [$this->dtquestion303],
                    [$this->dtquestion304],
                    [$this->dtquestion305],
                    [$this->dtquestion306],
                    [$this->dtquestion307],
                    [$this->dtquestion308],
                    [$this->dtquestion309],
                    [$this->dtquestion310],
                    [$this->dtquestion311],
                    [$this->dtquestion312],
                    [$this->dtquestion313],
                    [$this->dtquestion314],
                    [$this->dtquestion315],
                    [$this->dtquestion316],
                    [$this->dtquestion317],
                ];

                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 57)->where('user_id', Auth::user()->id)->pluck('id')->toArray();
                // dd($responseid);
                for ($i = 0; $i <= 20; $i++) {

                    WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 57])->where(['id' => $responseid[$i]])->where('user_id', Auth::user()->id)
                        ->update(['answer' => $answerdata[$i]]);

                }

            }
        } elseif ($this->currentstep == 5) {
            $this->validate([
                'affirmation318' => 'required',
                'affirmation319' => 'required',
                'affirmation320' => 'required',
                'affirmation321' => 'required',
                'affirmation322' => 'required',
                'affirmation323' => 'required',
                'affirmation324' => 'required',
                'affirmation325' => 'required',
                'affirmation326' => 'required',
                'affirmation327' => 'required',

            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 58)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 58, 'detailquest_id' => $this->dtquestion318, 'answer' => $this->affirmation318, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 58, 'detailquest_id' => $this->dtquestion319, 'answer' => $this->affirmation319, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 58, 'detailquest_id' => $this->dtquestion320, 'answer' => $this->affirmation320, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 58, 'detailquest_id' => $this->dtquestion321, 'answer' => $this->affirmation321, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 58, 'detailquest_id' => $this->dtquestion322, 'answer' => $this->affirmation322, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 58, 'detailquest_id' => $this->dtquestion323, 'answer' => $this->affirmation323, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 58, 'detailquest_id' => $this->dtquestion324, 'answer' => $this->affirmation324, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 58, 'detailquest_id' => $this->dtquestion325, 'answer' => $this->affirmation325, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 58, 'detailquest_id' => $this->dtquestion326, 'answer' => $this->affirmation326, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 58, 'detailquest_id' => $this->dtquestion327, 'answer' => $this->affirmation327, 'status' => 'completed', 'complete_date' => now()],

                ]);
            } else {

                $answerdata = [
                    $this->affirmation318,
                    $this->affirmation319,
                    $this->affirmation320,
                    $this->affirmation321,
                    $this->affirmation322,
                    $this->affirmation323,
                    $this->affirmation324,
                    $this->affirmation325,
                    $this->affirmation326,
                    $this->affirmation327,

                ];

                $dtid = [
                    [$this->dtquestion318],
                    [$this->dtquestion319],
                    [$this->dtquestion320],
                    [$this->dtquestion321],
                    [$this->dtquestion322],
                    [$this->dtquestion323],
                    [$this->dtquestion324],
                    [$this->dtquestion325],
                    [$this->dtquestion326],
                    [$this->dtquestion327],
                ];

                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 58)->where('user_id', Auth::user()->id)->pluck('id')->toArray();
                // dd($responseid);
                for ($i = 0; $i <= 9; $i++) {

                    WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 58])->where(['id' => $responseid[$i]])->where('user_id', Auth::user()->id)
                        ->update(['answer' => $answerdata[$i]]);

                }

            }
        } elseif ($this->currentstep == 6) {
            $this->validate([
                'tree328' => 'required',
                'tree329' => 'required',
                'tree330' => 'required',
    
            ]);

            $find = WorkbookResponse::where('workbook_id', 1)->where('question_id', 59)->where('user_id', Auth::user()->id)->first();
            if (empty($find)) {
                $WorkbookResponse = WorkbookResponse::insert([
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 59, 'detailquest_id' => $this->dtquestion328, 'answer' => $this->tree328, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 59, 'detailquest_id' => $this->dtquestion329, 'answer' => $this->tree329, 'status' => 'completed', 'complete_date' => now()],
                    ['workbook_id' => 1, 'user_id' => Auth::user()->id, 'question_id' => 59, 'detailquest_id' => $this->dtquestion330, 'answer' => $this->tree330, 'status' => 'completed', 'complete_date' => now()],

                ]);
            } else {

                $answerdata = [
                    $this->tree328,
                    $this->tree329,
                    $this->tree330,
                    
                ];

                $dtid = [
                    [$this->dtquestion328],
                    [$this->dtquestion329],
                    [$this->dtquestion330],
                   
                ];

                $responseid = WorkbookResponse::where('workbook_id', 1)->where('question_id', 59)->where('user_id', Auth::user()->id)->pluck('id')->toArray();
                // dd($responseid);
                for ($i = 0; $i <= 2; $i++) {

                    WorkbookResponse::where('workbook_id', 1)->where(['question_id' => 59])->where(['id' => $responseid[$i]])->where('user_id', Auth::user()->id)
                        ->update(['answer' => $answerdata[$i]]);

                }

            }
        }
    }
    public function submittopic7()
    {
        ShareWorkbook::where('user_id', Auth::user()->id)->where('workbook_id', 1)->where('topic_id', 13)->update(['status' => 'complete', 'complete_date' => now()]);
        return redirect()->route('serviceuser.myworkbook');

    }
    public function render()
    {
        return view('livewire.workbooktopic7');
    }
}
