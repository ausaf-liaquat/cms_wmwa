<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\WorkbookResponse;
use Livewire\Component;

class ViewTopic7 extends Component
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

        $ans55 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 55)->where('user_id', $this->userid)->pluck('answer')->toArray();
        $this->date262 = $ans55[0];
        $this->what263 = $ans55[1];
        $this->feel264 = $ans55[2];
        $this->ant265 = $ans55[3];
        $this->bat266 = $ans55[4];
        $this->date267 = $ans55[5];
        $this->what268 = $ans55[6];
        $this->feel269 = $ans55[7];
        $this->ant270 = $ans55[8];
        $this->bat271 = $ans55[9];
        $this->date272 = $ans55[10];
        $this->what273 = $ans55[11];
        $this->feel274 = $ans55[12];
        $this->ant275 = $ans55[13];
        $this->bat276 = $ans55[14];
        $this->date277 = $ans55[15];
        $this->what278 = $ans55[16];
        $this->feel279 = $ans55[17];
        $this->ant280 = $ans55[18];
        $this->bat281 = $ans55[19];
        $this->date282 = $ans55[20];
        $this->what283 = $ans55[21];
        $this->feel284 = $ans55[22];
        $this->ant285 = $ans55[23];
        $this->bat286 = $ans55[24];

        $ans56 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 56)->where('user_id', $this->userid)->pluck('answer')->toArray();

        $this->connect287 = $ans56[0];
        $this->connect288 = $ans56[1];
        $this->active289 = $ans56[2];
        $this->active290 = $ans56[3];
        $this->notice291 = $ans56[4];
        $this->notice292 = $ans56[5];
        $this->learn293 = $ans56[6];
        $this->learn294 = $ans56[7];
        $this->give295 = $ans56[8];
        $this->give296 = $ans56[9];

        $ans57 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 57)->where('user_id', $this->userid)->pluck('answer')->toArray();

        $this->sentence297 = $ans57[0];
        $this->sentence298 = $ans57[1];
        $this->sentence299 = $ans57[2];
        $this->sentence300 = $ans57[3];
        $this->sentence301 = $ans57[4];
        $this->sentence302 = $ans57[5];
        $this->sentence303 = $ans57[6];
        $this->sentence304 = $ans57[7];
        $this->sentence305 = $ans57[8];
        $this->sentence306 = $ans57[9];
        $this->sentence307 = $ans57[10];
        $this->sentence308 = $ans57[11];
        $this->sentence309 = $ans57[12];
        $this->sentence310 = $ans57[13];
        $this->sentence311 = $ans57[14];
        $this->sentence312 = $ans57[15];
        $this->sentence313 = $ans57[16];
        $this->sentence314 = $ans57[17];
        $this->sentence315 = $ans57[18];
        $this->sentence316 = $ans57[19];
        $this->sentence317 = $ans57[20];

        $ans58 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 58)->where('user_id', $this->userid)->pluck('answer')->toArray();
        $this->affirmation318=$ans58[0];
        $this->affirmation319=$ans58[1];
        $this->affirmation320=$ans58[2];
        $this->affirmation321=$ans58[3];
        $this->affirmation322=$ans58[4];
        $this->affirmation323=$ans58[5];
        $this->affirmation324=$ans58[6];
        $this->affirmation325=$ans58[7];
        $this->affirmation326=$ans58[8];
        $this->affirmation327=$ans58[9];


        $ans59 = WorkbookResponse::where('workbook_id', 1)->where('question_id', 59)->where('user_id', $this->userid)->pluck('answer')->toArray();
        $this->tree328=$ans59[0];
        $this->tree329=$ans59[1];
        $this->tree330=$ans59[2];
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
        return view('livewire.view-topic7');
    }
}
