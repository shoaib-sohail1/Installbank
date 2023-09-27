<?php
require_once(CLASSES_DIR.'Paginator.class.php');
	global $conn;

if(isset($_SESSION['md5ax_userID']) && !empty($_SESSION['md5ax_userID']) && is_numeric($_SESSION['md5ax_userID'])){
	$this_filter = '?nav='.$the_page;
	$limit      = 50;
	$pages      = (isset($_GET['page']))?$_GET['page']:1;
	$links      = 7;
	
	$query  = "SELECT * FROM ".TBL_IB_WEBS." WHERE user_id=".$_SESSION['md5ax_userID']." ORDER BY date_added DESC";
	
	$Paginator  = new Paginator($conn, $query);
	$results    = $Paginator->getData($limit,$pages);
	$total = isset($results->total) && !empty($results->total)?$results->total:0;
	$total_pages = ceil($total / $limit );
	$start_numbers = ($total>0?($pages - 1) * $limit + 1:0);
	
	if ($total>0) {
		if($total>$limit){
			$end_numbers = $pages * $limit;
		}else{
			$end_numbers = $total;
		}
	}else{
		$end_numbers = 0;
	}
	if($total>0 && $pages==$total_pages){
		$end_numbers = $start_numbers+($total-$start_numbers);
	}
}
	//pa($results);
	
?>

<!-- Title -->
<div class="row heading-bg">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h5 class="txt-dark">Websites</h5>
	</div>
	<!-- Breadcrumb -->
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			
			<li class="active">User</li>
			<li class="active"><span>Websites</span></li>
		</ol>
	</div>
	<!-- /Breadcrumb -->
</div>
<!-- /Title -->



<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default card-view">
			<div class="panel-heading">
				<div class="row">
					<div class="col-md-6">
						<div class="form-wrap">
							<form class="form-inline">
								<input name="nav" value="<?php echo $the_page;?>" type="hidden">
								<div class="input-group mb-15">
									<span class="input-group-addon">http://</span>
									<input type="text" id="user-new-site-input" class="form-control" placeholder="example.com">
									<span class="input-group-btn">
									<button type="button" id="add-new-website" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">Add Site</span></button>
									<img id="web_add_loading" src="dist/img/circle_loading.gif" style="display:none;">
									</span> 
								</div>
							</form>
						</div>
					</div>
				
					<div class="col-md-6">
						<div class="pull-right">
							<button class="btn btn-info btn-outline btn-rounded">Page: <?php echo  $pages.' of '.ceil($total / $limit );?></button>
							<button class="btn  btn-success btn-outline btn-rounded">Results: <?php echo $start_numbers.' - '.$end_numbers;?></button>
							<button class="btn  btn-primary btn-outline btn-rounded">Total: <?php echo $total;?></button>
						</div>
					</div>
				</div>				
				<div class="clearfix"></div>
			</div>
			<div class="panel-wrapper collapse in">
				<div class="panel-body">
					<div class="table-wrap">
						<div class="table-responsive">
						  <table id="users-table" class="table table-hover mb-0">
							<thead>
							  <tr>
								<th>Site ID</th>
								<th>Domain</th>
								<th>Status</th>
								<th>Date Added</th>								
								<th>Actions</th>
							  </tr>
							</thead>
							<tbody id="user-websites">
								<?php
									$inc = $start_numbers;
									if(isset($results->data) && !empty($results->data)){
										for( $i = 0; $i < count( $results->data ); $i++ ){
									?>
											<tr>
												<td><?php echo $results->data[$i]['web_id'];?></td>
												<td><?php echo $results->data[$i]['web_url'];?></td>
												<td>
												<?php 
													if($results->data[$i]['web_status']==1){
														echo '<span class="btn-xs btn-success btn-lable-wrap left-label"> <span class="btn-label"><i class="fa fa-check"></i> </span><span class="btn-text">Active</span></span>';
													}else{
														echo '<span class="btn-xs btn-default btn-lable-wrap left-label"> <span class="btn-label"><i class="fa fa-info"></i> </span><span class="btn-text">Approval Pending</span></span>';
													}
												?>
												
												
												</td>
												<td><?php echo date('d M Y',strtotime($results->data[$i]['date_added']));?></td>
												<td>
													<?php 
													if($results->data[$i]['web_status']==1){?>
													<a href="<?php echo ADMIN_URL.'?nav=stats&site_id='.$results->data[$i]['web_id'];?>" class="mr-10" data-toggle="tooltip" data-original-title="Stats"> <i class="fa fa-bar-chart text-info"></i> </a> 
													<a href="<?php echo ADMIN_URL.'?nav=ad-codes&site_id='.$results->data[$i]['web_id'];?>" class="" data-toggle="tooltip" data-original-title="Ad Code"> <i class="fa fa-code text-primary"></i> </a>
													<?php } ?>
												</td>
											</tr>
									<?php $inc++;					
										}
									}else{
										echo '<tr><td colspan="3">No Records Found</td></tr>';
									}
									?>
							</tbody>
						  </table>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
						<?php
							if($total>0){
							
							echo $Paginator->createLinksAllpost($links, 'pagination pagination-split',$this_filter);
							}
						?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>