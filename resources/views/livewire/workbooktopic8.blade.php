<div>
    <div class="row">
        <div class="col-md-9">
            <h2>Youth Workbook</h2>
        </div>
        <div class="col-md-3">
            <div class="text-end"><span class="percent">{{ !empty($percent) ? $percent : '13' }}%</span>
                Completed
                | Topic 08
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
            <form id="workbookform" >

                @if ($currentstep == 1)
                    <div class="content-container m-5 ">

                        <h1 class="blue handwritten topic-title text-center"><small>Topic Eight...</small><br>Final
                            Session</h1>

                    </div>

                @endif

                @if ($currentstep == 2)
                    <h1 class="blue handwritten">Topic 08: Final Session<br><small>Reflecting</small></h1>

                    <div class="content-container m-5">

                        <div class="row mb-5">

                            <div class="col-md-4">

                                <h2 class="blue handwritten mb-5">You have covered a lot of information throughout this
                                    booklet, and it’s important to think about what you have learnt, how your knowledge
                                    will fit into your life, and how you’re going to achieve your goals.</h2>

                            </div>

                            <div class="col-md-7 offset-md-1">
                                <span style="font-size: small;font-weight: 700;"
                                    class="text-danger">@error('reflection331')This field is required.
                                    @enderror</span>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" wire:model="reflection331"
                                        placeholder="What I have learnt?" id="reflection1"
                                        style="height: 300px;"></textarea>
                                    <label for="reflection1">What I have learnt?</label>
                                </div>
                                <span style="font-size: small;font-weight: 700;"
                                    class="text-danger">@error('reflection332')This field is required.
                                    @enderror</span>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" wire:model="reflection332"
                                        placeholder="How will I use this knowledge in future?" id="reflection2"
                                        style="height: 300px;"></textarea>
                                    <label for="reflection2">How will I use this knowledge in future?</label>
                                </div>
                                <span style="font-size: small;font-weight: 700;"
                                    class="text-danger">@error('reflection333')This field is required.
                                    @enderror</span>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" wire:model="reflection333"
                                        placeholder="What would I like to achieve in the future?" id="reflection3"
                                        style="height: 300px;"></textarea>
                                    <label for="reflection3">What would I like to achieve in the future?</label>
                                </div>
                                <span style="font-size: small;font-weight: 700;"
                                    class="text-danger">@error('reflection334')This field is required.
                                    @enderror</span>
                                <div class="form-floating">
                                    <textarea class="form-control" wire:model="reflection334"
                                        placeholder="How will I acheive these goals?" id="reflection4"
                                        style="height: 300px;"></textarea>
                                    <label for="reflection4">How will I acheive these goals?</label>
                                </div>

                            </div>

                        </div>

                    </div>

                @endif

                {{-- @if ($currentstep == 7)
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
                @endif --}}

                @if ($currentstep <= 1)

                    <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end next"
                        wire:click="increaseStep()">Next</button>
                @endif

                @if ($currentstep > 1 && $currentstep <= 2)
                    <button type="button" class="btn btn-save mt-3 float-start state">Save/Exit</button>
                    <button type="button" class="btn btn-primary mt-3 mr-2 float-end" wire:click="validateData()">Finsh and Save</button>
                    <button type="button" class="btn btn-primary mt-3 mr-2 float-end" wire:click="decreaseStep()"
                        style="margin-right: 5px;">Back</button>

                @endif

                

            </form>
        </div>
    </div>
</div>
