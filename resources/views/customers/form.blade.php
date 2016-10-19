
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
                            <input type="text" name="first_name" placeholder="John" class="form-control" data-parsley-group="wizard-step-1"  />
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
                            <input type="text" name="last_name" placeholder="Smith" class="form-control" data-parsley-group="wizard-step-1"  />
                        </div>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
                
                <div class="row">                                            
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="form-control" data-parsley-group="wizard-step-1" >
                                <option></option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Date of Birth</label>                                                    
                            <input name="dob" type="text" class="form-control" id="datepicker-autoClose" placeholder="Auto Close Datepicker" data-parsley-group="wizard-step-1"  />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Marital Status</label>
                            <select name="marital_status" class="form-control" data-parsley-group="wizard-step-1" >
                                <option></option>
                                <option>Single</option>
                                <option>Married</option>
                                <option>Widow</option>
                                <option>Separated</option>
                            </select>
                        </div>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Job</label>
                            <input type="text" name="job" placeholder="Job" class="form-control" data-parsley-group="wizard-step-1"  />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Group</label>
                            <select name="group_id" class="form-control" data-parsley-group="wizard-step-1" >
                                <option value="0">Individual</option>
                                <option value="1">Group one</option>
                                <option value="2">Group one</option>
                                <option value="3">Group one</option>
                                <option value="4">Group one</option>
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
                            <input type="text" name="street_of_residence" placeholder="A" class="form-control" data-parsley-group="wizard-step-2"  />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Type of Residence</label>
                            <select name="residence_type" class="form-control" data-parsley-group="wizard-step-2" >
                                <option value="0">-Select-</option>
                                <option value="1">Rent</option>
                                <option value="2">Own</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Period of Residence</label>
                            <input type="text" name="residence_period" placeholder="A" class="form-control" data-parsley-group="wizard-step-2"  />
                        </div>
                    </div>                    
                </div>


                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Ward</label>
                            <input type="text" name="ward" placeholder="A" class="form-control" data-parsley-group="wizard-step-2"  />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>District</label>
                            <input type="text" name="district" placeholder="A" class="form-control" data-parsley-group="wizard-step-2"  />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Region / City</label>
                            <select name="region" class="form-control" data-parsley-group="wizard-step-2" >
                                <option value="0">Dar es Salaam</option>
                                <option value="1">Mwanza</option>
                                <option value="2">Arusha</option>
                            </select>
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
                            <input type="text" name="phone_number" placeholder="1234567890" class="form-control" data-parsley-group="wizard-step-2" data-parsley-type="number"  />
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
                <input class="fa fa-plus" type="file" name="photo_url" multiple>
                
            </div>           
            <button type="submit" class="btn btn-info">
                    <i class="fa fa-save"></i>
                    <span>Save Customer</span>
            </button>
        </div>
        
        <!-- end wizard step-4 -->
    </div>