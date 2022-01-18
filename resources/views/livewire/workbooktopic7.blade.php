<div>
    <div class="row">
        <div class="col-md-9">
            <h2>Youth Workbook</h2>
        </div>
        <div class="col-md-3">
            <div class="text-end"><span class="percent">{{ !empty($percent) ? $percent : '13' }}%</span>
                Completed
                | Topic 07
                <span id="topic_no"></span>
            </div>
            <div class="progress my-2" style="height: 10px;">
                <div class="progress-bar" role="progressbar" style="width:{{ !empty($percent) ? $percent : '13' }}%"
                    aria-valuenow="01" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <div class="card float-none workbook">
        <div class="card-body">
            <form id="workbookform" wire:submit.prevent="submittopic7">

                @if ($currentstep == 1)
                    <div class="content-container m-5 ">

                        <h1 class="blue handwritten topic-title text-center"><small>Topic
                                Seven...</small><br>Self-Esteem</h1>

                    </div>
                @endif

                @if ($currentstep == 2)
                    <h1 class="blue handwritten">Topic 07: Self-esteem<br><small>What is self-esteem?</small></h1>
                    <div class="content-container m-5">

                        <div class="row mb-5">

                            <h2 class="blue handwritten">Self-esteem is the opinion that we have of ourselves – the
                                things we see and believe about who we are. It can also be called self-worth, or
                                self-respect.</h2>
                            <h4 class="blue handwritten mb-5">When we have high self-esteem, we feel happy about who we
                                are, proud of our achievements, and confident in our abilities. When we have low
                                self-esteem, we may feel unhappy about who we are, be unable to see our strengths and
                                positives, or feel like we aren’t good enough.</h4>

                            <h2 class="blue handwritten">Ants & Bats</h2>

                            <div class="col-md-4">
                                <p>When we have low self-esteem, we may experience <strong><u>A</u></strong>utomatic
                                    <strong><u>N</u></strong>egative <strong><u>T</u></strong>houghts, or ANTs. We can’t
                                    control these thoughts, as they pop into our head without any effort. ANTs can make
                                    us feel bad about ourselves, as it’s easy to believe them – but they are NOT
                                    statements of fact.
                                </p>
                                <p>We can challenge our ANTs by using the five questions below, and replace our ANTs
                                    with BATs – <strong><u>B</u></strong>etter <strong><u>A</u></strong>utomatic
                                    <strong><u>T</u></strong>houghts.
                                </p>
                            </div>

                            <div class="col-md-7 offset-md-1">
                                <div class="row mb-2">
                                    <div
                                        class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                        <h5 class="blue p-0 m-0 w-100">Situation</h5>
                                    </div>
                                    <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                        <p class="p-4 m-0">My friend hasn’t messaged me back.</p>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div
                                        class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                        <h5 class="blue p-0 m-0 w-100">Emotion</h5>
                                    </div>
                                    <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                        <p class="p-4 m-0">Annoyed, upset, hurt.</p>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div
                                        class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                        <h5 class="blue p-0 m-0 w-100">Ant</h5>
                                    </div>
                                    <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                        <p class="p-4 m-0">They must hate me, no one wants to be my friend,
                                            everyone hates me.</p>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div
                                        class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                        <h5 class="blue p-0 m-0 w-100">Reality</h5>
                                    </div>
                                    <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                        <p class="p-4 m-0">My friend lost their phone, and messaged me the next
                                            day.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row mb-5">

                            <h2 class="blue handwritten">Challenging Ants</h2>
                            <p>We can challenge our ANTs by using the five questions below, and replace our ANTs with
                                BATs – <strong><u>B</u></strong>etter <strong><u>A</u></strong>utomatic
                                <strong><u>T</u></strong>houghts.
                            </p>

                            <table class="table workbook-diary">
                                <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">What Happened</th>
                                        <th scope="col">How Did You Feel?</th>
                                        <th scope="col">ANT</th>
                                        <th scope="col">BAT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">
                                            <input type="text" class="form-control" id="date1" placeholder="Date"
                                                value="Example" disabled>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="what1"
                                                placeholder="What happened?" value="Someone gave me a weird look"
                                                disabled>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="feel1"
                                                placeholder="How did you feel?" value="Worried, self-conscious"
                                                disabled>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="feel1" placeholder="ANT"
                                                value="I look stupid" disabled>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="feel1" placeholder="BAT"
                                                value="They probably weren’t even looking at me, and I look great today!"
                                                disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('date262')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="date262" id="date2"
                                                placeholder="Date">
                                        </td>
                                        <td>
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('what263')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="what263" id="what2"
                                                placeholder="What happened?">
                                        </td>
                                        <td>
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('feel264')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="feel264" id="feel2"
                                                placeholder="How did you feel?">
                                        </td>
                                        <td>
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('ant265')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="ant265" id="ant2"
                                                placeholder="ANT">
                                        </td>
                                        <td>
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('bat266')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="bat266" id="bat2"
                                                placeholder="BAT">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('date267')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="date267" id="date3"
                                                placeholder="Date">
                                        </td>
                                        <td>
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('what268')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="what268" id="what3"
                                                placeholder="What happened?">
                                        </td>
                                        <td>
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('feel269')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="feel269" id="feel3"
                                                placeholder="How did you feel?">
                                        </td>
                                        <td>
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('ant270')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="ant270" id="ant3"
                                                placeholder="ANT">
                                        </td>
                                        <td>
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('bat271')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="bat271" id="bat3"
                                                placeholder="BAT">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('date272')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="date272" id="date4"
                                                placeholder="Date">
                                        </td>
                                        <td>
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('what273')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="what273" id="what4"
                                                placeholder="What happened?">
                                        </td>
                                        <td>
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('feel274')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="feel274" id="feel4"
                                                placeholder="How did you feel?">
                                        </td>
                                        <td>
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('ant275')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="ant275" id="ant4"
                                                placeholder="ANT">
                                        </td>
                                        <td>
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('bat276')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="bat276" id="bat4"
                                                placeholder="BAT">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('date277')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="date277" id="date5"
                                                placeholder="Date">
                                        </td>
                                        <td>
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('what278')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="what278" id="what5"
                                                placeholder="What happened?">
                                        </td>
                                        <td>
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('feel279')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="feel279" id="feel5"
                                                placeholder="How did you feel?">
                                        </td>
                                        <td>
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('ant280')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="ant280" id="ant5"
                                                placeholder="ANT">
                                        </td>
                                        <td>
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('bat281')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="bat281" id="bat5"
                                                placeholder="BAT">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('date282')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="date282" id="date6"
                                                placeholder="Date">
                                        </td>
                                        <td>
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('what283')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="what283" id="what6"
                                                placeholder="What happened?">
                                        </td>
                                        <td>
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('feel284')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="feel284" id="feel6"
                                                placeholder="How did you feel?">
                                        </td>
                                        <td>
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('ant285')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="ant285" id="ant6"
                                                placeholder="ANT">
                                        </td>
                                        <td>
                                            <span style="font-size: small;font-weight: 700;"
                                                class="text-danger">@error('bat286')This field is required.
                                                @enderror</span>
                                            <input type="text" class="form-control" wire:model="bat286" id="bat6"
                                                placeholder="BAT">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                @endif

                @if ($currentstep == 3)
                    <h1 class="blue handwritten">Topic 07: Self-esteem<br><small>Building self-esteem?</small></h1>

                    <div class="content-container m-5">

                        <div class="row mb-5">

                            <h2 class="blue handwritten mb-5">There are a number of ways we can start building our
                                self-esteem, to improve our confidence and feel more positive about ourselves. The next
                                few pages explore different ways to improve our self-esteem, to encourage positive
                                thinking and wellbeing.</h2>


                            <div class="col-md-4">
                                <h2 class="blue handwritten">5 Ways to wellbeing</h2>
                                <p>These five activities can help us to feel more positive about ourselves, which can
                                    lead to higher self-esteem.</p>
                            </div>

                            <div class="col-md-7 offset-md-1">

                                <div class="row mb-2">
                                    <div
                                        class="col-md-3 box-1 border-end border-5 text-center d-flex align-items-center">
                                        <h5 class="blue p-0 m-0 w-100">Connect</h5>
                                    </div>
                                    <div class="col-md-9 box-1 border-5 p-2">
                                        <span style="font-size: small;font-weight: 700;"
                                            class="text-danger">@error('connect287')This field is required.
                                            @enderror</span>
                                        <div class="w-100 form-floating mb-2">
                                            <input type="text" class="form-control" wire:model="connect287"
                                                id="connect-do" placeholder="Something I already do:">
                                            <label for="connect-do">Something I already do:</label>
                                        </div>
                                        <span style="font-size: small;font-weight: 700;"
                                            class="text-danger">@error('connect288')This field is required.
                                            @enderror</span>
                                        <div class="w-100 form-floating">
                                            <input type="text" class="form-control" wire:model="connect288"
                                                id="connect-start" placeholder="Something I can start doing:">
                                            <label for="connect-start">Something I can start doing:</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div
                                        class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                        <h5 class="blue p-0 m-0 w-100">Be Active</h5>
                                    </div>
                                    <div class="col-md-9 box-2 border-5 p-2">
                                        <span style="font-size: small;font-weight: 700;"
                                            class="text-danger">@error('active289')This field is required.
                                            @enderror</span>
                                        <div class="w-100 form-floating mb-2">
                                            <input type="text" class="form-control" wire:model="active289"
                                                id="active-do" placeholder="Something I already do:">
                                            <label for="active-do">Something I already do:</label>
                                        </div>
                                        <span style="font-size: small;font-weight: 700;"
                                            class="text-danger">@error('active290')This field is required.
                                            @enderror</span>
                                        <div class="w-100 form-floating">
                                            <input type="text" class="form-control" wire:model="active290"
                                                id="active-start" placeholder="Something I can start doing:">
                                            <label for="active-start">Something I can start doing:</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div
                                        class="col-md-3 box-1 border-end border-5 text-center d-flex align-items-center">
                                        <h5 class="blue p-0 m-0 w-100">Take Notice</h5>
                                    </div>
                                    <div class="col-md-9 box-1 border-5 p-2">
                                        <span style="font-size: small;font-weight: 700;"
                                            class="text-danger">@error('notice291')This field is required.
                                            @enderror</span>
                                        <div class="w-100 form-floating mb-2">
                                            <input type="text" class="form-control" wire:model="notice291"
                                                id="notice-do" placeholder="Something I already do:">
                                            <label for="notice-do">Something I already do:</label>
                                        </div>
                                        <span style="font-size: small;font-weight: 700;"
                                            class="text-danger">@error('notice292')This field is required.
                                            @enderror</span>
                                        <div class="w-100 form-floating">
                                            <input type="text" class="form-control" wire:model="notice292"
                                                id="notice-start" placeholder="Something I can start doing:">
                                            <label for="notice-start">Something I can start doing:</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div
                                        class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                        <h5 class="blue p-0 m-0 w-100">Learn</h5>
                                    </div>
                                    <div class="col-md-9 box-2 border-5 p-2">
                                        <span style="font-size: small;font-weight: 700;"
                                            class="text-danger">@error('learn293')This field is required.
                                            @enderror</span>
                                        <div class="w-100 form-floating mb-2">
                                            <input type="text" class="form-control" wire:model="learn293"
                                                id="learn-do" placeholder="Something I already do:">
                                            <label for="learn-do">Something I already do:</label>
                                        </div>
                                        <span style="font-size: small;font-weight: 700;"
                                            class="text-danger">@error('learn294')This field is required.
                                            @enderror</span>
                                        <div class="w-100 form-floating">
                                            <input type="text" class="form-control" wire:model="learn294"
                                                id="learn-start" placeholder="Something I can start doing:">
                                            <label for="learn-start">Something I can start doing:</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div
                                        class="col-md-3 box-1 border-end border-5 text-center d-flex align-items-center">
                                        <h5 class="blue p-0 m-0 w-100">Give</h5>
                                    </div>
                                    <div class="col-md-9 box-1 border-5 p-2">
                                        <span style="font-size: small;font-weight: 700;"
                                            class="text-danger">@error('give295')This field is required.
                                            @enderror</span>
                                        <div class="w-100 form-floating mb-2">
                                            <input type="text" class="form-control" wire:model="give295" id="give-do"
                                                placeholder="Something I already do:">
                                            <label for="give-do">Something I already do:</label>
                                        </div>
                                        <span style="font-size: small;font-weight: 700;"
                                            class="text-danger">@error('give296')This field is required.
                                            @enderror</span>
                                        <div class="w-100 form-floating">
                                            <input type="text" class="form-control" wire:model="give296"
                                                id="give-start" placeholder="Something I can start doing:">
                                            <label for="give-start">Something I can start doing:</label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                @endif

                @if ($currentstep == 4)
                    <h1 class="blue handwritten">Topic 07: Self-esteem<br><small>Seeing the Positives</small></h1>

                    <div class="content-container m-5">

                        <div class="row mb-5">

                            <h2 class="blue handwritten mb-5">Reflecting on positive moments, memories and experiences
                                each day can encourage us to think more positively overall, which can help us build our
                                self-esteem and confidence.</h2>


                            <div class="col-md-4">
                                <h2 class="blue handwritten">Before you go to sleep list thrww positive things about
                                    your day.</h2>
                                <p>Your positive things are personal to you, and they don’t have to be anything huge.
                                    Maybe you shared a comforting hug with a friend, watched a cool YouTube video, or
                                    tried out a new makeup method. Say your positive things aloud to yourself, or note
                                    them down in a journal or in a note on your phone.</p>
                                <p>If it’s hard to get started, try picking three of the sentence stems below as a
                                    starting point.</p>
                            </div>

                            <div class="col-md-7 offset-md-1">

                                <div class="section">
                                    <h4 class="blue handwritten mb-0">My friends like me because:</h4>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence297')This field is required.
                                        @enderror</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" wire:model="sentence297"
                                            id="sentence1" placeholder="name@example.com">
                                        <label for="sentence1">...</label>
                                    </div>
                                </div>

                                <div class="section">
                                    <h4 class="blue handwritten mb-0">I felt proud of myself because:</h4>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence298')This field is required.
                                        @enderror</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" wire:model="sentence298"
                                            id="sentence2" placeholder="name@example.com">
                                        <label for="sentence2">...</label>
                                    </div>
                                </div>

                                <div class="section">
                                    <h4 class="blue handwritten mb-0">The highlight of my day was:</h4>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence299')This field is required.
                                        @enderror</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" wire:model="sentence299"
                                            id="sentence3" placeholder="name@example.com">
                                        <label for="sentence3">...</label>
                                    </div>
                                </div>

                                <div class="section">
                                    <h4 class="blue handwritten mb-0">Something unique about me is:</h4>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence300')This field is required.
                                        @enderror</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" wire:model="sentence300"
                                            id="sentence4" placeholder="name@example.com">
                                        <label for="sentence4">...</label>
                                    </div>
                                </div>

                                <div class="section">
                                    <h4 class="blue handwritten mb-0">I felt great when:</h4>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence301')This field is required.
                                        @enderror</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" wire:model="sentence301"
                                            id="sentence5" placeholder="name@example.com">
                                        <label for="sentence5">...</label>
                                    </div>
                                </div>

                                <div class="section">
                                    <h4 class="blue handwritten mb-0">I did well in:</h4>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence302')This field is required.
                                        @enderror</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" wire:model="sentence302"
                                            id="sentence6" placeholder="name@example.com">
                                        <label for="sentence6">...</label>
                                    </div>
                                </div>

                                <div class="section">
                                    <h4 class="blue handwritten mb-0">My family loves me because:</h4>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence303')This field is required.
                                        @enderror</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" wire:model="sentence303"
                                            id="sentence7" placeholder="name@example.com">
                                        <label for="sentence7">...</label>
                                    </div>
                                </div>

                                <div class="section">
                                    <h4 class="blue handwritten mb-0">I am excited for:</h4>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence304')This field is required.
                                        @enderror</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" wire:model="sentence304"
                                            id="sentence8" placeholder="name@example.com">
                                        <label for="sentence8">...</label>
                                    </div>
                                </div>

                                <div class="section">
                                    <h4 class="blue handwritten mb-0">I enjoyed:</h4>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence305')This field is required.
                                        @enderror</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" wire:model="sentence305"
                                            id="sentence9" placeholder="name@example.com">
                                        <label for="sentence9">...</label>
                                    </div>
                                </div>

                                <div class="section">
                                    <h4 class="blue handwritten mb-0">I looked great today because:</h4>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence306')This field is required.
                                        @enderror</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" wire:model="sentence306"
                                            id="sentence10" placeholder="name@example.com">
                                        <label for="sentence10">...</label>
                                    </div>
                                </div>

                                <div class="section">
                                    <h4 class="blue handwritten mb-0">A small success I had today was:</h4>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence307')This field is required.
                                        @enderror</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" wire:model="sentence307"
                                            id="sentence11" placeholder="name@example.com">
                                        <label for="sentence11">...</label>
                                    </div>
                                </div>

                                <div class="section">
                                    <h4 class="blue handwritten mb-0">I am looking forward to:</h4>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence308')This field is required.
                                        @enderror</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" wire:model="sentence308"
                                            id="sentence12" placeholder="name@example.com">
                                        <label for="sentence12">...</label>
                                    </div>
                                </div>

                                <div class="section">
                                    <h4 class="blue handwritten mb-0">My family is proud of me because:</h4>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence309')This field is required.
                                        @enderror</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" wire:model="sentence309"
                                            id="sentence13" placeholder="name@example.com">
                                        <label for="sentence13">...</label>
                                    </div>
                                </div>

                                <div class="section">
                                    <h4 class="blue handwritten mb-0">The best thing about me is:</h4>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence310')This field is required.
                                        @enderror</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" wire:model="sentence310"
                                            id="sentence14" placeholder="name@example.com">
                                        <label for="sentence14">...</label>
                                    </div>
                                </div>

                                <div class="section">
                                    <h4 class="blue handwritten mb-0">I tried something new:</h4>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence311')This field is required.
                                        @enderror</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" wire:model="sentence311"
                                            id="sentence15" placeholder="name@example.com">
                                        <label for="sentence15">...</label>
                                    </div>
                                </div>

                                <div class="section">
                                    <h4 class="blue handwritten mb-0">Three people I am thankful for are:</h4>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence312')This field is required.
                                        @enderror</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" wire:model="sentence312"
                                            id="sentence16" placeholder="name@example.com">
                                        <label for="sentence16">...</label>
                                    </div>
                                </div>

                                <div class="section">
                                    <h4 class="blue handwritten mb-0">I achieved:</h4>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence313')This field is required.
                                        @enderror</span>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence313')This field is required.
                                        @enderror</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" wire:model="sentence313"
                                            id="sentence17" placeholder="name@example.com">
                                        <label for="sentence17">...</label>
                                    </div>
                                </div>

                                <div class="section">
                                    <h4 class="blue handwritten mb-0">I learnt:</h4>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence314')This field is required.
                                        @enderror</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" wire:model="sentence314"
                                            id="sentence18" placeholder="name@example.com">
                                        <label for="sentence18">...</label>
                                    </div>
                                </div>

                                <div class="section">
                                    <h4 class="blue handwritten mb-0">I felt happy because:</h4>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence315')This field is required.
                                        @enderror</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" wire:model="sentence315"
                                            id="sentence19" placeholder="name@example.com">
                                        <label for="sentence19">...</label>
                                    </div>
                                </div>

                                <div class="section">
                                    <h4 class="blue handwritten mb-0">My biggest success this week was:</h4>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence316')This field is required.
                                        @enderror</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" wire:model="sentence316"
                                            id="sentence20" placeholder="name@example.com">
                                        <label for="sentence20">...</label>
                                    </div>
                                </div>

                                <div class="section">
                                    <h4 class="blue handwritten mb-0">I was proud of someone else when:</h4>
                                    <span style="font-size: small;font-weight: 700;"
                                        class="text-danger">@error('sentence317')This field is required.
                                        @enderror</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" wire:model="sentence317"
                                            id="sentence21" placeholder="name@example.com">
                                        <label for="sentence21">...</label>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                @endif

                @if ($currentstep == 5)
                    <h1 class="blue handwritten">Topic 07: Self-esteem<br><small>Positive Affirmations</small></h1>

                    <div class="content-container m-5">

                        <div class="row mb-5 postive-affirmations">

                            <h2 class="blue handwritten">Positive affirmations can help us to think more positively
                                about ourselves, which can build self-esteem, confidence, and help us understand our
                                worth and value.</h2>
                            <h5 class="blue handwritten mb-3">Read through the affirmations below</h5>

                            <div class="col-3 aff-1">I’ve got this.</div>
                            <div class="col-3 aff-2">I am enough.</div>
                            <div class="col-3 aff-3">I get better every single day.</div>
                            <div class="col-3 aff-1">I am an amazing person.</div>
                            <div class="col-3 aff-2">I forgive myself for my mistakes.</div>
                            <div class="col-3 aff-3">My challenges help me grow.</div>
                            <div class="col-3 aff-1">I am perfect just the way I am.</div>
                            <div class="col-3 aff-2">Today will be a great day.</div>
                            <div class="col-3 aff-3">I have courage and confidence.</div>
                            <div class="col-3 aff-1">I can control my own happiness.</div>
                            <div class="col-3 aff-2">Today I will walk through my fears.</div>
                            <div class="col-3 aff-3">I stand up for my beliefs.</div>
                            <div class="col-3 aff-1">I believe in my goals and dreams.</div>
                            <div class="col-3 aff-2">It’s okay not to know everything.</div>
                            <div class="col-3 aff-3">Today I choose to think positive.</div>
                            <div class="col-3 aff-1">I can get through anything.</div>
                            <div class="col-3 aff-2">I can do anything I put my mind to.</div>
                            <div class="col-3 aff-3">I am free to make my own choices.</div>
                            <div class="col-3 aff-1">I can do better next time.</div>
                            <div class="col-3 aff-2">I have everything I need right now.</div>
                            <div class="col-3 aff-3">I am capable of so much.</div>
                            <div class="col-3 aff-1">Everything will be okay.</div>
                            <div class="col-3 aff-2">I believe in myself.</div>
                            <div class="col-3 aff-3">I am proud of myself.</div>
                            <div class="col-3 aff-1">I deserve to be happy.</div>
                            <div class="col-3 aff-2">I deserve to be loved.</div>
                            <div class="col-3 aff-3">I can make a difference.</div>
                            <div class="col-3 aff-1">I am important.</div>
                            <div class="col-3 aff-2">I choose to be confident.</div>
                            <div class="col-3 aff-3">I am in charge of my life.</div>
                            <div class="col-3 aff-1">I can make my dreams come true.</div>
                            <div class="col-3 aff-2">My voice has power.</div>
                            <div class="col-3 aff-3">I believe in my abilities.</div>
                            <div class="col-3 aff-1">Good things will come to me.</div>
                            <div class="col-3 aff-2">I matter.</div>
                            <div class="col-3 aff-3">I am ready to learn.</div>
                            <div class="col-3 aff-1">My positive thoughts create positive feelings.</div>
                            <div class="col-3 aff-2">I have people who love and respect me.</div>
                            <div class="col-3 aff-3">My confidence grows outside my comfort zone.</div>
                            <div class="col-3 aff-1">Every day is a fresh start.</div>
                            <div class="col-3 aff-2">If I fall, I will get back up again.</div>
                            <div class="col-3 aff-3">I am whole.</div>
                            <div class="col-3 aff-1">I only compare myself to myself.</div>
                            <div class="col-3 aff-2">I can do anything.</div>
                            <div class="col-3 aff-3">It is enough to do my best.</div>
                            <div class="col-3 aff-1">I accept who I am.</div>
                            <div class="col-3 aff-2">Today will be a good day.</div>
                            <div class="col-3 aff-3">It’s okay to make mistakes.</div>
                            <div class="col-3 aff-1">I am making the right choices.</div>
                            <div class="col-3 aff-2">I choose positive people.</div>
                            <div class="col-3 aff-3">I am a product of my decisions.</div>
                            <div class="col-3 aff-1">I am strong and determined.</div>
                            <div class="col-3 aff-2">Today is my day.</div>
                            <div class="col-3 aff-3">I have inner beauty.</div>
                            <div class="col-3 aff-1">I have inner strength.</div>
                            <div class="col-3 aff-2">I can live in the moment.</div>
                            <div class="col-3 aff-3">Anything is possible.</div>
                            <div class="col-3 aff-1">I can take deep breaths.</div>
                            <div class="col-3 aff-2">One step at a time.</div>
                            <div class="col-3 aff-3">I am feeling stronger.</div>
                            <div class="col-3 aff-1">I am an original.</div>
                            <div class="col-3 aff-2">I deserve all good things.</div>
                            <div class="col-3 aff-3">I am thankful for today.</div>
                            <div class="col-3 aff-1">I strive to do my best.</div>
                            <div class="col-3 aff-2">I’m going to push through.</div>
                            <div class="col-3 aff-3">When I let go, I feel better.</div>
                            <div class="col-3 aff-1">I’m working at my own pace.</div>
                            <div class="col-3 aff-2">I can take chances.</div>
                            <div class="col-3 aff-3">Today I am going to shine.</div>
                            <div class="col-3 aff-1">I’m going to get through this.</div>
                            <div class="col-3 aff-2">I am in control of my feelings.</div>
                            <div class="col-3 aff-3">I am calm and relaxed.</div>
                            <div class="col-3 aff-1">I’m working on myself.</div>
                            <div class="col-3 aff-2">I’m prepared to shine.</div>
                            <div class="col-3 aff-3">I am beautiful.</div>
                            <div class="col-3 aff-1">My voice matters.</div>
                            <div class="col-3 aff-2">I accept me for me.</div>
                            <div class="col-3 aff-3">I am building my future.</div>
                            <div class="col-3 aff-1">I’m starting a new chapter.</div>
                            <div class="col-3 aff-2">I can change the world.</div>
                            <div class="col-3 aff-3">I trust my decisions.</div>
                            <div class="col-3 aff-1">I am not responsible for the actions of others.</div>
                            <div class="col-3 aff-2">I am becoming the best version of myself.</div>
                            <div class="col-3 aff-3">There is no one better to be than myself.</div>

                            <h2 class="blue handwritten mt-5">Your Selections</h2>
                            <h4 class="blue handwritten mb-2">Now you have read through them choose up to ten that work
                                for you. Make a note of these and say them out loud to yourself each morning when you
                                wake up.</h4>

                            <div class="col-md-6">
                                <span style="font-size: small;font-weight: 700;"
                                    class="text-danger">@error('affirmation318')This field is required.
                                    @enderror</span>
                                <div class="form-floating mb-3">
                                    <select class="form-select" wire:model="affirmation318" id="affirmation1"
                                        aria-label="Choose your positive affirmation">
                                        <option value="">Select 1st Positive Affirmation</option>
                                        <option value="I’ve got this">I’ve got this.</option>
                                        <option value="I am enough">I am enough.</option>
                                        <option value="I get better every single day">I get better every single day.
                                        </option>
                                        <option value="I am an amazing person">I am an amazing person.</option>
                                        <option value="I forgive myself for my mistakes">I forgive myself for my
                                            mistakes.</option>
                                        <option value="My challenges help me grow">My challenges help me grow.</option>
                                        <option value="I am perfect just the way I am">I am perfect just the way I am.
                                        </option>
                                        <option value="Today will be a great day">Today will be a great day.</option>
                                        <option value="I have courage and confidence">I have courage and confidence.
                                        </option>
                                        <option value="I can control my own happiness">I can control my own happiness.
                                        </option>
                                        <option value="Today I will walk through my fears">Today I will walk through my
                                            fears.</option>
                                        <option value="I stand up for my beliefs">I stand up for my beliefs.</option>
                                        <option value="I believe in my goals and dreams">I believe in my goals and
                                            dreams.</option>
                                        <option value="It’s okay not to know everything">It’s okay not to know
                                            everything.</option>
                                        <option value="Today I choose to think positive">Today I choose to think
                                            positive.</option>
                                        <option value="I can get through anything">I can get through anything.</option>
                                        <option value="I can do anything I put my mind to">I can do anything I put my
                                            mind to.</option>
                                        <option value="I am free to make my own choices">I am free to make my own
                                            choices.</option>
                                        <option value="I can do better next time">I can do better next time.</option>
                                        <option value="I have everything I need right now">I have everything I need
                                            right now.</option>
                                        <option value="I am capable of so much">I am capable of so much.</option>
                                        <option value="Everything will be okay">Everything will be okay.</option>
                                        <option value="I believe in myself">I believe in myself.</option>
                                        <option value="I am proud of myself">I am proud of myself.</option>
                                        <option value="I deserve to be happy">I deserve to be happy.</option>
                                        <option value="I deserve to be loved">I deserve to be loved.</option>
                                        <option value="I can make a difference">I can make a difference.</option>
                                        <option value="I am important">I am important.</option>
                                        <option value="I choose to be confident">I choose to be confident.</option>
                                        <option value="I am in charge of my life">I am in charge of my life.</option>
                                        <option value="I can make my dreams come true">I can make my dreams come true.
                                        </option>
                                        <option value="My voice has power">My voice has power.</option>
                                        <option value="I believe in my abilities">I believe in my abilities.</option>
                                        <option value="Good things will come to me">Good things will come to me.
                                        </option>
                                        <option value="I matter">I matter.</option>
                                        <option value="I am ready to learn">I am ready to learn.</option>
                                        <option value="My positive thoughts create positive feelings">My positive
                                            thoughts create positive feelings.</option>
                                        <option value="I have people who love and respect me">I have people who love and
                                            respect me.</option>
                                        <option value="My confidence grows outside my comfort zone">My confidence grows
                                            outside my comfort zone.</option>
                                        <option value="Every day is a fresh start">Every day is a fresh start.</option>
                                        <option value="If I fall, I will get back up again">If I fall, I will get back
                                            up again.</option>
                                        <option value="I am whole">I am whole.</option>
                                        <option value="I only compare myself to myself">I only compare myself to myself.
                                        </option>
                                        <option value="I can do anything">I can do anything.</option>
                                        <option value="It is enough to do my best">It is enough to do my best.</option>
                                        <option value="I accept who I am">I accept who I am.</option>
                                        <option value="Today will be a good day">Today will be a good day.</option>
                                        <option value="It’s okay to make mistakes">It’s okay to make mistakes.</option>
                                        <option value="I am making the right choices">I am making the right choices.
                                        </option>
                                        <option value="I choose positive people">I choose positive people.</option>
                                        <option value="I am a product of my decisions">I am a product of my decisions.
                                        </option>
                                        <option value="I am strong and determined">I am strong and determined.</option>
                                        <option value="Today is my day">Today is my day.</option>
                                        <option value="I have inner beauty">I have inner beauty.</option>
                                        <option value="I have inner strength">I have inner strength.</option>
                                        <option value="I can live in the moment">I can live in the moment.</option>
                                        <option value="Anything is possible">Anything is possible.</option>
                                        <option value="I can take deep breaths">I can take deep breaths.</option>
                                        <option value="One step at a time">One step at a time.</option>
                                        <option value="I am feeling stronger">I am feeling stronger.</option>
                                        <option value="I am an original">I am an original.</option>
                                        <option value="I deserve all good things">I deserve all good things.</option>
                                        <option value="I am thankful for today">I am thankful for today.</option>
                                        <option value="I strive to do my best">I strive to do my best.</option>
                                        <option value="I'm going to push through">I'm going to push through.</option>
                                        <option value="When I let go, I feel better">When I let go, I feel better.
                                        </option>
                                        <option value="I’m working at my own pace">I’m working at my own pace.</option>
                                        <option value="I can take chances">I can take chances.</option>
                                        <option value="Today I am going to shine">Today I am going to shine.</option>
                                        <option value="I’m going to get through this">I’m going to get through this.
                                        </option>
                                        <option value="I am in control of my feelings">I am in control of my feelings.
                                        </option>
                                        <option value="I am calm and relaxed">I am calm and relaxed.</option>
                                        <option value="I’m working on myself">I’m working on myself.</option>
                                        <option value="I’m prepared to shine">I’m prepared to shine.</option>
                                        <option value="I am beautiful">I am beautiful.</option>
                                        <option value="My voice matters">My voice matters.</option>
                                        <option value="I accept me for me">I accept me for me.</option>
                                        <option value="I am building my future">I am building my future.</option>
                                        <option value="I’m starting a new chapter">I’m starting a new chapter.</option>
                                        <option value="I can change the world">I can change the world.</option>
                                        <option value="I trust my decisions">I trust my decisions.</option>
                                        <option value="I am not responsible for the actions of others">I am not
                                            responsible for the actions of others.</option>
                                        <option value="I am becoming the best version of myself">I am becoming the best
                                            version of myself.</option>
                                        <option value="There is no one better to be than myself">There is no one better
                                            to be than myself.</option>
                                    </select>
                                    <label for="affirmation1">Select 1st</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <span style="font-size: small;font-weight: 700;"
                                    class="text-danger">@error('affirmation319')This field is required.
                                    @enderror</span>
                                <div class="form-floating mb-3">
                                    <select class="form-select" wire:model="affirmation319" id="affirmation2"
                                        aria-label="Choose your positive affirmation">
                                        <option value="">Select 2nd Positive Affirmation</option>
                                        <option value="I’ve got this">I’ve got this.</option>
                                        <option value="I am enough">I am enough.</option>
                                        <option value="I get better every single day">I get better every single day.
                                        </option>
                                        <option value="I am an amazing person">I am an amazing person.</option>
                                        <option value="I forgive myself for my mistakes">I forgive myself for my
                                            mistakes.</option>
                                        <option value="My challenges help me grow">My challenges help me grow.</option>
                                        <option value="I am perfect just the way I am">I am perfect just the way I am.
                                        </option>
                                        <option value="Today will be a great day">Today will be a great day.</option>
                                        <option value="I have courage and confidence">I have courage and confidence.
                                        </option>
                                        <option value="I can control my own happiness">I can control my own happiness.
                                        </option>
                                        <option value="Today I will walk through my fears">Today I will walk through my
                                            fears.</option>
                                        <option value="I stand up for my beliefs">I stand up for my beliefs.</option>
                                        <option value="I believe in my goals and dreams">I believe in my goals and
                                            dreams.</option>
                                        <option value="It’s okay not to know everything">It’s okay not to know
                                            everything.</option>
                                        <option value="Today I choose to think positive">Today I choose to think
                                            positive.</option>
                                        <option value="I can get through anything">I can get through anything.</option>
                                        <option value="I can do anything I put my mind to">I can do anything I put my
                                            mind to.</option>
                                        <option value="I am free to make my own choices">I am free to make my own
                                            choices.</option>
                                        <option value="I can do better next time">I can do better next time.</option>
                                        <option value="I have everything I need right now">I have everything I need
                                            right now.</option>
                                        <option value="I am capable of so much">I am capable of so much.</option>
                                        <option value="Everything will be okay">Everything will be okay.</option>
                                        <option value="I believe in myself">I believe in myself.</option>
                                        <option value="I am proud of myself">I am proud of myself.</option>
                                        <option value="I deserve to be happy">I deserve to be happy.</option>
                                        <option value="I deserve to be loved">I deserve to be loved.</option>
                                        <option value="I can make a difference">I can make a difference.</option>
                                        <option value="I am important">I am important.</option>
                                        <option value="I choose to be confident">I choose to be confident.</option>
                                        <option value="I am in charge of my life">I am in charge of my life.</option>
                                        <option value="I can make my dreams come true">I can make my dreams come true.
                                        </option>
                                        <option value="My voice has power">My voice has power.</option>
                                        <option value="I believe in my abilities">I believe in my abilities.</option>
                                        <option value="Good things will come to me">Good things will come to me.
                                        </option>
                                        <option value="I matter">I matter.</option>
                                        <option value="I am ready to learn">I am ready to learn.</option>
                                        <option value="My positive thoughts create positive feelings">My positive
                                            thoughts create positive feelings.</option>
                                        <option value="I have people who love and respect me">I have people who love and
                                            respect me.</option>
                                        <option value="My confidence grows outside my comfort zone">My confidence grows
                                            outside my comfort zone.</option>
                                        <option value="Every day is a fresh start">Every day is a fresh start.</option>
                                        <option value="If I fall, I will get back up again">If I fall, I will get back
                                            up again.</option>
                                        <option value="I am whole">I am whole.</option>
                                        <option value="I only compare myself to myself">I only compare myself to myself.
                                        </option>
                                        <option value="I can do anything">I can do anything.</option>
                                        <option value="It is enough to do my best">It is enough to do my best.</option>
                                        <option value="I accept who I am">I accept who I am.</option>
                                        <option value="Today will be a good day">Today will be a good day.</option>
                                        <option value="It’s okay to make mistakes">It’s okay to make mistakes.</option>
                                        <option value="I am making the right choices">I am making the right choices.
                                        </option>
                                        <option value="I choose positive people">I choose positive people.</option>
                                        <option value="I am a product of my decisions">I am a product of my decisions.
                                        </option>
                                        <option value="I am strong and determined">I am strong and determined.</option>
                                        <option value="Today is my day">Today is my day.</option>
                                        <option value="I have inner beauty">I have inner beauty.</option>
                                        <option value="I have inner strength">I have inner strength.</option>
                                        <option value="I can live in the moment">I can live in the moment.</option>
                                        <option value="Anything is possible">Anything is possible.</option>
                                        <option value="I can take deep breaths">I can take deep breaths.</option>
                                        <option value="One step at a time">One step at a time.</option>
                                        <option value="I am feeling stronger">I am feeling stronger.</option>
                                        <option value="I am an original">I am an original.</option>
                                        <option value="I deserve all good things">I deserve all good things.</option>
                                        <option value="I am thankful for today">I am thankful for today.</option>
                                        <option value="I strive to do my best">I strive to do my best.</option>
                                        <option value="I'm going to push through">I'm going to push through.</option>
                                        <option value="When I let go, I feel better">When I let go, I feel better.
                                        </option>
                                        <option value="I’m working at my own pace">I’m working at my own pace.</option>
                                        <option value="I can take chances">I can take chances.</option>
                                        <option value="Today I am going to shine">Today I am going to shine.</option>
                                        <option value="I’m going to get through this">I’m going to get through this.
                                        </option>
                                        <option value="I am in control of my feelings">I am in control of my feelings.
                                        </option>
                                        <option value="I am calm and relaxed">I am calm and relaxed.</option>
                                        <option value="I’m working on myself">I’m working on myself.</option>
                                        <option value="I’m prepared to shine">I’m prepared to shine.</option>
                                        <option value="I am beautiful">I am beautiful.</option>
                                        <option value="My voice matters">My voice matters.</option>
                                        <option value="I accept me for me">I accept me for me.</option>
                                        <option value="I am building my future">I am building my future.</option>
                                        <option value="I’m starting a new chapter">I’m starting a new chapter.</option>
                                        <option value="I can change the world">I can change the world.</option>
                                        <option value="I trust my decisions">I trust my decisions.</option>
                                        <option value="I am not responsible for the actions of others">I am not
                                            responsible for the actions of others.</option>
                                        <option value="I am becoming the best version of myself">I am becoming the best
                                            version of myself.</option>
                                        <option value="There is no one better to be than myself">There is no one better
                                            to be than myself.</option>
                                    </select>
                                    <label for="affirmation2">Select 2nd</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <span style="font-size: small;font-weight: 700;"
                                    class="text-danger">@error('affirmation320')This field is required.
                                    @enderror</span>
                                <div class="form-floating mb-3">
                                    <select class="form-select" wire:model="affirmation320" id="affirmation3"
                                        aria-label="Choose your positive affirmation">
                                        <option value="">Select 3rd Positive Affirmation</option>
                                        <option value="I’ve got this">I’ve got this.</option>
                                        <option value="I am enough">I am enough.</option>
                                        <option value="I get better every single day">I get better every single day.
                                        </option>
                                        <option value="I am an amazing person">I am an amazing person.</option>
                                        <option value="I forgive myself for my mistakes">I forgive myself for my
                                            mistakes.</option>
                                        <option value="My challenges help me grow">My challenges help me grow.</option>
                                        <option value="I am perfect just the way I am">I am perfect just the way I am.
                                        </option>
                                        <option value="Today will be a great day">Today will be a great day.</option>
                                        <option value="I have courage and confidence">I have courage and confidence.
                                        </option>
                                        <option value="I can control my own happiness">I can control my own happiness.
                                        </option>
                                        <option value="Today I will walk through my fears">Today I will walk through my
                                            fears.</option>
                                        <option value="I stand up for my beliefs">I stand up for my beliefs.</option>
                                        <option value="I believe in my goals and dreams">I believe in my goals and
                                            dreams.</option>
                                        <option value="It’s okay not to know everything">It’s okay not to know
                                            everything.</option>
                                        <option value="Today I choose to think positive">Today I choose to think
                                            positive.</option>
                                        <option value="I can get through anything">I can get through anything.</option>
                                        <option value="I can do anything I put my mind to">I can do anything I put my
                                            mind to.</option>
                                        <option value="I am free to make my own choices">I am free to make my own
                                            choices.</option>
                                        <option value="I can do better next time">I can do better next time.</option>
                                        <option value="I have everything I need right now">I have everything I need
                                            right now.</option>
                                        <option value="I am capable of so much">I am capable of so much.</option>
                                        <option value="Everything will be okay">Everything will be okay.</option>
                                        <option value="I believe in myself">I believe in myself.</option>
                                        <option value="I am proud of myself">I am proud of myself.</option>
                                        <option value="I deserve to be happy">I deserve to be happy.</option>
                                        <option value="I deserve to be loved">I deserve to be loved.</option>
                                        <option value="I can make a difference">I can make a difference.</option>
                                        <option value="I am important">I am important.</option>
                                        <option value="I choose to be confident">I choose to be confident.</option>
                                        <option value="I am in charge of my life">I am in charge of my life.</option>
                                        <option value="I can make my dreams come true">I can make my dreams come true.
                                        </option>
                                        <option value="My voice has power">My voice has power.</option>
                                        <option value="I believe in my abilities">I believe in my abilities.</option>
                                        <option value="Good things will come to me">Good things will come to me.
                                        </option>
                                        <option value="I matter">I matter.</option>
                                        <option value="I am ready to learn">I am ready to learn.</option>
                                        <option value="My positive thoughts create positive feelings">My positive
                                            thoughts create positive feelings.</option>
                                        <option value="I have people who love and respect me">I have people who love and
                                            respect me.</option>
                                        <option value="My confidence grows outside my comfort zone">My confidence grows
                                            outside my comfort zone.</option>
                                        <option value="Every day is a fresh start">Every day is a fresh start.</option>
                                        <option value="If I fall, I will get back up again">If I fall, I will get back
                                            up again.</option>
                                        <option value="I am whole">I am whole.</option>
                                        <option value="I only compare myself to myself">I only compare myself to myself.
                                        </option>
                                        <option value="I can do anything">I can do anything.</option>
                                        <option value="It is enough to do my best">It is enough to do my best.</option>
                                        <option value="I accept who I am">I accept who I am.</option>
                                        <option value="Today will be a good day">Today will be a good day.</option>
                                        <option value="It’s okay to make mistakes">It’s okay to make mistakes.</option>
                                        <option value="I am making the right choices">I am making the right choices.
                                        </option>
                                        <option value="I choose positive people">I choose positive people.</option>
                                        <option value="I am a product of my decisions">I am a product of my decisions.
                                        </option>
                                        <option value="I am strong and determined">I am strong and determined.</option>
                                        <option value="Today is my day">Today is my day.</option>
                                        <option value="I have inner beauty">I have inner beauty.</option>
                                        <option value="I have inner strength">I have inner strength.</option>
                                        <option value="I can live in the moment">I can live in the moment.</option>
                                        <option value="Anything is possible">Anything is possible.</option>
                                        <option value="I can take deep breaths">I can take deep breaths.</option>
                                        <option value="One step at a time">One step at a time.</option>
                                        <option value="I am feeling stronger">I am feeling stronger.</option>
                                        <option value="I am an original">I am an original.</option>
                                        <option value="I deserve all good things">I deserve all good things.</option>
                                        <option value="I am thankful for today">I am thankful for today.</option>
                                        <option value="I strive to do my best">I strive to do my best.</option>
                                        <option value="I'm going to push through">I'm going to push through.</option>
                                        <option value="When I let go, I feel better">When I let go, I feel better.
                                        </option>
                                        <option value="I’m working at my own pace">I’m working at my own pace.</option>
                                        <option value="I can take chances">I can take chances.</option>
                                        <option value="Today I am going to shine">Today I am going to shine.</option>
                                        <option value="I’m going to get through this">I’m going to get through this.
                                        </option>
                                        <option value="I am in control of my feelings">I am in control of my feelings.
                                        </option>
                                        <option value="I am calm and relaxed">I am calm and relaxed.</option>
                                        <option value="I’m working on myself">I’m working on myself.</option>
                                        <option value="I’m prepared to shine">I’m prepared to shine.</option>
                                        <option value="I am beautiful">I am beautiful.</option>
                                        <option value="My voice matters">My voice matters.</option>
                                        <option value="I accept me for me">I accept me for me.</option>
                                        <option value="I am building my future">I am building my future.</option>
                                        <option value="I’m starting a new chapter">I’m starting a new chapter.</option>
                                        <option value="I can change the world">I can change the world.</option>
                                        <option value="I trust my decisions">I trust my decisions.</option>
                                        <option value="I am not responsible for the actions of others">I am not
                                            responsible for the actions of others.</option>
                                        <option value="I am becoming the best version of myself">I am becoming the best
                                            version of myself.</option>
                                        <option value="There is no one better to be than myself">There is no one better
                                            to be than myself.</option>
                                    </select>
                                    <label for="affirmation3">Select 3rd</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <span style="font-size: small;font-weight: 700;"
                                    class="text-danger">@error('affirmation321')This field is required.
                                    @enderror</span>
                                <div class="form-floating mb-3">
                                    <select class="form-select" wire:model="affirmation321" id="affirmation4"
                                        aria-label="Choose your positive affirmation">
                                        <option value="">Select 4th Positive Affirmation</option>
                                        <option value="I’ve got this">I’ve got this.</option>
                                        <option value="I am enough">I am enough.</option>
                                        <option value="I get better every single day">I get better every single day.
                                        </option>
                                        <option value="I am an amazing person">I am an amazing person.</option>
                                        <option value="I forgive myself for my mistakes">I forgive myself for my
                                            mistakes.</option>
                                        <option value="My challenges help me grow">My challenges help me grow.</option>
                                        <option value="I am perfect just the way I am">I am perfect just the way I am.
                                        </option>
                                        <option value="Today will be a great day">Today will be a great day.</option>
                                        <option value="I have courage and confidence">I have courage and confidence.
                                        </option>
                                        <option value="I can control my own happiness">I can control my own happiness.
                                        </option>
                                        <option value="Today I will walk through my fears">Today I will walk through my
                                            fears.</option>
                                        <option value="I stand up for my beliefs">I stand up for my beliefs.</option>
                                        <option value="I believe in my goals and dreams">I believe in my goals and
                                            dreams.</option>
                                        <option value="It’s okay not to know everything">It’s okay not to know
                                            everything.</option>
                                        <option value="Today I choose to think positive">Today I choose to think
                                            positive.</option>
                                        <option value="I can get through anything">I can get through anything.</option>
                                        <option value="I can do anything I put my mind to">I can do anything I put my
                                            mind to.</option>
                                        <option value="I am free to make my own choices">I am free to make my own
                                            choices.</option>
                                        <option value="I can do better next time">I can do better next time.</option>
                                        <option value="I have everything I need right now">I have everything I need
                                            right now.</option>
                                        <option value="I am capable of so much">I am capable of so much.</option>
                                        <option value="Everything will be okay">Everything will be okay.</option>
                                        <option value="I believe in myself">I believe in myself.</option>
                                        <option value="I am proud of myself">I am proud of myself.</option>
                                        <option value="I deserve to be happy">I deserve to be happy.</option>
                                        <option value="I deserve to be loved">I deserve to be loved.</option>
                                        <option value="I can make a difference">I can make a difference.</option>
                                        <option value="I am important">I am important.</option>
                                        <option value="I choose to be confident">I choose to be confident.</option>
                                        <option value="I am in charge of my life">I am in charge of my life.</option>
                                        <option value="I can make my dreams come true">I can make my dreams come true.
                                        </option>
                                        <option value="My voice has power">My voice has power.</option>
                                        <option value="I believe in my abilities">I believe in my abilities.</option>
                                        <option value="Good things will come to me">Good things will come to me.
                                        </option>
                                        <option value="I matter">I matter.</option>
                                        <option value="I am ready to learn">I am ready to learn.</option>
                                        <option value="My positive thoughts create positive feelings">My positive
                                            thoughts create positive feelings.</option>
                                        <option value="I have people who love and respect me">I have people who love and
                                            respect me.</option>
                                        <option value="My confidence grows outside my comfort zone">My confidence grows
                                            outside my comfort zone.</option>
                                        <option value="Every day is a fresh start">Every day is a fresh start.</option>
                                        <option value="If I fall, I will get back up again">If I fall, I will get back
                                            up again.</option>
                                        <option value="I am whole">I am whole.</option>
                                        <option value="I only compare myself to myself">I only compare myself to myself.
                                        </option>
                                        <option value="I can do anything">I can do anything.</option>
                                        <option value="It is enough to do my best">It is enough to do my best.</option>
                                        <option value="I accept who I am">I accept who I am.</option>
                                        <option value="Today will be a good day">Today will be a good day.</option>
                                        <option value="It’s okay to make mistakes">It’s okay to make mistakes.</option>
                                        <option value="I am making the right choices">I am making the right choices.
                                        </option>
                                        <option value="I choose positive people">I choose positive people.</option>
                                        <option value="I am a product of my decisions">I am a product of my decisions.
                                        </option>
                                        <option value="I am strong and determined">I am strong and determined.</option>
                                        <option value="Today is my day">Today is my day.</option>
                                        <option value="I have inner beauty">I have inner beauty.</option>
                                        <option value="I have inner strength">I have inner strength.</option>
                                        <option value="I can live in the moment">I can live in the moment.</option>
                                        <option value="Anything is possible">Anything is possible.</option>
                                        <option value="I can take deep breaths">I can take deep breaths.</option>
                                        <option value="One step at a time">One step at a time.</option>
                                        <option value="I am feeling stronger">I am feeling stronger.</option>
                                        <option value="I am an original">I am an original.</option>
                                        <option value="I deserve all good things">I deserve all good things.</option>
                                        <option value="I am thankful for today">I am thankful for today.</option>
                                        <option value="I strive to do my best">I strive to do my best.</option>
                                        <option value="I'm going to push through">I'm going to push through.</option>
                                        <option value="When I let go, I feel better">When I let go, I feel better.
                                        </option>
                                        <option value="I’m working at my own pace">I’m working at my own pace.</option>
                                        <option value="I can take chances">I can take chances.</option>
                                        <option value="Today I am going to shine">Today I am going to shine.</option>
                                        <option value="I’m going to get through this">I’m going to get through this.
                                        </option>
                                        <option value="I am in control of my feelings">I am in control of my feelings.
                                        </option>
                                        <option value="I am calm and relaxed">I am calm and relaxed.</option>
                                        <option value="I’m working on myself">I’m working on myself.</option>
                                        <option value="I’m prepared to shine">I’m prepared to shine.</option>
                                        <option value="I am beautiful">I am beautiful.</option>
                                        <option value="My voice matters">My voice matters.</option>
                                        <option value="I accept me for me">I accept me for me.</option>
                                        <option value="I am building my future">I am building my future.</option>
                                        <option value="I’m starting a new chapter">I’m starting a new chapter.</option>
                                        <option value="I can change the world">I can change the world.</option>
                                        <option value="I trust my decisions">I trust my decisions.</option>
                                        <option value="I am not responsible for the actions of others">I am not
                                            responsible for the actions of others.</option>
                                        <option value="I am becoming the best version of myself">I am becoming the best
                                            version of myself.</option>
                                        <option value="There is no one better to be than myself">There is no one better
                                            to be than myself.</option>
                                    </select>
                                    <label for="affirmation3">Select 4th</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <span style="font-size: small;font-weight: 700;"
                                    class="text-danger">@error('affirmation322')This field is required.
                                    @enderror</span>
                                <div class="form-floating mb-3">
                                    <select class="form-select" wire:model="affirmation322" id="affirmation5"
                                        aria-label="Choose your positive affirmation">
                                        <option value="">Select 5th Positive Affirmation</option>
                                        <option value="I’ve got this">I’ve got this.</option>
                                        <option value="I am enough">I am enough.</option>
                                        <option value="I get better every single day">I get better every single day.
                                        </option>
                                        <option value="I am an amazing person">I am an amazing person.</option>
                                        <option value="I forgive myself for my mistakes">I forgive myself for my
                                            mistakes.</option>
                                        <option value="My challenges help me grow">My challenges help me grow.</option>
                                        <option value="I am perfect just the way I am">I am perfect just the way I am.
                                        </option>
                                        <option value="Today will be a great day">Today will be a great day.</option>
                                        <option value="I have courage and confidence">I have courage and confidence.
                                        </option>
                                        <option value="I can control my own happiness">I can control my own happiness.
                                        </option>
                                        <option value="Today I will walk through my fears">Today I will walk through my
                                            fears.</option>
                                        <option value="I stand up for my beliefs">I stand up for my beliefs.</option>
                                        <option value="I believe in my goals and dreams">I believe in my goals and
                                            dreams.</option>
                                        <option value="It’s okay not to know everything">It’s okay not to know
                                            everything.</option>
                                        <option value="Today I choose to think positive">Today I choose to think
                                            positive.</option>
                                        <option value="I can get through anything">I can get through anything.</option>
                                        <option value="I can do anything I put my mind to">I can do anything I put my
                                            mind to.</option>
                                        <option value="I am free to make my own choices">I am free to make my own
                                            choices.</option>
                                        <option value="I can do better next time">I can do better next time.</option>
                                        <option value="I have everything I need right now">I have everything I need
                                            right now.</option>
                                        <option value="I am capable of so much">I am capable of so much.</option>
                                        <option value="Everything will be okay">Everything will be okay.</option>
                                        <option value="I believe in myself">I believe in myself.</option>
                                        <option value="I am proud of myself">I am proud of myself.</option>
                                        <option value="I deserve to be happy">I deserve to be happy.</option>
                                        <option value="I deserve to be loved">I deserve to be loved.</option>
                                        <option value="I can make a difference">I can make a difference.</option>
                                        <option value="I am important">I am important.</option>
                                        <option value="I choose to be confident">I choose to be confident.</option>
                                        <option value="I am in charge of my life">I am in charge of my life.</option>
                                        <option value="I can make my dreams come true">I can make my dreams come true.
                                        </option>
                                        <option value="My voice has power">My voice has power.</option>
                                        <option value="I believe in my abilities">I believe in my abilities.</option>
                                        <option value="Good things will come to me">Good things will come to me.
                                        </option>
                                        <option value="I matter">I matter.</option>
                                        <option value="I am ready to learn">I am ready to learn.</option>
                                        <option value="My positive thoughts create positive feelings">My positive
                                            thoughts create positive feelings.</option>
                                        <option value="I have people who love and respect me">I have people who love and
                                            respect me.</option>
                                        <option value="My confidence grows outside my comfort zone">My confidence grows
                                            outside my comfort zone.</option>
                                        <option value="Every day is a fresh start">Every day is a fresh start.</option>
                                        <option value="If I fall, I will get back up again">If I fall, I will get back
                                            up again.</option>
                                        <option value="I am whole">I am whole.</option>
                                        <option value="I only compare myself to myself">I only compare myself to myself.
                                        </option>
                                        <option value="I can do anything">I can do anything.</option>
                                        <option value="It is enough to do my best">It is enough to do my best.</option>
                                        <option value="I accept who I am">I accept who I am.</option>
                                        <option value="Today will be a good day">Today will be a good day.</option>
                                        <option value="It’s okay to make mistakes">It’s okay to make mistakes.</option>
                                        <option value="I am making the right choices">I am making the right choices.
                                        </option>
                                        <option value="I choose positive people">I choose positive people.</option>
                                        <option value="I am a product of my decisions">I am a product of my decisions.
                                        </option>
                                        <option value="I am strong and determined">I am strong and determined.</option>
                                        <option value="Today is my day">Today is my day.</option>
                                        <option value="I have inner beauty">I have inner beauty.</option>
                                        <option value="I have inner strength">I have inner strength.</option>
                                        <option value="I can live in the moment">I can live in the moment.</option>
                                        <option value="Anything is possible">Anything is possible.</option>
                                        <option value="I can take deep breaths">I can take deep breaths.</option>
                                        <option value="One step at a time">One step at a time.</option>
                                        <option value="I am feeling stronger">I am feeling stronger.</option>
                                        <option value="I am an original">I am an original.</option>
                                        <option value="I deserve all good things">I deserve all good things.</option>
                                        <option value="I am thankful for today">I am thankful for today.</option>
                                        <option value="I strive to do my best">I strive to do my best.</option>
                                        <option value="I'm going to push through">I'm going to push through.</option>
                                        <option value="When I let go, I feel better">When I let go, I feel better.
                                        </option>
                                        <option value="I’m working at my own pace">I’m working at my own pace.</option>
                                        <option value="I can take chances">I can take chances.</option>
                                        <option value="Today I am going to shine">Today I am going to shine.</option>
                                        <option value="I’m going to get through this">I’m going to get through this.
                                        </option>
                                        <option value="I am in control of my feelings">I am in control of my feelings.
                                        </option>
                                        <option value="I am calm and relaxed">I am calm and relaxed.</option>
                                        <option value="I’m working on myself">I’m working on myself.</option>
                                        <option value="I’m prepared to shine">I’m prepared to shine.</option>
                                        <option value="I am beautiful">I am beautiful.</option>
                                        <option value="My voice matters">My voice matters.</option>
                                        <option value="I accept me for me">I accept me for me.</option>
                                        <option value="I am building my future">I am building my future.</option>
                                        <option value="I’m starting a new chapter">I’m starting a new chapter.</option>
                                        <option value="I can change the world">I can change the world.</option>
                                        <option value="I trust my decisions">I trust my decisions.</option>
                                        <option value="I am not responsible for the actions of others">I am not
                                            responsible for the actions of others.</option>
                                        <option value="I am becoming the best version of myself">I am becoming the best
                                            version of myself.</option>
                                        <option value="There is no one better to be than myself">There is no one better
                                            to be than myself.</option>
                                    </select>
                                    <label for="affirmation5">Select 5th</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <span style="font-size: small;font-weight: 700;"
                                    class="text-danger">@error('affirmation323')This field is required.
                                    @enderror</span>
                                <div class="form-floating mb-3">
                                    <select class="form-select" wire:model="affirmation323" id="affirmation6"
                                        aria-label="Choose your positive affirmation">
                                        <option value="">Select 6th Positive Affirmation</option>
                                        <option value="I’ve got this">I’ve got this.</option>
                                        <option value="I am enough">I am enough.</option>
                                        <option value="I get better every single day">I get better every single day.
                                        </option>
                                        <option value="I am an amazing person">I am an amazing person.</option>
                                        <option value="I forgive myself for my mistakes">I forgive myself for my
                                            mistakes.</option>
                                        <option value="My challenges help me grow">My challenges help me grow.</option>
                                        <option value="I am perfect just the way I am">I am perfect just the way I am.
                                        </option>
                                        <option value="Today will be a great day">Today will be a great day.</option>
                                        <option value="I have courage and confidence">I have courage and confidence.
                                        </option>
                                        <option value="I can control my own happiness">I can control my own happiness.
                                        </option>
                                        <option value="Today I will walk through my fears">Today I will walk through my
                                            fears.</option>
                                        <option value="I stand up for my beliefs">I stand up for my beliefs.</option>
                                        <option value="I believe in my goals and dreams">I believe in my goals and
                                            dreams.</option>
                                        <option value="It’s okay not to know everything">It’s okay not to know
                                            everything.</option>
                                        <option value="Today I choose to think positive">Today I choose to think
                                            positive.</option>
                                        <option value="I can get through anything">I can get through anything.</option>
                                        <option value="I can do anything I put my mind to">I can do anything I put my
                                            mind to.</option>
                                        <option value="I am free to make my own choices">I am free to make my own
                                            choices.</option>
                                        <option value="I can do better next time">I can do better next time.</option>
                                        <option value="I have everything I need right now">I have everything I need
                                            right now.</option>
                                        <option value="I am capable of so much">I am capable of so much.</option>
                                        <option value="Everything will be okay">Everything will be okay.</option>
                                        <option value="I believe in myself">I believe in myself.</option>
                                        <option value="I am proud of myself">I am proud of myself.</option>
                                        <option value="I deserve to be happy">I deserve to be happy.</option>
                                        <option value="I deserve to be loved">I deserve to be loved.</option>
                                        <option value="I can make a difference">I can make a difference.</option>
                                        <option value="I am important">I am important.</option>
                                        <option value="I choose to be confident">I choose to be confident.</option>
                                        <option value="I am in charge of my life">I am in charge of my life.</option>
                                        <option value="I can make my dreams come true">I can make my dreams come true.
                                        </option>
                                        <option value="My voice has power">My voice has power.</option>
                                        <option value="I believe in my abilities">I believe in my abilities.</option>
                                        <option value="Good things will come to me">Good things will come to me.
                                        </option>
                                        <option value="I matter">I matter.</option>
                                        <option value="I am ready to learn">I am ready to learn.</option>
                                        <option value="My positive thoughts create positive feelings">My positive
                                            thoughts create positive feelings.</option>
                                        <option value="I have people who love and respect me">I have people who love and
                                            respect me.</option>
                                        <option value="My confidence grows outside my comfort zone">My confidence grows
                                            outside my comfort zone.</option>
                                        <option value="Every day is a fresh start">Every day is a fresh start.</option>
                                        <option value="If I fall, I will get back up again">If I fall, I will get back
                                            up again.</option>
                                        <option value="I am whole">I am whole.</option>
                                        <option value="I only compare myself to myself">I only compare myself to myself.
                                        </option>
                                        <option value="I can do anything">I can do anything.</option>
                                        <option value="It is enough to do my best">It is enough to do my best.</option>
                                        <option value="I accept who I am">I accept who I am.</option>
                                        <option value="Today will be a good day">Today will be a good day.</option>
                                        <option value="It’s okay to make mistakes">It’s okay to make mistakes.</option>
                                        <option value="I am making the right choices">I am making the right choices.
                                        </option>
                                        <option value="I choose positive people">I choose positive people.</option>
                                        <option value="I am a product of my decisions">I am a product of my decisions.
                                        </option>
                                        <option value="I am strong and determined">I am strong and determined.</option>
                                        <option value="Today is my day">Today is my day.</option>
                                        <option value="I have inner beauty">I have inner beauty.</option>
                                        <option value="I have inner strength">I have inner strength.</option>
                                        <option value="I can live in the moment">I can live in the moment.</option>
                                        <option value="Anything is possible">Anything is possible.</option>
                                        <option value="I can take deep breaths">I can take deep breaths.</option>
                                        <option value="One step at a time">One step at a time.</option>
                                        <option value="I am feeling stronger">I am feeling stronger.</option>
                                        <option value="I am an original">I am an original.</option>
                                        <option value="I deserve all good things">I deserve all good things.</option>
                                        <option value="I am thankful for today">I am thankful for today.</option>
                                        <option value="I strive to do my best">I strive to do my best.</option>
                                        <option value="I'm going to push through">I'm going to push through.</option>
                                        <option value="When I let go, I feel better">When I let go, I feel better.
                                        </option>
                                        <option value="I’m working at my own pace">I’m working at my own pace.</option>
                                        <option value="I can take chances">I can take chances.</option>
                                        <option value="Today I am going to shine">Today I am going to shine.</option>
                                        <option value="I’m going to get through this">I’m going to get through this.
                                        </option>
                                        <option value="I am in control of my feelings">I am in control of my feelings.
                                        </option>
                                        <option value="I am calm and relaxed">I am calm and relaxed.</option>
                                        <option value="I’m working on myself">I’m working on myself.</option>
                                        <option value="I’m prepared to shine">I’m prepared to shine.</option>
                                        <option value="I am beautiful">I am beautiful.</option>
                                        <option value="My voice matters">My voice matters.</option>
                                        <option value="I accept me for me">I accept me for me.</option>
                                        <option value="I am building my future">I am building my future.</option>
                                        <option value="I’m starting a new chapter">I’m starting a new chapter.</option>
                                        <option value="I can change the world">I can change the world.</option>
                                        <option value="I trust my decisions">I trust my decisions.</option>
                                        <option value="I am not responsible for the actions of others">I am not
                                            responsible for the actions of others.</option>
                                        <option value="I am becoming the best version of myself">I am becoming the best
                                            version of myself.</option>
                                        <option value="There is no one better to be than myself">There is no one better
                                            to be than myself.</option>
                                    </select>
                                    <label for="affirmation3">Select 6th</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <span style="font-size: small;font-weight: 700;"
                                    class="text-danger">@error('affirmation324')This field is required.
                                    @enderror</span>
                                <div class="form-floating mb-3">
                                    <select class="form-select" wire:model="affirmation324" id="affirmation7"
                                        aria-label="Choose your positive affirmation">
                                        <option value="">Select 7th Positive Affirmation</option>
                                        <option value="I’ve got this">I’ve got this.</option>
                                        <option value="I am enough">I am enough.</option>
                                        <option value="I get better every single day">I get better every single day.
                                        </option>
                                        <option value="I am an amazing person">I am an amazing person.</option>
                                        <option value="I forgive myself for my mistakes">I forgive myself for my
                                            mistakes.</option>
                                        <option value="My challenges help me grow">My challenges help me grow.</option>
                                        <option value="I am perfect just the way I am">I am perfect just the way I am.
                                        </option>
                                        <option value="Today will be a great day">Today will be a great day.</option>
                                        <option value="I have courage and confidence">I have courage and confidence.
                                        </option>
                                        <option value="I can control my own happiness">I can control my own happiness.
                                        </option>
                                        <option value="Today I will walk through my fears">Today I will walk through my
                                            fears.</option>
                                        <option value="I stand up for my beliefs">I stand up for my beliefs.</option>
                                        <option value="I believe in my goals and dreams">I believe in my goals and
                                            dreams.</option>
                                        <option value="It’s okay not to know everything">It’s okay not to know
                                            everything.</option>
                                        <option value="Today I choose to think positive">Today I choose to think
                                            positive.</option>
                                        <option value="I can get through anything">I can get through anything.</option>
                                        <option value="I can do anything I put my mind to">I can do anything I put my
                                            mind to.</option>
                                        <option value="I am free to make my own choices">I am free to make my own
                                            choices.</option>
                                        <option value="I can do better next time">I can do better next time.</option>
                                        <option value="I have everything I need right now">I have everything I need
                                            right now.</option>
                                        <option value="I am capable of so much">I am capable of so much.</option>
                                        <option value="Everything will be okay">Everything will be okay.</option>
                                        <option value="I believe in myself">I believe in myself.</option>
                                        <option value="I am proud of myself">I am proud of myself.</option>
                                        <option value="I deserve to be happy">I deserve to be happy.</option>
                                        <option value="I deserve to be loved">I deserve to be loved.</option>
                                        <option value="I can make a difference">I can make a difference.</option>
                                        <option value="I am important">I am important.</option>
                                        <option value="I choose to be confident">I choose to be confident.</option>
                                        <option value="I am in charge of my life">I am in charge of my life.</option>
                                        <option value="I can make my dreams come true">I can make my dreams come true.
                                        </option>
                                        <option value="My voice has power">My voice has power.</option>
                                        <option value="I believe in my abilities">I believe in my abilities.</option>
                                        <option value="Good things will come to me">Good things will come to me.
                                        </option>
                                        <option value="I matter">I matter.</option>
                                        <option value="I am ready to learn">I am ready to learn.</option>
                                        <option value="My positive thoughts create positive feelings">My positive
                                            thoughts create positive feelings.</option>
                                        <option value="I have people who love and respect me">I have people who love and
                                            respect me.</option>
                                        <option value="My confidence grows outside my comfort zone">My confidence grows
                                            outside my comfort zone.</option>
                                        <option value="Every day is a fresh start">Every day is a fresh start.</option>
                                        <option value="If I fall, I will get back up again">If I fall, I will get back
                                            up again.</option>
                                        <option value="I am whole">I am whole.</option>
                                        <option value="I only compare myself to myself">I only compare myself to myself.
                                        </option>
                                        <option value="I can do anything">I can do anything.</option>
                                        <option value="It is enough to do my best">It is enough to do my best.</option>
                                        <option value="I accept who I am">I accept who I am.</option>
                                        <option value="Today will be a good day">Today will be a good day.</option>
                                        <option value="It’s okay to make mistakes">It’s okay to make mistakes.</option>
                                        <option value="I am making the right choices">I am making the right choices.
                                        </option>
                                        <option value="I choose positive people">I choose positive people.</option>
                                        <option value="I am a product of my decisions">I am a product of my decisions.
                                        </option>
                                        <option value="I am strong and determined">I am strong and determined.</option>
                                        <option value="Today is my day">Today is my day.</option>
                                        <option value="I have inner beauty">I have inner beauty.</option>
                                        <option value="I have inner strength">I have inner strength.</option>
                                        <option value="I can live in the moment">I can live in the moment.</option>
                                        <option value="Anything is possible">Anything is possible.</option>
                                        <option value="I can take deep breaths">I can take deep breaths.</option>
                                        <option value="One step at a time">One step at a time.</option>
                                        <option value="I am feeling stronger">I am feeling stronger.</option>
                                        <option value="I am an original">I am an original.</option>
                                        <option value="I deserve all good things">I deserve all good things.</option>
                                        <option value="I am thankful for today">I am thankful for today.</option>
                                        <option value="I strive to do my best">I strive to do my best.</option>
                                        <option value="I'm going to push through">I'm going to push through.</option>
                                        <option value="When I let go, I feel better">When I let go, I feel better.
                                        </option>
                                        <option value="I’m working at my own pace">I’m working at my own pace.</option>
                                        <option value="I can take chances">I can take chances.</option>
                                        <option value="Today I am going to shine">Today I am going to shine.</option>
                                        <option value="I’m going to get through this">I’m going to get through this.
                                        </option>
                                        <option value="I am in control of my feelings">I am in control of my feelings.
                                        </option>
                                        <option value="I am calm and relaxed">I am calm and relaxed.</option>
                                        <option value="I’m working on myself">I’m working on myself.</option>
                                        <option value="I’m prepared to shine">I’m prepared to shine.</option>
                                        <option value="I am beautiful">I am beautiful.</option>
                                        <option value="My voice matters">My voice matters.</option>
                                        <option value="I accept me for me">I accept me for me.</option>
                                        <option value="I am building my future">I am building my future.</option>
                                        <option value="I’m starting a new chapter">I’m starting a new chapter.</option>
                                        <option value="I can change the world">I can change the world.</option>
                                        <option value="I trust my decisions">I trust my decisions.</option>
                                        <option value="I am not responsible for the actions of others">I am not
                                            responsible for the actions of others.</option>
                                        <option value="I am becoming the best version of myself">I am becoming the best
                                            version of myself.</option>
                                        <option value="There is no one better to be than myself">There is no one better
                                            to be than myself.</option>
                                    </select>
                                    <label for="affirmation7">Select 7th</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <span style="font-size: small;font-weight: 700;"
                                    class="text-danger">@error('affirmation325')This field is required.
                                    @enderror</span>
                                <div class="form-floating mb-3">
                                    <select class="form-select" wire:model="affirmation325" id="affirmation8"
                                        aria-label="Choose your positive affirmation">
                                        <option value="">Select 8th Positive Affirmation</option>
                                        <option value="I’ve got this">I’ve got this.</option>
                                        <option value="I am enough">I am enough.</option>
                                        <option value="I get better every single day">I get better every single day.
                                        </option>
                                        <option value="I am an amazing person">I am an amazing person.</option>
                                        <option value="I forgive myself for my mistakes">I forgive myself for my
                                            mistakes.</option>
                                        <option value="My challenges help me grow">My challenges help me grow.</option>
                                        <option value="I am perfect just the way I am">I am perfect just the way I am.
                                        </option>
                                        <option value="Today will be a great day">Today will be a great day.</option>
                                        <option value="I have courage and confidence">I have courage and confidence.
                                        </option>
                                        <option value="I can control my own happiness">I can control my own happiness.
                                        </option>
                                        <option value="Today I will walk through my fears">Today I will walk through my
                                            fears.</option>
                                        <option value="I stand up for my beliefs">I stand up for my beliefs.</option>
                                        <option value="I believe in my goals and dreams">I believe in my goals and
                                            dreams.</option>
                                        <option value="It’s okay not to know everything">It’s okay not to know
                                            everything.</option>
                                        <option value="Today I choose to think positive">Today I choose to think
                                            positive.</option>
                                        <option value="I can get through anything">I can get through anything.</option>
                                        <option value="I can do anything I put my mind to">I can do anything I put my
                                            mind to.</option>
                                        <option value="I am free to make my own choices">I am free to make my own
                                            choices.</option>
                                        <option value="I can do better next time">I can do better next time.</option>
                                        <option value="I have everything I need right now">I have everything I need
                                            right now.</option>
                                        <option value="I am capable of so much">I am capable of so much.</option>
                                        <option value="Everything will be okay">Everything will be okay.</option>
                                        <option value="I believe in myself">I believe in myself.</option>
                                        <option value="I am proud of myself">I am proud of myself.</option>
                                        <option value="I deserve to be happy">I deserve to be happy.</option>
                                        <option value="I deserve to be loved">I deserve to be loved.</option>
                                        <option value="I can make a difference">I can make a difference.</option>
                                        <option value="I am important">I am important.</option>
                                        <option value="I choose to be confident">I choose to be confident.</option>
                                        <option value="I am in charge of my life">I am in charge of my life.</option>
                                        <option value="I can make my dreams come true">I can make my dreams come true.
                                        </option>
                                        <option value="My voice has power">My voice has power.</option>
                                        <option value="I believe in my abilities">I believe in my abilities.</option>
                                        <option value="Good things will come to me">Good things will come to me.
                                        </option>
                                        <option value="I matter">I matter.</option>
                                        <option value="I am ready to learn">I am ready to learn.</option>
                                        <option value="My positive thoughts create positive feelings">My positive
                                            thoughts create positive feelings.</option>
                                        <option value="I have people who love and respect me">I have people who love and
                                            respect me.</option>
                                        <option value="My confidence grows outside my comfort zone">My confidence grows
                                            outside my comfort zone.</option>
                                        <option value="Every day is a fresh start">Every day is a fresh start.</option>
                                        <option value="If I fall, I will get back up again">If I fall, I will get back
                                            up again.</option>
                                        <option value="I am whole">I am whole.</option>
                                        <option value="I only compare myself to myself">I only compare myself to myself.
                                        </option>
                                        <option value="I can do anything">I can do anything.</option>
                                        <option value="It is enough to do my best">It is enough to do my best.</option>
                                        <option value="I accept who I am">I accept who I am.</option>
                                        <option value="Today will be a good day">Today will be a good day.</option>
                                        <option value="It’s okay to make mistakes">It’s okay to make mistakes.</option>
                                        <option value="I am making the right choices">I am making the right choices.
                                        </option>
                                        <option value="I choose positive people">I choose positive people.</option>
                                        <option value="I am a product of my decisions">I am a product of my decisions.
                                        </option>
                                        <option value="I am strong and determined">I am strong and determined.</option>
                                        <option value="Today is my day">Today is my day.</option>
                                        <option value="I have inner beauty">I have inner beauty.</option>
                                        <option value="I have inner strength">I have inner strength.</option>
                                        <option value="I can live in the moment">I can live in the moment.</option>
                                        <option value="Anything is possible">Anything is possible.</option>
                                        <option value="I can take deep breaths">I can take deep breaths.</option>
                                        <option value="One step at a time">One step at a time.</option>
                                        <option value="I am feeling stronger">I am feeling stronger.</option>
                                        <option value="I am an original">I am an original.</option>
                                        <option value="I deserve all good things">I deserve all good things.</option>
                                        <option value="I am thankful for today">I am thankful for today.</option>
                                        <option value="I strive to do my best">I strive to do my best.</option>
                                        <option value="I'm going to push through">I'm going to push through.</option>
                                        <option value="When I let go, I feel better">When I let go, I feel better.
                                        </option>
                                        <option value="I’m working at my own pace">I’m working at my own pace.</option>
                                        <option value="I can take chances">I can take chances.</option>
                                        <option value="Today I am going to shine">Today I am going to shine.</option>
                                        <option value="I’m going to get through this">I’m going to get through this.
                                        </option>
                                        <option value="I am in control of my feelings">I am in control of my feelings.
                                        </option>
                                        <option value="I am calm and relaxed">I am calm and relaxed.</option>
                                        <option value="I’m working on myself">I’m working on myself.</option>
                                        <option value="I’m prepared to shine">I’m prepared to shine.</option>
                                        <option value="I am beautiful">I am beautiful.</option>
                                        <option value="My voice matters">My voice matters.</option>
                                        <option value="I accept me for me">I accept me for me.</option>
                                        <option value="I am building my future">I am building my future.</option>
                                        <option value="I’m starting a new chapter">I’m starting a new chapter.</option>
                                        <option value="I can change the world">I can change the world.</option>
                                        <option value="I trust my decisions">I trust my decisions.</option>
                                        <option value="I am not responsible for the actions of others">I am not
                                            responsible for the actions of others.</option>
                                        <option value="I am becoming the best version of myself">I am becoming the best
                                            version of myself.</option>
                                        <option value="There is no one better to be than myself">There is no one better
                                            to be than myself.</option>
                                    </select>
                                    <label for="affirmation3">Select 8th</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <span style="font-size: small;font-weight: 700;"
                                    class="text-danger">@error('affirmation326')This field is required.
                                    @enderror</span>
                                <div class="form-floating mb-3">
                                    <select class="form-select" wire:model="affirmation326" id="affirmation9"
                                        aria-label="Choose your positive affirmation">
                                        <option value="">Select 9th Positive Affirmation</option>
                                        <option value="I’ve got this">I’ve got this.</option>
                                        <option value="I am enough">I am enough.</option>
                                        <option value="I get better every single day">I get better every single day.
                                        </option>
                                        <option value="I am an amazing person">I am an amazing person.</option>
                                        <option value="I forgive myself for my mistakes">I forgive myself for my
                                            mistakes.</option>
                                        <option value="My challenges help me grow">My challenges help me grow.</option>
                                        <option value="I am perfect just the way I am">I am perfect just the way I am.
                                        </option>
                                        <option value="Today will be a great day">Today will be a great day.</option>
                                        <option value="I have courage and confidence">I have courage and confidence.
                                        </option>
                                        <option value="I can control my own happiness">I can control my own happiness.
                                        </option>
                                        <option value="Today I will walk through my fears">Today I will walk through my
                                            fears.</option>
                                        <option value="I stand up for my beliefs">I stand up for my beliefs.</option>
                                        <option value="I believe in my goals and dreams">I believe in my goals and
                                            dreams.</option>
                                        <option value="It’s okay not to know everything">It’s okay not to know
                                            everything.</option>
                                        <option value="Today I choose to think positive">Today I choose to think
                                            positive.</option>
                                        <option value="I can get through anything">I can get through anything.</option>
                                        <option value="I can do anything I put my mind to">I can do anything I put my
                                            mind to.</option>
                                        <option value="I am free to make my own choices">I am free to make my own
                                            choices.</option>
                                        <option value="I can do better next time">I can do better next time.</option>
                                        <option value="I have everything I need right now">I have everything I need
                                            right now.</option>
                                        <option value="I am capable of so much">I am capable of so much.</option>
                                        <option value="Everything will be okay">Everything will be okay.</option>
                                        <option value="I believe in myself">I believe in myself.</option>
                                        <option value="I am proud of myself">I am proud of myself.</option>
                                        <option value="I deserve to be happy">I deserve to be happy.</option>
                                        <option value="I deserve to be loved">I deserve to be loved.</option>
                                        <option value="I can make a difference">I can make a difference.</option>
                                        <option value="I am important">I am important.</option>
                                        <option value="I choose to be confident">I choose to be confident.</option>
                                        <option value="I am in charge of my life">I am in charge of my life.</option>
                                        <option value="I can make my dreams come true">I can make my dreams come true.
                                        </option>
                                        <option value="My voice has power">My voice has power.</option>
                                        <option value="I believe in my abilities">I believe in my abilities.</option>
                                        <option value="Good things will come to me">Good things will come to me.
                                        </option>
                                        <option value="I matter">I matter.</option>
                                        <option value="I am ready to learn">I am ready to learn.</option>
                                        <option value="My positive thoughts create positive feelings">My positive
                                            thoughts create positive feelings.</option>
                                        <option value="I have people who love and respect me">I have people who love and
                                            respect me.</option>
                                        <option value="My confidence grows outside my comfort zone">My confidence grows
                                            outside my comfort zone.</option>
                                        <option value="Every day is a fresh start">Every day is a fresh start.</option>
                                        <option value="If I fall, I will get back up again">If I fall, I will get back
                                            up again.</option>
                                        <option value="I am whole">I am whole.</option>
                                        <option value="I only compare myself to myself">I only compare myself to myself.
                                        </option>
                                        <option value="I can do anything">I can do anything.</option>
                                        <option value="It is enough to do my best">It is enough to do my best.</option>
                                        <option value="I accept who I am">I accept who I am.</option>
                                        <option value="Today will be a good day">Today will be a good day.</option>
                                        <option value="It’s okay to make mistakes">It’s okay to make mistakes.</option>
                                        <option value="I am making the right choices">I am making the right choices.
                                        </option>
                                        <option value="I choose positive people">I choose positive people.</option>
                                        <option value="I am a product of my decisions">I am a product of my decisions.
                                        </option>
                                        <option value="I am strong and determined">I am strong and determined.</option>
                                        <option value="Today is my day">Today is my day.</option>
                                        <option value="I have inner beauty">I have inner beauty.</option>
                                        <option value="I have inner strength">I have inner strength.</option>
                                        <option value="I can live in the moment">I can live in the moment.</option>
                                        <option value="Anything is possible">Anything is possible.</option>
                                        <option value="I can take deep breaths">I can take deep breaths.</option>
                                        <option value="One step at a time">One step at a time.</option>
                                        <option value="I am feeling stronger">I am feeling stronger.</option>
                                        <option value="I am an original">I am an original.</option>
                                        <option value="I deserve all good things">I deserve all good things.</option>
                                        <option value="I am thankful for today">I am thankful for today.</option>
                                        <option value="I strive to do my best">I strive to do my best.</option>
                                        <option value="I'm going to push through">I'm going to push through.</option>
                                        <option value="When I let go, I feel better">When I let go, I feel better.
                                        </option>
                                        <option value="I’m working at my own pace">I’m working at my own pace.</option>
                                        <option value="I can take chances">I can take chances.</option>
                                        <option value="Today I am going to shine">Today I am going to shine.</option>
                                        <option value="I’m going to get through this">I’m going to get through this.
                                        </option>
                                        <option value="I am in control of my feelings">I am in control of my feelings.
                                        </option>
                                        <option value="I am calm and relaxed">I am calm and relaxed.</option>
                                        <option value="I’m working on myself">I’m working on myself.</option>
                                        <option value="I’m prepared to shine">I’m prepared to shine.</option>
                                        <option value="I am beautiful">I am beautiful.</option>
                                        <option value="My voice matters">My voice matters.</option>
                                        <option value="I accept me for me">I accept me for me.</option>
                                        <option value="I am building my future">I am building my future.</option>
                                        <option value="I’m starting a new chapter">I’m starting a new chapter.</option>
                                        <option value="I can change the world">I can change the world.</option>
                                        <option value="I trust my decisions">I trust my decisions.</option>
                                        <option value="I am not responsible for the actions of others">I am not
                                            responsible for the actions of others.</option>
                                        <option value="I am becoming the best version of myself">I am becoming the best
                                            version of myself.</option>
                                        <option value="There is no one better to be than myself">There is no one better
                                            to be than myself.</option>
                                    </select>
                                    <label for="affirmation9">Select 9th</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <span style="font-size: small;font-weight: 700;"
                                    class="text-danger">@error('affirmation327')This field is required.
                                    @enderror</span>
                                <div class="form-floating mb-3">
                                    <select class="form-select" wire:model="affirmation327" id="affirmation10"
                                        aria-label="Choose your positive affirmation">
                                        <option value="">Select 10th Positive Affirmation</option>
                                        <option value="I’ve got this">I’ve got this.</option>
                                        <option value="I am enough">I am enough.</option>
                                        <option value="I get better every single day">I get better every single day.
                                        </option>
                                        <option value="I am an amazing person">I am an amazing person.</option>
                                        <option value="I forgive myself for my mistakes">I forgive myself for my
                                            mistakes.</option>
                                        <option value="My challenges help me grow">My challenges help me grow.</option>
                                        <option value="I am perfect just the way I am">I am perfect just the way I am.
                                        </option>
                                        <option value="Today will be a great day">Today will be a great day.</option>
                                        <option value="I have courage and confidence">I have courage and confidence.
                                        </option>
                                        <option value="I can control my own happiness">I can control my own happiness.
                                        </option>
                                        <option value="Today I will walk through my fears">Today I will walk through my
                                            fears.</option>
                                        <option value="I stand up for my beliefs">I stand up for my beliefs.</option>
                                        <option value="I believe in my goals and dreams">I believe in my goals and
                                            dreams.</option>
                                        <option value="It’s okay not to know everything">It’s okay not to know
                                            everything.</option>
                                        <option value="Today I choose to think positive">Today I choose to think
                                            positive.</option>
                                        <option value="I can get through anything">I can get through anything.</option>
                                        <option value="I can do anything I put my mind to">I can do anything I put my
                                            mind to.</option>
                                        <option value="I am free to make my own choices">I am free to make my own
                                            choices.</option>
                                        <option value="I can do better next time">I can do better next time.</option>
                                        <option value="I have everything I need right now">I have everything I need
                                            right now.</option>
                                        <option value="I am capable of so much">I am capable of so much.</option>
                                        <option value="Everything will be okay">Everything will be okay.</option>
                                        <option value="I believe in myself">I believe in myself.</option>
                                        <option value="I am proud of myself">I am proud of myself.</option>
                                        <option value="I deserve to be happy">I deserve to be happy.</option>
                                        <option value="I deserve to be loved">I deserve to be loved.</option>
                                        <option value="I can make a difference">I can make a difference.</option>
                                        <option value="I am important">I am important.</option>
                                        <option value="I choose to be confident">I choose to be confident.</option>
                                        <option value="I am in charge of my life">I am in charge of my life.</option>
                                        <option value="I can make my dreams come true">I can make my dreams come true.
                                        </option>
                                        <option value="My voice has power">My voice has power.</option>
                                        <option value="I believe in my abilities">I believe in my abilities.</option>
                                        <option value="Good things will come to me">Good things will come to me.
                                        </option>
                                        <option value="I matter">I matter.</option>
                                        <option value="I am ready to learn">I am ready to learn.</option>
                                        <option value="My positive thoughts create positive feelings">My positive
                                            thoughts create positive feelings.</option>
                                        <option value="I have people who love and respect me">I have people who love and
                                            respect me.</option>
                                        <option value="My confidence grows outside my comfort zone">My confidence grows
                                            outside my comfort zone.</option>
                                        <option value="Every day is a fresh start">Every day is a fresh start.</option>
                                        <option value="If I fall, I will get back up again">If I fall, I will get back
                                            up again.</option>
                                        <option value="I am whole">I am whole.</option>
                                        <option value="I only compare myself to myself">I only compare myself to myself.
                                        </option>
                                        <option value="I can do anything">I can do anything.</option>
                                        <option value="It is enough to do my best">It is enough to do my best.</option>
                                        <option value="I accept who I am">I accept who I am.</option>
                                        <option value="Today will be a good day">Today will be a good day.</option>
                                        <option value="It’s okay to make mistakes">It’s okay to make mistakes.</option>
                                        <option value="I am making the right choices">I am making the right choices.
                                        </option>
                                        <option value="I choose positive people">I choose positive people.</option>
                                        <option value="I am a product of my decisions">I am a product of my decisions.
                                        </option>
                                        <option value="I am strong and determined">I am strong and determined.</option>
                                        <option value="Today is my day">Today is my day.</option>
                                        <option value="I have inner beauty">I have inner beauty.</option>
                                        <option value="I have inner strength">I have inner strength.</option>
                                        <option value="I can live in the moment">I can live in the moment.</option>
                                        <option value="Anything is possible">Anything is possible.</option>
                                        <option value="I can take deep breaths">I can take deep breaths.</option>
                                        <option value="One step at a time">One step at a time.</option>
                                        <option value="I am feeling stronger">I am feeling stronger.</option>
                                        <option value="I am an original">I am an original.</option>
                                        <option value="I deserve all good things">I deserve all good things.</option>
                                        <option value="I am thankful for today">I am thankful for today.</option>
                                        <option value="I strive to do my best">I strive to do my best.</option>
                                        <option value="I'm going to push through">I'm going to push through.</option>
                                        <option value="When I let go, I feel better">When I let go, I feel better.
                                        </option>
                                        <option value="I’m working at my own pace">I’m working at my own pace.</option>
                                        <option value="I can take chances">I can take chances.</option>
                                        <option value="Today I am going to shine">Today I am going to shine.</option>
                                        <option value="I’m going to get through this">I’m going to get through this.
                                        </option>
                                        <option value="I am in control of my feelings">I am in control of my feelings.
                                        </option>
                                        <option value="I am calm and relaxed">I am calm and relaxed.</option>
                                        <option value="I’m working on myself">I’m working on myself.</option>
                                        <option value="I’m prepared to shine">I’m prepared to shine.</option>
                                        <option value="I am beautiful">I am beautiful.</option>
                                        <option value="My voice matters">My voice matters.</option>
                                        <option value="I accept me for me">I accept me for me.</option>
                                        <option value="I am building my future">I am building my future.</option>
                                        <option value="I’m starting a new chapter">I’m starting a new chapter.</option>
                                        <option value="I can change the world">I can change the world.</option>
                                        <option value="I trust my decisions">I trust my decisions.</option>
                                        <option value="I am not responsible for the actions of others">I am not
                                            responsible for the actions of others.</option>
                                        <option value="I am becoming the best version of myself">I am becoming the best
                                            version of myself.</option>
                                        <option value="There is no one better to be than myself">There is no one better
                                            to be than myself.</option>
                                    </select>
                                    <label for="affirmation10">Select 10th</label>
                                </div>
                            </div>

                        </div>

                    </div>
                @endif

                @if ($currentstep == 6)
                    <h1 class="blue handwritten">Topic 07: Self-esteem<br><small>Looking Forward</small></h1>

                    <div class="content-container m-5">

                        <div class="row mb-5">

                            <h2 class="blue handwritten mb-5">It’s important to remember that whilst we can’t change
                                what has happened in the past, our difficult experiences do not define who we are, and
                                we have positive things to look forward to in the future.</h2>


                            <div class="col-md-4">
                                <p>On the trunk of the tree wirte down some positive things in your life at the moment.
                                </p>
                                <p>In the lower branches write down some things you are looking forward to in the next
                                    few years and how you hope to feel.</p>
                                <p>In the upper branches write hopes and dreams for the future and how you hope to feel.
                                </p>
                            </div>

                            <div class="col-md-7 offset-md-1">
                                <span style="font-size: small;font-weight: 700;"
                                    class="text-danger">@error('tree328')This field is required.
                                    @enderror</span>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" wire:model="tree328" placeholder="Hopes and dreams for the future."
                                        id="tree1"
                                        style="height: 150px; background-position: center; background-image: url('https://www.westmerciawomensaid.org/crm/img/tree-3.jpg'); background-repeat: no-repeat; background-size: 500px auto;"></textarea>
                                    <label for="tree1">Hopes and dreams for the future.</label>
                                </div>
                                <span style="font-size: small;font-weight: 700;"
                                    class="text-danger">@error('tree329')This field is required.
                                    @enderror</span>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" wire:model="tree329" placeholder="Things you are looking forward to."
                                        id="tree2"
                                        style="height: 150px; background-position: center; background-image: url('https://www.westmerciawomensaid.org/crm/img/tree-2.jpg'); background-repeat: no-repeat; background-size: 500px auto;"></textarea>
                                    <label for="tree2">Things you are looking forward to.</label>
                                </div>
                                <span style="font-size: small;font-weight: 700;"
                                    class="text-danger">@error('tree330')This field is required.
                                    @enderror</span>
                                <div class="form-floating">
                                    <textarea class="form-control" wire:model="tree330"
                                        placeholder="Positive things in your life at the moment." id="tree3"
                                        style="height: 150px; background-position: center; background-image: url('https://www.westmerciawomensaid.org/crm/img/tree-1.jpg'); background-repeat: no-repeat; background-size: 500px auto;"></textarea>
                                    <label for="tree3">Positive things in your life at the moment.</label>
                                </div>

                            </div>

                        </div>

                    </div>
                @endif

                @if ($currentstep == 7)
                    <div class="step-five">
                        <div class="form-group">
                            <div class="spinner">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                            <p>
                                All finished!
                                <br>
                                Please press Submit/Continue to ensure your responses are submitted
                            </p>
                            <h4 style="text-align: center">Thank You</h4>

                            <p style="text-align: center">Thank you for completing Topic 07!</p>

                        </div>
                    </div>
                @endif

                @if ($currentstep <= 6)

                    <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end next"
                        wire:click="increaseStep()">Next</button>
                @endif

                @if ($currentstep > 1 && $currentstep <= 6)
                    <button type="button" class="btn btn-save mt-3 float-start state">Save/Exit</button>
                    <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end"
                        wire:click="decreaseStep()" style="margin-right: 5px;">Back</button>

                @endif
                
                @if ($currentstep == 7)

                    <button type="submit" class="btn btn-primary btn-sm mt-3 mr-2 float-end">Submit</button>
                    {{-- <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end" wire:click="decreaseStep()" style="margin-right: 5px;">Back</button> --}}
                @endif

            </form>
        </div>
    </div>
</div>
