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
                                                        id="session_days{{ $list->id }}" placeholder="">
                                                    <label for="session-days">Your Answer</label>
                                                </div>
                                            </div>

                                        @endforeach

                                    </div>

                                    <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                    <input type="button"
                                        class="btn btn-primary btn-sm mt-3 mr-2 float-end next state{{ $item->id }}"
                                        value="Next" />
                                @elseif ($item->option_type == 'introduction_outcomes')
                                    <h1 class="blue handwritten">Outcomes</h1>

                                    <div class="content-container m-5">

                                        <div class="help text-center mb-5">
                                            <h2 class="m-0 p-0 handwritten blue">Read the questions below and score yourself
                                                on a scale from 1-5.<br>1 is ‘No, never’, 5 is ‘Yes, always’.</h2>
                                        </div>

                                        @foreach ($item->WorkbookQuestionniare as $list)
                                            <div class="section mb-4">
                                                <input type="hidden" name="quest" id="question{{ $item->id }}" value="{{ $list->id }}">
                                                {!! $list->quest_title !!}
                                                <input type="range" class="form-range" min="0" max="4"
                                                    id="safety{{ $list->id }}" required>
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
                                                            <input type="text" class="form-control"
                                                                id="detail{{ $list->id }}" placeholder="" required>
                                                            <label for="detail">Details</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control"
                                                                id="action{{ $list->id }}" placeholder="" required>
                                                            <label for="action">Action Agreed</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control"
                                                                id="by_who{{ $list->id }}" placeholder="" required>
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
                                        value="Next" />
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

            // $.ajax({
            //     type: "POST",
            //     url: "{{ route('workbookopen.store') }}",
            //     data: {
            //         question4: question4,
            //         workbook_id: workbook_id,

            //         detailqs1: $("#dtquestion1").val(),
            //         detailqs2: $("#dtquestion2").val(),
            //         detailqs3: $("#dtquestion3").val(),
            //         detailqs4: $("#dtquestion4").val(),
            //         detailqs5: $("#dtquestion5").val(),
            //         detailqs6: $("#dtquestion6").val(),
            //         detailqs7: $("#dtquestion7").val(),
            //         detailqs8: $("#dtquestion8").val(),
            //         detailqs9: $("#dtquestion9").val(),
            //         detailqs10: $("#dtquestion10").val(),
            //         detailqs11: $("#dtquestion11").val(),

            //         dtanswer1: $("#session_days1").val(),
            //         dtanswer2: $("#session_days2").val(),
            //         dtanswer3: $("#session_days3").val(),
            //         dtanswer4: $("#session_days4").val(),
            //         dtanswer5: $("#session_days5").val(),
            //         dtanswer6: $("#session_days6").val(),
            //         dtanswer7: $("#session_days7").val(),
            //         dtanswer8: $("#session_days8").val(),
            //         dtanswer9: $("#session_days9").val(),
            //         dtanswer10: $("#session_days10").val(),
            //         dtanswer11: $("#session_days11").val(),

            //     },
            //     cache: false,
            //     success: function(data) {
            //         console.log(data)
            //     },
            //     error: function(data) {
            //         console.log(data)
            //     }
            // });
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
