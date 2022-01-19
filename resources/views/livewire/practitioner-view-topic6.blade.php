<div>
    <div class="row">
        <div class="col-md-9">
            <h2>Youth Workbook</h2>
        </div>
        <div class="col-md-3">
            <div class="text-end"><span class="percent">100%</span>
                Completed
                | Topic 06 <span id="topic_no"></span></div>
            <div class="progress my-2" style="height: 10px;">
                <div class="progress-bar" role="progressbar" style="width:100%" aria-valuenow="01"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <div class="card float-none workbook">
        <div class="card-body">
            <strong>Submitted By: {{$username}}</strong>
            <form id="workbookform">

                @if ($currentstep == 1)
                    <div class="content-container m-5 ">

                        <h1 class="blue handwritten topic-title text-center"><small>Topic Six...</small><br>Support
                            Networks & Coping Strategies</h1>

                    </div>
                @endif

                @if ($currentstep == 2)
                    <h1 class="blue handwritten">Topic 06: Support Networks & Coping Strategies<br><small>My Support
                            Network</small></h1>

                    <div class="content-container m-5">

                        <div class="row mb-5">

                            <div class="col-md-4">
                                <h2 class="blue handwritten">A support network can help you to feel confident and secure
                                    in the knowledge that there is someone or somewhere you can go when things feel
                                    difficult. Having someone who listens to you and believes you is your right.</h2>
                            </div>

                            <div class="col-md-7 offset-md-1">
                                <span style="font-size: small;font-weight: 700;" class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment204') This field is
                                    required. @enderror</span>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        wire:model="comment204" id="support" style="height: 500px"></textarea>
                                    <label for="support">How might someone in your support network help you and make you
                                        feel?</label>
                                </div>

                            </div>

                            <p class="mt-5">Your support network can be made up of people and services that
                                are in your life, and help you to feel safe and supported. They may be family and
                                friends, or more formal types of support such as a support worker, social worker,
                                counsellor, teacher or helpline.</p>
                            <p>Everyone’s support network is different – some people have a big network, and some people
                                have one or two people. Your support network might change as you meet new people.</p>

                        </div>
                        <div class="row mb-5">

                            <div class="col-md-4">
                                <h2 class="blue handwritten">Who is in your support network?</h2>
                                <p>Think about who is in your support network, and who you could go to, to support your
                                    different needs. Use the diagram below to write this down – you don’t have to use
                                    all of the circles, or you might want to add some more, it’s up to you!</p>
                            </div>


                            <div class="col-md-7 offset-md-1">
                                <span style="font-size: small;font-weight: 700;" class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment205') This field is
                                    required. @enderror</span>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Who is in your support network?"
                                        id="support" wire:model="comment205"
                                        style="height: 500px; background-position: center; background-image: url('https://www.westmerciawomensaid.org/crm/img/support.jpg'); background-repeat: no-repeat; background-size: 500px auto;"></textarea>
                                    <label for="support">Who is in your support network?</label>
                                </div>

                            </div>




                        </div>


                    </div>
                @endif

                @if ($currentstep == 3)

                    <h1 class="blue handwritten">Topic 06: Support Networks & Coping Strategies<br><small>Coping
                            Strategies</small></h1>

                    <div class="content-container m-5">


                        <div class="row mb-5">
                            <div class="col-md-12 text-center">
                                <p class="mb-5">Read through the coping strategies below and decide which you
                                    use, and whether you think these are healthy or harmful for you.</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                               
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Shouting or screaming</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree206"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree206')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy of
                                                    unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful206">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful206')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Watching TV or films</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree207"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree207')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy of
                                                    unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful207">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful207')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Eating more or less</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree208"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree208')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy of
                                                    unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful208">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful208')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Talking with a trusted person
                                        </h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree209"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree209')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy of
                                                    unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful209">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful209')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Partying</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree210"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree210')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy of
                                                    unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful210">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful210')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Sleeping</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree211"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree211')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy
                                                    of unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful211">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful211')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Throwing orr punching things
                                        </h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree212"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree212')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy
                                                    of unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful212">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful212')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Emotional withdrawl</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree213"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree213')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy
                                                    of unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful213">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful213')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Drinking alcohol</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree214"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree214')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy
                                                    of unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful214">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful214')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Gambling</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree215"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree215')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy
                                                    of unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful215">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful215')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Crying</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree216"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree216')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy
                                                    of unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful216">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful216')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Art</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree217"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree217')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy
                                                    of unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful217">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful217')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Gaming</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree218"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree218')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy
                                                    of unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful218">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful218')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Writing</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree219"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree219')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy
                                                    of unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful219">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful219')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Isolating self</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree220"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree220')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy
                                                    of unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful220">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful220')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Taking drugs</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree221"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree221')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy
                                                    of unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful221">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful221')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Running away</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree222"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree222')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy
                                                    of unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful222">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful222')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Self-harm</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree223"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree223')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy
                                                    of unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful223">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful223')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Playing or listening to music
                                        </h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree224"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree224')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy
                                                    of unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful224">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful224')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Walking</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree225"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree225')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy
                                                    of unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful225">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful225')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Starting or increasing
                                            cigarette smoking</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree226"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree226')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy
                                                    of unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful226">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful226')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Being outdoors</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree227"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree227')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy
                                                    of unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful227">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful227')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Having counselling or support
                                        </h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree228"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree228')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy
                                                    of unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful228">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful228')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Sport and exercise</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree229"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree229')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy
                                                    of unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful229">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('healthy_harmful229')This field is
                                                    required. @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <h2 class="m-0 blue handwritten">Coping Strategy: Mindfulness</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p>Do you use this?</p>
                                                <div class="form-floating">
                                                    <select class="form-select" id="agree" wire:model="agree230"
                                                        aria-label="">
                                                        <option value="">Yes or No?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <label for="agree">Do you use this?</label>
                                                </div>
                                                <span style="font-size: small;font-weight: 700;" class="text-danger">@error('agree230')This field is required.
                                                    @enderror</span>
                                            </div>
                                            <div class="col-md-9">
                                                <label for="healthy_unhealthy" class="form-label">Is this healthy
                                                    of unhealthy?</label>
                                                <input type="range" class="form-range" id="healthy_unhealthy"
                                                    wire:model="healthy_harmful230">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span class="slider-label">Healthy</span>
                                                    <span class="slider-label">Harmful</span>
                                                </div>
                                                <span
                                                    class="text-danger">@error('healthy_harmful230'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                    </div>


                                
                            </div>
                        </div>
                    </div>


                @endif

                @if ($currentstep == 4)
                   <h1 class="blue handwritten">Topic 06: Support Networks & Coping Strategies<br><small>Self-care and
                                mindfulness</small></h1>

                        <div class="content-container m-5">

                            <div class="row mb-5">

                                <div class="col-md-4">
                                    <h2 class="blue handwritten">Life can feel overwhelming at times. When something
                                        difficult or scary happens, we can be faced with different challenges and feel like
                                        we are not coping. There are some things that we can do to develop ‘coping skills’
                                        when things feel difficult to manage.</h2>
                                    <p>As well as having people in your support network, it can be helpful to identify
                                        things that can bring you comfort when things get too much.</p>
                                    <p>Mindfulness is the ability to check in with yourself and notice how you are feeling
                                        in the present moment. Some mindfulness activities have been proven to reduce stress
                                        hormones in our body, and help regulate our nervous system.</p>

                                    <h2 class="blue handwritten">Self care choices</h2>

                                    <p>Read through the mindfulness activities in the table and choose six that you would
                                        like to try. If you know any other mindfulness activities that work for you, feel
                                        free to choose those.</p>
                                    <p>Select your chosen activites in the dropdowns below and give them a try over the next
                                        few weeks. It’s okay if they don’t work for you – it’s important to find things that
                                        work best for you! Whatever you try on the list, try to do that particular thing
                                        with your full attention.</p>


                                    <span style="font-size: small;font-weight: 700;" class="text-danger">@error('mindfulness231')This field is required.
                                        @enderror</span>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="mindfulness1" wire:model="mindfulness231"
                                            aria-label="Select activity">
                                            <option value="">Select an activity</option>
                                            <option value="Exercise">Exercise</option>
                                            <option value="Dance">Dance</option>
                                            <option value="Sleep">Sleep</option>
                                            <option value="Massage">Massage</option>
                                            <option value="FoodDrink">Food/Drink</option>
                                            <option value="Read">Read</option>
                                            <option value="Write">Write</option>
                                            <option value="Watch">Watch</option>
                                            <option value="Create">Create</option>
                                            <option value="Meditate">Meditate</option>
                                            <option value="Breathe">Breathe</option>
                                            <option value="Friend">Friend</option>
                                            <option value="Notice">Notice</option>
                                            <option value="Outside">Outside</option>
                                            <option value="Wash">Wash</option>
                                            <option value="Cuddle">Cuddle</option>
                                            <option value="Gratitude">Gratitude</option>
                                            <option value="Kindness">Kindness</option>
                                        </select>
                                        <label for="mindfulness1">Mindfulness Activity 1:</label>
                                    </div>
                                    <span style="font-size: small;font-weight: 700;" class="text-danger">@error('mindfulness232')This field is required.
                                        @enderror</span>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="mindfulness2" wire:model="mindfulness232"
                                            aria-label="Select activity">
                                            <option value="">Select an activity</option>
                                            <option value="Exercise">Exercise</option>
                                            <option value="Dance">Dance</option>
                                            <option value="Sleep">Sleep</option>
                                            <option value="Massage">Massage</option>
                                            <option value="FoodDrink">Food/Drink</option>
                                            <option value="Read">Read</option>
                                            <option value="Write">Write</option>
                                            <option value="Watch">Watch</option>
                                            <option value="Create">Create</option>
                                            <option value="Meditate">Meditate</option>
                                            <option value="Breathe">Breathe</option>
                                            <option value="Friend">Friend</option>
                                            <option value="Notice">Notice</option>
                                            <option value="Outside">Outside</option>
                                            <option value="Wash">Wash</option>
                                            <option value="Cuddle">Cuddle</option>
                                            <option value="Gratitude">Gratitude</option>
                                            <option value="Kindness">Kindness</option>
                                        </select>
                                        <label for="mindfulness2">Mindfulness Activity 2:</label>
                                    </div>
                                    <span style="font-size: small;font-weight: 700;" class="text-danger">@error('mindfulness233')This field is required.
                                        @enderror</span>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="mindfulness3" wire:model="mindfulness233"
                                            aria-label="Select activity">
                                            <option value="">Select an activity</option>
                                            <option value="Exercise">Exercise</option>
                                            <option value="Dance">Dance</option>
                                            <option value="Sleep">Sleep</option>
                                            <option value="Massage">Massage</option>
                                            <option value="FoodDrink">Food/Drink</option>
                                            <option value="Read">Read</option>
                                            <option value="Write">Write</option>
                                            <option value="Watch">Watch</option>
                                            <option value="Create">Create</option>
                                            <option value="Meditate">Meditate</option>
                                            <option value="Breathe">Breathe</option>
                                            <option value="Friend">Friend</option>
                                            <option value="Notice">Notice</option>
                                            <option value="Outside">Outside</option>
                                            <option value="Wash">Wash</option>
                                            <option value="Cuddle">Cuddle</option>
                                            <option value="Gratitude">Gratitude</option>
                                            <option value="Kindness">Kindness</option>
                                        </select>
                                        <label for="mindfulness3">Mindfulness Activity 3:</label>
                                    </div>
                                    <span style="font-size: small;font-weight: 700;" class="text-danger">@error('mindfulness234')This field is required.
                                        @enderror</span>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="mindfulness4" wire:model="mindfulness234"
                                            aria-label="Select activity">
                                            <option value="">Select an activity</option>
                                            <option value="Exercise">Exercise</option>
                                            <option value="Dance">Dance</option>
                                            <option value="Sleep">Sleep</option>
                                            <option value="Massage">Massage</option>
                                            <option value="FoodDrink">Food/Drink</option>
                                            <option value="Read">Read</option>
                                            <option value="Write">Write</option>
                                            <option value="Watch">Watch</option>
                                            <option value="Create">Create</option>
                                            <option value="Meditate">Meditate</option>
                                            <option value="Breathe">Breathe</option>
                                            <option value="Friend">Friend</option>
                                            <option value="Notice">Notice</option>
                                            <option value="Outside">Outside</option>
                                            <option value="Wash">Wash</option>
                                            <option value="Cuddle">Cuddle</option>
                                            <option value="Gratitude">Gratitude</option>
                                            <option value="Kindness">Kindness</option>
                                        </select>
                                        <label for="mindfulness4">Mindfulness Activity 4:</label>
                                    </div>
                                    <span style="font-size: small;font-weight: 700;" class="text-danger">@error('mindfulness235')This field is required.
                                        @enderror</span>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="mindfulness5" wire:model="mindfulness235"
                                            aria-label="Select activity">
                                            <option value="">Select an activity</option>
                                            <option value="Exercise">Exercise</option>
                                            <option value="Dance">Dance</option>
                                            <option value="Sleep">Sleep</option>
                                            <option value="Massage">Massage</option>
                                            <option value="FoodDrink">Food/Drink</option>
                                            <option value="Read">Read</option>
                                            <option value="Write">Write</option>
                                            <option value="Watch">Watch</option>
                                            <option value="Create">Create</option>
                                            <option value="Meditate">Meditate</option>
                                            <option value="Breathe">Breathe</option>
                                            <option value="Friend">Friend</option>
                                            <option value="Notice">Notice</option>
                                            <option value="Outside">Outside</option>
                                            <option value="Wash">Wash</option>
                                            <option value="Cuddle">Cuddle</option>
                                            <option value="Gratitude">Gratitude</option>
                                            <option value="Kindness">Kindness</option>
                                        </select>
                                        <label for="mindfulness5">Mindfulness Activity 5:</label>
                                    </div>
                                    <span style="font-size: small;font-weight: 700;" class="text-danger">@error('mindfulness236')This field is required.
                                        @enderror</span>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="mindfulness6" wire:model="mindfulness236"
                                            aria-label="Select activity">
                                            <option value="">Select an activity</option>
                                            <option value="Exercise">Exercise</option>
                                            <option value="Dance">Dance</option>
                                            <option value="Sleep">Sleep</option>
                                            <option value="Massage">Massage</option>
                                            <option value="FoodDrink">Food/Drink</option>
                                            <option value="Read">Read</option>
                                            <option value="Write">Write</option>
                                            <option value="Watch">Watch</option>
                                            <option value="Create">Create</option>
                                            <option value="Meditate">Meditate</option>
                                            <option value="Breathe">Breathe</option>
                                            <option value="Friend">Friend</option>
                                            <option value="Notice">Notice</option>
                                            <option value="Outside">Outside</option>
                                            <option value="Wash">Wash</option>
                                            <option value="Cuddle">Cuddle</option>
                                            <option value="Gratitude">Gratitude</option>
                                            <option value="Kindness">Kindness</option>
                                        </select>
                                        <label for="mindfulness6">Mindfulness Activity 6:</label>
                                    </div>

                                </div>

                                <div class="col-md-7 offset-md-1">

                                    <div class="row mb-2">
                                        <div
                                            class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                            <h5 class="blue p-0 m-0 w-100">Exercise</h5>
                                        </div>
                                        <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                            <p class="p-4 m-0">Run, walk, sport, yoga, stretching</p>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div
                                            class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                            <h5 class="blue p-0 m-0 w-100">Dance</h5>
                                        </div>
                                        <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                            <p class="p-4 m-0">Moving your body however feels good for you.</p>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div
                                            class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                            <h5 class="blue p-0 m-0 w-100">Sleep</h5>
                                        </div>
                                        <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                            <p class="p-4 m-0">Set up a sleep routine, wear clean pyjamas, bathe,
                                                make your space as comfortable and relaxing as possible.</p>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div
                                            class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                            <h5 class="blue p-0 m-0 w-100">Massage</h5>
                                        </div>
                                        <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                            <p class="p-4 m-0">You or someone you’re comfortable with can put
                                                pressure on your body in a comfortable way – good for moments when you don’t
                                                have much time or space, try gently squeezing the tops of your arms coupled
                                                with some deep breaths.</p>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div
                                            class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                            <h5 class="blue p-0 m-0 w-100">Food or Drink</h5>
                                        </div>
                                        <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                            <p class="p-4 m-0">Make yourself a favourite snack or drink – think
                                                about your different senses whilst you enjoy it.</p>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div
                                            class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                            <h5 class="blue p-0 m-0 w-100">Read</h5>
                                        </div>
                                        <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                            <p class="p-4 m-0">Read a book, magazine, or anything that you enjoy.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div
                                            class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                            <h5 class="blue p-0 m-0 w-100">Write</h5>
                                        </div>
                                        <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                            <p class="p-4 m-0">Write down whatever is in your head, and keep writing
                                                whatever thoughts come to your mind, even if it’s I don’t know what to
                                                write.</p>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div
                                            class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                            <h5 class="blue p-0 m-0 w-100">Watch</h5>
                                        </div>
                                        <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                            <p class="p-4 m-0">Get comfy and watch a favourite film or series.</p>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div
                                            class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                            <h5 class="blue p-0 m-0 w-100">Create</h5>
                                        </div>
                                        <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                            <p class="p-4 m-0">Draw, paint, cook or make something.</p>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div
                                            class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                            <h5 class="blue p-0 m-0 w-100">Meditate</h5>
                                        </div>
                                        <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                            <p class="p-4 m-0">There are lots of great apps and free pintables –
                                                meditation doesn’t have to be sitting still, it can involve any repetitive
                                                calming activity like sorting through a draw, knitting, jigsaws.</p>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div
                                            class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                            <h5 class="blue p-0 m-0 w-100">Breathe</h5>
                                        </div>
                                        <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                            <p class="p-4 m-0">Take some keep breaths, count breaths up to ten, or
                                                ask your worker for some guided breathing exercises.</p>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div
                                            class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                            <h5 class="blue p-0 m-0 w-100">Friend</h5>
                                        </div>
                                        <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                            <p class="p-4 m-0">Meet or call a trusted friend.</p>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div
                                            class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                            <h5 class="blue p-0 m-0 w-100">Notice</h5>
                                        </div>
                                        <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                            <p class="p-4 m-0">Try to notice three things you can see, hear, feel,
                                                smell and taste.</p>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div
                                            class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                            <h5 class="blue p-0 m-0 w-100">Outside</h5>
                                        </div>
                                        <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                            <p class="p-4 m-0">Go outside and see what you notice.</p>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div
                                            class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                            <h5 class="blue p-0 m-0 w-100">Wash</h5>
                                        </div>
                                        <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                            <p class="p-4 m-0">Have a bath or shower – turn the shower cold for a
                                                few seconds and breathe through the sensation.</p>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div
                                            class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                            <h5 class="blue p-0 m-0 w-100">Cuddle</h5>
                                        </div>
                                        <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                            <p class="p-4 m-0">Snuggle up with a blanket and a teddy.</p>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div
                                            class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                            <h5 class="blue p-0 m-0 w-100">Gratitude</h5>
                                        </div>
                                        <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                            <p class="p-4 m-0">Write down three things you feel grateful for, try to
                                                make this a daily or weekly practice.</p>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div
                                            class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                            <h5 class="blue p-0 m-0 w-100">Kindness</h5>
                                        </div>
                                        <div class="col-md-9 box-2 border-5 text-center d-flex align-items-center">
                                            <p class="p-4 m-0">Do something kind for someone else – small acts make
                                                a big difference.</p>
                                        </div>
                                    </div>

                                </div>

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
                                    
                            
                            </p>
                            <h4 style="text-align: center">Thank You</h4>

                            <p style="text-align: center">Thank you for completing Topic 06!</p>

                        </div>
                    </div>
                @endif

                    @if ($currentstep <= 4)

                        <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end next"
                            wire:click="increaseStep()">Next</button>
                    @endif

                    @if ($currentstep > 1 && $currentstep <= 4)
                        <button type="button" class="btn btn-save mt-3 float-start state">Save/Exit</button>
                        <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end"
                            wire:click="decreaseStep()" style="margin-right: 5px;">Back</button>

                    @endif

                    @if ($currentstep == 5)

                    <a href="{{ route('practitioner.serviceuser')}}" class="btn btn-primary btn-sm mt-3 mr-2 float-end">Exit</a>
                        {{-- <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end" wire:click="decreaseStep()" style="margin-right: 5px;">Back</button> --}}
                    @endif

            </form>
            </div>
        </div>
    </div>
