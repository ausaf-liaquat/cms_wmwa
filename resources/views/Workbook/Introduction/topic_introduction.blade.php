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

                                    <div class="content-container m-5">
                                        <h1 class="blue handwritten topic-title text-center"><small>Fermentum
                                                Tellus...</small><br>Youth Workbook</h1>

                                    </div>

                                @elseif ($item->option_type=='introduction_groundrules')


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



                                @elseif ($item->option_type=='introduction_workingagreement')

                                    <h1 class="blue handwritten">Working Agreemennt </h1>

                                    <div class="content-container m-5">
                                        @foreach ($item->WorkbookQuestionniare as $list)


                                            <div class="question mb-3">
                                                <input type="hidden" name="question[{{ $list->id }}]"
                                                    value="{{ $list->id }}">
                                                <span class="question text-right">{{ $list->quest_title }}</span>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="session-days"
                                                        placeholder="" >
                                                    <label for="session-days">Your Answer</label>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                @elseif ($item->option_type == 'introduction_outcomes')

                                    <h1 class="blue handwritten">Outcomes</h1>

                                    <div class="content-container m-5">

                                        <div class="help text-center mb-5">
                                            <h2 class="m-0 p-0 handwritten blue">Read the questions below and score yourself
                                                on a scale from 1-5.<br>1 is ‘No, never’, 5 is ‘Yes, always’.</h2>
                                        </div>

                                        <form>
                                            @foreach ($item->WorkbookQuestionniare as $list)


                                                <div class="section mb-4">
                                                    <input type="hidden" name="quest" value="{{$list->id}}">
                                                     {!!$list->quest_title!!}
                                                    <input type="range" class="form-range" min="0" max="4" id="safety{{$list->id}}" required>
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
                                                                <input type="text" class="form-control" id="session-days{{$list->id}}"
                                                                    placeholder="">
                                                                <label for="session-days">Details</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control" id="session-days{{$list->id}}"
                                                                    placeholder="">
                                                                <label for="session-days">Action Agreed</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control" id="session-days{{$list->id}}"
                                                                    placeholder="">
                                                                <label for="session-days">By who/When</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach


                                      
                                        </form>
                                    </div>


                                @endif

                                <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end next"
                                    value="Next" />
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
