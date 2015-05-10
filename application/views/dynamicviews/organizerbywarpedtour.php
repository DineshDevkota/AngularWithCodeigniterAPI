<h1>Associated Organizers</h1>
                <!-- content wrapper -->
                <div class="content-wrap">

                    <!-- inner content wrapper -->
                    <div class="wrapper">
                        <section class="panel">
                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped custom-table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Address</th>
                                                    <th>City</th>
                                                    <th> State</th> 
                                                    <th>Zip</th>
                                                    <th>Job Title</th>
                                                    <th> Pay Rate</th>   
                                                         
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($data as $key=>$value){?>
                                                <tr>
                                                    <td><?php echo $key+1;?></td>
                                                    <td><?php echo $value->FName;?></td>
                                                    <td><?php echo $value->LName;?></td>
                                                    <td><?php echo $value->Address;?></td>
                                                    <td><?php echo $value->City;?></td>
                                                    <td><?php echo $value->State;?></td> 
                                                     <td><?php echo $value->Zip;?></td> 
                                                      <td><?php echo $value->JobTitle;?></td>  
                                                      <td><?php echo $value->PayRate;?></td>  
                                                                                                                                                      
                                                </tr>                                                
                                           <?php  }?>                                             
                                            </tbody>
                                        </table>
                                        <a class="btn btn-info" onclick="window.history.back()">Back</a>
                                    </div>
                                    </div>
                                    
                                </section>
                                </div></div>
