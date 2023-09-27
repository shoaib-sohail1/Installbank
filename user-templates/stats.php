<?php
$this_user_id 	= $_SESSION['md5ax_userID'];
$click_status 	= get_user_clicks_status($this_user_id);
// pa($this_user_rev);
// exit;
?>
<!-- Title -->
<div class="row heading-bg">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h5 class="txt-dark">Stats</h5>
	</div>
	<!-- Breadcrumb -->
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			
			<li class="active">User</li>
			<li class="active"><span>Stats</span></li>
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
					<div class="col-md-3">
						<div class="form-group mb-0">
							<label class="control-label mb-10 text-primary">Pick Dates</label>
							<div id="reportrange" class="form-control">
								<i class="fa fa-calendar"></i>&nbsp;
								<span id="selected-dates"></span> <i class="fa fa-caret-down"></i>
							</div>
							<script type="text/javascript">
								$(function() {

									var start = moment().subtract(15, 'days');
									var end = moment();

									function cb(start, end) {
										$('#reportrange span#selected-dates').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
										$('#user-site-select').trigger('change');
									}

									$('#reportrange').daterangepicker({
										startDate: start,
										endDate: end,
										ranges: {
										   'Today': [moment(), moment()],
										   'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
										   'Last 7 Days': [moment().subtract(6, 'days'), moment()],
										   'Last 30 Days': [moment().subtract(29, 'days'), moment()],
										   'This Month': [moment().startOf('month'), moment().endOf('month')],
										   'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
										}
									}, cb);

									cb(start, end);

								});
								</script>
						</div>
					</div>
					
					
					
					
					<?php
					
					if(isset($_SESSION['md5ax_userID']) && !empty($_SESSION['md5ax_userID']) && is_numeric($_SESSION['md5ax_userID'])){
						$this_user_sites = get_user_websites($_SESSION['md5ax_userID']);
						
					}
					?>
					
					<div class="col-md-4">
						<div class="form-wrap">
							<form class="form-inline">
								<div class="form-group" id="user-sites-container">
									<label class="control-label mb-10 text-primary">Search Websites</label>
									<select id="user-site-select" class="form-control select2" style="width:100%;">
										<option value="">Choose Website</option>
										<?php
											
												
												if(isset($this_user_sites) && !empty($this_user_sites) && is_array($this_user_sites)){
													
													foreach($this_user_sites as $single_site){
														
														echo '<option value="'.$single_site['web_id'].'"'.(isset($_GET['site_id']) && !empty($_GET['site_id']) && is_numeric($_GET['site_id']) && $_GET['site_id']==$single_site['web_id']?' selected="selected"':'').'>WebID-'.$single_site['web_id'].' '.$single_site['web_url'].'</option>';
													}
												}
											
										?>
									</select>
									<span><img id="<?php echo 'user-stats-loading';?>" src="dist/img/circle_loading.gif" style="display:none;"></span>
								</div>
							</form>
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
								<th>Date</th>
								<?php
								echo (isset($click_status) && $click_status==1?'<th>Clicks</th>':'');
								?>
								<th>Conversions</th>								
								<th>Revenue</th>
							  </tr>
							</thead>
							<tbody id="user-stats">
								
							</tbody>
						  </table>
						</div>
						<div class="mt-10"><small><strong>Note:</strong>  This report updates in every 24 hours after verification of successfull conversions. </small></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php if(isset($_GET['site_id']) && !empty($_GET['site_id'])){?>
<script type="text/javascript">
(function ($){
		$(document).ready(function(e) {
			setTimeout(function(){ $('#user-site-select').trigger('change'); }, 1000);

		});
})(jQuery);
</script>
<?php } ?>