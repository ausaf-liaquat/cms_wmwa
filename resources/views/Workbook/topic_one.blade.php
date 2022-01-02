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
                    <div class="text-end"><span class="percent"></span> Completed | Topic 1 to 3 <span
                            id="topic_no"></span></div>
                    <div class="progress my-2" style="height: 10px;">
                        <div class="progress-bar" role="progressbar" style="" aria-valuenow="01" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="card float-none workbook">
                <div class="card-body">
                    <form id="workbook_form" name="workbook_form" method="post">
                        @foreach ($topics->questions as $item)

                            <fieldset id="{{ $item->id }}">
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

                                    {{-- <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end previous "
                                        style="    margin-right: 5px;" value="Back" /> --}}
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
                                    <h1 class="blue handwritten">Working Agreement </h1>

                                    <div class="content-container m-5">
                                        {{-- @foreach ($item->WorkbookQuestionniare as $list) --}}


                                        <div class="question mb-3">
                                            <span class="question text-right">Session days that work for us:</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="question" id="dtquestion1" value="1">
                                                <input type="email" class="form-control" id="session_days1"
                                                    placeholder="">
                                                <label for="session_days1">Your Answer</label>
                                            </div>
                                        </div>
                                        <div class="question mb-3">
                                            <span class="question text-right">Times that work for us:</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="question" id="dtquestion2" value="2">
                                                <input type="email" class="form-control" id="session_days2"
                                                    placeholder="">
                                                <label for="session_days2">Your Answer</label>
                                            </div>
                                        </div>
                                        <div class="question mb-3">
                                            <span class="question text-right">How often we will speak:</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="question" id="dtquestion3" value="3">
                                                <input type="email" class="form-control" id="session_days3"
                                                    placeholder="">
                                                <label for="session_days3">Your Answer</label>
                                            </div>
                                        </div>
                                        <div class="question mb-3">
                                            <span class="question text-right">If we need to cancel or move a session we
                                                will:</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="question" id="dtquestion4" value="4">
                                                <input type="email" class="form-control" id="session_days4"
                                                    placeholder="">
                                                <label for="session_days4">Your Answer</label>
                                            </div>
                                        </div>
                                        <div class="question mb-3">
                                            <span class="question text-right">We will keep sessions confidential, unless
                                                someone’s safety or wellbeing is at risk.<br>Is there anyone you would worry
                                                us about sharing information with?</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="question" id="dtquestion5" value="5">
                                                <input type="email" class="form-control" id="session_days5"
                                                    placeholder="">
                                                <label for="session_days5">Your Answer</label>
                                            </div>
                                        </div>
                                        <div class="question mb-3">
                                            <span class="question text-right">If you don’t answer the phone:</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="question" id="dtquestion6" value="6">
                                                <input type="email" class="form-control" id="session_days6"
                                                    placeholder="">
                                                <label for="session_days6">Your Answer</label>
                                            </div>
                                        </div>
                                        <div class="question mb-3">
                                            <span class="question text-right">If your support worker hasn’t heard from you
                                                in a week:</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="question" id="dtquestion7" value="7">
                                                <input type="email" class="form-control" id="session_days7"
                                                    placeholder="">
                                                <label for="session_days7">Your Answer</label>
                                            </div>
                                        </div>
                                        <div class="question mb-3">
                                            <span class="question text-right">Is there anything you really enjoy doing that
                                                we could include in our sessions?</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="question" id="dtquestion8" value="8">
                                                <input type="email" class="form-control" id="session_days8"
                                                    placeholder="">
                                                <label for="session_days8">Your Answer</label>
                                            </div>
                                        </div>
                                        <div class="question mb-3">
                                            <span class="question text-right">Confidentiality & information sharing has been
                                                explained to me:</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="question" id="dtquestion9" value="9">
                                                <input type="email" class="form-control" id="session_days9"
                                                    placeholder="">
                                                <label for="session_days9">Your Answer</label>
                                            </div>
                                        </div>
                                        <div class="question mb-3">
                                            <span class="question text-right">Behaviour in our sessions: (For example, being
                                                respectful to each other)</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="question" id="dtquestion10" value="10">
                                                <input type="email" class="form-control" id="session_days10"
                                                    placeholder="">
                                                <label for="session_days10">Your Answer</label>
                                            </div>
                                        </div>
                                        <div class="question mb-3">
                                            <span class="question text-right">Signature, by typing your name in the box
                                                below you're agreeing to stick to the above agreements.</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="question" id="dtquestion11" value="11">
                                                <input type="email" class="form-control" id="session_days11"
                                                    placeholder="">
                                                <label for="session_days11">Your Signature</label>
                                            </div>
                                        </div>



                                        {{-- @endforeach --}}

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

                                    <a  class="btn btn-save mt-3 float-start">Save/Exit</a>


                                    <input type="button"
                                        class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                        value="Topic 1" />

                                    <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end previous "
                                        style="    margin-right: 5px;" value="Previous" />



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
                                <p style="text-align: center">Thank you for completing Introduction!</p>

                            </div>
                            <input type="button" class="btn btn-primary btn-sm finish" name="submit" value="Submit" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection