<h1>Associated Warped tours.</h1>
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
                                                    <th>Date</th>
                                                    <th>City</th>
                                                    <th>State</th>
                                                    <th>Admissioin Price</th>
                                                    <th> Options</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($data as $key=>$value){?>
                                                <tr>
                                                    <td><?php echo $key+1;?></td>
                                                    <td><?php echo $value->Date;?></td>
                                                    <td><?php echo $value->City;?></td>
                                                    <td><?php echo $value->State;?></td>
                                                    <td><?php echo $value->AdmissioinPrice;?></td>
                                                    <td><a class="btn btn-default" href='/db/GetStageByWarpedTourID/<?php echo $value->WarpedID;?>'>View Stages</a></td>
                                                </tr>                                                
                                           <?php  }?>                                             
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                    
                                </section>
                                </div></div>
