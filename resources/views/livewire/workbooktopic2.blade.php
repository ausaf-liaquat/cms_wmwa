<div>
    <div class="row">
        <div class="col-md-9">
            <h2>Youth Workbook</h2>
        </div>
        {{-- <div class="col-md-3">
            <div class="text-end"><span class="percent">{{$percent}}%</span> Completed | Topic 01 <span
                    id="topic_no"></span></div>
            <div class="progress my-2" style="height: 10px;">
                <div class="progress-bar" role="progressbar" style="width:{{$percent}}%" aria-valuenow="01" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
        </div> --}}
    </div>

    <div class="card float-none workbook">
        <div class="card-body">
            <form data-persist="garlic" id="workbookform" wire:submit.prevent="submittopic1">
                @if ($currentstep == 1)
                    <div class="content-container m-5 ">

                        <h1 class="blue handwritten topic-title text-center"><small>Topic
                                Two...</small><br>Healthy Relationships</h1>

                    </div>
                @endif

                @if ($currentstep == 2)
                    <h1 class="blue handwritten">Topic 02: Healthy Relationships<br><small>Quiz</small></h1>

                    <div class="content-container m-5">


                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="blue handwritten">Read these statements and decide on if they are true or
                                    false.</h2>
                            </div>
                            <div class="col-md-7 offset-md-1">
                                <div class="section">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4 class="blue handwritten">1. A healthy, loving relationship means always
                                                putting the other person first.</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-select" aria-label="Default select example"
                                                wire:model="quiz60">
                                                <option value="">True or false?</option>
                                                <option value="True">True</option>
                                                <option value="False">False</option>
                                            </select>
                                            <span class="text-danger"
                                                style="font-size: small;font-weight: 700;">@error('quiz60') This field
                                                is required. @enderror</span>

                                        </div>
                                    </div>
                                </div>
                                <div class="section">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4 class="blue handwritten">2. It’s okay not to have all the same interests
                                                as your partner or friend.</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-select" aria-label="Default select example"
                                                wire:model="quiz61">
                                                <option value="">True or false?</option>
                                                <option value="True">True</option>
                                                <option value="False">False</option>
                                            </select>
                                            <span class="text-danger"
                                                style="font-size: small;font-weight: 700;">@error('quiz61') This field
                                                is required. @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="section">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4 class="blue handwritten">3. If you think your partner is cheating, you
                                                can look through their phone to check.</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-select" aria-label="Default select example"
                                                wire:model="quiz62">
                                                <option value="">True or false?</option>
                                                <option value="True">True</option>
                                                <option value="False">False</option>
                                            </select>
                                            <span class="text-danger"
                                                style="font-size: small;font-weight: 700;">@error('quiz62') This field
                                                is required. @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="section">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4 class="blue handwritten">4.Jealousy is a sign of love.</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-select" aria-label="Default select example"
                                                wire:model="quiz63">
                                                <option value="">True or false?</option>
                                                <option value="True">True</option>
                                                <option value="False">False</option>
                                            </select>
                                            <span class="text-danger"
                                                style="font-size: small;font-weight: 700;">@error('quiz63') This field
                                                is required. @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="section">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4 class="blue handwritten">5. Arguments happen in healthy relationships –
                                                the important thing is having good communication.</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-select" aria-label="Default select example"
                                                wire:model="quiz64">
                                                <option value="">True or false?</option>
                                                <option value="True">True</option>
                                                <option value="False">False</option>
                                            </select>
                                            <span class="text-danger"
                                                style="font-size: small;font-weight: 700;">@error('quiz64') This field
                                                is required. @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="section">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4 class="blue handwritten">6. In a healthy relationship, your partner
                                                should always know how you feel.</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-select" aria-label="Default select example"
                                                wire:model="quiz65">
                                                <option value="">True or false?</option>
                                                <option value="True">True</option>
                                                <option value="False">False</option>
                                            </select>
                                            <span class="text-danger"
                                                style="font-size: small;font-weight: 700;">@error('quiz65') This field
                                                is required. @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="section">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4 class="blue handwritten">7. It’s always easy to spot abuse in a
                                                relationship.</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-select" aria-label="Default select example"
                                                wire:model="quiz66">
                                                <option value="">True or false?</option>
                                                <option value="True">True</option>
                                                <option value="False">False</option>
                                            </select>
                                            <span class="text-danger"
                                                style="font-size: small;font-weight: 700;">@error('quiz66') This field
                                                is required. @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="section">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4 class="blue handwritten">8. You always have the right to say ‘no’ and
                                                not feel guilty.</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-select" aria-label="Default select example"
                                                wire:model="quiz67">
                                                <option value="">True or false?</option>
                                                <option value="True">True</option>
                                                <option value="False">False</option>
                                            </select>
                                            <span class="text-danger"
                                                style="font-size: small;font-weight: 700;">@error('quiz67') This field
                                                is required. @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="section">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4 class="blue handwritten">9. If you’ve had sex with a person before, you
                                                can expect to have sex with them again.</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-select" aria-label="Default select example"
                                                wire:model="quiz68">
                                                <option value="">True or false?</option>
                                                <option value="True">True</option>
                                                <option value="False">False</option>
                                            </select>
                                            <span class="text-danger"
                                                style="font-size: small;font-weight: 700;">@error('quiz68') This field
                                                is required. @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="section">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4 class="blue handwritten">10. Everyone has the right to have healthy,
                                                respectful, and trusting relationships.</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-select" aria-label="Default select example"
                                                wire:model="quiz69">
                                                <option value="">True or false?</option>
                                                <option value="True">True</option>
                                                <option value="False">False</option>
                                            </select>
                                            <span class="text-danger"
                                                style="font-size: small;font-weight: 700;">@error('quiz69') This field
                                                is required. @enderror</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                @endif

                @if ($currentstep == 3)
                    <h1 class="blue handwritten">Topic 02: Healthy Relationships<br><small>What is a
                            healthy relationship?</small></h1>

                    <div class="content-container m-5">


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

                @endif


                @if ($currentstep == 4)
                    <h1 class="blue handwritten">Topic 02: Healthy Relationships<br><small>No Violence.
                            Everoyne is Equal</small></h1>

                    <div class="content-container m-5">

                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <img src="{{ asset('assets/img/EqualHealthyRelationships.jpg') }}"
                                    class="img-fluid">
                            </div>
                        </div>

                    </div>
                @endif

                @if ($currentstep == 5)
                    <h1 class="blue handwritten">Topic 02: Healthy Relationships<br><small>Relationshop
                            Behaviours - Am I A Warning?</small></h1>

                    <div class="content-container m-5">

                        
                        <div class="row mb-5">
                            <div class="col-md-4 my-5">
                                <p class="mb-5">The statements below describe different
                                    relationship behaviours. Decide whether you think they are GREEN
                                    (healthy), YELLOW (depends), or RED (a warning sign of unhealthy
                                    behaviour or abuse).</p>
                            </div>
                            <div class="col-md-7 offset-md-1">
                                <img src="{{ asset('assets/img/TrafficLights.jpg') }}" class="img-fluid">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mt-5">
                                <fieldset id="group1">
                                <div class="section">
                                    <h4 class="blue handwritten">I meet you every single day from school so I can spend every last minute with you.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options1" id="option1_1"  wire:model="radio70" value="Healthy" autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_1">Healthy</label>
                                        <input type="radio" class="btn-check" name="options1" id="option2_1"  wire:model="radio70" value="Depends" autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_1">Depends</label>
                                        <input type="radio" class="btn-check" name="options1" id="option3_1"  wire:model="radio70" value="Warning" autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_1">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group2">
                                <div class="section">
                                    <h4 class="blue handwritten">If you’re going out with your friends, I’ll drive you and pick you up – save you getting a taxi.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options2" id="option1_2"  wire:model="radio71" value="Healthy"  autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_2">Healthy</label>
                                        <input type="radio" class="btn-check" name="options2" id="option2_2"  wire:model="radio71" value="Depends"  autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_2">Depends</label>
                                        <input type="radio" class="btn-check" name="options2" id="option3_2"  wire:model="radio71" value="Warning"  autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_2">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group3">
                                <div class="section">
                                    <h4 class="blue handwritten">I love spending time with you.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options3" id="option1_3"  wire:model="radio72" value="Healthy"  autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_3">Healthy</label>
                                        <input type="radio" class="btn-check" name="options3" id="option2_3"  wire:model="radio72" value="Depends"  autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_3">Depends</label>
                                        <input type="radio" class="btn-check" name="options3" id="option3_3"  wire:model="radio72" value="Warning"  autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_3">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group4">
                                <div class="section">
                                    <h4 class="blue handwritten">I never admit to my partner when I’m wrong, it makes me look weak.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options4" id="option1_4"  wire:model="radio73" value="Healthy"  autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_4">Healthy</label>
                                        <input type="radio" class="btn-check" name="options4" id="option2_4"  wire:model="radio73" value="Depends"  autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_4">Depends</label>
                                        <input type="radio" class="btn-check" name="options4" id="option3_4"  wire:model="radio73" value="Warning"  autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_4">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group5">
                                <div class="section">
                                    <h4 class="blue handwritten">I’ll miss you this weekend ☹</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options5" id="option1_5"  wire:model="radio74" value="Healthy" autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_5">Healthy</label>
                                        <input type="radio" class="btn-check" name="options5" id="option2_5"  wire:model="radio74" value="Depends" autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_5">Depends</label>
                                        <input type="radio" class="btn-check" name="options5" id="option3_5"  wire:model="radio74" value="Warning" autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_5">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group6">
                                <div class="section">
                                    <h4 class="blue handwritten">My partner gave me their Snapchat password, but I don’t want to share mine.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options6" id="option1_6"  wire:model="radio75" value="Healthy"  autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_6">Healthy</label>
                                        <input type="radio" class="btn-check" name="options6" id="option2_6"  wire:model="radio75" value="Depends"  autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_6">Depends</label>
                                        <input type="radio" class="btn-check" name="options6" id="option3_6"  wire:model="radio75" value="Warning"  autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_6">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group7">
                                <div class="section">
                                    <h4 class="blue handwritten">My last partner was a slag.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options7" id="option1_7"  wire:model="radio76" value="Healthy" autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_7">Healthy</label>
                                        <input type="radio" class="btn-check" name="options7" id="option2_7"  wire:model="radio76" value="Depends" autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_7">Depends</label>
                                        <input type="radio" class="btn-check" name="options7" id="option3_7"  wire:model="radio76" value="Warning" autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_7">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group8">
                                <div class="section">
                                    <h4 class="blue handwritten">My partner tries too hard in school – they should focus more on our relationship.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options" id="option1_8" a wire:model="radio77" value="Healthy"  autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_8">Healthy</label>
                                        <input type="radio" class="btn-check" name="options" id="option2_8" a wire:model="radio77" value="Depends"  autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_8">Depends</label>
                                        <input type="radio" class="btn-check" name="options" id="option3_8" a wire:model="radio77" value="Warning"  autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_8">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group9">
                                <div class="section">
                                    <h4 class="blue handwritten">I send my partner about 50 messages a day – I’m crazy about them!</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options9" id="option1_9"  wire:model="radio78" value="Healthy" autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_9">Healthy</label>
                                        <input type="radio" class="btn-check" name="options9" id="option2_9"  wire:model="radio78" value="Depends" autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_9">Depends</label>
                                        <input type="radio" class="btn-check" name="options9" id="option3_9"  wire:model="radio78" value="Warning" autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_9">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group10">
                                <div class="section">
                                    <h4 class="blue handwritten">I love my partner, but I also love having the day to myself.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options10" id="option1_10" wire:model="radio79"  value="Healthy" autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_10">Healthy</label>
                                        <input type="radio" class="btn-check" name="options10" id="option2_10" wire:model="radio79"  value="Depends" autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_10">Depends</label>
                                        <input type="radio" class="btn-check" name="options10" id="option3_10" wire:model="radio79"  value="Warning" autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_10">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group11">
                                <div class="section">
                                    <h4 class="blue handwritten">I don’t like using condoms, so I’m hoping she’s on the pill or something.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options11" id="option1_11" wire:model="radio80"  value="Healthy" autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_11">Healthy</label>
                                        <input type="radio" class="btn-check" name="options11" id="option2_11" wire:model="radio80"  value="Depends" autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_11">Depends</label>
                                        <input type="radio" class="btn-check" name="options11" id="option3_11" wire:model="radio80"  value="Warning" autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_11">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group12">
                                <div class="section">
                                    <h4 class="blue handwritten">I admit I do feel jealous when I see him talking to other girls, but I trust him.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options12" id="option1_12" wire:model="radio81" value="Healthy"  autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_12">Healthy</label>
                                        <input type="radio" class="btn-check" name="options12" id="option2_12" wire:model="radio81" value="Depends"  autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_12">Depends</label>
                                        <input type="radio" class="btn-check" name="options12" id="option3_12" wire:model="radio81" value="Warning"  autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_12">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group13">
                                <div class="section">
                                    <h4 class="blue handwritten">I spent all my wages on that necklace for her, and she doesn’t even wear it every day.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options13" id="option1_13" wire:model="radio82" value="Healthy"  autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_13">Healthy</label>
                                        <input type="radio" class="btn-check" name="options13" id="option2_13" wire:model="radio82" value="Depends"  autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_13">Depends</label>
                                        <input type="radio" class="btn-check" name="options13" id="option3_13" wire:model="radio82" value="Warning"  autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_13">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group14">
                                <div class="section">
                                    <h4 class="blue handwritten">My boy is a terrible cook, but I’d never tell him that.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options14" id="option1_14" wire:model="radio83" value="Healthy"  autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_14">Healthy</label>
                                        <input type="radio" class="btn-check" name="options14" id="option2_14" wire:model="radio83" value="Depends"  autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_14">Depends</label>
                                        <input type="radio" class="btn-check" name="options14" id="option3_14" wire:model="radio83" value="Warning"  autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_14">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group15">
                                <div class="section">
                                    <h4 class="blue handwritten">I know I get her home late, but she needs to stand up to her parents a bit more.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options15" id="option1_15" wire:model="radio84" value="Healthy"  autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_15">Healthy</label>
                                        <input type="radio" class="btn-check" name="options15" id="option2_15" wire:model="radio84" value="Depends"  autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_15">Depends</label>
                                        <input type="radio" class="btn-check" name="options15" id="option3_15" wire:model="radio84" value="Warning"  autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_15">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group16">
                                <div class="section">
                                    <h4 class="blue handwritten">Most girls tend to lie and cheat.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options16" id="option1_16" wire:model="radio85"  value="Healthy" autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_16">Healthy</label>
                                        <input type="radio" class="btn-check" name="options16" id="option2_16" wire:model="radio85"  value="Depends" autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_16">Depends</label>
                                        <input type="radio" class="btn-check" name="options16" id="option3_16" wire:model="radio85"  value="Warning" autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_16">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group17">
                                <div class="section">
                                    <h4 class="blue handwritten">When my partner acts like an idiot, I tell them so they won’t do it again.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options17" id="option1_17" wire:model="radio86"  value="Healthy" autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_17">Healthy</label>
                                        <input type="radio" class="btn-check" name="options17" id="option2_17" wire:model="radio86"  value="Depends" autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_17">Depends</label>
                                        <input type="radio" class="btn-check" name="options17" id="option3_17" wire:model="radio86"  value="Warning" autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_17">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group18">
                                <div class="section">
                                    <h4 class="blue handwritten">I don’t always agree with my partner’s opinions.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options18" id="option1_18" wire:model="radio87"  value="Healthy" autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_18">Healthy</label>
                                        <input type="radio" class="btn-check" name="options18" id="option2_18" wire:model="radio87"  value="Depends" autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_18">Depends</label>
                                        <input type="radio" class="btn-check" name="options18" id="option3_18" wire:model="radio87"  value="Warning" autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_18">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group19">
                                <div class="section">
                                    <h4 class="blue handwritten">When my partner upsets me, I act distant until they apologise.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options19" id="option1_19" wire:model="radio88"  value="Healthy" autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_19">Healthy</label>
                                        <input type="radio" class="btn-check" name="options19" id="option2_19" wire:model="radio88"  value="Depends" autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_19">Depends</label>
                                        <input type="radio" class="btn-check" name="options19" id="option3_19" wire:model="radio88"  value="Warning" autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_19">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group20">
                                <div class="section">
                                    <h4 class="blue handwritten">I don’t think people should wait until they’re sixteen to have sex.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options20" id="option1_20" wire:model="radio89" value="Healthy"  autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_20">Healthy</label>
                                        <input type="radio" class="btn-check" name="options20" id="option2_20" wire:model="radio89" value="Depends"  autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_20">Depends</label>
                                        <input type="radio" class="btn-check" name="options20" id="option3_20" wire:model="radio89" value="Warning"  autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_20">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group21">
                                <div class="section">
                                    <h4 class="blue handwritten">I cancelled our date the other day because I was invited to the pub after the game.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options21" id="option1_21" wire:model="radio90" value="Healthy" autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_21">Healthy</label>
                                        <input type="radio" class="btn-check" name="options21" id="option2_21" wire:model="radio90" value="Depends" autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_21">Depends</label>
                                        <input type="radio" class="btn-check" name="options21" id="option3_21" wire:model="radio90" value="Warning" autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_21">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group22">
                                <div class="section">
                                    <h4 class="blue handwritten">I’m cooking for her tonight! The wine is in the fridge!</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options22" id="option1_22" wire:model="radio91"  value="Healthy" autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_22">Healthy</label>
                                        <input type="radio" class="btn-check" name="options22" id="option2_22" wire:model="radio91"  value="Depends" autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_22">Depends</label>
                                        <input type="radio" class="btn-check" name="options22" id="option3_22" wire:model="radio91"  value="Warning" autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_22">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group23">
                                <div class="section">
                                    <h4 class="blue handwritten">I hate it when they cry – it really gets on my nerves.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options23" id="option1_23" wire:model="radio92" value="Healthy"  autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_23">Healthy</label>
                                        <input type="radio" class="btn-check" name="options23" id="option2_23" wire:model="radio92" value="Depends"  autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_23">Depends</label>
                                        <input type="radio" class="btn-check" name="options23" id="option3_23" wire:model="radio92" value="Warning"  autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_23">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group24">
                                <div class="section">
                                    <h4 class="blue handwritten">When my partner isn’t affectionate, I tell them I’d die without them.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options24" id="option1_24" wire:model="radio93" value="Healthy"  autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_24">Healthy</label>
                                        <input type="radio" class="btn-check" name="options24" id="option2_24" wire:model="radio93" value="Depends"  autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_24">Depends</label>
                                        <input type="radio" class="btn-check" name="options24" id="option3_24" wire:model="radio93" value="Warning"  autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_24">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group25">
                                <div class="section">
                                    <h4 class="blue handwritten">I know I shouldn’t tell my mates about our sex life, but everyone does it.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options25" id="option1_25" wire:model="radio94"  value="Healthy" autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_25">Healthy</label>
                                        <input type="radio" class="btn-check" name="options25" id="option2_25" wire:model="radio94"  value="Depends" autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_25">Depends</label>
                                        <input type="radio" class="btn-check" name="options25" id="option3_25" wire:model="radio94"  value="Warning" autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_25">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group26">
                                <div class="section">
                                    <h4 class="blue handwritten">He wants to see a film at the weekend, but to be honest I hate watching horror films.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options26" id="option1_26" wire:model="radio95" value="Healthy"  autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_26">Healthy</label>
                                        <input type="radio" class="btn-check" name="options26" id="option2_26" wire:model="radio95" value="Depends"  autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_26">Depends</label>
                                        <input type="radio" class="btn-check" name="options26" id="option3_26" wire:model="radio95" value="Warning"  autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_26">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group27">
                                <div class="section">
                                    <h4 class="blue handwritten">Of course I look at other people – everyone checks out other people sometimes.</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options27" id="option1_27" wire:model="radio96"  value="Healthy" autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_27">Healthy</label>
                                        <input type="radio" class="btn-check" name="options27" id="option2_27" wire:model="radio96"  value="Depends" autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_27">Depends</label>
                                        <input type="radio" class="btn-check" name="options27" id="option3_27" wire:model="radio96"  value="Warning" autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_27">Warning</label>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset id="group28">
                                <div class="section">
                                    <h4 class="blue handwritten">I really like her in that red dress – it makes her legs look fantastic!</h4>
                                    <div class="d-flex">
                                        <input type="radio" class="btn-check" name="options28" id="option1_28" wire:model="radio97" value="Healthy"  autocomplete="off">
                                        <label class="btn btn-primary btn-healthy" for="option1_28">Healthy</label>
                                        <input type="radio" class="btn-check" name="options28" id="option2_28" wire:model="radio97" value="Depends"  autocomplete="off">
                                        <label class="btn btn-primary btn-depends" for="option2_28">Depends</label>
                                        <input type="radio" class="btn-check" name="options28" id="option3_28" wire:model="radio97" value="Warning"  autocomplete="off">
                                        <label class="btn btn-primary btn-warn" for="option3_28">Warning</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div> 
                    

                    </div>
                @endif


                @if ($currentstep <= 6)

                    <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end next"
                        wire:click="increaseStep()">Next</button>
                @endif

                @if ($currentstep > 1 && $currentstep <= 6)
                    <button type="button" class="btn btn-save mt-3 float-start state">Save/Exit</button>
                    <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end"
                        wire:click="decreaseStep()" style="margin-right: 5px;">Back</button>

                @endif

                @if ($currentstep == 7)

                    <button type="submit" class="btn btn-primary btn-sm mt-3 mr-2 float-end">Submit</button>
                    <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end"
                        wire:click="decreaseStep()" style="margin-right: 5px;">Back</button>
                @endif
            </form>
        </div>
    </div>
</div>
