<div>
    <div class="row">
        <div class="col-md-9">
            <h2>Youth Workbook</h2>
        </div>
        <div class="col-md-3">
            <div class="text-end"><span class="percent"></span> Completed | Introduction <span
                    id="topic_no"></span></div>
            <div class="progress my-2" style="height: 10px;">
                <div class="progress-bar" role="progressbar" style="width:{{$percent}}%" aria-valuenow="01" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <div class="card float-none workbook">
        <div class="card-body">
    <form data-persist="garlic" id="workbookform" wire:submit.prevent="submitintroduction">

        @if ($currentstep == 1)
            <input type="text" name="currstep" value="{{$currentstep}}" style="display: none">
            <div class="step-one">
                <input type="hidden" name="quest" id="question1" wire:model="question1" value="1">
                <div class="content-container m-5">
                    <h1 class="blue handwritten topic-title text-center"><small>Fermentum
                            Tellus...</small><br>Youth Workbook</h1>
                </div>
            </div>
        @endif

        @if ($currentstep == 2)
            <input type="text" name="currstep" value="{{$currentstep}}" style="display: none">
            <div class="step-two">
                <input type="hidden" name="quest" id="question2" wire:model="question2" value="2">
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
            </div>
        @endif

        @if ($currentstep == 3)
       
            <div class="step-three">
                <h1 class="blue handwritten">Working Agreement </h1>
                <input type="hidden" name="quest" id="question3" wire:model="question3" value="3">
                <div class="content-container m-5">

                    <div class="question mb-3">
                        <span class="question text-right">Session days that work for us:</span>
                        <div class="form-floating mb-3">
                            <input type="hidden" name="dtquestion[]" wire:model="dtquestion1" value="1">
                            <input type="text" name="session_days1" class="form-control"  id="session_days1" placeholder=""
                                wire:model="session_days1">
                            <label for="session_days1">Your Answer</label>
                            <span class="text-danger" style="font-size: small;font-weight: 700;">@error('session_days1') This field is required. @enderror</span>
                        </div>
                    </div>
                    <div class="question mb-3">
                        <span class="question text-right">Times that work for us:</span>
                        <div class="form-floating mb-3">
                            <input type="hidden" name="dtquestion[]" wire:model="dtquestion2" value="2">
                            <input type="text" name="session_days2" class="form-control" id="session_days2" placeholder=""
                                wire:model="session_days2">
                            <label for="session_days2">Your Answer</label>
                            <span class="text-danger" style="font-size: small;font-weight: 700;">@error('session_days2') This field is required. @enderror</span>
                        </div>
                    </div>
                    <div class="question mb-3">
                        <span class="question text-right">How often we will speak:</span>
                        <div class="form-floating mb-3">
                            <input type="hidden" name="dtquestion[]" wire:model="dtquestion3" value="3">
                            <input type="text" name="session_days3" wire:model="session_days3" class="form-control" id="session_days3"
                                placeholder="" required>
                            <label for="session_days3">Your Answer</label>
                            <span class="text-danger" style="font-size: small;font-weight: 700;">@error('session_days3') This field is required. @enderror</span>
                        </div>
                    </div>
                    <div class="question mb-3">
                        <span class="question text-right">If we need to cancel or move a session we
                            will:</span>
                        <div class="form-floating mb-3">
                            <input type="hidden" name="dtquestion[]" wire:model="dtquestion4" value="4">
                            <input type="text" name="session_days4" wire:model="session_days4" class="form-control" id="session_days4"
                                placeholder="" required>
                            <label for="session_days4">Your Answer</label>
                            <span class="text-danger" style="font-size: small;font-weight: 700;">@error('session_days4') This field is required. @enderror</span>
                        </div>
                    </div>
                    <div class="question mb-3">
                        <span class="question text-right">We will keep sessions confidential, unless
                            someone’s safety or wellbeing is at risk.<br>Is there anyone you would worry
                            us about sharing information with?</span>
                        <div class="form-floating mb-3">
                            <input type="hidden" name="dtquestion[]" wire:model="dtquestion5" value="5">
                            <input type="text" name="session_days5" wire:model="session_days5" class="form-control" id="session_days5"
                                placeholder="" required>
                            <label for="session_days5">Your Answer</label>
                            <span class="text-danger" style="font-size: small;font-weight: 700;">@error('session_days5') This field is required. @enderror</span>
                        </div>
                    </div>
                    <div class="question mb-3">
                        <span class="question text-right">If you don’t answer the phone:</span>
                        <div class="form-floating mb-3">
                            <input type="hidden" name="dtquestion[]" wire:model="dtquestion6" value="6">
                            <input type="text" name="session_days6" wire:model="session_days6" class="form-control" id="session_days6"
                                placeholder="" required>
                            <label for="session_days6">Your Answer</label>
                            <span class="text-danger" style="font-size: small;font-weight: 700;">@error('session_days6') This field is required. @enderror</span>
                        </div>
                    </div>
                    <div class="question mb-3">
                        <span class="question text-right">If your support worker hasn’t heard from you
                            in a week:</span>
                        <div class="form-floating mb-3">
                            <input type="hidden" name="dtquestion[]" wire:model="dtquestion7" value="7">
                            <input type="text" name="session_days7" wire:model="session_days7" class="form-control" id="session_days7"
                                placeholder="" required>
                            <label for="session_days7">Your Answer</label>
                            <span class="text-danger" style="font-size: small;font-weight: 700;">@error('session_days7') This field is required. @enderror</span>
                        </div>
                    </div>
                    <div class="question mb-3">
                        <span class="question text-right">Is there anything you really enjoy doing that
                            we could include in our sessions?</span>
                        <div class="form-floating mb-3">
                            <input type="hidden" name="dtquestion[]" wire:model="dtquestion8" value="8">
                            <input type="text" name="session_days8" wire:model="session_days8" class="form-control" id="session_days8"
                                placeholder="" required>
                            <label for="session_days8">Your Answer</label>
                            <span class="text-danger" style="font-size: small;font-weight: 700;">@error('session_days8') This field is required. @enderror</span>
                        </div>
                    </div>
                    <div class="question mb-3">
                        <span class="question text-right">Confidentiality & information sharing has been
                            explained to me:</span>
                        <div class="form-floating mb-3">
                            <input type="hidden" name="dtquestion[]" wire:model="dtquestion9" value="9">
                            <input type="text" name="session_days9" wire:model="session_days9" class="form-control" id="session_days9"
                                placeholder="" required>
                            <label for="session_days9">Your Answer</label>
                            <span class="text-danger" style="font-size: small;font-weight: 700;">@error('session_days9') This field is required. @enderror</span>
                        </div>
                    </div>
                    <div class="question mb-3">
                        <span class="question text-right">Behaviour in our sessions: (For example, being
                            respectful to each other)</span>
                        <div class="form-floating mb-3">
                            <input type="hidden" name="dtquestion[]" wire:model="dtquestion10" value="10">
                            <input type="text" name="session_days10" wire:model="session_days10" class="form-control" id="session_days10"
                                placeholder="" required>
                            <label for="session_days10">Your Answer</label>
                            <span class="text-danger" style="font-size: small;font-weight: 700;">@error('session_days10') This field is required. @enderror</span>
                        </div>
                    </div>
                    <div class="question mb-3">
                        <span class="question text-right">Signature, by typing your name in the box
                            below you're agreeing to stick to the above agreements.</span>
                        <div class="form-floating mb-3">
                            <input type="hidden" name="dtquestion[]" wire:model="dtquestion11" value="11">
                            <input type="text" name="session_days11" wire:model="session_days11" class="form-control" id="session_days11"
                                placeholder="" required>
                            <label for="session_days11">Your Signature</label>
                            <span class="text-danger" style="font-size: small;font-weight: 700;">@error('session_days11') This field is required. @enderror</span>
                        </div>
                    </div>

                </div>
            </div>  
            
        @endif

        @if ($currentstep == 4)
            <div class="step-four">
                <h1 class="blue handwritten">Outcomes</h1>
                <input type="hidden" name="quest" id="question4" wire:model="question4" value="4">
                <div class="content-container m-5">

                    <div class="help text-center mb-5">
                        <h2 class="m-0 p-0 handwritten blue">Read the questions below and score yourself on a scale from
                            1-5.<br>1 is ‘No, never’, 5 is ‘Yes, always’.</h2>
                    </div>

                    <form>
                        <div class="section mb-4">
                            <input type="hidden" name="dtquestion[]" wire:model="dtquestion13" value="13">
                            <h2 class="m-0 blue handwritten">Safety</h2>
                            <label for="customRange2" class="form-label"> I feel safe and I know how to keep myself
                                safe.</label>
                            <input type="range" class="form-range" min="0" max="4" id="safety" wire:model="safety">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="slider-label">1 - No Never</span>
                                <span class="slider-no">2</span>
                                <span class="slider-no">3</span>
                                <span class="slider-no">4</span>
                                <span class="slider-label">5 - Yes, always</span>
                            </div>
                            <span class="text-danger">@error('safety'){{ $message }}@enderror</span>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="details13">
                                        <label for="session-days">Details</label>
                                        <span class="text-danger">@error('details13'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="agreed13">
                                        <label for="session-days">Action Agreed</label>
                                        <span class="text-danger">@error('agreed13'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="by_who13">
                                        <label for="session-days">By who/When</label>
                                        <span class="text-danger">@error('by_who13'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mb-4">
                            <input type="hidden" name="dtquestion[]" wire:model="dtquestion14" value="14">
                            <h2 class="m-0 blue handwritten">Behaviour</h2>
                            <label for="customRange2" class="form-label">I am aware of the impact that domestic
                                abuse
                                has had on my behaviour; I do not behave in a way that upsets others (intimate and
                                family
                                relationships).</label>
                            <input type="range" class="form-range" min="0" max="4" id="safety"
                                wire:model="behaviour">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="slider-label">1 - No Never</span>
                                <span class="slider-no">2</span>
                                <span class="slider-no">3</span>
                                <span class="slider-no">4</span>
                                <span class="slider-label">5 - Yes, always</span>
                            </div>
                            <span class="text-danger">@error('behaviour'){{ $message }}@enderror</span>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="details14">
                                        <label for="session-days">Details</label>
                                        <span class="text-danger">@error('details14'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="agreed14">
                                        <label for="session-days">Action Agreed</label>
                                        <span class="text-danger">@error('agreed14'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="by_who14">
                                        <label for="session-days">By who/When</label>
                                        <span class="text-danger">@error('by_who14'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mb-4">
                            <input type="hidden" name="dtquestion[]" wire:model="dtquestion15" value="15">
                            <h2 class="m-0 blue handwritten">Help & Intervention</h2>
                            <label for="customRange2" class="form-label">I can seek help when needed; I know where
                                to
                                go to get support.</label>
                            <input type="range" class="form-range" min="0" max="4" wire:model="help_intervention">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="slider-label">1 - No Never</span>
                                <span class="slider-no">2</span>
                                <span class="slider-no">3</span>
                                <span class="slider-no">4</span>
                                <span class="slider-label">5 - Yes, always</span>
                            </div>
                            <span class="text-danger">@error('help_intervention'){{ $message }}@enderror</span>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="details15">
                                        <label for="session-days">Details</label>
                                        <span class="text-danger">@error('details15'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="agreed15">
                                        <label for="session-days">Action Agreed</label>
                                        <span class="text-danger">@error('agreed15'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="by_who15">
                                        <label for="session-days">By who/When</label>
                                        <span class="text-danger">@error('by_who15'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mb-4">
                            <input type="hidden" name="dtquestion[]" wire:model="dtquestion16" value="16">
                            <h2 class="m-0 blue handwritten">Domestic Abuse</h2>
                            <label for="customRange2" class="form-label">I know what domestic abuse is; I can
                                recognise
                                its impact on myself and others.</label>
                            <input type="range" class="form-range" min="0" max="4" wire:model="domestic_abuse">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="slider-label">1 - No Never</span>
                                <span class="slider-no">2</span>
                                <span class="slider-no">3</span>
                                <span class="slider-no">4</span>
                                <span class="slider-label">5 - Yes, always</span>
                            </div>
                            <span class="text-danger">@error('domestic_abuse'){{ $message }}@enderror</span>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="details16">
                                        <label for="session-days">Details</label>
                                        <span class="text-danger">@error('details16'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="agreed16">
                                        <label for="session-days">Action Agreed</label>
                                        <span class="text-danger">@error('agreed16'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="by_who16">
                                        <label for="session-days">By who/When</label>
                                        <span class="text-danger">@error('by_who16'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mb-4">
                            <input type="hidden" name="dtquestion[]" wire:model="dtquestion17" value="17">
                            <h2 class="m-0 blue handwritten">Healthy Relationships</h2>
                            <label for="customRange2" class="form-label">I know the difference between a healthy
                                relationship and an abusive one, and can spot warning signs; I can choose to end a
                                relationship if I want to.</label>
                            <input type="range" class="form-range" min="0" max="4"
                                wire:model="healthy_relationship">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="slider-label">1 - No Never</span>
                                <span class="slider-no">2</span>
                                <span class="slider-no">3</span>
                                <span class="slider-no">4</span>
                                <span class="slider-label">5 - Yes, always</span>
                            </div>
                            <span class="text-danger">@error('healthy_relationship'){{ $message }}@enderror</span>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="details17">
                                        <label for="session-days">Details</label>
                                        <span class="text-danger">@error('details17'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="agreed17">
                                        <label for="session-days">Action Agreed</label>
                                        <span class="text-danger">@error('agreed17'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="by_who17">
                                        <label for="session-days">By who/When</label>
                                        <span class="text-danger">@error('by_who17'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mb-4">
                            <input type="hidden" name="dtquestion[]" wire:model="dtquestion18" value="18">
                            <h2 class="m-0 blue handwritten">Coping</h2>
                            <label for="customRange2" class="form-label">I can use different coping strategies, and
                                I
                                find this helpful when dealing with my difficult thoughts and feelings.</label>
                            <input type="range" class="form-range" min="0" max="4" wire:model="coping">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="slider-label">1 - No Never</span>
                                <span class="slider-no">2</span>
                                <span class="slider-no">3</span>
                                <span class="slider-no">4</span>
                                <span class="slider-label">5 - Yes, always</span>
                            </div>
                            <span class="text-danger">@error('coping'){{ $message }}@enderror</span>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="details18">
                                        <label for="session-days">Details</label>
                                        <span class="text-danger">@error('details18'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="agreed18">
                                        <label for="session-days">Action Agreed</label>
                                        <span class="text-danger">@error('agreed18'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="by_who18">
                                        <label for="session-days">By who/When</label>
                                        <span class="text-danger">@error('by_who18'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mb-4">
                            <input type="hidden" name="dtquestion[]" wire:model="dtquestion19" value="19">
                            <h2 class="m-0 blue handwritten">Confidence & Self-esteem</h2>
                            <label for="customRange2" class="form-label">I feel confident about myself and my
                                abilities.</label>
                            <input type="range" class="form-range" min="0" max="4" wire:model="confidence">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="slider-label">1 - No Never</span>
                                <span class="slider-no">2</span>
                                <span class="slider-no">3</span>
                                <span class="slider-no">4</span>
                                <span class="slider-label">5 - Yes, always</span>
                            </div>
                            <span class="text-danger">@error('confidence'){{ $message }}@enderror</span>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="details19">
                                        <label for="session-days">Details</label>
                                        <span class="text-danger">@error('details19'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="agreed19">
                                        <label for="session-days">Action Agreed</label>
                                        <span class="text-danger">@error('agreed19'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="by_who19">
                                        <label for="session-days">By who/When</label>
                                        <span class="text-danger">@error('by_who19'){{ $message }}@enderror</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mb-4 mb-4">
                            <input type="hidden" name="dtquestion[]" wire:model="dtquestion20" value="20">
                            <h2 class="m-0 blue handwritten">Education & Learning</h2>
                            <label for="customRange2" class="form-label">I am reaching my full potential and I am
                                engaging well with school/college/work.</label>
                            <input type="range" class="form-range" min="0" max="4" wire:model="education">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="slider-label">1 - No Never</span>
                                <span class="slider-no">2</span>
                                <span class="slider-no">3</span>
                                <span class="slider-no">4</span>
                                <span class="slider-label">5 - Yes, always</span>
                            </div>
                            <span class="text-danger">@error('education'){{ $message }}@enderror</span>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="details20">
                                        <label for="session-days">Details</label>
                                        <span class="text-danger">@error('details20'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="agreed20">
                                        <label for="session-days">Action Agreed</label>
                                        <span class="text-danger">@error('agreed20'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="session-days" placeholder=""
                                            wire:model="by_who20">
                                        <label for="session-days">By who/When</label>
                                        <span class="text-danger">@error('by_who20'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        @endif

        @if ($currentstep == 5)
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

                    <p style="text-align: center">Thank you for completing Introduction!</p>

                </div>
            </div>
        @endif

        @if ($currentstep<= 4)
           
            <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end next" wire:click="increaseStep()" >Next</button>
        @endif

        @if ($currentstep > 1 && $currentstep <= 4)
            <button type="button" class="btn btn-save mt-3 float-start state">Save/Exit</button>
            <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end" wire:click="decreaseStep()" style="margin-right: 5px;">Back</button>
           
        @endif

        @if ($currentstep == 5)
        
            <button type="submit" class="btn btn-primary btn-sm mt-3 mr-2 float-end">Submit</button>
            <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end" wire:click="decreaseStep()" style="margin-right: 5px;">Back</button>
        @endif

    </form>
        </div>
    </div>
</div>
