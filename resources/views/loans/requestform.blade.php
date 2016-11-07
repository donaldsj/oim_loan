@include('layouts.includes.header')

<!-- begin #content -->
        <div id="content" class="content">
            <div class="">
                <!-- begin breadcrumb -->
                <ol class="breadcrumb pull-right">
                    <li><a href="javascript:;">Dashboard</a></li>
                    <li><a href="javascript:;">Users</a></li>
                    <li><a href="javascript:;">Customer</a></li>
                </ol>
                <!-- end breadcrumb -->
                <!-- begin page-header -->
                <h1 class="page-header">Customer<small></small></h1>                
                <!-- end page-header -->
            </div>
            
            <!-- begin invoice -->
            <div class="invoice col-md-10" id="printable_doc">
                    <div class="table-responsive">                        
                        
                        <div class="row col-md-10" style="text-align: center;">
                            <img src="{!! asset('img/OneIcon.png') !!}" width="150px" height="150px" />
                            <h2>ONE ICON MICROFINANCE LIMITED</h2> 
                            <hr style="color: #000000;" />                           
                        </div>

                        <div class="row col-md-10">
                            <h3>
                                LOAN REQUEST FORM                            
                            </h3>
                        </div>
                        
                        <div class="row col-md-10">
                            <h4>1. IMPORTANT NOTICE</h4>
                            <ol>
                                <li>Lorem ipsum dolor sit amet, ad consul quaeque eligendi est, prima ornatus vocibus sit eu</li>
                                <li>Ancillae volutpat vel cu, mei sanctus epicurei maiestatis ex, sed malis convenire eu. Et vix brute ipsum. </li>
                                <li>Duo nullam torquatos vulputate no. Labore inermis eu sit. Omnis partiendo nec ad, eu dicat fabulas vel.</li>
                                <li>Sit sale necessitatibus ut, accumsan officiis consulatu sea et. Autem consetetur vim ne. Cu nam molestie ocurreret. Sint adolescens duo eu, ius ei phaedrum iracundia temporibus, in nusquam instructior nam. Posse option ullamcorper has te, latine omittam cu per, pri affert prodesset ei.</li>
                            </ol>                            
                        </div>

                        <div class="row col-md-10">
                            <table class="table table-bordered">
                                <h4>2. CUSTOMER DETAILS</h4>
                                <thead>
                                   <!--  <tr>
                                        <th colspan="2"><center><strong>CUSTOMER</strong></center></th>
                                    </tr> -->
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Name: <strong>name</strong></td>
                                        <td rowspan="6"><img src="{!! asset('img/customers_photo/1477828870-sam.jpg') !!}" width="" height="160px" /></td>
                                    </tr>
                                    <tr>
                                        <td>Job: <strong>Job</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Address: <strong>Address</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Contacts: <strong>Contacts</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Attending Officer: <strong>Officer name</strong></td>
                                        
                                    </tr>
                                                                      
                                </tbody>
                            </table>

                            <table class="table table-bordered">
                                <h4>3. REFEREES DETAILS</h4>
                                <thead>
                                   <!--  <tr>
                                        <th colspan="5"><center><strong>REFEREES</strong></center></th>
                                    </tr> -->
                                    <tr>
                                        <th>Name</th>
                                        <th>Job</th>
                                        <th>Address</th>
                                        <th>Contacts</th>
                                        <th>Relationship</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ref Name</td>
                                        <td>ocaion</td>
                                        <td>Sreet</td>
                                        <td>12345678</td>
                                        <td>Relation</td>
                                    </tr>                                                            
                                </tbody>
                            </table>                            
                        </div>

                        <div class="row col-md-10">
                            <h4>4. LOAN DETAILS</h4>                            
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>CODE</th>
                                        <th>PURPOSE</th>
                                        <th>DATE</th>
                                        <th>AMOUNT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="">wertytre</a></td>
                                        <td>Purpose</td>
                                        <td>123-123-12</td>
                                        <td>TSH.123456</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="row col-md-10">
                            <h4>5. LOAN OFFICER</h4>
                            <P>Name: Donald Annnieni Dibrobasi.</P>
                            <p>Comment: Sit sale necessitatibus ut, accumsan officiis consulatu sea et. Autem consetetur vim ne. Cu nam molestie ocurreret. Sint adolescens duo eu, ius ei phaedrum iracundia temporibus, in nusquam instructior nam. Posse option ullamcorper has te, latine omittam cu per, pri affert prodesset ei.</p> 
                            <p>Signature............................................... Date .......................</P>
                        </div>

                        <div class="row col-md-10">
                            <h4>6. CREDIT MANAGER / DIRECTOR</h4>
                            <P>......................................................................</P>
                        </div>

                        <div class="row col-md-10">
                            <h4>7. CUSTOMER AGREMENT AND RECEIVE APPROVAL</h4>
                            <p>Comment: Sit sale necessitatibus ut, accumsan officiis consulatu sea et. Autem consetetur vim ne. Cu nam molestie ocurreret. Sint adolescens duo eu, ius ei phaedrum iracundia temporibus, in nusquam instructior nam. Posse option ullamcorper has te, latine omittam cu per, pri affert prodesset ei.</p> 
                            <p>Signature............................................... Date .......................</P>
                        </div>

                    </div>
                    <span class="pull-left hidden-print">
                            <a href="javascript:PrintDiv('printable_doc');" class="btn btn-primary m-r-5 m-b-5"><i class="fa fa-print left"></i>Print</a>
                        </span> 
                
                <div class="invoice-footer text-muted">
                    <p class="text-center m-b-5">
                        THANK YOU FOR CHOOSING ONE ICON MICROFINANCE
                    </p>
                    <p class="text-center">
                        <span class="m-r-10"><i class="fa fa-globe"></i>oim.com</span>
                        <span class="m-r-10"><i class="fa fa-phone"></i> M: +255 713 594923</span>
                        <span class="m-r-10"><i class="fa fa-envelope"></i>E: donaldsj9@gmail.com</span>
                    </p>
                </div>
            </div>
            <!-- end invoice -->
        </div>
        <!-- end #content -->
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
@include('layouts.includes.footer')