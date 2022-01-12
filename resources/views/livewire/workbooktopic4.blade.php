<div>
    <div class="row">
        <div class="col-md-9">
            <h2>Youth Workbook</h2>
        </div>
        <div class="col-md-3">
            <div class="text-end"><span class="percent">{{ !empty($percent) ? $percent : '13' }}%</span>
                Completed
                | Topic 04
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

                        <h1 class="blue handwritten topic-title text-center"><small>Topic Four...</small><br>Rights &
                            Safety</h1>

                    </div>
                @endif

                @if ($currentstep == 2)
                    <h1 class="blue handwritten">Topic 04: Rights & Safety<br><small>Rights & Responsibilities</small>
                    </h1>

                    <div class="content-container m-5">
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <p>Everyone has rights. A right is something a person has which people think should not
                                    be taken away. It is a rule about what a person is allowed to do or have. They are
                                    written into law, and there are specific rights for children and young people.
                                    Rights are there for your protection, and to ensure that you are looked after and
                                    treated fairly.</p>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment148') This field is
                                    required. @enderror</span>
                                <div class="form-floating">
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here"
                                            class="text-center" style="height: 500px;"
                                            wire:model="comment148"></textarea>
                                        <label for="heart1">Example: I have the right to live a full and happy
                                            life.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-12">
                                    <p>Rights are granted to us under law or morality, whereas responsibilities are our
                                        duties or obligations to be able to enjoy these rights. We have a responsibility
                                        to
                                        respect other people’s rights, and to be accountable for our own behaviour.</p>
                                    <span class="text-danger"
                                        style="font-size: small;font-weight: 700;">@error('comment149') This field is
                                        required. @enderror</span>
                                    <div class="form-floating">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a comment here"
                                                class="text-center" style="height: 500px;"
                                                wire:model="comment149"></textarea>
                                            <label for="heart2">Example: I am responsible for being respectful towards
                                                other
                                                people.</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endif

                @if ($currentstep == 3)
                    <h1 class="blue handwritten">Topic 04: Rights & Safety<br><small>United Nations Convention on the
                            rights of the child</small></h1>

                    <div class="content-container m-5">

                        <div class="row">
                            <div class="col-md-12 ">
                                <p>The United Nations Convention on the Rights of the Child sets out the civil,
                                    political, economic, social, health and cultural rights of children.</p>
                                <p>Here are some examples of rights in the convention:</p>
                            </div>
                            <div class="col-md-4 box-container box-1 text-center">
                                <h2 class="text-center handwritten blue">Article 6</h2>
                                <p class="p-4 pt-0">Children have the right to live a full life. Governments
                                    should ensure that children survive and develop healthily.</p>
                            </div>
                            <div class="col-md-4 box-container box-2 text-center">
                                <h2 class="text-center handwritten blue">Article 19</h2>
                                <p class="p-4 pt-0">Governments should ensure that children are properly cared for
                                    and protect them from violence, abuse and neglect by their parents, or anyone else
                                    who looks after them.</p>
                            </div>
                            <div class="col-md-4 box-container box-1 text-center">
                                <h2 class="text-center handwritten blue">Article 33</h2>
                                <p class="p-4 pt-0">Governments should provide ways of protecting children from
                                    dangerous drugs.</p>
                            </div>
                            <div class="col-md-4 box-container box-2 text-center">
                                <h2 class="text-center handwritten blue">Article 8</h2>
                                <p class="p-4 pt-0">Governments should respect a child’s right to a name, a
                                    nationality and family ties.</p>
                            </div>
                            <div class="col-md-4 box-container box-1 text-center">
                                <h2 class="text-center handwritten blue">Article 20</h2>
                                <p class="p-4 pt-0">Children who cannot be looked after by their own family must
                                    be looked after properly by people who respect their religion, culture and language.
                                </p>
                            </div>
                            <div class="col-md-4 box-container box-2 text-center">
                                <h2 class="text-center handwritten blue">Article 34</h2>
                                <p class="p-4 pt-0">Governments should protect children from sexual abuse.</p>
                            </div>
                            <div class="col-md-4 box-container box-1 text-center">
                                <h2 class="text-center handwritten blue">Article 9</h2>
                                <p class="p-4 pt-0">Children should not be separated from their parents unless it
                                    is for their own good. For example, if a parent is mistreating or neglecting a
                                    child. Children whose parents have separated have the right to stay in contact with
                                    both parents, unless this might harm the child.</p>
                            </div>
                            <div class="col-md-4 box-container box-2 text-center">
                                <h2 class="text-center handwritten blue">Article 24</h2>
                                <p class="p-4 pt-0">Children have the right to good quality health care, clean
                                    water, nutritious food and a clean environment so that they will stay healthy.
                                    Richer countries should help poorer countries achieve this.</p>
                            </div>
                            <div class="col-md-4 box-container box-1 text-center">
                                <h2 class="text-center handwritten blue">Article 36</h2>
                                <p class="p-4 pt-0">Children should be protected from any activities that could
                                    harm their development.</p>
                            </div>
                            <div class="col-md-4 box-container box-2 text-center">
                                <h2 class="text-center handwritten blue">Article 12</h2>
                                <p class="p-4 pt-0">Children have the right to say what they think should happen
                                    when adults are making decisions that affect them and to have their opinions taken
                                    into account.</p>
                            </div>
                            <div class="col-md-4 box-container box-1 text-center">
                                <h2 class="text-center handwritten blue">Article 27</h2>
                                <p class="p-4 pt-0">Children have the right to a standard of living that is good
                                    enough to meet their physical and mental needs. The government should help families
                                    who cannot afford to provide this.</p>
                            </div>
                            <div class="col-md-4 box-container box-2 text-center">
                                <h2 class="text-center handwritten blue">Article 39</h2>
                                <p class="p-4 pt-0">Children who have been neglected or abused should receive
                                    special help to restore their self-respect.</p>
                            </div>
                            <div class="col-md-4 box-container box-1 text-center">
                                <h2 class="text-center handwritten blue">Article 15</h2>
                                <p class="p-4 pt-0">Children have the right to meet with other children and young
                                    people and to join groups and organisations, as long as this does not stop other
                                    people from enjoying their rights.</p>
                            </div>
                            <div class="col-md-4 box-container box-2 text-center">
                                <h2 class="text-center handwritten blue">Article 31</h2>
                                <p class="p-4 pt-0">Children have the right to relax, play and to join in a wide
                                    range of leisure activities.</p>
                            </div>
                            <div class="col-md-4 box-container box-1 text-center">
                                <p class="p-4 pb-0">The Convention on the Rights of the Child has 54 articles.</p>
                                <p class="p-4 pt-0">Visit the <a href="www.unicef.org/crc" target="_blank">Unicef
                                        website</a> to read all the articles.</p>
                            </div>


                        </div>

                    </div>
                @endif

                @if ($currentstep == 4)
                    <h1 class="blue handwritten">Topic 04: Rights & Safety<br><small>Safety</small></h1>

                    <div class="content-container m-5">
                        <div class="row">
                            <div class="col-md-12">
                                <p>We have the <strong>right to feel safe</strong> all the time and the <strong>right to
                                        say no</strong> to things that make us feel uncomfortable. Your voice is
                                    <strong>powerful and can make a difference.</strong>
                                </p>
                                <p>Others also have the right to feel safe all the time. Our actions have an impact on
                                    others. Our impact can be positive or negative.</p>
                            </div>
                            <div class="col-md-12 mb-5">
                                <h5>How does safe feel?</h5>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment150') This field is
                                    required. @enderror</span>
                                <div class="form-floating">
                                    <textarea id="text1" class="form-control" wire:model="comment150"
                                        placeholder="Leave a comment here" class="text-center"
                                        style="height: 500px;"></textarea>
                                    <label for="text1">How does your body feel inside when you are safe?</label>
                                </div>
                            </div>
                            <div class="col-md-12  mb-5">
                                <h5>Keeping you safe</h5>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment151') This field is
                                    required. @enderror</span>
                                <div class="form-floating">
                                    <textarea id="text2" class="form-control" wire:model="comment151"
                                        placeholder="Leave a comment here" class="text-center"
                                        style="height: 500px;"></textarea>
                                    <label for="text2">There are some people whose job it is to keep you and others
                                        safe. Who would this include?</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h5>Emergency Services</h5>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment152') This field is
                                    required. @enderror</span>
                                <div class="form-floating">
                                    <textarea id="text3" class="form-control" wire:model="comment152"
                                        placeholder="Leave a comment here" class="text-center"
                                        style="height: 500px;"></textarea>
                                    <label for="text3">Make some notes on what you know about the emergency services.
                                        What is an emergency? Who are the emergency services? How can you contact
                                        them?</label>
                                </div>
                            </div>

                        </div>

                    </div>
                @endif

                @if ($currentstep == 5)
                    <h1 class="blue handwritten">Topic 04: Rights & Safety<br><small>The Safety Consortium</small></h1>

                    <div class="content-container m-5">

                        <div class="row mb-2">
                            <div class="col-md-3 box-green border-end border-5 text-center d-flex align-items-center">
                                <h4 class="blue p-4 m-0 w-100">Safe</h4>
                            </div>
                            <div
                                class="col-md-5 box-green-50 border-end border-5 text-center d-flex align-items-center">
                                <p class="p-4 m-0">No early warning signs.<br>Comfortable feelings and
                                    sensations</p>
                            </div>
                            <div class="col-md-4 box-green-50 text-center d-flex align-items-center">
                                <p class="p-4 m-0">I have a CHOICE<br>I am IN CONTROL<br>I understand the TIME
                                    LIMIT</p>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3 box-yellow border-end border-5 text-center d-flex align-items-center">
                                <h4 class="blue p-4 m-0 w-100">Fun to feel Scared</h4>
                            </div>
                            <div
                                class="col-md-5 box-yellow-50  border-end border-5 text-center d-flex align-items-center">
                                <p class="p-4 m-0 w-100">Early warning signs<br>Feeling fear, and choosing to do it
                                    anyway<br>When thinking about it afterwards, it feels fun</p>
                            </div>
                            <div class="col-md-4 box-yellow-50 text-center d-flex align-items-center">
                                <p class="p-4 m-0 w-100">I have a CHOICE<br>I am IN CONTROL<br>I understand the TIME
                                    LIMIT</p>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-3 box-amber border-end border-5 text-center d-flex align-items-center">
                                <h4 class="blue p-4 m-0 w-100">Risking on purpose</h4>
                            </div>
                            <div
                                class="col-md-5 box-amber-50 border-end border-5 text-center d-flex align-items-center">
                                <p class="p-4 m-0 w-100">Early warning signs. Feeling fear, and choosing to do it
                                    anyway. When thinking about it afterwards, it didn’t feel fun but the outcome was
                                    worth it</p>
                            </div>
                            <div class="col-md-4 box-amber-50 text-center d-flex align-items-center">
                                <p class="p-4 m-0 w-100">I have a CHOICE<br>I am IN CONTROL<br>I understand the TIME
                                    LIMIT</p>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-3 box-red border-end border-5 text-center d-flex align-items-center">
                                <h4 class="blue p-4 m-0 w-100">Unsafe</h4>
                            </div>
                            <div class="col-md-5 box-red-50 border-end border-5 text-center d-flex align-items-center">
                                <p class="p-4 m-0 w-100">Early warning signs.<br>Feeling unsafe</p>
                            </div>
                            <div class="col-md-4 box-red-50 text-center d-flex align-items-center">
                                <p class="p-4 m-0 w-100">I have LOST the CHOICE<br>I have LOST CONTROL<br>I understand
                                    the TIME LIMIT</p>
                            </div>
                        </div>

                        <div class="row mt-5 boxed text-center  justify-content-center">
                            <h4 class="blue w-100">PROTECTIVE INTERRUPTIONS</h4>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/Stop.jpg') }}" class="mx-auto d-block mt-2 mb-5"
                                    style="max-width: 100%;height: auto;">
                            </div>
                            <h5 class="blue">If you find yourself in a situation that might be risky, or you
                                begin to feel unsafe:</h5>

                            <p><strong>THINK.</strong></p>

                            <p>Does this feel safe?</p>
                            <p>Do I have any <strong>CHOICES</strong> in this situation?<br>
                                Do I have enough <strong>CONTROL</strong> in this situation?<br>
                                Do I know how long I will be doing this <strong>(TIME LIMIT)</strong>?</p>

                            <p>It is your right to say <strong>NO</strong> or <strong>STOP</strong> to something, even
                                if you have said yes before.<br>
                                Listen to your early warning signs. </p>

                        </div>

                    </div>
                @endif

                @if ($currentstep == 6)
                    <h1 class="blue handwritten">Topic 04: Rights & Safety<br><small>Feeling Safe</small></h1>

                    <div class="content-container m-5">

                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="blue handwritten">When we feel anxious or stressed, this can lead to us
                                    feeling unsafe. Feeling unsafe doesn’t necessarily mean we feel physically
                                    threatened – it might mean that we feel emotionally or psychologically unsafe, which
                                    could lead to us feeling overwhelmed or unable to cope.</h2>
                                <h4 class="blue handwritten">To help us feel psychologically safer, it can be helpful
                                    to understand where our feelings of anxiety come from.</h4>
                            </div>
                            <div class="col-md-7 offset-md-1">
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment153') This field is
                                    required. @enderror</span>
                                <div class="form-floating mb-3">

                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        wire:model="comment153" id="heart1" style="height: 500px;"></textarea>
                                    <label for="heart1">List a few things that can trigger you feeling unsafe or
                                        anxious.</label>
                                </div>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment154') This field is
                                    required. @enderror</span>
                                <div class="form-floating  mb-3">

                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        wire:model="comment154" id="heart1" style="height: 500px;"></textarea>
                                    <label for="heart1">What happens in your body when you geel unsafe?</label>
                                </div>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment155') This field is
                                    required. @enderror</span>
                                <div class="form-floating  mb-3">

                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        wire:model="comment155" id="heart1" style="height: 500px;"></textarea>
                                    <label for="heart1">What thoughts and feelings do you have when you feel
                                        unsafe?<br>If your feelings could talk, what would they say?</label>
                                </div>
                                <span class="text-danger"
                                    style="font-size: small;font-weight: 700;">@error('comment156') This field is
                                    required. @enderror</span>
                                <div class="form-floating">

                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        wire:model="comment156" id="heart1" style="height: 500px;"></textarea>
                                    <label for="heart1">What helps you feel better when you feel unsafe? Who are the
                                        people you talk to?</label>
                                </div>
                            </div>
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

                @if ($currentstep == 8)
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



                @if ($currentstep <= 7)

                    <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end next"
                        wire:click="increaseStep()">Next</button>
                @endif

                @if ($currentstep > 1 && $currentstep <= 7)
                    <button type="button" class="btn btn-save mt-3 float-start state">Save/Exit</button>
                    <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end"
                        wire:click="decreaseStep()" style="margin-right: 5px;">Back</button>

                @endif
                @if ($currentstep == 8)

                    <button type="submit" class="btn btn-primary btn-sm mt-3 mr-2 float-end">Submit</button>
                    {{-- <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end" wire:click="decreaseStep()" style="margin-right: 5px;">Back</button> --}}
                @endif

            </form>
        </div>
    </div>
</div>
