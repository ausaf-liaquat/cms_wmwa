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
                    <div class="text-end"><span class="percent"></span> Completed | Introduction <span
                            id="topic_no"></span></div>
                    <div class="progress my-2" style="height: 10px;">
                        <div class="progress-bar" role="progressbar" style="" aria-valuenow="01" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="card float-none workbook">
                <div class="card-body">
                    <form data-persist="garlic" id="workbook_form" name="workbook_form" method="post">
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

                                        <div class="question mb-3">
                                            <span class="question text-right">Session days that work for us:</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="dtquestion[]" id="dtquestion1" value="1">
                                                <input type="text" name="session_days1" class="form-control"
                                                    id="session_days1" placeholder="" required>
                                                <label for="session_days1">Your Answer</label>
                                            </div>
                                        </div>
                                        <div class="question mb-3">
                                            <span class="question text-right">Times that work for us:</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="dtquestion[]" id="dtquestion2" value="2">
                                                <input type="text" name="session_days2" class="form-control"
                                                    id="session_days2" placeholder="" required>
                                                <label for="session_days2">Your Answer</label>
                                            </div>
                                        </div>
                                        <div class="question mb-3">
                                            <span class="question text-right">How often we will speak:</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="dtquestion[]" id="dtquestion3" value="3">
                                                <input type="text" name="session_days3" class="form-control"
                                                    id="session_days3" placeholder="" required>
                                                <label for="session_days3">Your Answer</label>
                                            </div>
                                        </div>
                                        <div class="question mb-3">
                                            <span class="question text-right">If we need to cancel or move a session we
                                                will:</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="dtquestion[]" id="dtquestion4" value="4">
                                                <input type="text" name="session_days4" class="form-control"
                                                    id="session_days4" placeholder="" required>
                                                <label for="session_days4">Your Answer</label>
                                            </div>
                                        </div>
                                        <div class="question mb-3">
                                            <span class="question text-right">We will keep sessions confidential, unless
                                                someone’s safety or wellbeing is at risk.<br>Is there anyone you would worry
                                                us about sharing information with?</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="dtquestion[]" id="dtquestion5" value="5">
                                                <input type="text" name="session_days5" class="form-control"
                                                    id="session_days5" placeholder="" required>
                                                <label for="session_days5">Your Answer</label>
                                            </div>
                                        </div>
                                        <div class="question mb-3">
                                            <span class="question text-right">If you don’t answer the phone:</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="dtquestion[]" id="dtquestion6" value="6">
                                                <input type="text" name="session_days6" class="form-control"
                                                    id="session_days6" placeholder="" required>
                                                <label for="session_days6">Your Answer</label>
                                            </div>
                                        </div>
                                        <div class="question mb-3">
                                            <span class="question text-right">If your support worker hasn’t heard from you
                                                in a week:</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="dtquestion[]" id="dtquestion7" value="7">
                                                <input type="text" name="session_days7" class="form-control"
                                                    id="session_days7" placeholder="" required>
                                                <label for="session_days7">Your Answer</label>
                                            </div>
                                        </div>
                                        <div class="question mb-3">
                                            <span class="question text-right">Is there anything you really enjoy doing that
                                                we could include in our sessions?</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="dtquestion[]" id="dtquestion8" value="8">
                                                <input type="text" name="session_days8" class="form-control"
                                                    id="session_days8" placeholder="" required>
                                                <label for="session_days8">Your Answer</label>
                                            </div>
                                        </div>
                                        <div class="question mb-3">
                                            <span class="question text-right">Confidentiality & information sharing has been
                                                explained to me:</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="dtquestion[]" id="dtquestion9" value="9">
                                                <input type="text" name="session_days9" class="form-control"
                                                    id="session_days9" placeholder="" required>
                                                <label for="session_days9">Your Answer</label>
                                            </div>
                                        </div>
                                        <div class="question mb-3">
                                            <span class="question text-right">Behaviour in our sessions: (For example, being
                                                respectful to each other)</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="dtquestion[]" id="dtquestion10" value="10">
                                                <input type="text" name="session_days10" class="form-control"
                                                    id="session_days10" placeholder="" required>
                                                <label for="session_days10">Your Answer</label>
                                            </div>
                                        </div>
                                        <div class="question mb-3">
                                            <span class="question text-right">Signature, by typing your name in the box
                                                below you're agreeing to stick to the above agreements.</span>
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="dtquestion[]" id="dtquestion11" value="11">
                                                <input type="text" name="session_days11" class="form-control"
                                                    id="session_days11" placeholder="" required>
                                                <label for="session_days11">Your Signature</label>
                                            </div>
                                        </div>

                                    </div>

                                    <a class="btn btn-save mt-3 float-start state{{ $item->id }}">Save/Exit</a>

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

                                    <button type="submit" class="btn btn-save mt-3 float-start state">Save/Exit</button>


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
@section('extrajs')

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // $('.state1').on('click', function(e) {
        //     var question1 = $("#question1").val();
        //     var workbook_id = 1;
        //     console.log(question1);

        //     $.ajax({
        //         type: "POST",
        //         url: "{{ route('workbookopen.store') }}",
        //         data: "&question1=" + question1 + "&workbook_id=" +
        //             workbook_id,
        //         cache: false,
        //         success: function(data) {
        //             console.log(data)

        //         },
        //         error: function(data) {
        //             console.log(data)
        //         }
        //     });

        // });
        // $('.state2').on('click', function(e) {

        //     var question2 = $("#question2").val();

        //     var workbook_id = 1;
        //     console.log(question2);

        //     $.ajax({
        //         type: "POST",
        //         url: "{{ route('workbookopen.store') }}",
        //         data: "&question2=" + question2 + "&workbook_id=" +
        //             workbook_id,
        //         cache: false,
        //         success: function(data) {
        //             console.log(data)

        //         },
        //         error: function(data) {
        //             console.log(data)
        //         }
        //     });
        // })
        $('.state3').on('click', function(e) {

            var question3 = $("#question3").val();
            var workbook_id = 1;
            console.log(question3);

            $.ajax({
                type: "POST",
                url: "{{ route('workbookopen.store') }}",
                // data: $("#workbook_form").serialize() + "&question3=" + question3 + "&workbook_id=" +
                //         workbook_id,
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
        // $('.state4').on('click', function(e) {

        //     var question4 = $("#question4").val();
        //     var workbook_id = 1;
        //     console.log(question4);

        //     $.ajax({
        //         type: "POST",
        //         url: "{{ route('workbookopen.store') }}",
        //         data: {
        //             question4: question4,
        //             workbook_id: workbook_id,


        //             detailqs13: $("#dtquestion13").val(),
        //             detailqs14: $("#dtquestion14").val(),
        //             detailqs15: $("#dtquestion15").val(),
        //             detailqs16: $("#dtquestion16").val(),
        //             detailqs17: $("#dtquestion17").val(),
        //             detailqs18: $("#dtquestion18").val(),
        //             detailqs19: $("#dtquestion19").val(),
        //             detailqs20: $("#dtquestion20").val(),

        //             safety13: $("#safety13").val(),
        //             safety14: $("#safety14").val(),
        //             safety15: $("#safety15").val(),
        //             safety16: $("#safety16").val(),
        //             safety17: $("#safety17").val(),
        //             safety18: $("#safety18").val(),
        //             safety19: $("#safety19").val(),
        //             safety20: $("#safety20").val(),


        //             detail13: $("#detail13").val(),
        //             detail14: $("#detail14").val(),
        //             detail15: $("#detail15").val(),
        //             detail16: $("#detail16").val(),
        //             detail17: $("#detail17").val(),
        //             detail18: $("#detail18").val(),
        //             detail19: $("#detail19").val(),
        //             detail20: $("#detail20").val(),

        //             action13: $("#action13").val(),
        //             action14: $("#action14").val(),
        //             action15: $("#action15").val(),
        //             action16: $("#action16").val(),
        //             action17: $("#action17").val(),
        //             action18: $("#action18").val(),
        //             action19: $("#action19").val(),
        //             action20: $("#action20").val(),

        //             by_who13: $("#by_who13").val(),
        //             by_who14: $("#by_who14").val(),
        //             by_who15: $("#by_who15").val(),
        //             by_who16: $("#by_who16").val(),
        //             by_who17: $("#by_who17").val(),
        //             by_who18: $("#by_who18").val(),
        //             by_who19: $("#by_who19").val(),
        //             by_who20: $("#by_who20").val(),

        //         },
        //         cache: false,
        //         success: function(data) {
        //             console.log(data)
        //         },
        //         error: function(data) {
        //             console.log(data)
        //         }
        //     });
        // })
    </script>

    <script>
        $(document).ready(function() {
            var current = 1,

                steps = $("fieldset").length;
            $(".next").click(function() {

                var form = $("#workbook_form");
                form.validate({

                    errorPlacement: function(error, element) {
                        // if (element.is(":radio")) {
                            error.insertBefore(element)

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
      <script type="text/javascript">
        jQuery.extend(jQuery.validator.messages, {
            required: "Please fill this field",

        });
    </script>
@endsection
