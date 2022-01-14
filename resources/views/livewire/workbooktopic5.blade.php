<div>
    <div class="row">
        <div class="col-md-9">
            <h2>Youth Workbook</h2>
        </div>
        <div class="col-md-3">
            <div class="text-end"><span class="percent">{{ !empty($percent) ? $percent : '13' }}%</span>
                Completed
                | Topic 05
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
            <form data-persist="garlic" id="workbookform" wire:submit.prevent="submittopic4">

                @if ($currentstep == 1)
                    <div class="content-container m-5 ">

                        <h1 class="blue handwritten topic-title text-center"><small>Topic Five...</small><br>Emotions
                        </h1>

                    </div>
                @endif

                @if ($currentstep == 2)
                    <h1 class="blue handwritten">Topic 05: Emotions<br><small>Emotions</small></h1>

                    <div class="content-container m-5">

                        <div class="row mb-5">

                            <div class="col-md-4">
                                <h2 class="blue handwritten">Emotions – we all have them. Some feel good, some feel
                                    uncomfortable, some feel overwhelming and some feel amazing – we can feel much more
                                    than just happy or sad. </h2>
                                <h4 class="blue handwritten">Take a look at the wheel, how are you feeling today?</h4>
                                <span class="text-danger" style="font-size: small;font-weight: 700;">@error('feelings178') Please select any options. @enderror</span>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" wire:model="feelings178[]" id="feelings-1">
                                    <label class="form-check-label" for="feelings-1">
                                        Happy
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" wire:model="feelings178[]" id="feelings-2">
                                    <label class="form-check-label" for="feelings-2">
                                        Discust
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" wire:model="feelings178[]" id="feelings-3">
                                    <label class="form-check-label" for="feelings-3">
                                        Angry
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" wire:model="feelings178[]" id="feelings-4">
                                    <label class="form-check-label" for="feelings-4">
                                        Sad
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" wire:model="feelings178[]" id="feelings-5">
                                    <label class="form-check-label" for="feelings-5">
                                        Scared
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" wire:model="feelings178[]" id="feelings-6">
                                    <label class="form-check-label" for="feelings-6">
                                        Excited
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-7 offset-md-1">
                                <img src="{{asset('assets/img/FeelingsWheel.jpg')}}" class="img-fluid">
                            </div>

                        </div>

                        <div class="row mt-5">
                            <div class="col-md-4">
                                <h4 class="blue handwritten">Statements</h4>
                            </div>
                            <div class="col-md-7 offset-md-1">
                                <span class="text-danger"
                                style="font-size: small;font-weight: 700;">@error('comment179') This field is
                                required. @enderror</span>
                                <div class="form-floating mb-3">
                                    <textarea  class="form-control" placeholder="Leave a comment here" wire:model="comment179" id="heart1"
                                        style="height: 500px;"></textarea>
                                    <label for="heart1">Use this space to write about how you're feeling today.</label>
                                </div>
                            </div>
                        </div>

                    </div>

                @endif

                @if ($currentstep == 3)
                    <h1 class="blue handwritten">Topic 05: Emotions<br><small>Bodily Reactions to Powerful Emotions</small></h1>
                            
                    <div class="content-container m-5">
                        
                        <div class="row mb-5">
                                
                            <div class="col-md-4">
                                <h2 class="blue handwritten">When we feel stressed, angry, upset or frustrated, our bodies react in certain ways. Learning to recognise these feelings can help us to understand when we need to use helpful coping strategies, distract ourselves, or remove ourselves from a situation.</h2>
                            </div>
                            
                            <div class="col-md-7 offset-md-1">
                                <span class="text-danger"
                                style="font-size: small;font-weight: 700;">@error('comment180') This field is
                                required. @enderror</span>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="How does your body react to stress? What bodily sensation can you feel?" id="person" wire:model="comment180" style="height: 500px; background-position: center; background-image: url('https://www.westmerciawomensaid.org/crm/img/person.jpg'); background-repeat: no-repeat; background-size: 500px auto;"></textarea>
                                    <label for="person">How does your body react to stress? What bodily sensation can you feel?</label>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($currentstep == 4)
                  
                @endif

                @if ($currentstep == 5)
                  
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
                            <br>
                            Please press Submit/Continue to ensure your responses are submitted
                        </p>
                        <h4 style="text-align: center">Thank You</h4>

                        <p style="text-align: center">Thank you for completing Topic 04!</p>

                    </div>
                </div>
                @endif

                @if ($currentstep == 7)
                    <h1 class="blue handwritten">Topic 04: Rights & Safety<br><small>Triggers</small></h1>

                    <div class="content-container m-5 text-center">

                        <h2 class="blue handwritten">It’s helpful to be aware of our triggers. We can’t always know
                            what they are; sometimes they creep up on us, and that’s okay. Keeping a diary of how our
                            body and mind feels when we feel unsafe or anxious can be a good way to start to recognise
                            our triggers, which can help us to manage them.</h2>

                        <p>Use the diary below to keep a record any instances of you feeling unsafe or anxious.</p>

                        <div class="row mb-5">

                            <div class="col-md-4">
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment157') This field is
                                    required. @enderror</span>
                                <div class="form-floating mb-3">

                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        wire:model="comment157" id="heart1" style="height: 300px;"></textarea>
                                    <label for="heart1">What Happened?</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment158') This field is
                                    required. @enderror</span>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        wire:model="comment158" id="heart1" style="height: 300px;"></textarea>
                                    <label for="heart1">How did I feel?</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment159') This field is
                                    required. @enderror</span>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        wire:model="comment159" id="heart1" style="height: 300px;"></textarea>
                                    <label for="heart1">How did I cope?</label>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-5">

                            <div class="col-md-12 text-center">
                                <h4 class="blue w-100">Safe spaces, safe places</h4>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment160') This field is
                                    required. @enderror</span>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        wire:model="comment160" id="heart1" style="height: 300px;"></textarea>
                                    <label for="heart1">Use this splace to explain how saftry looks and feels for
                                        you.</label>
                                </div>
                            </div>

                        </div>

                        <h4 class="blue w-100">When we talk about safe spaces, we aren’t just thinking about places
                            of physical safety in the real world. We can use thoughts and feelings inside our body as a
                            guide to safety, and use strategies to help restore a feeling of inner safety.</h4>
                        Take a look at the images below, do any of these look or feel safe for you?


                        <div class="row my-5">
                            <div class="col-md-4">
                                <img class="img-advert img-fluid mx-auto d-block mb-3"
                                    src="{{ asset('assets/img/safe-1.jpg') }}">
                                <select class="form-select" aria-label="Default select example"
                                    wire:model="comment161">
                                    <option value="">Yes or No?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment161') This field is
                                    required. @enderror</span>
                            </div>
                            <div class="col-md-4">
                                <img class="img-advert img-fluid mx-auto d-block mb-3" src="/crm/img/safe-2.jpg">
                                <select class="form-select" aria-label="Default select example"
                                    wire:model="comment162">
                                    <option value="">Yes or No?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment162') This field is
                                    required. @enderror</span>
                            </div>
                            <div class="col-md-4">
                                <img class="img-advert img-fluid mx-auto d-block mb-3" src="/crm/img/safe-3.jpg">
                                <select class="form-select" aria-label="Default select example"
                                    wire:model="comment163">
                                    <option value="">Yes or No?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment163') This field is
                                    required. @enderror</span>
                            </div>
                        </div>
                        <div class="row my-5">
                            <div class="col-md-4">
                                <img class="img-advert img-fluid mx-auto d-block mb-3" src="/crm/img/safe-4.jpg">
                                <select class="form-select" aria-label="Default select example"
                                    wire:model="comment164">
                                    <option value="">Yes or No?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment164') This field is
                                    required. @enderror</span>
                            </div>
                            <div class="col-md-4">
                                <img class="img-advert img-fluid mx-auto d-block mb-3" src="/crm/img/safe-5.jpg">
                                <select class="form-select" aria-label="Default select example"
                                    wire:model="comment165">
                                    <option value="">Yes or No?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment165') This field is
                                    required. @enderror</span>
                            </div>
                            <div class="col-md-4">
                                <img class="img-advert img-fluid mx-auto d-block mb-3" src="/crm/img/safe-6.jpg">
                                <select class="form-select" aria-label="Default select example"
                                    wire:model="comment166">
                                    <option value="">Yes or No?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment166') This field is
                                    required. @enderror</span>
                            </div>
                        </div>
                        <div class="row my-5">
                            <div class="col-md-4">
                                <img class="img-advert img-fluid mx-auto d-block mb-3" src="/crm/img/safe-7.jpg">
                                <select class="form-select" aria-label="Default select example"
                                    wire:model="comment167">
                                    <option value="">Yes or No?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment167') This field is
                                    required. @enderror</span>
                            </div>
                            <div class="col-md-4">
                                <img class="img-advert img-fluid mx-auto d-block mb-3" src="/crm/img/safe-8.jpg">
                                <select class="form-select" aria-label="Default select example"
                                    wire:model="comment168">
                                    <option value="">Yes or No?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment168') This field is
                                    required. @enderror</span>
                            </div>
                            <div class="col-md-4">
                                <img class="img-advert img-fluid mx-auto d-block mb-3" src="/crm/img/safe-9.jpg">
                                <select class="form-select" aria-label="Default select example"
                                    wire:model="comment169">
                                    <option value="">Yes or No?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment169') This field is
                                    required. @enderror</span>
                            </div>
                        </div>
                        <div class="row my-5">
                            <div class="col-md-4">
                                <img class="img-advert img-fluid mx-auto d-block mb-3" src="/crm/img/safe-10.jpg">
                                <select class="form-select" aria-label="Default select example"
                                    wire:model="comment170">
                                    <option value="">Yes or No?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment170') This field is
                                    required. @enderror</span>
                            </div>
                            <div class="col-md-4">
                                <img class="img-advert img-fluid mx-auto d-block mb-3" src="/crm/img/safe-11.jpg">
                                <select class="form-select" aria-label="Default select example"
                                    wire:model="comment171">
                                    <option value="">Yes or No?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment171') This field is
                                    required. @enderror</span>
                            </div>
                            <div class="col-md-4">
                                <img class="img-advert img-fluid mx-auto d-block mb-3" src="/crm/img/safe-12.jpg">
                                <select class="form-select" aria-label="Default select example"
                                    wire:model="comment172">
                                    <option value="">Yes or No?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment172') This field is
                                    required. @enderror</span>
                            </div>
                        </div>
                        <div class="row my-5">
                            <div class="col-md-4">
                                <img class="img-advert img-fluid mx-auto d-block mb-3" src="/crm/img/safe-13.jpg">
                                <select class="form-select" aria-label="Default select example"
                                    wire:model="comment173">
                                    <option value="">Yes or No?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment173') This field is
                                    required. @enderror</span>
                            </div>
                            <div class="col-md-4">
                                <img class="img-advert img-fluid mx-auto d-block mb-3" src="/crm/img/safe-14.jpg">
                                <select class="form-select" aria-label="Default select example"
                                    wire:model="comment174">
                                    <option value="">Yes or No?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment174') This field is
                                    required. @enderror</span>
                            </div>
                            <div class="col-md-4">
                                <img class="img-advert img-fluid mx-auto d-block mb-3" src="/crm/img/safe-15.jpg">
                                <select class="form-select" aria-label="Default select example"
                                    wire:model="comment175">
                                    <option value="">Yes or No?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment175') This field is
                                    required. @enderror</span>
                            </div>
                        </div>

                        <div class="row mb-5">

                            <div class="col-md-12 text-center">
                                <h4 class="blue w-100">Your support worker will provide a script to help you
                                    explore inner safety.</h4>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment176') This field is
                                    required. @enderror</span>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        wire:model="comment176" id="heart1" style="height: 300px;"></textarea>
                                    <label for="heart1">Write down your thoughts and feelings from this exercise below.
                                        Can you describe a 'place' that feels safe for you?</label>
                                </div>
                            </div>

                        </div>

                        <h4 class="blue w-100">There are things we can do to help us get to our safe space. This
                            might link to a person, a place, art, breathing exercises – whatever works for you!</h4>

                        Read the examples below of ways to get to your safe space and pick a few to try. Feel free to
                        add your own ideas in the box below.

                        <div class="row mb-5">

                            <div class="col-md-4 box-container box-1 text-center">
                                <h2 class="text-center handwritten blue">Article 6</h2>
                                <p class="p-4 pt-0">Repeating a mantra (e.g. I am safe, I am okay)</p>
                            </div>

                            <div class="col-md-4 box-container box-2 text-center">
                                <h2 class="text-center handwritten blue">Article 6</h2>
                                <p class="p-4 pt-0">Breathing exercises (e.g. 7/11 – in for 7 seconds, out for 11
                                    seconds)</p>
                            </div>

                            <div class="col-md-4 box-container box-1 text-center">
                                <h2 class="text-center handwritten blue">Article 6</h2>
                                <p class="p-4 pt-0">Squeezing a stress ball</p>
                            </div>

                            <div class="col-md-4 box-container box-1 text-center">
                                <h2 class="text-center handwritten blue">Article 6</h2>
                                <p class="p-4 pt-0">Eating a certain food or drink</p>
                            </div>

                            <div class="col-md-4 box-container box-2 text-center">
                                <h2 class="text-center handwritten blue">Article 6</h2>
                                <p class="p-4 pt-0">Grounding exercises (e.g. using the senses, 5 4 3 2 1)</p>
                            </div>

                            <div class="col-md-4 box-container box-1 text-center">
                                <h2 class="text-center handwritten blue">Article 6</h2>
                                <p class="p-4 pt-0">Meditation</p>
                            </div>

                            <div class="col-md-4 box-container box-1 text-center">
                                <h2 class="text-center handwritten blue">Article 6</h2>
                                <p class="p-4 pt-0">Movement (e.g. rolling your shoulders)</p>
                            </div>

                            <div class="col-md-4 box-container box-2 text-center">
                                <h2 class="text-center handwritten blue">Article 6</h2>
                                <p class="p-4 pt-0">Body scan</p>
                            </div>

                            <div class="col-md-4 box-container box-1 text-center">
                                <h2 class="text-center handwritten blue">Article 6</h2>
                                <p class="p-4 pt-0">Find and feel your pulse</p>
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <span class="text-danger"
                                style="font-size: small;font-weight: 700;">@error('comment177') This field is
                                required. @enderror</span>
                            <div class="form-floating mb-3">

                                <textarea class="form-control" placeholder="Leave a comment here"
                                    wire:model="comment177" id="heart1" style="height: 300px;"></textarea>
                                <label for="heart1">Please add your own ideas here.</label>
                            </div>
                        </div>

                    </div>
                @endif


                @if ($currentstep <= 5)

                    <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end next"
                        wire:click="increaseStep()">Next</button>
                @endif

                @if ($currentstep > 1 && $currentstep <= 5)
                    <button type="button" class="btn btn-save mt-3 float-start state">Save/Exit</button>
                    <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end"
                        wire:click="decreaseStep()" style="margin-right: 5px;">Back</button>

                @endif
                @if ($currentstep == 6)

                    <button type="submit" class="btn btn-primary btn-sm mt-3 mr-2 float-end">Submit</button>
                    {{-- <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end" wire:click="decreaseStep()" style="margin-right: 5px;">Back</button> --}}
                @endif

            </form>
        </div>
    </div>
</div>
