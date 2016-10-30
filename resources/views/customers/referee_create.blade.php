@include('layouts.includes.header')
<!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Dashboard</a></li>
            <li><a href="javascript:;">Customers</a></li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Customer Registration <small></small>
            <a href="{!! route('customers.show', $id) !!}" class="btn btn-sm btn-primary m-r-5 m-b-5"><i class="fa fa-arrow-left m-r-5"></i>Back to customer details</a>
        </h1>

        <!-- end page-header -->
        
        <!-- begin row -->
        <div class="row">
            <!-- begin col-12 -->
            <div class="col-md-12">
                <!-- begin panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Referee Registration form</h4>
                    </div>

                    <div class="panel-body">
                        {!! Form::open(['action' => 'RefereesController@save', 'files' => true, 'method' => 'POST', 'name' => 'form-wizard', 'data-parsley-validate' => 'true']) !!}							
							
							<fieldset>
								<legend class="pull-left width-full">REFEREE'S INFORMATION</legend>
								{!! Form::hidden('customer_id',$id) !!}
                                <div class="row">                                	
                                    <div class="col-md-6">
										<div class="form-group block1">
											{!! Form::label('first_name', 'First Name') !!}
											{!! Form::text('first_name', null, array('class'=>'form-control')) !!}
										</div>
                                    </div>
                                    <div class="col-md-4">
										<div class="form-group">
											{!! Form::label('second_name', 'Second Name') !!}
											{!! Form::text('second_name', null, array('class'=>'form-control')) !!}
										</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
										<div class="form-group">
											{!! Form::label('last_name', 'Last Name') !!}
											{!! Form::text('last_name', null, array('class'=>'form-control')) !!}
										</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
										<div class="form-group">
											{!! Form::label('street_of_residence', 'Place of residence') !!}
											{!! Form::text('street_of_residence', null, array('class'=>'form-control')) !!}
										</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
										<div class="form-group">
											{!! Form::label('region', 'Region') !!}
											{!! Form::select('region', array('0'=>'','Arusha'=>'Arusha','Dar es Salaam'=>'Dar es Salaam','Dodoma'=>'Dodoma','Geita'=>'Geita','Iringa'=>'Iringa','Kagera'=>'Kagera','Katavi'=>'Katavi','Kigoma'=>'Kigoma','Kilimanjaro'=>'Kilimanjaro','Lindi'=>'Lindi','Manyara'=>'Manyara','Mara'=>'Mara','Mbeya'=>'Mbeya','Morogoro'=>'Morogoro','Mtwara'=>'Mtwara','Mwanza'=>'Mwanza','Njombe'=>'Njombe','Pemba North'=>'Pemba North','Pemba South'=>'Pemba South','Pwani'=>'Pwani','Rukwa'=>'Rukwa','Ruvuma'=>'Ruvuma','Shinyanga'=>'Shinyanga','Simiyu'=>'Simiyu','Singida'=>'Singida','Tabora'=>'Tabora','Tanga'=>'Tanga','Zanzibar North'=>'Zanzibar North','Zanzibar South and Central'=>'Zanzibar South and Central','Zanzibar West'=>'Zanzibar West'), null, array('class'=>'form-control')) !!}
										</div>
                                    </div>
                                </div>

                                <div class="row">     
                                    <div class="col-md-6">
										<div class="form-group">
											{!! Form::label('job', 'Job') !!}
											{!! Form::text('job', null, array('class'=>'form-control')) !!}
										</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
										<div class="form-group">
											{!! Form::label('work_location', 'Office/Business Location') !!}
											{!! Form::text('work_location', null, array('class'=>'form-control')) !!}
										</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
										<div class="form-group">
											{!! Form::label('phone_number', 'Phone Number') !!}
											{!! Form::text('phone_number', null, array('class'=>'form-control')) !!}
										</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
										<div class="form-group">
											{!! Form::label('email', 'Email Address') !!}
											{!! Form::text('email', null, array('class'=>'form-control')) !!}
										</div>
                                    </div>
                                </div>

                                <div class="row">
                                	<div class="col-md-6">
										<div class="form-group">
											{!! Form::label('relationship', 'Relationship') !!}
											{!! Form::text('relationship', null, array('class'=>'form-control')) !!}
										</div>
                                    </div>
                                </div>
							</fieldset>

							<div class="panel">                
					            <p>Please attach passport photo of the Referee to be registered</p>
					            
					            {!! Form::file('photo_url') !!}
					                      
					            <button type="submit" class="btn btn-info">
					                    <i class="fa fa-save"></i>
					                    <span>Save Referee</span>
					            </button>
					        </div>
							
                        {!! Form::close() !!}
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end #content -->

@include('layouts.includes.footer')

