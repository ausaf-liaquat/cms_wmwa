<div>
    <div class="row">
        <div class="col-md-9">
            <h2>Youth Workbook</h2>
        </div>
        <div class="col-md-3">
            <div class="text-end"><span class="percent">100%</span>
                Completed
                | Topic 05
                <span id="topic_no"></span>
            </div>
            <div class="progress my-2" style="height: 10px;">
                <div class="progress-bar" role="progressbar" style="width:100%" aria-valuenow="01" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <div class="card float-none workbook">
        <div class="card-body">
            <strong>Submitted By: {{ $username }}</strong>
            <form id="workbookform">

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
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('feelings178') Please select any
                                    options. @enderror</span>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Happy"
                                        wire:model="feelings178" id="feelings1">
                                    <label class="form-check-label" for="feelings1">
                                        Happy
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Discust"
                                        wire:model="feelings178" id="feelings2">
                                    <label class="form-check-label" for="feelings2">
                                        Discust
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Angry"
                                        wire:model="feelings178" id="feelings3">
                                    <label class="form-check-label" for="feelings3">
                                        Angry
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Sad" wire:model="feelings178"
                                        id="feelings4">
                                    <label class="form-check-label" for="feelings4">
                                        Sad
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Scared"
                                        wire:model="feelings178" id="feelings5">
                                    <label class="form-check-label" for="feelings5">
                                        Scared
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Excited"
                                        wire:model="feelings178" id="feelings6">
                                    <label class="form-check-label" for="feelings6">
                                        Excited
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-7 offset-md-1">
                                <img src="{{ asset('assets/img/FeelingsWheel.jpg') }}" class="img-fluid">
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
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        wire:model="comment179" id="heart1" style="height: 500px;"></textarea>
                                    <label for="heart1">Use this space to write about how you're feeling today.</label>
                                </div>
                            </div>
                        </div>

                    </div>

                @endif

                @if ($currentstep == 3)
                    <h1 class="blue handwritten">Topic 05: Emotions<br><small>Bodily Reactions to Powerful
                            Emotions</small></h1>

                    <div class="content-container m-5">

                        <div class="row mb-5">

                            <div class="col-md-4">
                                <h2 class="blue handwritten">When we feel stressed, angry, upset or frustrated, our
                                    bodies react in certain ways. Learning to recognise these feelings can help us to
                                    understand when we need to use helpful coping strategies, distract ourselves, or
                                    remove ourselves from a situation.</h2>
                            </div>

                            <div class="col-md-7 offset-md-1">
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment180') This field is
                                    required. @enderror</span>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control"
                                        placeholder="How does your body react to stress? What bodily sensation can you feel?"
                                        id="person" wire:model="comment180"
                                        style="height: 500px; background-position: center; background-image: url('https://www.westmerciawomensaid.org/crm/img/person.jpg'); background-repeat: no-repeat; background-size: 500px auto;"></textarea>
                                    <label for="person">How does your body react to stress? What bodily sensation can
                                        you feel?</label>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($currentstep == 4)
                    <h1 class="blue handwritten">Topic 05: Emotions<br><small>The Five Fs</small></h1>

                    <div class="content-container m-5">

                        <div class="row mb-5">
                            <div class="col">
                                <h2 class="blue handwritten">When our emotions are overwhelming, our body has an
                                    automatic response system designed to protect us from danger. It’s triggered by our
                                    amygdala – the part of our brain that keeps us alive. When we’re faced with a
                                    threat, our brains and bodies react with one of the 5 Fs, or, our 5F alarm.</h2>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                <h4 class="blue p-4 m-0 w-100">Fight</h4>
                            </div>
                            <div class="col-md-5 box-2 border-end border-5 text-center d-flex align-items-center">
                                <p class="p-4 m-0">You defend yourself by attacking the threat, physically or
                                    verbally.</p>
                            </div>
                            <div class="col-md-4 box-3 text-center d-flex align-items-center">
                                <p class="p-4 m-0 white">Fast heartbeat, fast breath, clenched fists, tight muscles,
                                    wide eyes.</p>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                <h4 class="blue p-4 m-0 w-100">Flight</h4>
                            </div>
                            <div class="col-md-5 box-2 border-end border-5 text-center d-flex align-items-center">
                                <p class="p-4 m-0">You protect yourself by running away from the threat, to get
                                    distance or to hide.</p>
                            </div>
                            <div class="col-md-4 box-3 text-center d-flex align-items-center">
                                <p class="p-4 m-0 white">Fast heartbeat, wobbly legs, tensed to run, fast breath.</p>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                <h4 class="blue p-4 m-0 w-100">Freeze</h4>
                            </div>
                            <div class="col-md-5 box-2 border-end border-5 text-center d-flex align-items-center">
                                <p class="p-4 m-0">You try to stay safe by keeping as still as possible, to avoid
                                    drawing the attention of the threat to yourself.</p>
                            </div>
                            <div class="col-md-4 box-3 text-center d-flex align-items-center">
                                <p class="p-4 m-0 white">Body frozen, can’t move, wide eyes, fast heartbeat, feel sick.
                                </p>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                <h4 class="blue p-4 m-0 w-100">Flop</h4>
                            </div>
                            <div class="col-md-5 box-2 border-end border-5 text-center d-flex align-items-center">
                                <p class="p-4 m-0">You protect yourself by going limp and flopping to the floor,
                                    to avoid damage from the threat.</p>
                            </div>
                            <div class="col-md-4 box-3 text-center d-flex align-items-center">
                                <p class="p-4 m-0 white">Dizzy, lightheaded, may freeze first and then flop.</p>
                            </div>
                        </div>
                        <div class="row mb-5 pb-5">
                            <div class="col-md-3 box-2 border-end border-5 text-center d-flex align-items-center">
                                <h4 class="blue p-4 m-0 w-100">Friend</h4>
                            </div>
                            <div class="col-md-5 box-2 border-end border-5 text-center d-flex align-items-center">
                                <p class="p-4 m-0">You protect yourself by befriending the threat, so that it
                                    won’t cause you harm.</p>
                            </div>
                            <div class="col-md-4 box-3 text-center d-flex align-items-center">
                                <p class="p-4 m-0 white">Voice higher, softer tone, body smaller, crouch down,
                                    non-threatening.</p>
                            </div>
                        </div>



                        <div class="row mb-5">

                            <div class="col-md-4">
                                <h4 class="blue handwritten">Sometimes our 5F alarm can be triggered to ‘keep us alive’
                                    when we’re not in a life threatening situation. When we have had experiences of
                                    abuse, our 5F alarm may go off in harmless situations, which may cause what looks or
                                    feels like a disproportionate reaction in our minds or in our behaviour.</h4>
                                <h4 class="blue handwritten">It’s okay to have these reactions, and okay to feel these
                                    difficult feelings. It’s important that we learn to manage our reactions, so we
                                    don’t cause harm to ourselves, or to other people around us.</h4>

                            </div>

                            <div class="col-md-7 offset-md-1">
                                <h4 class="blue">Managing our chimp</h4>
                                <p>We can also call our amygdala our chimp brain, and learning to manage its reactions
                                    can be called managing our chimp. Check out the video below for more on this:</p>
                                <a href="https://www.youtube.com/watch?v=e6bHxhfJGIU&t=1s" target="_blank">
                                    <img src="{{ asset('assets/img/youtube.jpg') }}" class="img-fluid">
                                </a>
                            </div>

                        </div>


                    </div>
                @endif

                @if ($currentstep == 5)
                    <h1 class="blue handwritten">Topic 05: Emotions<br><small>Finding Positive Reactions</small></h1>

                    <div class="content-container m-5">

                        <div class="row mb-5">

                            <div class="col-md-12 mb-5">
                                <h4 class="blue handwritten">When life is hard, we can develop reactions to situations
                                    or emotions that we might want to think about and change, to help us find safer,
                                    more positive reactions.</h4>
                                <h4 class="blue handwritten">Look at these emotions, how might someone react negatively
                                    to these? Can you come up with a more positive reaction?</h4>
                            </div>

                            <div class="col-md-12">
                                <div class="row p-3 mb-4" style="background-color:#f2f2f2;">
                                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                                        <h6 class="blue">Angry <i class="bi bi-arrow-right-circle-fill"></i>
                                        </h6>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Enter negative reaction"
                                                id="1" style="height: 150px;"
                                                disabled>Lash out and break something.</textarea>
                                            <label for="">Enter negative reaction</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Enter positive reaction"
                                                id="2" style="height: 150px;"
                                                disabled>Remove yourself from the situation and take deep breaths.</textarea>
                                            <label for="2">Enter positive reaction</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row p-3 mb-4" style="background-color:#f2f2f2;">
                                    <div class="col-2 d-flex align-items-center justify-content-center">
                                        <h6 class="blue">Embarrassed <i
                                                class="bi bi-arrow-right-circle-fill"></i></h6>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Enter negative reaction"
                                                id="embarrassed-1" style="height: 150px;"
                                                disabled>hide your feelings and keep secrets from friends and family.</textarea>
                                            <label for="embarrassed-1">Enter negative reaction</label>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <span class="text-danger"
                                            style="font-size: small;font-weight: 700;">@error('embarrassed181') This
                                                field is
                                            required. @enderror</span>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Enter positive reaction"
                                                id="embarrassed-2" style="height: 150px;"
                                                wire:model="embarrassed181"></textarea>
                                            <label for="embarrassed-2">Enter positive reaction</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row p-3 mb-4" style="background-color:#f2f2f2;">
                                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                                        <h6 class="blue">Scared <i
                                                class="bi bi-arrow-right-circle-fill"></i></h6>
                                    </div>
                                    <div class="col-md-5">
                                        <span class="text-danger"
                                            style="font-size: small;font-weight: 700;">@error('scared182') This field is
                                            required. @enderror</span>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Enter negative reaction"
                                                id="scared-1" style="height: 150px;" wire:model="scared182"></textarea>
                                            <label for="scared-1">Enter negative reaction</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <span class="text-danger"
                                            style="font-size: small;font-weight: 700;">@error('scared183') This field is
                                            required. @enderror</span>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Enter positive reaction"
                                                id="scared-2" style="height: 150px;" wire:model="scared183"></textarea>
                                            <label for="scared-2">Enter positive reaction</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row p-3 mb-4" style="background-color:#f2f2f2;">
                                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                                        <h6 class="blue">Guilty <i
                                                class="bi bi-arrow-right-circle-fill"></i></h6>
                                    </div>
                                    <div class="col-md-5">
                                        <span class="text-danger"
                                            style="font-size: small;font-weight: 700;">@error('guilty184') This field is
                                            required. @enderror</span>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Enter negative reaction"
                                                id="guilty-1" style="height: 150px;" wire:model="guilty184"></textarea>
                                            <label for="guilty-1">Enter negative reaction</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <span class="text-danger"
                                            style="font-size: small;font-weight: 700;">@error('guilty185') This field is
                                            required. @enderror</span>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Enter positive reaction"
                                                id="guilty-2" style="height: 150px;" wire:model="guilty185"></textarea>
                                            <label for="guilty-2">Enter positive reaction</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row p-3 mb-4" style="background-color:#f2f2f2;">
                                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                                        <h6 class="blue">Anxious <i
                                                class="bi bi-arrow-right-circle-fill"></i></h6>
                                    </div>
                                    <div class="col-md-5">
                                        <span class="text-danger"
                                            style="font-size: small;font-weight: 700;">@error('anxious186') This field
                                                is
                                            required. @enderror</span>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Enter negative reaction"
                                                id="anxious-1" style="height: 150px;"
                                                wire:model="anxious186"></textarea>
                                            <label for="anxious-1">Enter negative reaction</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <span class="text-danger"
                                            style="font-size: small;font-weight: 700;">@error('anxious187') This field
                                                is
                                            required. @enderror</span>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Enter positive reaction"
                                                id="anxious-2" style="height: 150px;"
                                                wire:model="anxious187"></textarea>
                                            <label for="anxious-2">Enter positive reaction</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row p-3 mb-4" style="background-color:#f2f2f2;">
                                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                                        <h6 class="blue">Stressed <i
                                                class="bi bi-arrow-right-circle-fill"></i></h6>
                                    </div>
                                    <div class="col-md-5">
                                        <span class="text-danger"
                                            style="font-size: small;font-weight: 700;">@error('stressed188') This field
                                                is
                                            required. @enderror</span>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Enter negative reaction"
                                                id="stressed-1" style="height: 150px;"
                                                wire:model="stressed188"></textarea>
                                            <label for="stressed-1">Enter negative reaction</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <span class="text-danger"
                                            style="font-size: small;font-weight: 700;">@error('stressed189') This field
                                                is
                                            required. @enderror</span>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Enter positive reaction"
                                                id="stressed-2" style="height: 150px;"
                                                wire:model="stressed189"></textarea>
                                            <label for="stressed-2">Enter positive reaction</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row p-3 mb-4" style="background-color:#f2f2f2;">
                                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                                        <h6 class="blue">Uneasy <i
                                                class="bi bi-arrow-right-circle-fill"></i></h6>
                                    </div>
                                    <div class="col-md-5">
                                        <span class="text-danger"
                                            style="font-size: small;font-weight: 700;">@error('uneasy190') This field is
                                            required. @enderror</span>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Enter negative reaction"
                                                id="uneasy-1" style="height: 150px;" wire:model="uneasy190"></textarea>
                                            <label for="uneasy-1">Enter negative reaction</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <span class="text-danger"
                                            style="font-size: small;font-weight: 700;">@error('uneasy191') This field is
                                            required. @enderror</span>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Enter positive reaction"
                                                id="uneasy-2" style="height: 150px;" wire:model="uneasy191"></textarea>
                                            <label for="uneasy-2">Enter positive reaction</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row p-3 mb-4" style="background-color:#f2f2f2;">
                                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                                        <h6 class="blue">Frustrated <i
                                                class="bi bi-arrow-right-circle-fill"></i></h6>
                                    </div>
                                    <div class="col-md-5">
                                        <span class="text-danger"
                                            style="font-size: small;font-weight: 700;">@error('frustrated192') This
                                                field is
                                            required. @enderror</span>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Enter negative reaction"
                                                id="frustrated-1" style="height: 150px;"
                                                wire:model="frustrated192"></textarea>
                                            <label for="frustrated-1">Enter negative reaction</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <span class="text-danger"
                                            style="font-size: small;font-weight: 700;">@error('frustrated193') This
                                                field is
                                            required. @enderror</span>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Enter positive reaction"
                                                id="frustrated-2" style="height: 150px;"
                                                wire:model="frustrated193"></textarea>
                                            <label for="frustrated-2">Enter positive reaction</label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>
                @endif

                @if ($currentstep == 6)
                    <h1 class="blue handwritten">Topic 05: Emotions<br><small>Reset Dificult Emotions</small></h1>

                    <div class="content-container m-5">

                        <div class="row mb-5">

                            <div class="row mb-5">

                                <div class="col-md-4">
                                    <h2 class="blue handwritten">RESET is used to help you process, reflect and manage
                                        difficult emotions.</h2>
                                    <h4 class="blue handwritten">Any feeling you have is ok. You cannot control your
                                        emotions but you can control your behaviour.</h4>
                                    <p class="mb-4">Read through the process and use the table below to apply
                                        it to a time when you’ve experienced a difficult emotion.</p>
                                    <span class="text-danger"
                                        style="font-size: small;font-weight: 700;">@error('rest199') This field is
                                        required. @enderror</span>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="resetr" wire:model="rest199">
                                        <label for="resetr">R:</label>
                                    </div>

                                    <span class="text-danger"
                                        style="font-size: small;font-weight: 700;">@error('rest200') This field is
                                        required. @enderror</span>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="resete" wire:model="rest200">
                                        <label for="resete">E:</label>
                                    </div>

                                    <span class="text-danger"
                                        style="font-size: small;font-weight: 700;">@error('rest201') This field is
                                        required. @enderror</span>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="resets" wire:model="rest201">
                                        <label for="resets">S:</label>
                                    </div>

                                    <span class="text-danger"
                                        style="font-size: small;font-weight: 700;">@error('rest202') This field is
                                        required. @enderror</span>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="resete2" wire:model="rest202">
                                        <label for="resete2">E:</label>
                                    </div>

                                    <span class="text-danger"
                                        style="font-size: small;font-weight: 700;">@error('rest203') This field is
                                        required. @enderror</span>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="resett" wire:model="rest203">
                                        <label for="resett">T:</label>
                                    </div>


                                </div>

                                <div class="col-md-7 offset-md-1 p-5" style="background-color:#f2f2f2;">

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="big-letters">
                                                <span class="blue handwritten">R</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <h2 class="blue handwritten p-0">Recognise</h2>
                                            <p>Recognise and accept the emotion that you’re feeling and label it.</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="big-letters">
                                                <span class="blue handwritten">E</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <h2 class="blue handwritten p-0">Explain</h2>
                                            <p>Explain to yourself why you feel this way and what triggered the emotion.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="big-letters">
                                                <span class="blue handwritten">S</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <h2 class="blue handwritten p-0">Support</h2>
                                            <p>If you need support with this emotion seek help from a trusted person or
                                                service.</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="big-letters">
                                                <span class="blue handwritten">E</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <h2 class="blue handwritten p-0">Express</h2>
                                            <p>Express how you're feeling in a safe, healthy and helpful way.</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="big-letters">
                                                <span class="blue handwritten">T</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <h2 class="blue handwritten p-0">Temporary</h2>
                                            <p>Understand that this emotion will pass and it does not define who you
                                                are.</p>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>


                    </div>
                @endif

                @if ($currentstep == 7)
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

                            <p style="text-align: center">Thank you for completing Topic 05!</p>

                        </div>
                    </div>
                @endif


                @if ($currentstep <= 6)

                    <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end next"
                        wire:click="increaseStep()">Next</button>
                @endif

                @if ($currentstep > 1 && $currentstep <= 6)

                    <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end"
                        wire:click="decreaseStep()" style="margin-right: 5px;">Back</button>

                @endif
                @if ($currentstep == 7)

                    <a href="{{ route('practitioner.serviceuser')}}"
                        class="btn btn-primary btn-sm mt-3 mr-2 float-end">Exit</a>
                    {{-- <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end" wire:click="decreaseStep()" style="margin-right: 5px;">Back</button> --}}
                @endif

            </form>
        </div>
    </div>
</div>
