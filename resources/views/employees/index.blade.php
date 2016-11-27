@include('layouts.includes.header')
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Dashboard</a></li>
				<li><a href="javascript:;">Users</a></li>
				<li><a href="javascript:;">Employees</a></li>
				<li class="active">List</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Employees<small>List of Employees</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-10 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel">
                    <!-- <div class="panel panel-success"> -->
                        <div class="panel-heading">                           

                            <h4 class="panel-title">SYSTEM USERS</h4>
                            <div class="">
                            <a href="{!! route('employees.create') !!}" target="" class="btn btn-success m-r-5 m-b-5">Add new Employees</a>
                            <a href="javascript:PrintDiv('printable_doc');" class="btn btn-primary m-r-5 m-b-5"><i class="fa fa-print left">&nbsp;| Print</i></a>
                        </div>
                            
                        </div>

                        
                        <!-- 
                        <div class="alert alert-success col-md-8 center fade in">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            Success message
                        </div> -->
                        <div class="panel-body" id="printable_doc">

                            <div class="">
                                <table id="data-table" class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <th>NAME</th>
                                            <th>EMAIL</th>
                                            <th>ROLE</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employees as $epmloyee)
                                           <tr class="even gradeA">
                                                <td>{!! $epmloyee->first_name !!}&nbsp;{!! $epmloyee->middle_name !!}&nbsp;{!! $epmloyee->last_name !!}</td>
                                                <td>{!! $epmloyee->email !!}</td>
                                                <td>
                                                    @if($epmloyee->role_id == 1)
                                                        {!! Administrator !!}
                                                    @elseif($epmloyee->role_id == 2)
                                                        {!! Loan Officer !!}
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href=""><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                                    <a href=""><i class="fa fa-trash"></i></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                                    <a href=""><i class="fa fa-lg fa-ban on fa-camera"></i></a>
                                                </td>
                                            </tr>  
                                        @endforeach                                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-10 -->
            </div>
            <!-- end row -->

    <script type="text/javascript">
    function PrintDiv(divToPrint) 
              {    
                var restorepoint = document.body.innerHTML;
                var printcontent = document.getElementById('printable_doc').innerHTML;

                document.body.innerHTML = printcontent;
                window.print();
                document.body.innerHTML = restorepoint;
               }
    </script>
		</div>
		<!-- end #content -->
		
@include('layouts.includes.footer')
	
