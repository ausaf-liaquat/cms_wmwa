<div>
    <div class="row">
        <div class="col-md-9">
            <h2>Youth Workbook</h2>
        </div>
        <div class="col-md-3">
            <div class="text-end"><span class="percent">100%</span> Completed | Topic 03
                <span id="topic_no"></span>
            </div>
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

                        <h1 class="blue handwritten topic-title text-center"><small>Topic Three...</small><br>Influences
                        </h1>

                    </div>

                @endif

                @if ($currentstep == 2)
                    <h1 class="blue handwritten">Topic 03: Influences<br><small>Relationship Role Models</small></h1>

                    <div class="content-container m-5">

                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="blue handwritten">We are influenced by the world around us; our beliefs,
                                    thoughts and ideas are shaped by our upbringing, our culture, and our experiences –
                                    including our ideas about relationships.</h2>
                            </div>
                            <div class="col-md-7 offset-md-1">
                                <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('comment122') This field is required. @enderror</span>
                                <p>Where do our ideas about what relationships should look like come from?</p>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here"  wire:model="comment122" id="heart1"
                                        style="height: 500px;" readonly></textarea>
                                    <label for="heart1">Comments</label>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                @endif

                @if ($currentstep == 3)
                    <h1 class="blue handwritten">Topic 03: Influences<br><small>Positive Role Models</small></h1>

                    <div class="content-container m-5">

                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="blue handwritten">Positive role models are people we look up to, who have
                                    values and qualities that are important to us. For example, a friend with a positive
                                    attitude, or a family member who treats everyone with kindness.</h2>
                            </div>
                            <div class="col-md-7 offset-md-1">
                                <p>What does a positive role model look like for you? Try drawing your positive role
                                    model below, or make a list of qualities they have.</p>
                                     <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('comment123') This field is required. @enderror</span>
                                <div class="form-floating">
                                   
                                    <textarea class="form-control" placeholder="Leave a comment here" wire:model="comment123" id="heart2"
                                        style="height: 500px;" readonly></textarea>
                                    <label for="heart2">Comments</label>
                                </div>
                            </div>
                        </div>

                    </div>

                @endif

                @if ($currentstep == 4)
                    <h1 class="blue handwritten">Topic 03: Influences<br><small>Positive Role Models</small></h1>

                    <div class="content-container m-5">

                        <p class="mb-5 text-center">We see adverts on TV, on social media, at bus stops, in shops –
                            they’re everywhere! Look at the adverts below: who are they aimed at? What are they trying
                            to tell you? is it a good advert?</p>

                        <div class="row mb-5">
                            <div class="col-md-4">
                                <img class="img-advert img-fluid float-end" src="/crm/img/advert-1.jpg">
                            </div>
                            <div class="col-md-7 section">
                                <form>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" wire:model="who124" id="who"
                                            placeholder="Who is it aimed at?" readonly>
                                        <label for="who">Who is it aimed at?</label>
                                        <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('who124') This field is required. @enderror</span>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control"
                                            placeholder="What are they trying to tell you? " wire:model="what125" id="what"
                                            style="height: 100px" readonly></textarea>
                                        <label for="what">What are they trying to tell you? </label>
                                        <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('what125') This field is required. @enderror</span>
                                    </div>
                                    <div class="form-floating">
                                        <select class="form-select" wire:model="good126" id="good"
                                            aria-label="Floating label select example" disabled>
                                            <option value="">Yes or No?</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        <label for="good">Is it a good advert?</label>
                                        <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('good126') This field is required. @enderror</span>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-md-4">
                                <img class="img-advert img-fluid float-end" src="/crm/img/advert-2.png">
                            </div>
                            <div class="col-md-7 section">
                                <form>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" wire:model="who127" id="who"
                                            placeholder="Who is it aimed at?" readonly>
                                        <label for="who">Who is it aimed at?</label>
                                        <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('who127') This field is required. @enderror</span>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control"
                                            placeholder="What are they trying to tell you? " wire:model="what128" id="what"
                                            style="height: 100px" readonly></textarea>
                                        <label for="what">What are they trying to tell you? </label>
                                        <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('what128') This field is required. @enderror</span>
                                    </div>
                                    <div class="form-floating">
                                        <select class="form-select" wire:model="good129" id="good"
                                            aria-label="Floating label select example" disabled>
                                            <option value="">Yes or No?</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        <label for="good">Is it a good advert?</label>
                                        <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('good129') This field is required. @enderror</span>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-md-4">
                                <img class="img-advert img-fluid float-end" src="/crm/img/advert-3.jpg">
                            </div>
                            <div class="col-md-7 section">
                                <form>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" wire:model="who130" id="who"
                                            placeholder="Who is it aimed at?" readonly>
                                        <label for="who">Who is it aimed at?</label>
                                        <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('who130') This field is required. @enderror</span>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control"
                                            placeholder="What are they trying to tell you? " wire:model="what131" id="what"
                                            style="height: 100px" readonly></textarea>
                                        <label for="what">What are they trying to tell you? </label>
                                        <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('what131') This field is required. @enderror</span>
                                    </div>
                                    <div class="form-floating">
                                        <select class="form-select" wire:model="good132" id="good"
                                            aria-label="Floating label select example" disabled>
                                            <option value="">Yes or No?</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        <label for="good">Is it a good advert?</label>
                                        <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('good132') This field is required. @enderror</span>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-md-4">
                                <img class="img-advert img-fluid float-end" src="/crm/img/advert-4.jpg">
                            </div>
                            <div class="col-md-7 section">
                                <form>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" wire:model="who133" id="who"
                                            placeholder="Who is it aimed at?" readonly>
                                        <label for="who">Who is it aimed at?</label>
                                        <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('who133') This field is required. @enderror</span>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control"
                                            placeholder="What are they trying to tell you? " wire:model="what134" id="what"
                                            style="height: 100px" readonly></textarea>
                                        <label for="what">What are they trying to tell you? </label>
                                        <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('what134') This field is required. @enderror</span>
                                    </div>
                                    <div class="form-floating">
                                        <select class="form-select" wire:model="good135" id="good"
                                            aria-label="Floating label select example" disabled>
                                            <option value="">Yes or No?</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        <label for="good">Is it a good advert?</label>
                                        <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('good135') This field is required. @enderror</span>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-md-4">
                                <img class="img-advert img-fluid float-end" src="/crm/img/advert-5.jpg">
                            </div>
                            <div class="col-md-7 section">
                                <form>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" wire:model="who136" id="who"
                                            placeholder="Who is it aimed at?" readonly>
                                        <label for="who">Who is it aimed at?</label>
                                        <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('who136') This field is required. @enderror</span>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control"
                                            placeholder="What are they trying to tell you? " wire:model="what137" id="what"
                                            style="height: 100px" readonly></textarea>
                                        <label for="what">What are they trying to tell you? </label>
                                        <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('what137') This field is required. @enderror</span>
                                    </div>
                                    <div class="form-floating">
                                        <select class="form-select" wire:model="good138" id="good"
                                            aria-label="Floating label select example" disabled>
                                            <option value="">Yes or No?</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        <label for="good">Is it a good advert?</label>
                                        <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('good138') This field is required. @enderror</span>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-md-4">
                                <img class="img-advert img-fluid float-end" src="/crm/img/advert-6.jpg">
                            </div>
                            <div class="col-md-7 section">
                                <form>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" wire:model="who139" id="who"
                                            placeholder="Who is it aimed at?" readonly>
                                        <label for="who">Who is it aimed at?</label>
                                        <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('who139') This field is required. @enderror</span>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control"
                                            placeholder="What are they trying to tell you? " wire:model="what140" id="what"
                                            style="height: 100px" readonly></textarea>
                                        <label for="what">What are they trying to tell you? </label>
                                        <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('what140') This field is required. @enderror</span>
                                    </div>
                                    <div class="form-floating">
                                        <select class="form-select" wire:model="good141" id="good"
                                            aria-label="Floating label select example" disabled>
                                            <option value="">Yes or No?</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        <label for="good">Is it a good advert?</label>
                                        <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('good141') This field is required. @enderror</span>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-md-4">
                                <img class="img-advert img-fluid float-end" src="/crm/img/advert-7.jpg">
                            </div>
                            <div class="col-md-7 section">
                                <form>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" wire:model="who142" id="who"
                                            placeholder="Who is it aimed at?" readonly>
                                        <label for="who">Who is it aimed at?</label>
                                        <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('who142') This field is required. @enderror</span>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control"
                                            placeholder="What are they trying to tell you? " wire:model="what143" id="what"
                                            style="height: 100px" readonly></textarea>
                                        <label for="what">What are they trying to tell you? </label>
                                        <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('what143') This field is required. @enderror</span>
                                    </div>
                                    <div class="form-floating">
                                        <select class="form-select" wire:model="good144" id="good"
                                            aria-label="Floating label select example" disabled>
                                            <option value="">Yes or No?</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        <label for="good">Is it a good advert?</label>
                                        <span class="text-danger"
                            style="font-size: small;font-weight: 700;">@error('good144') This field is required. @enderror</span>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                @endif

                @if ($currentstep == 5)
                    <h1 class="blue handwritten">Topic 03: Influences<br><small>Gender Stereotypes</small></h1>

                    <div class="content-container m-5">

                        <div class="row mb-5">
                            <div class="col-md-12">
                                <p class="mb-5">Throughout history, men and women have been described as
                                    having certain characteristics because of their gender. This has led to men and
                                    women performing certain roles in society, and has impacted upon how men and women
                                    see themselves, and each other.
                                </p>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-md-6">
                                <p>In this box, write down some words or phrases that represent how
                                    <strong>women</strong> are stereotyped.</p>
                                    <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment145') This field is required. @enderror</span>
                                <div class="form-floating">
                                   
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        class="text-center" wire:model="comment145" id="heart1"
                                        style="height: 500px; background-position: center; background-image: url('https://www.westmerciawomensaid.org/crm/img/men.jpg'); background-repeat: no-repeat; background-size: 500px auto;" readonly></textarea>
                                    <label for="heart1">Example: Women only care about how they look.</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p>In this box, write down some words or phrases that represent how <strong>men</strong>
                                    are stereotyped.</p>
                                    <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment146') This field is required. @enderror</span>
                                <div class="form-floating">
                                    
                                    <textarea class="form-control" wire:model="comment146" placeholder="Leave a comment here"
                                        class="text-center" id="heart2"
                                        style="height: 500px;  background-position: center; background-image: url('https://www.westmerciawomensaid.org/crm/img/women.jpg'); background-repeat: no-repeat; background-size: 500px auto;" readonly></textarea>
                                    <label for="heart2">Example: Men have to be good at sport.</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <p>Do you think it’s okay for women and men to be stereotyped in this way? What impact
                                    do you think these stereotypes could have on people? How might these stereotypes
                                    affect domestic or relationship abuse?</p>
                                    <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment147') This field is required. @enderror</span>
                                <div class="form-floating">
                                    
                                    <textarea class="form-control"
                                        placeholder="Write your ideas about these questions here."
                                        class="text-center" id="heart1"
                                        wire:model="comment147"
                                        style="height: 250px; background-repeat: no-repeat; background-size: 500px auto;" readonly></textarea>
                                    <label for="heart1">Write your ideas about these questions here.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($currentstep == 6)
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

                            <p style="text-align: center">Thank you for viewing Topic 03!</p>

                        </div>
                    </div> 
                @endif


            @if ($currentstep<= 5)
                
                <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end next" wire:click="increaseStep()" >Next</button>
            @endif

            @if ($currentstep > 1 && $currentstep <= 5)

                <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end" wire:click="decreaseStep()" style="margin-right: 5px;">Back</button>
            
            @endif

            @if ($currentstep == 6)
            
             <a href="{{route('practitioner.serviceuser')}}" class="btn btn-primary btn-sm mt-3 mr-2 float-end">Exit</a>
                {{-- <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end" wire:click="decreaseStep()" style="margin-right: 5px;">Back</button> --}}
            @endif
            </form>
        </div>
    </div>
</div>
