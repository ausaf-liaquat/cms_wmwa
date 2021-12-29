@extends('User.layouts.master')
@section('title')
    Introduction - Workbook
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-9">
                    <h2>Youth Workbook</h2>
                </div>
                <div class="col-md-3">
                    <div class="text-end">01% Completed | Section 1 of 6</div>
                    {{-- <div class="progress mt-2" style="height: 10px;">
                              <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                          </div> --}}
                    <div class="progress my-2" style="height: 10px;">
                        <div class="progress-bar" role="progressbar" style="" aria-valuenow="01" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="card float-none workbook">


                <div class="card-body">
                    <form id="workbook_form" name="workbook_form" method="post">
                        @foreach ($workbook->questions as $item)


                            <fieldset>

                                @if ($item->option_type == 'introduction_1')
                                    <input type="hidden" name="question[{{ $item->id }}]"
                                        id="question{{ $item->id }}" value="{{ $item->id }}">
                                    <div class="content-container m-5">
                                        <h1 class="blue handwritten topic-title text-center"><small>Fermentum
                                                Tellus...</small><br>Youth Workbook</h1>

                                    </div>
                                    <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                    <input type="button"
                                        class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                        value="Next" />

                                    <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end previous "
                                        style="    margin-right: 5px;" value="Previous" />
                                @elseif ($item->option_type=='introduction_groundrules')

                                    <input type="hidden" name="question[{{ $item->id }}]"
                                        id="question{{ $item->id }}" value="{{ $item->id }}">
                                    <h1 class="blue handwritten">Ground Rules </h1>

                                    <div class="content-container m-5">
                                        <div class="help">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><i class="bi bi-check-lg workbook-icon"></i>
                                                    Some things we talk about might be difficult or upsetting to think about
                                                    – it’s okay if you need to take a break, or want to talk about something
                                                    in more detail.</li>
                                                <li class="list-group-item"><i class="bi bi-check-lg workbook-icon"></i> You
                                                    are very welcome to share ideas and questions.</li>
                                                <li class="list-group-item"><i class="bi bi-check-lg workbook-icon"></i>
                                                    There is no pressure to share anything personal or private.</li>
                                                <li class="list-group-item"><i class="bi bi-check-lg workbook-icon"></i> If
                                                    you would like some help, or someone to talk to, let your support worker
                                                    know.</li>
                                                <li class="list-group-item"><i class="bi bi-check-lg workbook-icon"></i>
                                                    Confidentiality – our sessions will remain confidential, unless you
                                                    disclose that you, or someone else, is at risk of, or suffering, harm,
                                                    or that a crime has been committed. Your worker has a duty to pass this
                                                    on to any necessary people and services, to keep you and other people
                                                    safe.</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                    <input type="button"
                                        class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                        value="Next" />

                                    <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end previous "
                                        style="    margin-right: 5px;" value="Previous" />
                                @elseif ($item->option_type=='introduction_workingagreement')
                                    <input type="hidden" name="question[{{ $item->id }}]"
                                        id="question{{ $item->id }}" value="{{ $item->id }}">
                                    <h1 class="blue handwritten">Working Agreemennt </h1>

                                    <div class="content-container m-5">
                                        @foreach ($item->WorkbookQuestionniare as $list)

                                            <div class="question mb-3">
                                                <input type="hidden" name="question{{ $list->id }}"
                                                    id="dtquestion{{ $list->id }}" value="{{ $list->id }}">
                                                <span class="question text-right">{{ $list->quest_title }}</span>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control"
                                                        id="session_days{{ $list->id }}" placeholder="" required>
                                                    <label for="session-days">Your Answer</label>
                                                </div>
                                            </div>

                                        @endforeach

                                    </div>

                                    <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                    <input type="button"
                                        class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                        value="Next" />

                                    <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end previous "
                                        style="    margin-right: 5px;" value="Previous" />
                                @elseif ($item->option_type == 'introduction_outcomes')
                                    <h1 class="blue handwritten">Outcomes</h1>

                                    <div class="content-container m-5">

                                        <div class="help text-center mb-5">
                                            <h2 class="m-0 p-0 handwritten blue">Read the questions below and score yourself
                                                on a scale from 1-5.<br>1 is ‘No, never’, 5 is ‘Yes, always’.</h2>
                                        </div>
                                        <input type="hidden" name="quest" id="question{{ $item->id }}"
                                            value="{{ $item->id }}">
                                        @foreach ($item->WorkbookQuestionniare as $list)
                                            <div class="section mb-4">
                                                <input type="hidden" name="quest" id="dtquestion{{ $list->id }}"
                                                    value="{{ $list->id }}">

                                                {!! $list->quest_title !!}
                                                <input type="range" name="safety{{ $list->id }}" class="form-range"
                                                    min="0" max="4" id="safety{{ $list->id }}" required>
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">1 - No Never</span>
                                                    <span class="slider-no">2</span>
                                                    <span class="slider-no">3</span>
                                                    <span class="slider-no">4</span>
                                                    <span class="slider-label">5 - Yes, always</span>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input type="text" name="detail{{ $list->id }}"
                                                                class="form-control" id="detail{{ $list->id }}"
                                                                placeholder="" required>
                                                            <label for="detail">Details</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input type="text" name="action{{ $list->id }}"
                                                                class="form-control" id="action{{ $list->id }}"
                                                                placeholder="" required>
                                                            <label for="action">Action Agreed</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input type="text" name="by_who{{ $list->id }}"
                                                                class="form-control" id="by_who{{ $list->id }}"
                                                                placeholder="" required>
                                                            <label for="by_who">By who/When</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>

                                    <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>


                                    <input type="button"
                                        class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                        value="Topic 1" />

                                    <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end previous "
                                        style="    margin-right: 5px;" value="Previous" />


                                @elseif ($item->option_type == 'topic1_abuse')
                                    <div class="content-container m-5 ">

                                        <h1 class="blue handwritten topic-title text-center"><small>Topic
                                                One...</small><br>What Is Abuse?</h1>
                                        <input type="hidden" name="question[{{ $item->id }}]"
                                            id="question{{ $item->id }}" value="{{ $item->id }}">
                                    </div>
                                    <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                    <input type="button"
                                        class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                        value="Next" />

                                    <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end previous "
                                        style="    margin-right: 5px;" value="Previous" />

                                @elseif ($item->option_type == 'topic1_introduction')
                                    <input type="hidden" name="question[{{ $item->id }}]"
                                        id="question{{ $item->id }}" value="{{ $item->id }}">
                                    <h1 class="blue handwritten">Topic 01: What is Abuse?<br><small>Introduction</small>
                                    </h1>
                                    <div class="content-container m-5">

                                        <p>Domestic abuse centres around two things: POWER and CONTROL. An abusive
                                            relationship is where one person has power and control over another person -
                                            there is an imbalance of power.</p>
                                        <p>We often use the terms victim/survivor, and abuser/perpetrator, when talking
                                            about domestic or relationship abuse. Victim/survivor is the person that is
                                            being abused. Abuser/perpetator is the person abusing a family member or
                                            partner.</p>
                                        <p>Abuse is never okay, and it is never the victim’s fault. The only person
                                            responsible for abuse is the person perpetrating the abuse.</p>

                                        <div class="help mt-5">
                                            <h2 class="blue handwritten">Definition: Domestic Abuse</h2>
                                            <p>Domestic abuse is any incident or pattern of incidents of controlling,
                                                coercive or threatening behaviour, violence or abuse, between those who are
                                                or have been intimate partners or family members regardless of gender or
                                                sexuality. This includes the following types of abuse:</p>
                                            <ul>
                                                <li><i class="bi bi-check-circle blue"></i> Psychological/emotional</li>
                                                <li><i class="bi bi-check-circle blue"></i> Physical</li>
                                                <li><i class="bi bi-check-circle blue"></i> Sexual</li>
                                                <li><i class="bi bi-check-circle blue"></i> Financial</li>
                                            </ul>
                                            <p>This definition includes honour-based abuse and forced marriage, and is clear
                                                that victims are not confined to one gender or ethnic group. Domestic abuse
                                                can affect anyone regardless of ethnicity, age, gender, sexuality or social
                                                background.</p>
                                        </div>
                                        <div class="help mt-5">
                                            <h2 class="blue handwritten">Definition: Controlling Behaviour</h2>
                                            <p>Controlling behaviour is a range of acts performed by an abuser, designed to
                                                make their victim subordinate and/or dependent. These acts include but are
                                                not limited to:</p>
                                            <ul>
                                                <li><i class="bi bi-check-circle blue"></i> Isolating the victim from
                                                    sources of support</li>
                                                <li><i class="bi bi-check-circle blue"></i> Exploiting the victim's
                                                    resources and capacities for personal gain</li>
                                                <li><i class="bi bi-check-circle blue"></i> Depriving the victim of the
                                                    means needed for independence, resistance and escape</li>
                                                <li><i class="bi bi-check-circle blue"></i> Regulating the victim's everyday
                                                    behaviour</li>
                                            </ul>
                                        </div>
                                        <div class="help mt-5">
                                            <h2 class="blue handwritten">Definition: Coercive Behaviour</h2>
                                            <p>Coercive behaviour is an act or a pattern of acts of assault, threats,
                                                humiliation and intimidation or other abuse used by the abuser to harm,
                                                punish, or frighten their victim.</p>
                                        </div>
                                    </div>

                                    <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                    <input type="button"
                                        class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                        value="Next" />

                                    <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end previous "
                                        style=" margin-right: 5px;" value="Previous" />
                                @elseif ($item->option_type == 'topic1_characters')
                                    <h1 class="blue handwritten">Topic 01: What is Abuse?<br><small>Characters</small></h1>
                                    <input type="hidden" name="question[{{ $item->id }}]"
                                        id="question{{ $item->id }}" value="{{ $item->id }}">
                                    <div class="content-container m-5">

                                        <p>It may help to create two characters who are in an abusive relationship to help
                                            you explore what abuse looks like. use the template below to help.</p>

                                        <div class="row">
                                            <div class="col-md-5">
                                                <img src="{{ asset('assets/img/character.png') }}"
                                                    class="mx-auto d-block mb-3" width="200px">
                                                <h2 class="text-center handwritten blue">Character 1.</h2>
                                                <div class="question mb-3">
                                                    <span class="question text-right">Name</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="hidden" name="question" id="dtquestion21" value="21">
                                                        <input type="text" class="form-control" id="character1_name"
                                                            placeholder="" name="character1_name">
                                                        <label for="character1_name">Name</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion22" value="22">
                                                    <span class="question text-right">Age</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="character1_age"
                                                            placeholder="" name="character1_age">
                                                        <label for="character1_age">Age</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion23" value="23">
                                                    <span class="question text-right">Occupation</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control"
                                                            id="character1_occupation" placeholder="">
                                                        <label for="character1_occupation">Occupation</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion24" value="24">
                                                    <span class="question text-right">Home</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="character1_home"
                                                            placeholder="">
                                                        <label for="character1_home">Home</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion25" value="25">
                                                    <span class="question text-right">Personality</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control"
                                                            id="character1_personality" placeholder="">
                                                        <label for="character1_personality">Personality</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion26" value="26">
                                                    <span class="question text-right">Victim or perpetrator?</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="character1_role"
                                                            placeholder="">
                                                        <label for="character1_role">Role</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion27" value="27">
                                                    <span class="question text-right">Anything else?</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="character1_notes"
                                                            placeholder="">
                                                        <label for="character1_notes">Additional notes</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="col-md-5">
                                                <img src="{{ asset('assets/img/character.png') }}"
                                                    class="mx-auto d-block mb-3" width="200px">
                                                <h2 class="text-center handwritten blue">Character 2.</h2>
                                                <div class="question mb-3">
                                                    <span class="question text-right">Name</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="hidden" name="question" id="dtquestion28" value="28">
                                                        <input type="text" class="form-control" id="character2_name"
                                                            placeholder="" name="character2_name">
                                                        <label for="character2_name">Name</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion29" value="29">
                                                    <span class="question text-right">Age</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="character2_age"
                                                            placeholder="" name="character2_age">
                                                        <label for="character2_age">Age</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion30" value="30">
                                                    <span class="question text-right">Occupation</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control"
                                                            id="character2_occupation" placeholder="">
                                                        <label for="character2_occupation">Occupation</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion31" value="31">
                                                    <span class="question text-right">Home</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="character2_home"
                                                            placeholder="">
                                                        <label for="character2_home">Home</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion32" value="32">
                                                    <span class="question text-right">Personality</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control"
                                                            id="character2_personality" placeholder="">
                                                        <label for="character2_personality">Personality</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion33" value="33">
                                                    <span class="question text-right">Victim or perpetrator?</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="character2_role"
                                                            placeholder="">
                                                        <label for="character2_role">Role</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion34" value="34">
                                                    <span class="question text-right">Anything else?</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="character2_notes"
                                                            placeholder="">
                                                        <label for="character2_notes">Additional notes</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                    <input type="button"
                                        class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                        value="Next" />

                                    <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end previous "
                                        style="    margin-right: 5px;" value="Previous" />
                                @endif
                            </fieldset>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extrajs')

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.state1').on('click', function(e) {
            var question1 = $("#question1").val();
            var workbook_id = 1;
            console.log(question1);

            // $.ajax({
            //     type: "POST",
            //     url: "{{ route('workbookopen.store') }}",
            //     data: "&question1=" + question1 + "&workbook_id=" +
            //         workbook_id,
            //     cache: false,
            //     success: function(data) {
            //         console.log(data)

            //     },
            //     error: function(data) {
            //         console.log(data)
            //     }
            // });


        });
        $('.state2').on('click', function(e) {

            var question2 = $("#question2").val();

            var workbook_id = 1;
            console.log(question2);

            // $.ajax({
            //     type: "POST",
            //     url: "{{ route('workbookopen.store') }}",
            //     data: "&question2=" + question2 + "&workbook_id=" +
            //         workbook_id,
            //     cache: false,
            //     success: function(data) {
            //         console.log(data)

            //     },
            //     error: function(data) {
            //         console.log(data)
            //     }
            // });
        })
        $('.state3').on('click', function(e) {

            var question3 = $("#question3").val();
            var workbook_id = 1;
            console.log(question3);

            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: {
                    question3: question3,
                    workbook_id: workbook_id,

                    detailqs1: $("#dtquestion1").val(),
                    detailqs2: $("#dtquestion2").val(),
                    detailqs3: $("#dtquestion3").val(),
                    detailqs4: $("#dtquestion4").val(),
                    detailqs5: $("#dtquestion5").val(),
                    detailqs6: $("#dtquestion6").val(),
                    detailqs7: $("#dtquestion7").val(),
                    detailqs8: $("#dtquestion8").val(),
                    detailqs9: $("#dtquestion9").val(),
                    detailqs10: $("#dtquestion10").val(),
                    detailqs11: $("#dtquestion11").val(),

                    dtanswer1: $("#session_days1").val(),
                    dtanswer2: $("#session_days2").val(),
                    dtanswer3: $("#session_days3").val(),
                    dtanswer4: $("#session_days4").val(),
                    dtanswer5: $("#session_days5").val(),
                    dtanswer6: $("#session_days6").val(),
                    dtanswer7: $("#session_days7").val(),
                    dtanswer8: $("#session_days8").val(),
                    dtanswer9: $("#session_days9").val(),
                    dtanswer10: $("#session_days10").val(),
                    dtanswer11: $("#session_days11").val(),

                },
                cache: false,
                success: function(data) {
                    console.log(data)
                },
                error: function(data) {
                    console.log(data)
                }
            });
        })
        $('.state4').on('click', function(e) {

            var question4 = $("#question4").val();
            var workbook_id = 1;
            console.log(question4);

            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: {
                    question4: question4,
                    workbook_id: workbook_id,


                    detailqs13: $("#dtquestion13").val(),
                    detailqs14: $("#dtquestion14").val(),
                    detailqs15: $("#dtquestion15").val(),
                    detailqs16: $("#dtquestion16").val(),
                    detailqs17: $("#dtquestion17").val(),
                    detailqs18: $("#dtquestion18").val(),
                    detailqs19: $("#dtquestion19").val(),
                    detailqs20: $("#dtquestion20").val(),

                    safety13: $("#safety13").val(),
                    safety14: $("#safety14").val(),
                    safety15: $("#safety15").val(),
                    safety16: $("#safety16").val(),
                    safety17: $("#safety17").val(),
                    safety18: $("#safety18").val(),
                    safety19: $("#safety19").val(),
                    safety20: $("#safety20").val(),


                    detail13: $("#detail13").val(),
                    detail14: $("#detail14").val(),
                    detail15: $("#detail15").val(),
                    detail16: $("#detail16").val(),
                    detail17: $("#detail17").val(),
                    detail18: $("#detail18").val(),
                    detail19: $("#detail19").val(),
                    detail20: $("#detail20").val(),

                    action13: $("#action13").val(),
                    action14: $("#action14").val(),
                    action15: $("#action15").val(),
                    action16: $("#action16").val(),
                    action17: $("#action17").val(),
                    action18: $("#action18").val(),
                    action19: $("#action19").val(),
                    action20: $("#action20").val(),

                    by_who13: $("#by_who13").val(),
                    by_who14: $("#by_who14").val(),
                    by_who15: $("#by_who15").val(),
                    by_who16: $("#by_who16").val(),
                    by_who17: $("#by_who17").val(),
                    by_who18: $("#by_who18").val(),
                    by_who19: $("#by_who19").val(),
                    by_who20: $("#by_who20").val(),

                },
                cache: false,
                success: function(data) {
                    console.log(data)
                },
                error: function(data) {
                    console.log(data)
                }
            });
        })
        $('.state5').on('click', function(e) {

            var question5 = $("#question5").val();
            var workbook_id = 1;
            console.log(question5);

            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: {
                    question5: question5,
                    workbook_id: workbook_id,

                },
                cache: false,
                success: function(data) {
                    console.log(data)
                },
                error: function(data) {
                    console.log(data)
                }
            });
        })
        $('.state6').on('click', function(e) {

            var question6 = $("#question6").val();
            var workbook_id = 1;
            console.log(question6);

            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: {
                    question6: question6,
                    workbook_id: workbook_id,
                },
                cache: false,
                success: function(data) {
                    console.log(data)
                },
                error: function(data) {
                    console.log(data)
                }
            });
        })
        $('.state7').on('click', function(e) {

            var question7 = $("#question7").val();
            var workbook_id = 1;
            console.log(question7);
           

                    $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: {
                    question7: question7,
                    workbook_id: workbook_id,

                    detailqs21: $("#dtquestion21").val(),
                    detailqs22: $("#dtquestion22").val(),
                    detailqs23: $("#dtquestion23").val(),
                    detailqs24: $("#dtquestion24").val(),
                    detailqs25: $("#dtquestion25").val(),
                    detailqs26: $("#dtquestion26").val(),
                    detailqs27: $("#dtquestion27").val(),

                    detailqs28: $("#dtquestion28").val(),
                    detailqs29: $("#dtquestion29").val(),
                    detailqs30: $("#dtquestion30").val(),
                    detailqs31: $("#dtquestion31").val(),
                    detailqs32: $("#dtquestion32").val(),
                    detailqs33: $("#dtquestion33").val(),
                    detailqs34: $("#dtquestion34").val(),

                    character1_name: $("#character1_name").val(),
                    character1_age: $("#character1_age").val(),
                    character1_name: $("#character1_occupation").val(),
                    character1_home: $("#character1_home").val(),
                    character1_personality: $("#character1_personality").val(),
                    character1_role: $("#character1_role").val(),
                    character1_notes: $("#character1_notes").val(),

                    character2_name: $("#character2_name").val(),
                    character2_age: $("#character2_age").val(),
                    character2_name: $("#character2_occupation").val(),
                    character2_home: $("#character2_home").val(),
                    character2_personality: $("#character2_personality").val(),
                    character2_role: $("#character2_role").val(),
                    character2_notes: $("#character2_notes").val(),

                },
                cache: false,
                success: function(data) {
                    console.log(data)
                },
                error: function(data) {
                    console.log(data)
                }
            });
            
        })
    </script>

    <script>
        $(document).ready(function() {
            var current = 1,
                current_step, next_step, steps;


            steps = $("fieldset").length;
            $(".next").click(function() {

                var form = $("#workbook_form");
                form.validate({

                    errorPlacement: function(error, element) {
                        // if (element.is(":radio")) {
                        error.appendTo('.err');

                        // }
                    }
                });
                if (form.valid() == true) {
                    // $('.timer').countimer('start');
                    current_step = $(this).parent();
                    next_step = $(this).parent().next();
                    next_step.show();
                    current_step.hide();
                    setProgressBar(++current);
                }
            });


            $(".previous").click(function() {
                current_step = $(this).parent();
                next_step = $(this).parent().prev();
                next_step.show();
                current_step.hide();
                setProgressBar(--current);
            })
            setProgressBar(current);
            // Change progress bar action
            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%");
                $(".percent").html(percent + "%");
            }

        });
    </script>
@endsection
