
    <div id="wizard">
        <ol>
            <li>
                Identification 
                <small>Personal details</small>
            </li>
            <li>
                Customers Address
                <small>Contact Information</small>
            </li>
            <!-- <li>
                Login
                <small>Login credantials</small>
            </li> -->
            <li>
                Completed
                <small>Success</small>
            </li>
        </ol>
        <!-- begin wizard step-1 -->

        <div class="wizard-step-1">
            <fieldset>
                <legend class="pull-left width-full">Identification</legend>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4">
                        <div class="form-group block1">
                            <label>First Name</label>
                            <input type="text" name="first_name" placeholder="John" class="form-control" data-parsley-group="wizard-step-1" required="required"  />
                            @if($errors->has('first_name'))
                                <p style="color:red;">First name is required</p>
                            @endif
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Middle Name</label>
                            <input type="text" name="second_name" placeholder="A" class="form-control" data-parsley-group="wizard-step-1"  />
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" placeholder="Smith" class="form-control" data-parsley-group="wizard-step-1" required="required"  />
                            @if($errors->has('last_name'))
                                <p style="color:red;">Last name is required</p>
                            @endif
                        </div>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
                
                <div class="row">                                            
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="form-control" data-parsley-group="wizard-step-1"  required="required">
                                <option></option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                            @if($errors->has('gender'))
                                <p style="color:red;">Gender is required</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Date of Birth</label>                                                    
                            <input name="dob" type="text" class="form-control" id="datepicker-autoClose" placeholder="Auto Close Datepicker" data-parsley-group="wizard-step-1"  required="required" />
                            @if($errors->has('dob'))
                                <p style="color:red;">Date of Birth is required</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Marital Status</label>
                            <select name="marital_status" class="form-control" data-parsley-group="wizard-step-1" required="required" >
                                <option></option>
                                <option>Single</option>
                                <option>Married</option>
                                <option>Widow</option>
                                <option>Separated</option>
                            </select>
                            @if($errors->has('marital_status'))
                                <p style="color:red;">Marital status is required</p>
                            @endif
                        </div>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Job</label>
                            <input type="text" name="job" placeholder="Job" class="form-control" data-parsley-group="wizard-step-1" required="required"  />
                            @if($errors->has('job'))
                                <p style="color:red;">Job field is required</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Group</label>
                            <select name="group_id" class="form-control" data-parsley-group="wizard-step-1" >
                                <option value="0">Individual</option>
                            </select>
                        </div>
                    </div>
                </div> 
            </fieldset>           
        </div>
        <!-- end wizard step-1 -->
        <!-- begin wizard step-2 -->
        <div class="wizard-step-2">
            <fieldset>
                <legend class="pull-left width-full">Customers Address</legend>
                <!-- begin row -->

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Place of Residence (Street)</label>
                            <input type="text" name="street_of_residence" placeholder="A" class="form-control" data-parsley-group="wizard-step-2" required="required"  />
                            @if($errors->has('street_of_residence'))
                                <p style="color:red;">Place of residence is required</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Type of Residence</label>
                            <select name="residence_type" class="form-control" data-parsley-group="wizard-step-2" required="required" >
                                <option value="0">-Select-</option>
                                <option value="1">Rent</option>
                                <option value="2">Own</option>
                            </select>
                            @if($errors->has('residence_type'))
                                <p style="color:red;">Residence type is required</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Period of Residence</label>
                            <input type="text" name="residence_period" placeholder="A" class="form-control" data-parsley-group="wizard-step-2" />
                        </div>
                    </div>                    
                </div>


                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Ward</label>
                            <input type="text" name="ward" placeholder="A" class="form-control" data-parsley-group="wizard-step-2" required="required" />
                            @if($errors->has('ward'))
                                <p style="color:red;">Ward is required</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>District</label>
                            <input type="text" name="district" placeholder="A" class="form-control" data-parsley-group="wizard-step-2"  required="required" />
                            @if($errors->has('district'))
                                <p style="color:red;">District is required</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('region', 'Region / City') !!}
                            {!! Form::select('region', array(''=>'','Arusha'=>'Arusha','Dar es Salaam'=>'Dar es Salaam','Dodoma'=>'Dodoma','Geita'=>'Geita','Iringa'=>'Iringa','Kagera'=>'Kagera','Katavi'=>'Katavi','Kigoma'=>'Kigoma','Kilimanjaro'=>'Kilimanjaro','Lindi'=>'Lindi','Manyara'=>'Manyara','Mara'=>'Mara','Mbeya'=>'Mbeya','Morogoro'=>'Morogoro','Mtwara'=>'Mtwara','Mwanza'=>'Mwanza','Njombe'=>'Njombe','Pemba North'=>'Pemba North','Pemba South'=>'Pemba South','Pwani'=>'Pwani','Rukwa'=>'Rukwa','Ruvuma'=>'Ruvuma','Shinyanga'=>'Shinyanga','Simiyu'=>'Simiyu','Singida'=>'Singida','Tabora'=>'Tabora','Tanga'=>'Tanga','Zanzibar North'=>'Zanzibar North','Zanzibar South and Central'=>'Zanzibar South and Central','Zanzibar West'=>'Zanzibar West'), null, array('class'=>'form-control', 'required'=>'required')) !!}
                            @if($errors->has('region'))
                                <p style="color:red;">Region is required</p>
                            @endif
                        </div>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Postal Address</label>
                            <input type="text" name="postal_address" placeholder="1234567890" class="form-control" data-parsley-group="wizard-step-2" data-parsley-type="number"  />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone_number" placeholder="1234567890" class="form-control" data-parsley-group="wizard-step-2" data-parsley-type="number"  required="required" />
                            @if($errors->has('phone_number'))
                                <p style="color:red;">Phone number is required</p>
                            @endif
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" placeholder="someone@example.com" class="form-control" data-parsley-group="wizard-step-2" data-parsley-type="email"  />
                        </div>
                    </div>
                    <!-- end col-6 -->
                </div>
                <!-- end row -->

                
            </fieldset>
        </div>
        <!-- end wizard step-2 -->

        <!-- begin wizard step-3 -->           
        <div class="panel">
                
            <p>Please attach passport photo of the registered customer</p>
            <div class="">
                <input class="fa fa-plus" type="file" name="photo_url" multiple  required="required"> 
                @if($errors->has('photo_url'))
                    <p style="color:red;">Passort size photo is required</p>
                @endif               
            </div>           
            <button type="submit" class="btn btn-info">
                    <i class="fa fa-save"></i>
                    <span>Save Customer</span>
            </button>
        </div>
        
        <!-- end wizard step-4 -->
    </div>