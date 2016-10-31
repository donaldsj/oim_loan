
    <div id="wizard">
        <!-- <ol>
            <li>
                Identification 
                <small>Personal details</small>
            </li>
          
        </ol> -->
        <!-- begin wizard step-1 -->
        <div class="wizard-step-1">
            <fieldset>
                <legend class="pull-left width-full">Identification</legend>

        {!! Form::open(['route' => 'employees.store', 'method'=>'POST', 'class' => '']) !!}

                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4">
                        <div class="form-group block1">
                        <label>First Name</label>
                        {!! Form::text('first_name',null,['placeholder'=>'Enter First Name', 'class'=>'form-control', 'autofocus']) !!}

                        @if($errors->has('first_name'))
                        <p style="color:red;">{!! $errors->first('first_name') !!}</p>
                        @endif
                            
                            
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Middle Name</label>
                            {!! Form::text('middle_name', null,['placeholder' => 'Enter Middle Name', 'class' => 'form-control'])!!}

                            @if($errors->has('middle_name'))
                            <p style="color:red;">{!! $errors->first('middle_name') !!}</p>
                            @endif
                
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Last Name</label>
                            {!! Form::text('last_name', null,['placeholder' => 'Enter Last Name', 'class' => 'form-control'])!!}

                            @if($errors->has('last_name'))
                            <p style="color:red;">{!! $errors->first('last_name') !!}</p>
                            @endif
                            
                        </div>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
                
                <div class="row">                                            
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Email</label>
                            {!! Form::text('email', null,['placeholder' => 'Enter Email', 'class' => 'form-control', 'autofocus']) !!}

                            @if($errors->has('email'))
                            <p style="color:red;">{!! $errors->first('email')!!}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Password</label>
                            {!! Form::password('password',['placeholder' => 'Please enter your Password', 'class' => 'form-control']) !!} 

                            @if($errors->has('password'))
                            <p style="color:red;">{!! $errors->first('password') !!}</p>
                            @endif                                                   
                          
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Confirm Your Password</label>
                            {!! Form::password('c_password',['placeholder' => 'Confirm your Password', 'class' => 'form-control']) !!}

                            @if($errors->has('c_password'))
                            <p style="color:red;">{!! $errors->first('c_password') !!}</p>
                            @endif
                        
                        </div>
                    </div>                    
                </div>
                <div class="row">
                   <div class="col-md-4">
                        <div class="form-group">
                            <label>Role</label>
                            <select name="role_id" class="form-control" data-parsley-group="wizard-step-1" >
                                <option value="0">-- Select --</option>
                                <option value="1">Administrator</option>
                                <option value="2">User</option>
                                <option value="3">Customer</option>
                                <option value="4">Guest</option>
                            </select>
                            @if($errors->has('role_id'))
                            <p style="color:red;">{!! $errors->first('role_id') !!}</p>
                            @endif
                        </div>
                    </div>
                 
                </div> 
           

             
        <div class="panel">
                
            <button type="submit" class="btn btn-info">
                    <i class="fa fa-save"></i>
                    <span>Save Customer</span>
            </button>
        </div>

       {!! Form::close() !!}

        </fieldset> 

        </div>
        <!-- end wizard step-1 -->
       
    </div>