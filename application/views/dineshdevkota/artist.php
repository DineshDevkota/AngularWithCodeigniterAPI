<h1>Associated Artists</h1>
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
                                                    <th>Artist Name</th>
                                                    <th>Position</th>
                                                    <th>Functionality</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($data as $key=>$value){?>
                                                <tr>
                                                    <td><?php echo $key+1;?></td>
                                                    <td><?php echo $value->ArtistName;?></td>
                                                    <td><?php echo $value->Position;?></td>
                                                    <td><?php echo "to band"+$value->BandID;?></td>
                                                    
                                                </tr>                                                
                                           <?php  }?>                                             
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                    
                                </section>
                                </div></div>
