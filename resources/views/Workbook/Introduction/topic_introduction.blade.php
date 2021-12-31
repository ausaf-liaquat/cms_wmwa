@extends('User.layouts.master')
@section('title')
    Youth Workbook
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-9">
                    <h2>Youth Workbook</h2>
                </div>
                <div class="col-md-3">
                    <div class="text-end"><span class="percent"></span> Completed | Topic 1 to 3 <span id="topic_no"></span></div>
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
                            <fieldset id="{{$item->id}}">
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
                                        style="    margin-right: 5px;" value="Back" />
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
                                        style="    margin-right: 5px;" value="Back" />
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
                                                    <input type="text" name="sessiondays" class="form-control"
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
                                        style="    margin-right: 5px;" value="Back" />
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
                                                            placeholder="" name="character1_name" required>
                                                        <label for="character1_name">Name</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion22" value="22">
                                                    <span class="question text-right">Age</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="character1_age"
                                                            placeholder="" name="character1_age" required>
                                                        <label for="character1_age">Age</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion23" value="23">
                                                    <span class="question text-right">Occupation</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control"
                                                            id="character1_occupation" placeholder="" name="occupation" required>
                                                        <label for="character1_occupation">Occupation</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion24" value="24">
                                                    <span class="question text-right">Home</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="character1_home"
                                                            placeholder="" name="c1home" required>
                                                        <label for="character1_home">Home</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion25" value="25">
                                                    <span class="question text-right">Personality</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control"
                                                            id="character1_personality" name="c1personality" placeholder="" required>
                                                        <label for="character1_personality">Personality</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion26" value="26">
                                                    <span class="question text-right">Victim or perpetrator?</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="c1role" id="character1_role"
                                                            placeholder="" required>
                                                        <label for="character1_role">Role</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion27" value="27">
                                                    <span class="question text-right">Anything else?</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" name="c1notes" class="form-control" id="character1_notes"
                                                            placeholder="" required>
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
                                                            placeholder="" name="character2_name" required>
                                                        <label for="character2_name">Name</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion29" value="29">
                                                    <span class="question text-right">Age</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="character2_age"
                                                            placeholder="" name="character2_age" required>
                                                        <label for="character2_age">Age</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion30" value="30">
                                                    <span class="question text-right">Occupation</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control"
                                                            id="character2_occupation" placeholder="" name="c2occu" required>
                                                        <label for="character2_occupation">Occupation</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion31" value="31">
                                                    <span class="question text-right">Home</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="character2_home"
                                                            placeholder="" name="c2home" required>
                                                        <label for="character2_home">Home</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion32" value="32">
                                                    <span class="question text-right">Personality</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control"
                                                            id="character2_personality" placeholder="" name="c2personality" required>
                                                        <label for="character2_personality">Personality</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion33" value="33">
                                                    <span class="question text-right">Victim or perpetrator?</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="character2_role"
                                                            placeholder="" name="c2role" required>
                                                        <label for="character2_role">Role</label>
                                                    </div>
                                                </div>
                                                <div class="question mb-3">
                                                    <input type="hidden" name="question" id="dtquestion34" value="34">
                                                    <span class="question text-right">Anything else?</span>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="character2_notes"
                                                            placeholder="" name="c2notes" required>
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


                                @elseif ($item->option_type == 'topic1_abusetype')
                                    <h1 class="blue handwritten">Topic 01: What is Abuse?<br><small>Types of Abuse</small>
                                    </h1>

                                    <div class="content-container m-5">
                                        <input type="hidden" name="quest" id="question{{ $item->id }}"
                                            value="{{ $item->id }}">

                                        <div class="row">
                                            <div class="col-md-4 box-container box-1">
                                                <h2 class="text-center handwritten blue">Physical</h2>
                                                <img src="{{ asset('assets/img/physical.png') }}"
                                                    class="mx-auto d-block mb-3" width="200px">
                                            </div>
                                            <div class="col-md-4 box-container box-2">
                                                <h2 class="text-center handwritten blue">Emotional</h2>>
                                                <img src="{{ asset('assets/img/emotional.png') }}"
                                                    class="mx-auto d-block mb-3" width="200px">
                                            </div>
                                            <div class="col-md-4 box-container box-1">
                                                <h2 class="text-center handwritten blue">Sexual</h2>
                                                <img src="{{ asset('assets/img/sexual.png') }}"
                                                    class="mx-auto d-block mb-3" width="200px">
                                            </div>
                                            <div class="col-md-4 box-container box-2">
                                                <h2 class="text-center handwritten blue">Financial</h2>
                                                <img src="{{ asset('assets/img/financial.png') }}"
                                                    class="mx-auto d-block mb-3" width="200px">
                                            </div>
                                            <div class="col-md-4 box-container box-1">
                                                <h2 class="text-center handwritten blue">Digital</h2>
                                                <img src="{{ asset('assets/img/digital.png') }}"
                                                    class="mx-auto d-block mb-3" width="200px">
                                            </div>
                                            <div class="col-md-4 box-container box-2 text-center">
                                                <h2 class="text-center handwritten blue">Remember</h2>
                                                <div class="p-4">
                                                    <p><strong>Abuse is NEVER the victim’s fault.</p>
                                                    <p>Domestic abuse is about POWER and CONTROL.</p>
                                                    <p>Abuse is NEVER okay</strong></p>
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
                                @elseif ($item->option_type == 'topic1_circleabuse')
                                    <h1 class="blue handwritten">Topic 01: What is Abuse?<br><small>Circle of Abuse</small>
                                    </h1>

                                    <div class="content-container m-5">
                                        <input type="hidden" name="quest" id="question{{ $item->id }}"
                                            value="{{ $item->id }}">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <img src="{{ asset('assets/img/CycleOfAbuse.jpg') }}"
                                                    class="img-fluid">
                                            </div>
                                        </div>


                                    </div>
                                    <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                    <input type="button"
                                        class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                        value="Next" />

                                    <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end previous "
                                        style="    margin-right: 5px;" value="Previous" />
                                @elseif ($item->option_type == 'topic1_prepatratortype')

                                    <input type="hidden" name="quest" id="question{{ $item->id }}"
                                        value="{{ $item->id }}">

                                    <h1 class="blue handwritten">Topic 01: What is Abuse?<br><small>Types of
                                            Perpetrator</small></h1>

                                    <div class="content-container m-5">


                                        <div class="row mb-5">
                                            <div class="col-md-4 my-5">
                                                <p class="mb-5">The Power and Control wheel below shows different
                                                    types of perpetrators of abuse. One perpetrator might fit into one,
                                                    several, or all of the categories in the wheel.</p>
                                                <h2 class="mt-5 blue handwritten">Read the statements below, and decide
                                                    where they fit in the Power and Control circle. What type of perpetrator
                                                    is it describing? It might fit into more than one section.</h2>
                                            </div>
                                            <div class="col-md-7 offset-md-1">
                                                <img src="{{ asset('assets/img/PowerAndControlWheel.jpg') }}"
                                                    class="img-fluid">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 mt-5">
                                                @foreach ($item->WorkbookQuestionniare as $list)
                                                    <div class="section">
                                                        <input type="hidden" name="quest"
                                                            id="dtquestion{{ $list->id }}"
                                                            value="{{ $list->id }}">
                                                        <h4 class="blue handwritten">{{ $list->quest_title }}</h4>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="checkbox{{ $list->id }}"
                                                                id="emotional{{ $list->id }}" value="Emotional Abuse">
                                                            <label class="form-check-label"
                                                                for="emotional{{ $list->id }}">Emotional
                                                                Abuse</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input"
                                                                name="checkbox{{ $list->id }}" type="checkbox"
                                                                id="usingpower{{ $list->id }}" value="Using Power">
                                                            <label class="form-check-label"
                                                                for="usingpower{{ $list->id }}">Using
                                                                Power</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="checkbox{{ $list->id }}"
                                                                id="bullying{{ $list->id }}" value="Bullying">
                                                            <label class="form-check-label"
                                                                for="bullying{{ $list->id }}">Bullying</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="checkbox{{ $list->id }}"
                                                                id="treats{{ $list->id }}" value="Treats">
                                                            <label class="form-check-label"
                                                                for="treats{{ $list->id }}">Treats</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="checkbox{{ $list->id }}"
                                                                id="isolation{{ $list->id }}" value="Isolation">
                                                            <label class="form-check-label"
                                                                for="isolation{{ $list->id }}">Isolation</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="checkbox{{ $list->id }}"
                                                                id="minimise{{ $list->id }}" value="Minimise">
                                                            <label class="form-check-label"
                                                                for="minimise{{ $list->id }}">Minimise</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="checkbox{{ $list->id }}"
                                                                id="sexualabuse{{ $list->id }}" value="Sexual Abuse">
                                                            <label class="form-check-label"
                                                                for="sexualabuse{{ $list->id }}">Sexual
                                                                Abuse</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="checkbox{{ $list->id }}"
                                                                id="peerpressure{{ $list->id }}" value="Peer Pressure">
                                                            <label class="form-check-label"
                                                                for="peerpressure{{ $list->id }}">Peer
                                                                Pressure</label>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                        <input type="button"
                                            class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                            value="Topic 2" />

                                        <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end previous "
                                            style="    margin-right: 5px;" value="Previous" />
                                    </div>
                                @elseif ($item->option_type == 'topic2_healthyrelationship')
                                    <div class="content-container m-5 ">

                                        <h1 class="blue handwritten topic-title text-center"><small>Topic
                                                Two...</small><br>Healthy Relationships</h1>

                                    </div>
                                    <input type="hidden" name="quest" id="question{{ $item->id }}"
                                        value="{{ $item->id }}">

                                    <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                    <input type="button"
                                        class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                        value="Next" />

                                    <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end previous "
                                        style="    margin-right: 5px;" value="Previous" />
                                @elseif ($item->option_type == 'topic2_healthyrelationshipquiz')
                                    <h1 class="blue handwritten">Topic 02: Healthy Relationships<br><small>Quiz</small>
                                    </h1>
                                    <input type="hidden" name="quest" id="question{{ $item->id }}"
                                        value="{{ $item->id }}">
                                    <div class="content-container m-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h2 class="blue handwritten">Read these statements and decide on if they
                                                    are true or false.</h2>
                                            </div>
                                            <div class="col-md-7 offset-md-1">
                                                @foreach ($item->WorkbookQuestionniare as $list)
                                                    <div class="section">
                                                        <div class="row">
                                                            <input type="hidden" name="quest"
                                                                id="dtquestion{{ $list->id }}"
                                                                value="{{ $list->id }}">
                                                            <div class="col-md-8">
                                                                <h4 class="blue handwritten">{{ $list->quest_title }}
                                                                </h4>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <select class="form-select"
                                                                    aria-label="Default select example"
                                                                    id="quiz{{ $list->id }}">
                                                                    <option value="">True or false?</option>
                                                                    <option value="True">True</option>
                                                                    <option value="False">False</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                    </div>
                                    <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                    <input type="button"
                                        class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                        value="Next" />

                                    <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end previous "
                                        style="    margin-right: 5px;" value="Previous" />
                                @elseif ($item->option_type == 'topic2_whathealthyrelationship')
                                    <h1 class="blue handwritten">Topic 02: Healthy Relationships<br><small>What is a
                                            healthy relationship?</small></h1>

                                    <div class="content-container m-5">
                                        <input type="hidden" name="quest" id="question{{ $item->id }}"
                                            value="{{ $item->id }}">

                                        <div class="row">
                                            <div class="col-md-4 box-container-1 box-1 text-center">
                                                <h2 class="blue handwritten">Respect</h2>
                                            </div>
                                            <div class="col-md-8 box-container-1 box-1">
                                                <p class="m-0">Respect each person as an individual. Learn about
                                                    the other person and value what’s important to them.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 box-container-1 box-2 text-center">
                                                <h2 class="blue handwritten">Trust</h2>
                                            </div>
                                            <div class="col-md-8 box-container-1 box-2">
                                                <p class="m-0">Feel that you can count on, and be there, for
                                                    each other. Trust is earned over time, and can be lost with a broken
                                                    promise.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 box-container-1 box-1 text-center">
                                                <h2 class="blue handwritten">Honesty</h2>
                                            </div>
                                            <div class="col-md-8 box-container-1 box-1">
                                                <p class="m-0">Be truthful about thoughts and feelings – your
                                                    partner wants to know the real you.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 box-container-1 box-2 text-center">
                                                <h2 class="blue handwritten">Communication</h2>
                                            </div>
                                            <div class="col-md-8 box-container-1 box-2">
                                                <p class="m-0">Communicate to show respect, trust, and honesty.
                                                    It requires listening and sharing thoughts and feelings.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                    <input type="button"
                                        class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                        value="Next" />

                                    <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end previous "
                                        style="    margin-right: 5px;" value="Previous" />
                                @elseif ($item->option_type == 'topic2_noviolence')
                                    <h1 class="blue handwritten">Topic 02: Healthy Relationships<br><small>No Violence.
                                            Everoyne is Equal</small></h1>
                                    <input type="hidden" name="quest" id="question{{ $item->id }}"
                                        value="{{ $item->id }}">
                                    <div class="content-container m-5">

                                        <div class="row">
                                            <div class="col-md-8 offset-md-2">
                                                <img src="{{ asset('assets/img/EqualHealthyRelationships.jpg') }}"
                                                    class="img-fluid">
                                            </div>
                                        </div>

                                    </div>
                                    <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                    <input type="button"
                                        class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                        value="Next" />

                                    <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end previous "
                                        style="    margin-right: 5px;" value="Previous" />
                                @elseif ($item->option_type == 'topic2_relationshipbehaviour')
                                    <h1 class="blue handwritten">Topic 02: Healthy Relationships<br><small>Relationshop
                                            Behaviours - Am I A Warning?</small></h1>

                                    <div class="content-container m-5">

                                        <input type="hidden" name="quest" id="question{{ $item->id }}"
                                            value="{{ $item->id }}">
                                        <div class="row mb-5">
                                            <div class="col-md-4 my-5">
                                                <p class="mb-5">The statements below describe different
                                                    relationship behaviours. Decide whether you think they are GREEN
                                                    (healthy), YELLOW (depends), or RED (a warning sign of unhealthy
                                                    behaviour or abuse).</p>
                                            </div>
                                            <div class="col-md-7 offset-md-1">
                                                <img src="{{ asset('assets/img/TrafficLights.jpg') }}"
                                                    class="img-fluid">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 mt-5">
                                                @foreach ($item->WorkbookQuestionniare as $list)
                                                    <input type="hidden" name="quest" id="dtquestion{{ $list->id }}"
                                                        value="{{ $list->id }}">
                                                    <div id="group1">
                                                        <div class="section">
                                                            <h4 class="blue handwritten">{{ $list->quest_title }}</h4>
                                                            <div class="d-flex">
                                                                <input type="radio" class="btn-check"
                                                                    name="radio{{ $list->id }}"
                                                                    id="option1_1{{ $list->id }}" value="healthy"
                                                                    autocomplete="off">
                                                                <label class="btn btn-primary btn-healthy"
                                                                    for="option1_1{{ $list->id }}">Healthy</label>
                                                                <input type="radio" class="btn-check"
                                                                    name="radio{{ $list->id }}"
                                                                    id="option2_1{{ $list->id }}" value="depends"
                                                                    autocomplete="off">
                                                                <label class="btn btn-primary btn-depends"
                                                                    for="option2_1{{ $list->id }}">Depends</label>
                                                                <input type="radio" class="btn-check"
                                                                    name="radio{{ $list->id }}"
                                                                    id="option3_1{{ $list->id }}" value="warning"
                                                                    autocomplete="off">
                                                                <label class="btn btn-primary btn-warn"
                                                                    for="option3_1{{ $list->id }}">Warning</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>

                                    </div>
                                    <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                    <input type="button"
                                        class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                        value="Next" />

                                    <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end previous "
                                        style="    margin-right: 5px;" value="Previous" />
                                @elseif ($item->option_type == 'topic2_healthyunhealthy')
                                    <h1 class="blue handwritten">Topic 02: Healthy
                                        Relationships<br><small>Healthy/Unhealthy</small></h1>
                                    <input type="hidden" name="quest" id="question{{ $item->id }}"
                                        value="{{ $item->id }}">
                                    <div class="content-container m-5">


                                        <div class="row mb-5">
                                            <div class="col-md-12 text-center">
                                                <p class="mb-5">Below are some examples of healthy and unhealthy
                                                    behaviours in relationships.</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8 offset-md-2">

                                                <table class="table workbook">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th scope="col">
                                                                <h2 class="m-0 p-0 blue handwritten">Healthy</h2>
                                                            </th>
                                                            <th scope="col">
                                                                <h2 class="m-0 p-0 blue handwritten">Unhealthy</h2>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>Have privacy – emails, diary, phone calls, texts and
                                                                    social media are respected as your own</p>
                                                            </td>
                                                            <td>
                                                                <p>Uses alcohol or drugs as an excuse for hurtful behaviour
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>Encourage each other’s interests like sports and hobbies
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p>Acts controlling or possessive, like they own you</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>Have equal decision-making about what you do in your
                                                                    relationship</p>
                                                            </td>
                                                            <td>
                                                                <p>Goes back on promises</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>Both people are able to accept when they are wrong and
                                                                    apologise</p>
                                                            </td>
                                                            <td>
                                                                <p>Makes you feel like you’re going mad, or plays mind games
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>Both people accept responsibility for their actions</p>
                                                            </td>
                                                            <td>
                                                                <p>Makes all the decisions about what the two of you do</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>Solve conflicts without putting each other down, swearing
                                                                    at each other or making threats</p>
                                                            </td>
                                                            <td>
                                                                <p>Tries to keep you from having a job or doing well in
                                                                    education</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>Respect each other’s opinions even when they are
                                                                    different</p>
                                                            </td>
                                                            <td>
                                                                <p>Smashes, throws or destroys things</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>Support each other’s individual life goals, like getting
                                                                    a job or going to university</p>
                                                            </td>
                                                            <td>
                                                                <p>Embarrasses or humiliates you, or calls you names</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>Trust each other</p>
                                                            </td>
                                                            <td>
                                                                <p>Threatens to hurt you or themselves, or to commit suicide
                                                                    if you break up with them</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>Communicates about sex if your relationship is sexual</p>
                                                            </td>
                                                            <td>
                                                                <p>Pressures you for sex, or makes sex hurt or feel
                                                                    humiliating</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>Never feel like you’re being pressured for sex</p>
                                                            </td>
                                                            <td>
                                                                <p>Frequently criticises your friends or family</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>Close friends and family like your partner, and feel
                                                                    happy about your relationship</p>
                                                            </td>
                                                            <td>
                                                                <p>Yells and shouts at you</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>Always feel safe with each other</p>
                                                            </td>
                                                            <td>
                                                                <p>Makes you feel bad about yourself</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>Enjoy spending time separately with your own friends, and
                                                                    with each other’s friends</p>
                                                            </td>
                                                            <td>
                                                                <p>Gets extremely jealous or accuses the other of cheating
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>Have fun together more often than not</p>
                                                            </td>
                                                            <td>
                                                                <p>Grabbed, pushed, hit or physical hurt you</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>Always treat each other with respect</p>
                                                            </td>
                                                            <td>
                                                                <p>Tells you how to dress and what to wear</p>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                    <input type="button"
                                        class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                        value="Next" />

                                    <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end previous "
                                        style="    margin-right: 5px;" value="Previous" />
                                @elseif ($item->option_type =='topic2_whyrelationship')
                                    <h1 class="blue handwritten">Topic 02: Healthy Relationships<br><small>Why have
                                            relationships?</small></h1>
                                    <div class="content-container m-5">


                                        <div class="row mb-5">
                                            <div class="col-md-12 text-center">
                                                <p class="mb-5">Read through the reasons that people might want
                                                    relationships. Do you agree with any? is it a healthy or unhealthy
                                                    reason?</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="quest" id="question{{ $item->id }}"
                                            value="{{ $item->id }}">
                                        <div class="row">
                                            <div class="col-12">
                                                @foreach ($item->WorkbookQuestionniare as $list)
                                                    <div class="section">
                                                        <input type="hidden" name="quest"
                                                            id="dtquestion{{ $list->id }}"
                                                            value="{{ $list->id }}">
                                                        <h2 class="m-0 blue handwritten">{{ $list->quest_title }}</h2>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <p>Do you agree?</p>
                                                                <div class="form-floating">
                                                                    <select class="form-select" aria-label=""
                                                                        id="agree{{ $list->id }}">
                                                                        <option value="">Yes or No?</option>
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="No">No</option>
                                                                    </select>
                                                                    <label for="agree">Do you agree?</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <label for="healthy_unhealthy" class="form-label">Is
                                                                    this healthy of unhealthy?</label>
                                                                <input type="range" class="form-range"
                                                                    id="healthy_unhealthy{{ $list->id }}">
                                                                <div class="d-flex justify-content-between mb-3">
                                                                    <span class="slider-label">Healthy</span>
                                                                    <span class="slider-label">Unhealthy</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                    <input type="button"
                                        class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                        value="Next" />

                                    <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end previous "
                                        style="    margin-right: 5px;" value="Previous" />
                                @elseif ($item->option_type =='topic2_idealrelationship')
                                    <h1 class="blue handwritten">Topic 02: Healthy Relationships<br><small>My ideal
                                            relationship</small></h1>

                                    <div class="content-container m-5">

                                        <input type="hidden" name="quest" id="question{{ $item->id }}"
                                            value="{{ $item->id }}">
                                        <div class="row mb-5">
                                            <div class="col-md-12">
                                                <p class="mb-5">Read through the reasons that people might want
                                                    relationships. Do you agree with any? is it a healthy or unhealthy
                                                    reason?</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            @foreach ($item->WorkbookQuestionniare as $list)

                                                <input type="hidden" name="quest" id="dtquestion{{ $list->id }}"
                                                    value="{{ $list->id }}">
                                                <div class="col-md-6">
                                                    <p>{{ $list->quest_title }}</p>
                                                    <div class="form-floating">
                                                        <textarea class="form-control" placeholder="Leave a comment here"
                                                            class="text-center" id="heart{{ $list->id }}"
                                                            style="height: 500px; background-position: center; background-image: url('https://www.westmerciawomensaid.org/crm/img/heart1.jpg'); background-repeat: no-repeat; background-size: 500px auto;"></textarea>
                                                        <label for="heart1">Comments</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                    <input type="button"
                                        class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                        value="Next" />

                                    <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end previous "
                                        style="    margin-right: 5px;" value="Previous" />
                                


                                    
                                @elseif ($item->option_type =='topic2_gettinghelp')
                                    <h1 class="blue handwritten">Topic 02: Healthy Relationships<br><small>Getting Help</small></h1>
                            
                                    <div class="content-container m-5">
                                        <input type="hidden" name="quest" id="question{{ $item->id }}"
                                            value="{{ $item->id }}">
                                    
                                        <div class="row mb-5">
                                            <div class="col-md-12">
                                                <div class="help">
                                                    <p>If you think you may have been, or are currently, in an unhealthy relationship, you are not alone.</p>
                                                    <p>It’s important to remember that you have done nothing wrong, and it is not your fault.</p>
                                                    <p>It is also important to get the right support and help, to make sure that you are okay, safe and that the abuse does not continue. </p>
                                                    <p>Who could you talk to for help and support? It could be a trusted friend, family member, teacher or youth worker. If you are in immediate danger, you should call the police on 999.</p>
                                                    <p>There are also organisations that can help and offer support if you are worried about your own relationship, or the relationship of someone you know:</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row text-center">
                                            <div class="col-md-3">
                                                <img src="{{asset('assets/img/childline.png')}}" class="img-fluid img-logo">
                                                <h4 class="blue handwritten mb-4">Childline</h4>
                                            </div>
                                            <div class="col-md-3">
                                                <img src="{{asset('assets/img/nspcc.jpg')}}" class="img-fluid img-logo">
                                                <h4 class="blue handwritten mb-4">NSPCC</h4>
                                            </div>
                                            <div class="col-md-3">
                                                <img src="{{asset('assets/img/thehideout.jpeg')}}" class="img-fluid img-logo">
                                                <h4 class="blue handwritten mb-4">The Hideout</h4>
                                            </div>
                                            <div class="col-md-3">
                                                <img src="{{asset('assets/img/loveisrespect.jpeg')}}" class="img-fluid img-logo">
                                                <h4 class="blue handwritten mb-4">Love is Respect</h4>
                                            </div>
                                            <div class="col-md-3">
                                                <img src="{{asset('assets/img/thinkyouknow.png')}}" class="img-fluid img-logo">
                                                <h4 class="blue handwritten mb-4">Think U Know</h4>
                                            </div>
                                            <div class="col-md-3">
                                                <img src="{{asset('assets/img/zipit.png')}}" class="img-fluid img-logo">
                                                <h4 class="blue handwritten mb-4">Zipit</h4>
                                            </div>
                                            <div class="col-md-3">
                                                <img src="{{asset('assets/img/themix.png')}}" class="img-fluid img-logo">
                                                <h4 class="blue handwritten mb-4">The Mix</h4>
                                            </div>
                                            <div class="col-md-3">
                                                <img src="{{asset('assets/img/galop.jpeg')}}" class="img-fluid img-logo">
                                                <h4 class="blue handwritten mb-4">Galop (LGBT+)</h4>
                                            </div>
                                            <div class="col-md-3">
                                                <img src="{{asset('assets/img/hollieguard.jpeg')}}" class="img-fluid img-logo">
                                                <h4 class="blue handwritten mb-4">Hollieguard</h4>
                                            </div>
                                            <div class="col-md-3">
                                                <img src="{{asset('assets/img/loverespect.jpg')}}" class="img-fluid img-logo">
                                                <h4 class="blue handwritten mb-4">Love Respoect</h4>
                                            </div>
                                            <div class="col-md-3">
                                                <img src="{{asset('assets/img/disrespectnobody.png')}}" class="img-fluid img-logo">
                                                <h4 class="blue handwritten mb-4">Disrespect Nobody</h4>
                                            </div>
                                            <div class="col-md-3">
                                                <img src="{{asset('assets/img/shout.png')}}" class="img-fluid img-logo">
                                                <h4 class="blue handwritten mb-4">Shout</h4>
                                            </div>
                                        </div> 
                                    </div> 
                                    
                                    <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                    <input type="button"
                                        class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                        value="Topic 3" />

                                    <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end previous "
                                        style="    margin-right: 5px;" value="Previous" />
                                

                                @elseif ($item->option_type == 'topic3_influences')
                                    <div class="content-container m-5 ">
                                        <input type="hidden" name="quest" id="question{{ $item->id }}"
                                        value="{{ $item->id }}">
                                        <h1 class="blue handwritten topic-title text-center"><small>Topic Three...</small><br>Influences</h1>  
                                    
                                    </div>
                                    <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                    <input type="button"
                                        class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                        value="Next" />

                                    <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end previous "
                                        style="    margin-right: 5px;" value="Previous" /> 
                                @elseif ($item->option_type=='topic3_rolemodels')
                                    <h1 class="blue handwritten">Topic 03: Influences<br><small>Relationship Role Models</small></h1>
                                    <input type="hidden" name="quest" id="question{{ $item->id }}"
                                    value="{{ $item->id }}">
                                    <div class="content-container m-5">
                                        
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h2 class="blue handwritten">We are influenced by the world around us; our beliefs, thoughts and ideas are shaped by our upbringing, our culture, and our experiences – including our ideas about relationships.</h2>
                                            </div>
                                            <div class="col-md-7 offset-md-1">
                                                @foreach ($item->WorkbookQuestionniare as $list)
                                                     <p>{{$list->quest_title}}</p>

                                                     <input type="hidden" name="quest" id="dtquestion{{ $list->id }}"
                                                     value="{{ $list->id }}">
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Leave a comment here" id="comment{{$list->id}}" style="height: 500px;"></textarea>
                                                    <label for="comment{{$list->id}}">Comments</label>
                                                </div>
                                                @endforeach
                                               
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                    <input type="button"
                                        class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                        value="Next" />
                                        @elseif ($item->option_type=='topic3_positiverolemodels')
                                        <h1 class="blue handwritten">Topic 03: Influences<br><small>Positive Role Models</small></h1>
                                        <input type="hidden" name="quest" id="question{{ $item->id }}"
                                        value="{{ $item->id }}">
                                        <div class="content-container m-5">
                                            
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h2 class="blue handwritten">Positive role models are people we look up to, who have values and qualities that are important to us. For example, a friend with a positive attitude, or a family member who treats everyone with kindness.</h2>
                                                </div>
                                                <div class="col-md-7 offset-md-1">
                                                    @foreach ($item->WorkbookQuestionniare as $list)
                                                         <p>{{$list->quest_title}}</p>
    
                                                         <input type="hidden" name="quest" id="dtquestion{{ $list->id }}"
                                                         value="{{ $list->id }}">
                                                    <div class="form-floating">
                                                        <textarea class="form-control" placeholder="Leave a comment here" id="comment{{$list->id}}" style="height: 500px;"></textarea>
                                                        <label for="comment{{$list->id}}">Comments</label>
                                                    </div>
                                                    @endforeach
                                                   
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>
    
                                        <input type="button"
                                            class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                            value="Next" />
                                @endif
                            </fieldset>
                        @endforeach
                                <fieldset>
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
                                        <img src="{{ asset('assets/img/imeasure.png') }}" alt=""
                                            style="display: block; margin-left: auto;margin-right: auto;" width="200">
                                        <p style="text-align: center">Thank you for completing this workbook!</p>
            
                                    </div>
                                    <input type="button" class="btn btn-primary btn-sm finish{{$item->id}}" name="submit" value="Submit" />
                                </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extrajs')

    {{-- <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.state1').on('click', function(e) {
            var question1 = $("#question1").val();
            var workbook_id = 1;
            console.log(question1);

            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: "&question1=" + question1 + "&workbook_id=" +
                    workbook_id,
                cache: false,
                success: function(data) {
                    console.log(data)

                },
                error: function(data) {
                    console.log(data)
                }
            });


        });
        $('.state2').on('click', function(e) {

            var question2 = $("#question2").val();

            var workbook_id = 1;
            console.log(question2);

            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: "&question2=" + question2 + "&workbook_id=" +
                    workbook_id,
                cache: false,
                success: function(data) {
                    console.log(data)

                },
                error: function(data) {
                    console.log(data)
                }
            });
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
        $('.state8').on('click', function(e) {

            var question8 = $("#question8").val();
            var workbook_id = 1;
            console.log(question8);


            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: {
                    question8: question8,
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
        $('.state9').on('click', function(e) {

            var question9 = $("#question9").val();
            var workbook_id = 1;
            console.log(question9);


            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: {
                    question9: question9,
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
        $('.state10').on('click', function(e) {

            var question10 = $("#question10").val();
            var workbook_id = 1;
            console.log(question10);
            detailqs35 = $("#dtquestion35").val();
            var checkbox35 = [];
            var checkbox36 = [];
            var checkbox37 = [];
            var checkbox38 = [];
            var checkbox39 = [];
            var checkbox40 = [];
            var checkbox41 = [];
            var checkbox42 = [];
            var checkbox43 = [];
            var checkbox44 = [];
            var checkbox45 = [];
            var checkbox46 = [];
            var checkbox47 = [];
            var checkbox48 = [];
            var checkbox49 = [];
            var checkbox50 = [];
            var checkbox51 = [];
            var checkbox52 = [];
            var checkbox53 = [];
            var checkbox54 = [];
            var checkbox55 = [];
            var checkbox56 = [];
            var checkbox57 = [];
            var checkbox58 = [];
            var checkbox59 = [];
            $.each($("input[name='checkbox35']:checked"), function() {
                checkbox35.push($(this).val());
            });
            $.each($("input[name='checkbox36']:checked"), function() {
                checkbox36.push($(this).val());
            });
            $.each($("input[name='checkbox37']:checked"), function() {
                checkbox37.push($(this).val());
            });
            $.each($("input[name='checkbox38']:checked"), function() {
                checkbox38.push($(this).val());
            });
            $.each($("input[name='checkbox39']:checked"), function() {
                checkbox39.push($(this).val());
            });
            $.each($("input[name='checkbox40']:checked"), function() {
                checkbox40.push($(this).val());
            });
            $.each($("input[name='checkbox41']:checked"), function() {
                checkbox41.push($(this).val());
            });
            $.each($("input[name='checkbox42']:checked"), function() {
                checkbox42.push($(this).val());
            });
            $.each($("input[name='checkbox43']:checked"), function() {
                checkbox43.push($(this).val());
            });
            $.each($("input[name='checkbox44']:checked"), function() {
                checkbox44.push($(this).val());
            });
            $.each($("input[name='checkbox45']:checked"), function() {
                checkbox45.push($(this).val());
            });
            $.each($("input[name='checkbox46']:checked"), function() {
                checkbox46.push($(this).val());
            });
            $.each($("input[name='checkbox47']:checked"), function() {
                checkbox47.push($(this).val());
            });
            $.each($("input[name='checkbox48']:checked"), function() {
                checkbox48.push($(this).val());
            });
            $.each($("input[name='checkbox49']:checked"), function() {
                checkbox49.push($(this).val());
            });
            $.each($("input[name='checkbox50']:checked"), function() {
                checkbox50.push($(this).val());
            });
            $.each($("input[name='checkbox51']:checked"), function() {
                checkbox51.push($(this).val());
            });
            $.each($("input[name='checkbox52']:checked"), function() {
                checkbox52.push($(this).val());
            });
            $.each($("input[name='checkbox53']:checked"), function() {
                checkbox53.push($(this).val());
            });
            $.each($("input[name='checkbox54']:checked"), function() {
                checkbox54.push($(this).val());
            });
            $.each($("input[name='checkbox55']:checked"), function() {
                checkbox55.push($(this).val());
            });
            $.each($("input[name='checkbox56']:checked"), function() {
                checkbox56.push($(this).val());
            });
            $.each($("input[name='checkbox57']:checked"), function() {
                checkbox57.push($(this).val());
            });
            $.each($("input[name='checkbox58']:checked"), function() {
                checkbox58.push($(this).val());
            });
            $.each($("input[name='checkbox59']:checked"), function() {
                checkbox59.push($(this).val());
            });

            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: {
                    question10: question10,
                    workbook_id: workbook_id,

                    detailqs35: $("#dtquestion35").val(),
                    detailqs36: $("#dtquestion36").val(),
                    detailqs37: $("#dtquestion37").val(),
                    detailqs38: $("#dtquestion38").val(),
                    detailqs39: $("#dtquestion39").val(),
                    detailqs40: $("#dtquestion40").val(),
                    detailqs41: $("#dtquestion41").val(),
                    detailqs42: $("#dtquestion42").val(),
                    detailqs43: $("#dtquestion43").val(),
                    detailqs44: $("#dtquestion44").val(),
                    detailqs45: $("#dtquestion45").val(),
                    detailqs46: $("#dtquestion46").val(),
                    detailqs47: $("#dtquestion47").val(),
                    detailqs48: $("#dtquestion48").val(),
                    detailqs49: $("#dtquestion49").val(),
                    detailqs50: $("#dtquestion50").val(),
                    detailqs51: $("#dtquestion51").val(),
                    detailqs52: $("#dtquestion52").val(),
                    detailqs53: $("#dtquestion53").val(),
                    detailqs54: $("#dtquestion54").val(),
                    detailqs55: $("#dtquestion55").val(),
                    detailqs56: $("#dtquestion56").val(),
                    detailqs57: $("#dtquestion57").val(),
                    detailqs58: $("#dtquestion58").val(),
                    detailqs59: $("#dtquestion59").val(),

                    checkbox35: checkbox35,
                    checkbox36: checkbox36,
                    checkbox37: checkbox37,
                    checkbox38: checkbox38,
                    checkbox39: checkbox39,
                    checkbox40: checkbox40,
                    checkbox41: checkbox41,
                    checkbox42: checkbox42,
                    checkbox43: checkbox43,
                    checkbox44: checkbox44,
                    checkbox45: checkbox45,
                    checkbox46: checkbox46,
                    checkbox47: checkbox47,
                    checkbox48: checkbox48,
                    checkbox49: checkbox49,
                    checkbox50: checkbox50,
                    checkbox51: checkbox51,
                    checkbox52: checkbox52,
                    checkbox53: checkbox53,
                    checkbox54: checkbox54,
                    checkbox55: checkbox55,
                    checkbox56: checkbox56,
                    checkbox57: checkbox57,
                    checkbox58: checkbox58,
                    checkbox59: checkbox59,
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
        $('.state11').on('click', function(e) {

            var question11 = $("#question11").val();
            var workbook_id = 1;
            console.log(question11);


            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: {
                    question11: question11,
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
        $('.state12').on('click', function(e) {

            var question12 = $("#question12").val();
            var workbook_id = 1;
            console.log(question12);

            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: {
                    question12: question12,
                    workbook_id: workbook_id,

                    detailqs60: $("#dtquestion60").val(),
                    detailqs61: $("#dtquestion61").val(),
                    detailqs62: $("#dtquestion62").val(),
                    detailqs63: $("#dtquestion63").val(),
                    detailqs64: $("#dtquestion64").val(),
                    detailqs65: $("#dtquestion65").val(),
                    detailqs66: $("#dtquestion66").val(),
                    detailqs67: $("#dtquestion67").val(),
                    detailqs68: $("#dtquestion68").val(),
                    detailqs69: $("#dtquestion69").val(),

                    quiz60: $("#quiz60").val(),
                    quiz61: $("#quiz61").val(),
                    quiz62: $("#quiz62").val(),
                    quiz63: $("#quiz63").val(),
                    quiz64: $("#quiz64").val(),
                    quiz65: $("#quiz65").val(),
                    quiz66: $("#quiz66").val(),
                    quiz67: $("#quiz67").val(),
                    quiz68: $("#quiz68").val(),
                    quiz69: $("#quiz69").val(),



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
        $('.state13').on('click', function(e) {

            var question13 = $("#question13").val();
            var workbook_id = 1;
            console.log(question13);


            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: {
                    question13: question13,
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
        $('.state14').on('click', function(e) {

            var question14 = $("#question14").val();
            var workbook_id = 1;
            console.log(question14);


            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: {
                    question14: question14,
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
        $('.state23').on('click', function(e) {

            var question23 = $("#question23").val();
            var workbook_id = 1;
            console.log(question23);

            var radio70 = [];
            var radio71 = [];
            var radio72 = [];
            var radio73 = [];
            var radio74 = [];
            var radio75 = [];
            var radio76 = [];
            var radio77 = [];
            var radio78 = [];
            var radio79 = [];
            var radio80 = [];
            var radio81 = [];
            var radio82 = [];
            var radio83 = [];
            var radio84 = [];
            var radio85 = [];
            var radio86 = [];
            var radio87 = [];
            var radio88 = [];
            var radio89 = [];
            var radio90 = [];
            var radio91 = [];
            var radio92 = [];
            var radio93 = [];
            var radio94 = [];
            var radio95 = [];
            var radio96 = [];
            var radio97 = [];

            var cbChecked = document.querySelector('[name="radio70"]:checked')
            if (cbChecked != null) {
                radio70.push(cbChecked.value)
            }
            var cbChecked1 = document.querySelector('[name="radio71"]:checked')
            if (cbChecked1 != null) {
                radio71.push(cbChecked1.value)
            }
            var cbChecked2 = document.querySelector('[name="radio72"]:checked')
            if (cbChecked2 != null) {
                radio72.push(cbChecked2.value)
            }
            var cbChecked3 = document.querySelector('[name="radio73"]:checked')
            if (cbChecked3 != null) {
                radio73.push(cbChecked3.value)
            }
            var cbChecked4 = document.querySelector('[name="radio74"]:checked')
            if (cbChecked4 != null) {
                radio74.push(cbChecked4.value)
            }

            var cbChecked5 = document.querySelector('[name="radio75"]:checked')
            if (cbChecked5 != null) {
                radio75.push(cbChecked5.value)
            }
            var cbChecked6 = document.querySelector('[name="radio76"]:checked')
            if (cbChecked6 != null) {
                radio76.push(cbChecked6.value)
            }
            var cbChecked7 = document.querySelector('[name="radio77"]:checked')
            if (cbChecked7 != null) {
                radio77.push(cbChecked7.value)
            }
            var cbChecked8 = document.querySelector('[name="radio78"]:checked')
            if (cbChecked8 != null) {
                radio78.push(cbChecked8.value)
            }
            var cbChecked9 = document.querySelector('[name="radio79"]:checked')
            if (cbChecked9 != null) {
                radio79.push(cbChecked9.value)
            }
            var cbChecked10 = document.querySelector('[name="radio80"]:checked')
            if (cbChecked10 != null) {
                radio80.push(cbChecked10.value)
            }
            var cbChecked11 = document.querySelector('[name="radio81"]:checked')
            if (cbChecked11 != null) {
                radio81.push(cbChecked11.value)
            }
            var cbChecked12 = document.querySelector('[name="radio82"]:checked')
            if (cbChecked12 != null) {
                radio82.push(cbChecked12.value)
            }
            var cbChecked13 = document.querySelector('[name="radio83"]:checked')
            if (cbChecked13 != null) {
                radio83.push(cbChecked13.value)
            }
            var cbChecked14 = document.querySelector('[name="radio84"]:checked')
            if (cbChecked14 != null) {
                radio84.push(cbChecked14.value)
            }
            var cbChecked15 = document.querySelector('[name="radio85"]:checked')
            if (cbChecked15 != null) {
                radio85.push(cbChecked15.value)
            }
            var cbChecked16 = document.querySelector('[name="radio86"]:checked')
            if (cbChecked16 != null) {
                radio86.push(cbChecked16.value)
            }
            var cbChecked17 = document.querySelector('[name="radio87"]:checked')
            if (cbChecked17 != null) {
                radio87.push(cbChecked17.value)
            }
            var cbChecked18 = document.querySelector('[name="radio88"]:checked')
            if (cbChecked18 != null) {
                radio88.push(cbChecked18.value)
            }
            var cbChecked19 = document.querySelector('[name="radio89"]:checked')
            if (cbChecked19 != null) {
                radio89.push(cbChecked19.value)
            }
            var cbChecked20 = document.querySelector('[name="radio90"]:checked')
            if (cbChecked20 != null) {
                radio90.push(cbChecked20.value)
            }
            var cbChecked21 = document.querySelector('[name="radio91"]:checked')
            if (cbChecked21 != null) {
                radio91.push(cbChecked21.value)
            }
            var cbChecked22 = document.querySelector('[name="radio92"]:checked')
            if (cbChecked22 != null) {
                radio92.push(cbChecked22.value)
            }
            var cbChecked23 = document.querySelector('[name="radio93"]:checked')
            if (cbChecked23 != null) {
                radio93.push(cbChecked23.value)
            }
            var cbChecked24 = document.querySelector('[name="radio94"]:checked')
            if (cbChecked24 != null) {
                radio94.push(cbChecked24.value)
            }
            var cbChecked25 = document.querySelector('[name="radio95"]:checked')
            if (cbChecked25 != null) {
                radio95.push(cbChecked25.value)
            }
            var cbChecked26 = document.querySelector('[name="radio96"]:checked')
            if (cbChecked26 != null) {
                radio96.push(cbChecked26.value)
            }
            var cbChecked27 = document.querySelector('[name="radio97"]:checked')
            if (cbChecked27 != null) {
                radio97.push(cbChecked27.value)
            }


            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: {
                    question23: question23,
                    workbook_id: workbook_id,

                    detailqs70: $("#dtquestion70").val(),
                    detailqs71: $("#dtquestion71").val(),
                    detailqs72: $("#dtquestion72").val(),
                    detailqs73: $("#dtquestion73").val(),
                    detailqs74: $("#dtquestion74").val(),
                    detailqs75: $("#dtquestion75").val(),
                    detailqs76: $("#dtquestion76").val(),
                    detailqs77: $("#dtquestion77").val(),
                    detailqs78: $("#dtquestion78").val(),
                    detailqs79: $("#dtquestion79").val(),
                    detailqs80: $("#dtquestion80").val(),
                    detailqs81: $("#dtquestion81").val(),
                    detailqs82: $("#dtquestion82").val(),
                    detailqs83: $("#dtquestion83").val(),
                    detailqs84: $("#dtquestion84").val(),
                    detailqs85: $("#dtquestion85").val(),
                    detailqs86: $("#dtquestion86").val(),
                    detailqs87: $("#dtquestion87").val(),
                    detailqs88: $("#dtquestion88").val(),
                    detailqs89: $("#dtquestion89").val(),
                    detailqs90: $("#dtquestion90").val(),
                    detailqs91: $("#dtquestion91").val(),
                    detailqs92: $("#dtquestion92").val(),
                    detailqs93: $("#dtquestion93").val(),
                    detailqs94: $("#dtquestion94").val(),
                    detailqs95: $("#dtquestion95").val(),
                    detailqs96: $("#dtquestion96").val(),
                    detailqs97: $("#dtquestion97").val(),

                    radio70: radio70,
                    radio71: radio71,
                    radio72: radio72,
                    radio73: radio73,
                    radio74: radio74,
                    radio75: radio75,
                    radio76: radio76,
                    radio77: radio77,
                    radio78: radio78,
                    radio79: radio79,
                    radio80: radio80,
                    radio81: radio81,
                    radio82: radio82,
                    radio83: radio83,
                    radio84: radio84,
                    radio85: radio85,
                    radio86: radio86,
                    radio87: radio87,
                    radio88: radio88,
                    radio89: radio89,
                    radio90: radio90,
                    radio91: radio91,
                    radio92: radio92,
                    radio93: radio93,
                    radio94: radio94,
                    radio95: radio95,
                    radio96: radio96,
                    radio97: radio97,
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
        $('.state24').on('click', function(e) {

            var question24 = $("#question24").val();
            var workbook_id = 1;
            console.log(question24);


            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: {
                    question24: question24,
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
        $('.state25').on('click', function(e) {

            var question25 = $("#question25").val();
            var workbook_id = 1;
            console.log(question25);

            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: {
                    question25: question25,
                    workbook_id: workbook_id,

                    detailqs98: $("#dtquestion98").val(),
                    detailqs99: $("#dtquestion99").val(),
                    detailqs100: $("#dtquestion100").val(),
                    detailqs101: $("#dtquestion101").val(),
                    detailqs102: $("#dtquestion102").val(),
                    detailqs103: $("#dtquestion103").val(),
                    detailqs104: $("#dtquestion104").val(),
                    detailqs105: $("#dtquestion105").val(),
                    detailqs106: $("#dtquestion106").val(),
                    detailqs107: $("#dtquestion107").val(),
                    detailqs108: $("#dtquestion108").val(),
                    detailqs109: $("#dtquestion109").val(),
                    detailqs110: $("#dtquestion110").val(),
                    detailqs111: $("#dtquestion111").val(),
                    detailqs112: $("#dtquestion112").val(),
                    detailqs113: $("#dtquestion113").val(),
                    detailqs114: $("#dtquestion114").val(),
                    detailqs115: $("#dtquestion115").val(),
                    detailqs116: $("#dtquestion116").val(),
                    detailqs117: $("#dtquestion117").val(),
                    detailqs118: $("#dtquestion118").val(),
                    detailqs119: $("#dtquestion119").val(),

                    agree98: $("#agree98").val(),
                    agree99: $("#agree99").val(),
                    agree100: $("#agree100").val(),
                    agree101: $("#agree101").val(),
                    agree102: $("#agree102").val(),
                    agree103: $("#agree103").val(),
                    agree104: $("#agree104").val(),
                    agree105: $("#agree105").val(),
                    agree106: $("#agree106").val(),
                    agree107: $("#agree107").val(),
                    agree108: $("#agree108").val(),
                    agree109: $("#agree109").val(),
                    agree110: $("#agree110").val(),
                    agree111: $("#agree111").val(),
                    agree112: $("#agree112").val(),
                    agree113: $("#agree113").val(),
                    agree114: $("#agree114").val(),
                    agree115: $("#agree115").val(),
                    agree116: $("#agree116").val(),
                    agree117: $("#agree117").val(),
                    agree118: $("#agree118").val(),
                    agree119: $("#agree119").val(),

                    healthy_unhealthy98: $("#healthy_unhealthy98").val(),
                    healthy_unhealthy99: $("#healthy_unhealthy99").val(),
                    healthy_unhealthy100: $("#healthy_unhealthy100").val(),
                    healthy_unhealthy101: $("#healthy_unhealthy101").val(),
                    healthy_unhealthy102: $("#healthy_unhealthy102").val(),
                    healthy_unhealthy103: $("#healthy_unhealthy103").val(),
                    healthy_unhealthy104: $("#healthy_unhealthy104").val(),
                    healthy_unhealthy105: $("#healthy_unhealthy105").val(),
                    healthy_unhealthy106: $("#healthy_unhealthy106").val(),
                    healthy_unhealthy107: $("#healthy_unhealthy107").val(),
                    healthy_unhealthy108: $("#healthy_unhealthy108").val(),
                    healthy_unhealthy109: $("#healthy_unhealthy109").val(),
                    healthy_unhealthy110: $("#healthy_unhealthy110").val(),
                    healthy_unhealthy111: $("#healthy_unhealthy111").val(),
                    healthy_unhealthy112: $("#healthy_unhealthy112").val(),
                    healthy_unhealthy113: $("#healthy_unhealthy113").val(),
                    healthy_unhealthy114: $("#healthy_unhealthy114").val(),
                    healthy_unhealthy115: $("#healthy_unhealthy115").val(),
                    healthy_unhealthy116: $("#healthy_unhealthy116").val(),
                    healthy_unhealthy117: $("#healthy_unhealthy117").val(),
                    healthy_unhealthy118: $("#healthy_unhealthy118").val(),
                    healthy_unhealthy119: $("#healthy_unhealthy119").val(),

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
        $('.state26').on('click', function(e) {

            var question26 = $("#question26").val();
            var workbook_id = 1;
            console.log(question26);


            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: {
                    question26: question26,
                    workbook_id: workbook_id,

                    detailqs120: $("#dtquestion120").val(),
                    detailqs121: $("#dtquestion121").val(),

                    heart120: $("#heart120").val(),
                    heart121: $("#heart121").val(),
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
        $('.state27').on('click', function(e) {

            var question27 = $("#question27").val();
            var workbook_id = 1;
            console.log(question27);


            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: {
                    question27: question27,
                    workbook_id: workbook_id,

                    detailqs120: $("#dtquestion120").val(),
                    detailqs121: $("#dtquestion121").val(),

                    heart120: $("#heart120").val(),
                    heart121: $("#heart121").val(),
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
        $('.state28').on('click', function(e) {

            var question28 = $("#question28").val();
            var workbook_id = 1;
            console.log(question28);


            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: {
                    question28: question28,
                    workbook_id: workbook_id,

                    detailqs120: $("#dtquestion120").val(),
                    detailqs121: $("#dtquestion121").val(),

                    heart120: $("#heart120").val(),
                    heart121: $("#heart121").val(),
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
        $('.state29').on('click', function(e) {

            var question29 = $("#question29").val();
            var workbook_id = 1;
            console.log(question29);


            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: {
                    question29: question29,
                    workbook_id: workbook_id,

                    detailqs122: $("#dtquestion122").val(),
                    
                    comment122: $("#comment122").val(),
                   
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
        $('.state30').on('click', function(e) {

            var question30 = $("#question30").val();
            var workbook_id = 1;
            console.log(question30);


            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                data: {
                    question30: question30,
                    workbook_id: workbook_id,

                    detailqs123: $("#dtquestion123").val(),
                    
                    comment123: $("#comment123").val(),
                
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
    </script> --}}

    <script>
       
      
        $(document).ready(function() {
            var current = 1,
           
            steps = $("fieldset").length;
            $(".next").click(function() {

                var form = $("#workbook_form");
                form.validate();
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
