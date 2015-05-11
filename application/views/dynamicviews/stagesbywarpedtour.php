<h1>Associated Stages</h1>
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
								<th>Name of Stage</th>
								<th>View Options</th>
							</tr>
						</thead>
						<tbody>
                             <?php foreach($data as $key=>$value){?>
                                  <tr>
    								<td><?php echo $key+1;?></td>
    								<td><?php echo $value->StageName;?></td>
    								<td><a class="btn btn-info"
    									href='/db/GetBandsByStageID/<?php echo $value->StageID;?>'>Bands</a></td>
							     </tr>                                                
                             <?php  }?>                                             
                        </tbody>
					</table>
					<a class="btn btn-info" onclick="window.history.back()">Back</a>
				</div>
			</div>
		</section>
	</div>
</div>
