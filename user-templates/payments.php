<?php
$this_user_id 	= $_SESSION['md5ax_userID'];
$this_user_rev 	= get_user_revenue_history($this_user_id);
// pa($this_user_rev);
// exit;
?>


<!-- Title -->
<div class="row heading-bg">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h5 class="txt-dark">Payments</h5>
	</div>
	<!-- Breadcrumb -->
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			
			<li class="active">User</li>
			<li class="active"><span>Payments</span></li>
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
						<div class="sm-data-box bg-green">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
										<span class="txt-light block counter">$<span class="current_balance counter-anim"><?php echo (isset($this_user_rev['balance']) && !empty($this_user_rev['balance'])?number_format($this_user_rev['balance'],2):'0.00');?></span></span>
										<span class="weight-500 uppercase-font txt-light block">Balance</span>
									</div>
									<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
										<i class="zmdi zmdi-money txt-light data-right-rep-icon"></i>
									</div>
								</div>	
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="sm-data-box bg-blue">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
										<span class="txt-light block counter">$<span class="previous-paid-amount counter-anim"><?php echo (isset($this_user_rev['paid']) && !empty($this_user_rev['paid'])?number_format($this_user_rev['paid'],2):'0.00');?></span></span>
										<span class="weight-500 uppercase-font txt-light block">Paid / In Progress</span>
									</div>
									<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
										<i class="zmdi zmdi-money-box txt-light data-right-rep-icon"></i>
									</div>
								</div>	
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="sm-data-box bg-red">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
										<span class="txt-light block counter">$<span class="counter-anim"><?php echo (isset($this_user_rev['total']) && !empty($this_user_rev['total'])?number_format($this_user_rev['total'],2):'0.00');?></span></span>
										<span class="weight-500 uppercase-font txt-light block">Total Gains</span>
									</div>
									<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
										<i class="pe-7s-cash txt-light data-right-rep-icon"></i>
									</div>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="pull-right">
								<button id="request-payment-by-user" class="btn btn-warning btn-anim mt-25"><i class="icon-rocket" style="color: #fff;"></i><span class="btn-text">Request Payment</span></button>
							
						</div>
					</div>
				</div>				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>




<div class="row" id="payment-request-form" style="display:none;">
	<div class="col-md-12">
		<div class="panel panel-default card-view">
			<div class="panel-wrapper collapse in">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-wrap">
								
									<div class="form-body">
										<h6 class="txt-info capitalize-font"><i class="fa fa-money" aria-hidden="true"></i> Payment Request Form <span><img id="<?php echo 'user-payment-request-loading';?>" src="dist/img/circle_loading.gif" style="display:none;vertical-align: middle;"></span></h6>
										<hr class="light-grey-hr">
										<div class="row">
											<div class="col-md-6">
											<?php
												$user_payment_method = get_user_payment_method($this_user_id);
												
											?>
												<div class="form-group">
													<label class="control-label col-md-3">Payment Method</label>
													<div class="col-md-9">
														<input type="text" id="payment-method" name="<?php echo (isset($user_payment_method['user_pay']) && !empty($user_payment_method['user_pay'])?$user_payment_method['user_pay']:'');?>" value="<?php echo(isset($user_payment_method['pay_name']) && !empty($user_payment_method['pay_name']) && isset($user_payment_method['user_pay_email_id']) && !empty($user_payment_method['user_pay_email_id'])?$user_payment_method['pay_name'].': '.$user_payment_method['user_pay_email_id']:'');?>" class="form-control" disabled="disbaled">
														<span class="help-block"> <a href="?nav=profile" class="text-primary">Change</a> </span> 
													</div>
												</div>
											</div>
											<!--/span-->
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label col-md-3">Amount</label>
													<div class="col-md-9">
														<input type="text" id="requested-amount" class="form-control" placeholder="0.00">
													</div>
												</div>
											</div>
											<!--/span-->
										</div>
										
										
										<!-- /Row -->
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<div class="col-md-12 text-right">
														<button id="submit-payment-request" class="btn btn-primary btn-anim"><i class="icon-check"></i><span class="btn-text">Submit Request</span></button>
													</div>
												</div>
											</div>
											<!--/span-->
											<div class="col-md-6">
												<div class="form-group">
													<div class="col-md-12 text-left">
														<button id="cancel-payment-request" class="btn btn-default btn-anim"><i class="icon-close"></i><span class="btn-text">Cancel Request</span></button>
													</div>
												</div>
											</div>
											<!--/span-->
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-default card-view panel-refresh">
			<div class="refresh-container">
				<div class="la-anim-1"></div>
			</div>
			<div class="panel-heading">
				<div class="pull-left">
					<h6 class="panel-title txt-info"><i class="fa fa-history" aria-hidden="true"></i> Payments History</h6>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="panel-wrapper collapse in">
				<div class="panel-body row pa-0">
					<div class="table-wrap">
						<div class="table-responsive">
							<table class="table table-hover mb-0">
								<thead>
									<tr>
										<th>Invoice #</th>
										<th>Date</th>
										<th>Amount</th>
										<th>Payment Method</th>
										<th>Status</th>
										<th>Comments</th>
									</tr>
								</thead>
								<tbody id="user-payment-history">
								<?php
									$this_user_payment_history = get_user_payments_history($this_user_id);
									if(isset($this_user_payment_history) && !empty($this_user_payment_history) && is_array($this_user_payment_history)){
										foreach($this_user_payment_history as $single_pay_history){
											echo '<tr>
														<td>'.$single_pay_history['st_id'].'</td>
														<td>'.$single_pay_history['process_date'].'</td>
														<td>
															<span class="txt-dark weight-500">$'.number_format($single_pay_history['amount'],2).'</span>
														</td>
														<td>'.$single_pay_history['method'].'</td>
														
														<td>
															'.($single_pay_history['status']==1?'<span class="label label-success">Paid</span>':'<span class="label label-warning">Pending</span>').'
														</td>
														<td>'.$single_pay_history['comments'].'</td>
													</tr>';
										}
									}else{
										echo '<tr> <td colspan="5">No Records Found</td> </tr>';
									}
								?>
								</tbody>
							</table>
						</div>
					</div>	
				</div>	
			</div>
		</div>
	</div>	
</div>