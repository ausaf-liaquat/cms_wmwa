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
                                @if ($item->option_type=='introduction_1')
                                    <div class="content-container m-5 ">

                                        <h1 class="blue handwritten topic-title text-center">{!! $item->question !!}</h1>

                                    </div>

                                @endif

                                <a href="#" class="btn btn-save mt-3 float-start">Save/Exit</a>

                                <input type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end next" value="Next" />
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
