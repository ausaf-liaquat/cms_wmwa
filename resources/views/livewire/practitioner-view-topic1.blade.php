<div>
    <div class="row">
        <div class="col-md-9">
            <h2>Youth Workbook</h2>
        </div>
        <div class="col-md-3">
            <div class="text-end"><span class="percent">100%</span> Completed | Topic 01 <span
                    id="topic_no"></span></div>
            <div class="progress my-2" style="height: 10px;">
                <div class="progress-bar" role="progressbar" style="width:100%" aria-valuenow="01" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <div class="card float-none workbook">
        <div class="card-body">
            <strong>Submitted By: {{$username}}</strong>
            <form id="workbookform">
                @if ($currentstep == 1)
                    <div class="content-container m-5 ">

                        <h1 class="blue handwritten topic-title text-center"><small>Topic One...</small><br>What Is
                            Abuse?</h1>

                    </div>
                @endif

                @if ($currentstep == 2)
                    <h1 class="blue handwritten">Topic 01: What is Abuse?<br><small>Introduction</small></h1>

                    <div class="content-container m-5">

                        <p>Domestic abuse centres around two things: POWER and CONTROL. An abusive relationship is where
                            one person has power and control over another person - there is an imbalance of power.</p>
                        <p>We often use the terms victim/survivor, and abuser/perpetrator, when talking about domestic
                            or relationship abuse. Victim/survivor is the person that is being abused. Abuser/perpetator
                            is the person abusing a family member or partner.</p>
                        <p>Abuse is never okay, and it is never the victim’s fault. The only person responsible for
                            abuse is the person perpetrating the abuse.</p>

                        <div class="help mt-5">
                            <h2 class="blue handwritten">Definition: Domestic Abuse</h2>
                            <p>Domestic abuse is any incident or pattern of incidents of controlling, coercive or
                                threatening behaviour, violence or abuse, between those who are or have been intimate
                                partners or family members regardless of gender or sexuality. This includes the
                                following types of abuse:</p>
                            <ul>
                                <li><i class="bi bi-check-circle blue"></i> Psychological/emotional</li>
                                <li><i class="bi bi-check-circle blue"></i> Physical</li>
                                <li><i class="bi bi-check-circle blue"></i> Sexual</li>
                                <li><i class="bi bi-check-circle blue"></i> Financial</li>
                            </ul>
                            <p>This definition includes honour-based abuse and forced marriage, and is clear that
                                victims are not confined to one gender or ethnic group. Domestic abuse can affect anyone
                                regardless of ethnicity, age, gender, sexuality or social background.</p>
                        </div>
                        <div class="help mt-5">
                            <h2 class="blue handwritten">Definition: Controlling Behaviour</h2>
                            <p>Controlling behaviour is a range of acts performed by an abuser, designed to make their
                                victim subordinate and/or dependent. These acts include but are not limited to:</p>
                            <ul>
                                <li><i class="bi bi-check-circle blue"></i> Isolating the victim from sources of support
                                </li>
                                <li><i class="bi bi-check-circle blue"></i> Exploiting the victim's resources and
                                    capacities for personal gain</li>
                                <li><i class="bi bi-check-circle blue"></i> Depriving the victim of the means needed for
                                    independence, resistance and escape</li>
                                <li><i class="bi bi-check-circle blue"></i> Regulating the victim's everyday behaviour
                                </li>
                            </ul>
                        </div>
                        <div class="help mt-5">
                            <h2 class="blue handwritten">Definition: Coercive Behaviour</h2>
                            <p>Coercive behaviour is an act or a pattern of acts of assault, threats, humiliation and
                                intimidation or other abuse used by the abuser to harm, punish, or frighten their
                                victim.</p>
                        </div>
                    </div>
                @endif

                @if ($currentstep == 3)
                    <h1 class="blue handwritten">Topic 01: What is Abuse?<br><small>Characters</small></h1>

                    <div class="content-container m-5">

                        <p>It may help to create two characters who are in an abusive relationship to help you explore
                            what abuse looks like. use the template below to help.</p>

                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{ asset('assets/img/character.png') }}" class="mx-auto d-block mb-3"
                                    width="200px">
                                <h2 class="text-center handwritten blue">Character 1.</h2>
                                <div class="question mb-3">
                                    <span class="question text-right">Name</span>
                                    <div class="form-floating mb-3">

                                        <input type="text" class="form-control" id="character1_name" placeholder=""
                                            name="character1_name" wire:model="character1_name" required>
                                        <label for="character1_name">Name</label>
                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('character1_name') This field is required. @enderror</span>
                                    </div>
                                </div>
                                <div class="question mb-3">

                                    <span class="question text-right">Age</span>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="character1_age" placeholder=""
                                            name="character1_age" wire:model="character1_age" required>
                                        <label for="character1_age">Age</label>
                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('character1_age') This field is required. @enderror</span>
                                    </div>
                                </div>
                                <div class="question mb-3">

                                    <span class="question text-right">Occupation</span>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="character1_occupation"
                                            placeholder="" name="occupation" wire:model="character1_occupation"
                                            required>
                                        <label for="character1_occupation">Occupation</label>
                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('character1_occupation') This field is required. @enderror</span>
                                    </div>
                                </div>
                                <div class="question mb-3">

                                    <span class="question text-right">Home</span>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="character1_home" placeholder=""
                                            name="c1home" wire:model="character1_home" required>
                                        <label for="character1_home">Home</label>
                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('character1_home') This field is required. @enderror</span>
                                    </div>
                                </div>
                                <div class="question mb-3">

                                    <span class="question text-right">Personality</span>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="character1_personality"
                                            name="c1personality" wire:model="character1_personality" placeholder=""
                                            required>
                                        <label for="character1_personality">Personality</label>
                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('character1_personality') This field is required. @enderror</span>
                                    </div>
                                </div>
                                <div class="question mb-3">

                                    <span class="question text-right">Victim or perpetrator?</span>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="c1role"
                                            wire:model="character1_role" id="character1_role" placeholder="" required>
                                        <label for="character1_role">Role</label>
                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('character1_role') This field is required. @enderror</span>
                                    </div>
                                </div>
                                <div class="question mb-3">

                                    <span class="question text-right">Anything else?</span>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="c1notes" class="form-control"
                                            wire:model="character1_notes" id="character1_notes" placeholder="" required>
                                        <label for="character1_notes">Additional notes</label>
                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('character1_notes') This field is required. @enderror</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <img src="{{ asset('assets/img/character.png') }}" class="mx-auto d-block mb-3"
                                    width="200px">
                                <h2 class="text-center handwritten blue">Character 2.</h2>
                                <div class="question mb-3">
                                    <span class="question text-right">Name</span>
                                    <div class="form-floating mb-3">

                                        <input type="text" class="form-control" id="character2_name" placeholder=""
                                            name="character2_name" wire:model="character2_name" required>
                                        <label for="character2_name">Name</label>
                                    <span class="text-danger" style="font-size: small;font-weight: 700;">@error('character2_name') This field is required. @enderror</span>
                                    </div>
                                </div>
                                <div class="question mb-3">

                                    <span class="question text-right">Age</span>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="character2_age" placeholder=""
                                            name="character2_age" wire:model="character2_age" required>
                                        <label for="character2_age">Age</label>
                                    <span class="text-danger" style="font-size: small;font-weight: 700;">@error('character2_age') This field is required. @enderror</span>

                                    </div>
                                </div>
                                <div class="question mb-3">

                                    <span class="question text-right">Occupation</span>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="character2_occupation"
                                            placeholder="" name="c2occu" wire:model="character2_occupation" required>
                                        <label for="character2_occupation">Occupation</label>
                                    <span class="text-danger" style="font-size: small;font-weight: 700;">@error('character2_occupation') This field is required. @enderror</span>
                                    </div>
                                </div>
                                <div class="question mb-3">

                                    <span class="question text-right">Home</span>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="character2_home" placeholder=""
                                            name="c2home" wire:model="character2_home" required>
                                        <label for="character2_home">Home</label>
                                    <span class="text-danger" style="font-size: small;font-weight: 700;">@error('character2_home') This field is required. @enderror</span>
                                    </div>
                                </div>
                                <div class="question mb-3">

                                    <span class="question text-right">Personality</span>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="character2_personality"
                                            placeholder="" name="c2personality" wire:model="character2_personality"
                                            required>
                                        <label for="character2_personality">Personality</label>
                                    <span class="text-danger" style="font-size: small;font-weight: 700;">@error('character2_personality') This field is required. @enderror</span>
                                    </div>
                                </div>
                                <div class="question mb-3">

                                    <span class="question text-right">Victim or perpetrator?</span>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="character2_role" placeholder=""
                                            name="c2role" wire:model="character2_role" required>
                                        <label for="character2_role">Role</label>
                                    <span class="text-danger" style="font-size: small;font-weight: 700;">@error('character2_role') This field is required. @enderror</span>
                                    </div>
                                </div>
                                <div class="question mb-3">

                                    <span class="question text-right">Anything else?</span>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="character2_notes" placeholder=""
                                            name="c2notes" wire:model="character2_notes" required>
                                        <label for="character2_notes">Additional notes</label>
                                    <span class="text-danger" style="font-size: small;font-weight: 700;">@error('character2_notes') This field is required. @enderror</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endif

                @if ($currentstep == 4)
                    <h1 class="blue handwritten">Topic 01: What is Abuse?<br><small>Types of Abuse</small></h1>

                    <div class="content-container m-5">

                        <div class="row">
                            <div class="col-md-4 box-container box-1">
                                <h2 class="text-center handwritten blue">Physical</h2>
                                <img src="{{ asset('assets/img/physical.png') }}" class="mx-auto d-block mb-3"
                                    width="200px">
                            </div>
                            <div class="col-md-4 box-container box-2">
                                <h2 class="text-center handwritten blue">Emotional</h2>
                                <img src="{{ asset('assets/img/emotional.png') }}" class="mx-auto d-block mb-3"
                                    width="200px">
                            </div>
                            <div class="col-md-4 box-container box-1">
                                <h2 class="text-center handwritten blue">Sexual</h2>
                                <img src="{{ asset('assets/img/sexual.png') }}" class="mx-auto d-block mb-3"
                                    width="200px">
                            </div>
                            <div class="col-md-4 box-container box-2">
                                <h2 class="text-center handwritten blue">Financial</h2>
                                <img src="{{ asset('assets/img/financial.png') }}" class="mx-auto d-block mb-3"
                                    width="200px">
                            </div>
                            <div class="col-md-4 box-container box-1">
                                <h2 class="text-center handwritten blue">Digital</h2>
                                <img src="{{ asset('assets/img/digital.png') }}" class="mx-auto d-block mb-3"
                                    width="200px">
                            </div>
                            <div class="col-md-4 box-container box-2 text-center">
                                <h2 class="text-center handwritten blue">Remember</h2>
                                <div class="p-4">
                                    <p><strong>Abuse is NEVER the victim’s fault.</p>
                                    <p>Domestic abuse is about POWER and CONTROL.</p>
                                    <p>Abuse is NEVER okay</strong></p>
                                </div>
                            </div>

                        </div>

                    </div>
                @endif

                @if ($currentstep == 5)
                    <h1 class="blue handwritten">Topic 01: What is Abuse?<br><small>Circle of Abuse</small></h1>

                    <div class="content-container m-5">


                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{ asset('assets/img/CycleOfAbuse.jpg') }}" class="img-fluid">
                            </div>
                        </div>


                    </div>
                @endif
                
                @if ($currentstep == 6)
               
                    <h1 class="blue handwritten">Topic 01: What is Abuse?<br><small>Types of Perpetrator</small></h1>
                            
                    <div class="content-container m-5">
                        
                    
                        <div class="row mb-5">
                            <div class="col-md-4 my-5">
                                <p class="mb-5">The Power and Control wheel below shows different types of perpetrators of abuse. One perpetrator might fit into one, several, or all of the categories in the wheel.</p>
                                <h2 class="mt-5 blue handwritten">Read the statements below, and decide where they fit in the Power and Control circle. What type of perpetrator is it describing? It might fit into more than one section.</h2>
                            </div>
                            <div class="col-md-7 offset-md-1">
                                <img src="{{asset('assets/img/PowerAndControlWheel.jpg')}}" class="img-fluid">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12 mt-5">
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox35') Please check the suitable options. @enderror</span>
                                    
                                    <h4 class="blue handwritten">My partner likes to know where I go, when I’ll be back – they don’t like it if I go without telling them.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="checkbox35" wire:model="checkbox35" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox1">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="checkbox35" wire:model="checkbox35" value="Using Power">
                                    <label class="form-check-label" for="inlineCheckbox2">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="checkbox35" wire:model="checkbox35" value="Bullying">
                                    <label class="form-check-label" for="inlineCheckbox3">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="checkbox35" wire:model="checkbox35" value="Treats">
                                    <label class="form-check-label" for="inlineCheckbox4">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="checkbox35" wire:model="checkbox35" value="Isolation">
                                    <label class="form-check-label" for="inlineCheckbox5">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" name="checkbox35" wire:model="checkbox35" value="Minimise">
                                    <label class="form-check-label" for="inlineCheckbox6">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7" name="checkbox35" wire:model="checkbox35" value="Sexual Abuse">
                                    <label class="form-check-label" for="inlineCheckbox7">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox8" name="checkbox35" wire:model="checkbox35" value="Peer Pressure">
                                    <label class="form-check-label" for="inlineCheckbox8">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox36') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">My partner criticises everything I do.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox9" name="checkbox36" wire:model="checkbox36" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox9">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox10" name="checkbox36" wire:model="checkbox36" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox10">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox11" name="checkbox36" wire:model="checkbox36" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox11">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox12" name="checkbox36" wire:model="checkbox36" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox12">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox13" name="checkbox36" wire:model="checkbox36" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox13">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox14" name="checkbox36" wire:model="checkbox36" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox14">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox15" name="checkbox36" wire:model="checkbox36" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox15">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox16" name="checkbox36" wire:model="checkbox36" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox16">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox37') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">My partner called me a horrible name in front of my friends.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox17" name="checkbox37" wire:model="checkbox37" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox17">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox18" name="checkbox37" wire:model="checkbox37" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox18">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox19" name="checkbox37" wire:model="checkbox37" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox19">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox20" name="checkbox37" wire:model="checkbox37" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox20">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox21" name="checkbox37" wire:model="checkbox37" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox21">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox22" name="checkbox37" wire:model="checkbox37" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox22">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox23" name="checkbox37" wire:model="checkbox37" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox23">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox24" name="checkbox37" wire:model="checkbox37" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox24">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox38') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">My partner broke my phone in temper.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox25" name="checkbox38" wire:model="checkbox38" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox25">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox26" name="checkbox38" wire:model="checkbox38" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox26">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox27" name="checkbox38" wire:model="checkbox38" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox27">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox28" name="checkbox38" wire:model="checkbox38" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox28">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox29" name="checkbox38" wire:model="checkbox38" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox29">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox30" name="checkbox38" wire:model="checkbox38" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox30">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox31" name="checkbox38" wire:model="checkbox38" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox31">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox32" name="checkbox38" wire:model="checkbox38" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox32">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox39') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">My partner always decides where I go and what I do.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox33" name="checkbox39" wire:model="checkbox39" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox33">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox34" name="checkbox39" wire:model="checkbox39" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox34">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox35" name="checkbox39" wire:model="checkbox39" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox35">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox36" name="checkbox39" wire:model="checkbox39" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox36">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox37" name="checkbox39" wire:model="checkbox39" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox37">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox38" name="checkbox39" wire:model="checkbox39" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox38">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox39" name="checkbox39" wire:model="checkbox39" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox39">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox40" name="checkbox39" wire:model="checkbox39" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox40">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox40') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">My partner makes me feel like I’m going crazy.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox41" name="checkbox40" wire:model="checkbox40" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox41">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox42" name="checkbox40" wire:model="checkbox40" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox42">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox43" name="checkbox40" wire:model="checkbox40" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox43">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox44" name="checkbox40" wire:model="checkbox40" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox44">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox45" name="checkbox40" wire:model="checkbox40" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox45">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox46" name="checkbox40" wire:model="checkbox40" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox46">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox47" name="checkbox40" wire:model="checkbox40" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox47">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox48" name="checkbox40" wire:model="checkbox40" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox48">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox41') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">When we fight my partner always says it’s my fault and I caused it.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox49" name="checkbox41" wire:model="checkbox41" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox49">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox50" name="checkbox41" wire:model="checkbox41" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox50">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox51" name="checkbox41" wire:model="checkbox41" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox51">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox52" name="checkbox41" wire:model="checkbox41" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox52">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox53" name="checkbox41" wire:model="checkbox41" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox53">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox54" name="checkbox41" wire:model="checkbox41" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox54">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox55" name="checkbox41" wire:model="checkbox41" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox55">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox56" name="checkbox41" wire:model="checkbox41" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox56">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox42') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">My partner thinks I’m making a big deal out of nothing – it was only a little slap.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox57" name="checkbox42" wire:model="checkbox42" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox57">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox58" name="checkbox42" wire:model="checkbox42" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox58">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox59" name="checkbox42" wire:model="checkbox42" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox59">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox60" name="checkbox42" wire:model="checkbox42" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox60">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox61" name="checkbox42" wire:model="checkbox42" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox61">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox62" name="checkbox42" wire:model="checkbox42" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox62">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox63" name="checkbox42" wire:model="checkbox42" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox63">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox64" name="checkbox42" wire:model="checkbox42" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox64">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox43') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">My partner will leave me if I don’t have sex.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox65" name="checkbox43" wire:model="checkbox43" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox65">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox66" name="checkbox43" wire:model="checkbox43" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox66">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox67" name="checkbox43" wire:model="checkbox43" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox67">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox68" name="checkbox43" wire:model="checkbox43" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox68">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox69" name="checkbox43" wire:model="checkbox43" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox69">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox70" name="checkbox43" wire:model="checkbox43" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox70">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox71" name="checkbox43" wire:model="checkbox43" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox71">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox72" name="checkbox43" wire:model="checkbox43" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox72">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox44') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">My partner said they’ll hurt my little sister if I break up with them.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox74" name="checkbox44" wire:model="checkbox44" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox74">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox75" name="checkbox44" wire:model="checkbox44" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox75">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox76" name="checkbox44" wire:model="checkbox44" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox76">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox77" name="checkbox44" wire:model="checkbox44" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox77">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox78" name="checkbox44" wire:model="checkbox44" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox78">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox79" name="checkbox44" wire:model="checkbox44" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox79">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox80" name="checkbox44" wire:model="checkbox44" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox80">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox81" name="checkbox44" wire:model="checkbox44" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox81">Peer Pressure</label>
                                    </div>
                                </div>
                            
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox45') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">My partner thinks I’ll feel ready for sex if I get drunk.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox82" name="checkbox45" wire:model="checkbox45" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox82">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox83" name="checkbox45" wire:model="checkbox45" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox83">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox84" name="checkbox45" wire:model="checkbox45" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox84">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox85" name="checkbox45" wire:model="checkbox45" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox85">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox86" name="checkbox45" wire:model="checkbox45" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox86">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox87" name="checkbox45" wire:model="checkbox45" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox87">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox88" name="checkbox45" wire:model="checkbox45" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox88">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox89" name="checkbox45" wire:model="checkbox45" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox89">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox46') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">My partner loves me so much he wants me to see less of my friends, so he can see me every night.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox90" name="checkbox46" wire:model="checkbox46" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox90">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox91" name="checkbox46" wire:model="checkbox46" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox91">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox92" name="checkbox46" wire:model="checkbox46" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox92">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox93" name="checkbox46" wire:model="checkbox46" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox93">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox94" name="checkbox46" wire:model="checkbox46" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox94">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox95" name="checkbox46" wire:model="checkbox46" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox95">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox96" name="checkbox46" wire:model="checkbox46" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox96">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox97" name="checkbox46" wire:model="checkbox46" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox97">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox47') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">My partner always goes through my phone to see what I’ve been up to.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox98" name="checkbox47" wire:model="checkbox47" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox98">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox99" name="checkbox47" wire:model="checkbox47" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox99">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox100" name="checkbox47" wire:model="checkbox47" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox100">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox101" name="checkbox47" wire:model="checkbox47" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox101">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox102" name="checkbox47" wire:model="checkbox47" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox102">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox103" name="checkbox47" wire:model="checkbox47" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox103">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox104" name="checkbox47" wire:model="checkbox47" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox104">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox105" name="checkbox47" wire:model="checkbox47" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox105">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox48') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">If I break up with my partner they’ll tell everyone about my family’s problems.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox106" name="checkbox48" wire:model="checkbox48" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox106">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox107" name="checkbox48" wire:model="checkbox48" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox107">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox108" name="checkbox48" wire:model="checkbox48" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox108">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox109" name="checkbox48" wire:model="checkbox48" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox109">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox110" name="checkbox48" wire:model="checkbox48" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox110">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox111" name="checkbox48" wire:model="checkbox48" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox111">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox112" name="checkbox48" wire:model="checkbox48" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox112">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox113" name="checkbox48" wire:model="checkbox48" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox113">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox49') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">She bought cinema tickets for tonight, but I’ve decided we’re going round my mate’s place instead.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox114" name="checkbox49" wire:model="checkbox49" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox114">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox115" name="checkbox49" wire:model="checkbox49" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox115">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox116" name="checkbox49" wire:model="checkbox49" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox116">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox117" name="checkbox49" wire:model="checkbox49" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox117">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox118" name="checkbox49" wire:model="checkbox49" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox118">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox119" name="checkbox49" wire:model="checkbox49" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox119">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox120" name="checkbox49" wire:model="checkbox49" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox120">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox121" name="checkbox49" wire:model="checkbox49" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox121">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox50') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">If she hadn’t kept nagging, I wouldn’t have lost it and put my fist through the wall.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox122" name="checkbox50" wire:model="checkbox50" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox122">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox123" name="checkbox50" wire:model="checkbox50" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox123">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox124" name="checkbox50" wire:model="checkbox50" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox124">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox125" name="checkbox50" wire:model="checkbox50" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox125">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox126" name="checkbox50" wire:model="checkbox50" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox126">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox127" name="checkbox50" wire:model="checkbox50" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox127">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox128" name="checkbox50" wire:model="checkbox50" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox128">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox129" name="checkbox50" wire:model="checkbox50" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox129">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox51') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">He needs to chill, he knows I’ve got a bit of a temper but there’s no real harm in me.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox130" name="checkbox51" wire:model="checkbox51" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox130">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox131" name="checkbox51" wire:model="checkbox51" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox131">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox132" name="checkbox51" wire:model="checkbox51" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox132">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox133" name="checkbox51" wire:model="checkbox51" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox133">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox134" name="checkbox51" wire:model="checkbox51" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox134">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox135" name="checkbox51" wire:model="checkbox51" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox135">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox136" name="checkbox51" wire:model="checkbox51" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox136">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox137" name="checkbox51" wire:model="checkbox51" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox137">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox52') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">I can’t live without you, if you leave me I’ll take an overdose and die and it’ll be your fault.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox138" name="checkbox52" wire:model="checkbox52" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox138">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox139" name="checkbox52" wire:model="checkbox52" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox139">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox140" name="checkbox52" wire:model="checkbox52" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox140">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox142" name="checkbox52" wire:model="checkbox52" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox142">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox143" name="checkbox52" wire:model="checkbox52" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox143">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox144" name="checkbox52" wire:model="checkbox52" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox144">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox145" name="checkbox52" wire:model="checkbox52" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox145">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox146" name="checkbox52" wire:model="checkbox52" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox146">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox53') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">I can’t wait forever babe. If you don’t want sex with me I’ll find someone who does.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox147" name="checkbox53" wire:model="checkbox53" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox147">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox148" name="checkbox53" wire:model="checkbox53" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox148">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox149" name="checkbox53" wire:model="checkbox53" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox149">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox150" name="checkbox53" wire:model="checkbox53" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox150">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox151" name="checkbox53" wire:model="checkbox53" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox151">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox152" name="checkbox53" wire:model="checkbox53" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox152">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox153" name="checkbox53" wire:model="checkbox53" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox153">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox154" name="checkbox53" wire:model="checkbox53" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox154">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox54') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">That girl Katie is a bad influence on her, I don’t know why she keeps going out with her.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox155" name="checkbox54" wire:model="checkbox54" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox155">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox156" name="checkbox54" wire:model="checkbox54" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox156">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox157" name="checkbox54" wire:model="checkbox54" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox157">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox158" name="checkbox54" wire:model="checkbox54" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox158">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox159" name="checkbox54" wire:model="checkbox54" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox159">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox160" name="checkbox54" wire:model="checkbox54" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox160">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox161" name="checkbox54" wire:model="checkbox54" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox161">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox162" name="checkbox54" wire:model="checkbox54" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox162">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox55') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">I don’t want to tell people you’re frigid but you’re not leaving me any choice.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox163" name="checkbox55" wire:model="checkbox55" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox163">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox164" name="checkbox55" wire:model="checkbox55" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox164">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox165" name="checkbox55" wire:model="checkbox55" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox165">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox166" name="checkbox55" wire:model="checkbox55" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox166">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox167" name="checkbox55" wire:model="checkbox55" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox167">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox168" name="checkbox55" wire:model="checkbox55" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox168">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox169" name="checkbox55" wire:model="checkbox55" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox169">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox170" name="checkbox55" wire:model="checkbox55" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox170">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox56') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">Babe, you’ve got a face like thunder, what’s up? Come on, it can’t be because I called you ugly.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox171" name="checkbox56" wire:model="checkbox56" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox171">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox172" name="checkbox56" wire:model="checkbox56" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox172">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox173" name="checkbox56" wire:model="checkbox56" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox173">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox174" name="checkbox56" wire:model="checkbox56" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox174">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox175" name="checkbox56" wire:model="checkbox56" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox175">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox176" name="checkbox56" wire:model="checkbox56" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox176">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox177" name="checkbox56" wire:model="checkbox56" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox177">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox178" name="checkbox56" wire:model="checkbox56" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox178">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox57') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">Princess, iron my shirt while I finish watching the footy, or we’re gonna be late.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox179" name="checkbox57" wire:model="checkbox57" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox179">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox180" name="checkbox57" wire:model="checkbox57" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox180">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox181" name="checkbox57" wire:model="checkbox57" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox181">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox182" name="checkbox57" wire:model="checkbox57" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox182">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox183" name="checkbox57" wire:model="checkbox57" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox183">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox184" name="checkbox57" wire:model="checkbox57" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox184">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox185" name="checkbox57" wire:model="checkbox57" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox185">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox186" name="checkbox57" wire:model="checkbox57" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox186">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox58') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">I’d never raise my hand to my girl – I don’t need to. I give her a look and that reminds her to behave.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox187" name="checkbox58" wire:model="checkbox58" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox187">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox188" name="checkbox58" wire:model="checkbox58" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox188">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox189" name="checkbox58" wire:model="checkbox58" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox189">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox190" name="checkbox58" wire:model="checkbox58" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox190">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox191" name="checkbox58" wire:model="checkbox58" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox191">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox192" name="checkbox58" wire:model="checkbox58" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox192">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox193" name="checkbox58" wire:model="checkbox58" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox193">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox194" name="checkbox58" wire:model="checkbox58" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox194">Peer Pressure</label>
                                    </div>
                                </div>
                                
                                <div class="section">

                                     <span class="text-danger" style="font-size: small;font-weight: 700;">@error('checkbox59') Please check the suitable options. @enderror</span>
                                    <h4 class="blue handwritten">I only got angry because I was drunk. It wasn’t my fault, it was the alcohol.</h4>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox195" name="checkbox59" wire:model="checkbox59" value="Emotional Abuse">
                                    <label class="form-check-label" for="inlineCheckbox195">Emotional Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox196" name="checkbox59" wire:model="checkbox59" value="Using Power">
    
                                    <label class="form-check-label" for="inlineCheckbox196">Using Power</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox197" name="checkbox59" wire:model="checkbox59" value="Bullying">
        
                                    <label class="form-check-label" for="inlineCheckbox197">Bullying</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox198" name="checkbox59" wire:model="checkbox59" value="Treats">
            
                                    <label class="form-check-label" for="inlineCheckbox198">Treats</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox199" name="checkbox59" wire:model="checkbox59" value="Isolation">
        
                                    <label class="form-check-label" for="inlineCheckbox199">Isolation</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox200" name="checkbox59" wire:model="checkbox59" value="Minimise">
        
                                    <label class="form-check-label" for="inlineCheckbox200">Minimise</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox201" name="checkbox59" wire:model="checkbox59" value="Sexual Abuse">
    
                                    <label class="form-check-label" for="inlineCheckbox201">Sexual Abuse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox202" name="checkbox59" wire:model="checkbox59" value="Peer Pressure">
    
                                    <label class="form-check-label" for="inlineCheckbox202">Peer Pressure</label>
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
                            </p>
                            <h4 style="text-align: center">Thank You</h4>

                            <p style="text-align: center">Thank you for viewing Topic 01!</p>

                        </div>
                    </div>
                @endif

                @if ($currentstep <= 6)

                    <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end next"
                        wire:click="increaseStep()">Next</button>
                @endif

                @if ($currentstep > 1 && $currentstep <= 6)
                    {{-- <button type="button" class="btn btn-save mt-3 float-start state">Save/Exit</button> --}}
                    <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end"
                        wire:click="decreaseStep()" style="margin-right: 5px;">Back</button>

                @endif

                @if ($currentstep == 7)

                 <a href="{{route('practitioner.serviceuser')}}" class="btn btn-primary btn-sm mt-3 mr-2 float-end">Exit</a>
                    {{-- <button type="button" class="btn btn-primary btn-sm mt-3 mr-2 float-end" wire:click="decreaseStep()" style="margin-right: 5px;">Back</button> --}}
                @endif

            </form>
        </div>
    </div>
</div>
