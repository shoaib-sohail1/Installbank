<?php
	$user_info = get_user_info_by_id($_SESSION['md5ax_userID']);
	
?>
<style>
	.show_pwd_field,.hide_pwd_field{
		cursor:pointer;
	}
</style>
<!-- Title -->
<div class="row heading-bg">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h5 class="txt-dark">Profile</h5>
	</div>
	<!-- Breadcrumb -->
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			
			<li class="active">User</li>
			<li class="active"><span>Profile</span></li>
		</ol>
		
	</div>
	<!-- /Breadcrumb -->
</div>
<!-- /Title -->

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="panel panel-info card-view">
		<div class="panel-heading">
			<div class="pull-left">
				<h6 class="panel-title txt-light"><i class="zmdi zmdi-settings mr-10"></i> Profile Settings</h6>
			</div>
			<div class="pull-right">
				<a href="#" class="pull-left inline-block full-screen mr-15">
					<i class="zmdi zmdi-fullscreen txt-light"></i>
				</a>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="panel-wrapper collapse in" aria-expanded="true" style="">
			<div class="panel-body">
				<div class="pills-struct mt-10">
					<ul role="tablist" class="nav nav-pills nav-pills-outline nav-pills-rounded">
						<li class="active" role="presentation"><a aria-expanded="true" data-toggle="tab" role="tab" href="#user_personal_info"><i class="zmdi zmdi-account mr-10"></i> Personal Info</a></li>
						<li role="presentation" class=""><a data-toggle="tab" role="tab" href="#user_pwd_change" aria-expanded="false"><i class="zmdi zmdi-key mr-10"></i> Change Password</a></li>
						<li role="presentation" class=""><a data-toggle="tab" role="tab" href="#user_payment_method" aria-expanded="false"><i class="zmdi zmdi-money mr-10"></i> Payment Method</a></li>
					</ul>
					<div class="tab-content">
						<div id="user_personal_info" class="tab-pane fade active in" role="tabpanel">
							
							<!--userPersonalInfo-->
							<div class="col-md-6">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="form-wrap">
											<div class="form-group mb-30">
												<label class="mb-5">First Name <span class="text-danger">*</span></label>
												<div class="input-group mb-15"> <span class="input-group-addon">F</span>
													<input type="text" class="form-control" value="<?php echo (isset($user_info['user_firstname']) && !empty($user_info['user_firstname'])?$user_info['user_firstname']:'');?>" id="user_first_name"<?php echo (isset($user_info['user_firstname']) && !empty($user_info['user_firstname'])?' disabled':'');?>>
												</div>
																									
												<label class="mb-5">Last Name <span class="text-danger">*</span></label>
												<div class="input-group mb-15"> <span class="input-group-addon">L</span>
													<input type="text" class="form-control" value="<?php echo (isset($user_info['user_lastname']) && !empty($user_info['user_lastname'])?$user_info['user_lastname']:'');?>" id="user_last_name"<?php echo (isset($user_info['user_lastname']) && !empty($user_info['user_lastname'])?' disabled':'');?>>
												</div>
												
												<label class="mb-5">Email <span class="text-danger">*</span></label>
												<div class="input-group mb-15"> <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
													<input type="text" class="form-control" value="<?php echo (isset($user_info['user_email']) && !empty($user_info['user_email'])?$user_info['user_email']:'');?>" id="user_email" disabled>
												</div>
												
												<label class="mb-5">Phone <small class="text-danger ml-10">+Country Code - Local Code - Phone Number</small></label>
												<div class="input-group mb-15"> <span class="input-group-addon"><i class="zmdi zmdi-smartphone-iphone"></i></span>
													<input type="text" class="form-control" value="<?php echo (isset($user_info['user_phone']) && !empty($user_info['user_phone'])?$user_info['user_phone']:'');?>" id="user_phone">
													 
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="form-wrap">
											<div class="form-group mb-10">
												<label class="mb-5">Messenger <span class="text-danger">*</span></label>
												<div class="input-group mb-15"> <span class="input-group-addon"><i class="zmdi zmdi-comments"></i></span>
													<select class="form-control" id="user_msngr">
														<option value="">Please Select Messenger</option>
														<option value="skype"<?php echo (isset($user_info['user_msngr']) && $user_info['user_msngr']=='skype'?' selected="selected"':'');?>>Skype</option>
														<option value="icq"<?php echo (isset($user_info['user_msngr']) && $user_info['user_msngr']=='icq'?' selected="selected"':'');?>>ICQ</option>
														<option value="qq"<?php echo (isset($user_info['user_msngr']) && $user_info['user_msngr']=='qq'?' selected="selected"':'');?>>QQ</option>
														<option value="other"<?php echo (isset($user_info['user_msngr']) && $user_info['user_msngr']=='other'?' selected="selected"':'');?>>Other</option>
													</select>
												</div>
												
												<label class="mb-5">Messenger ID / Nick <span class="text-danger">*</span></label>
												<div class="input-group mb-15"> <span class="input-group-addon"><i class="zmdi zmdi-accounts-alt"></i></span>
													<input type="text" class="form-control" value="<?php echo (isset($user_info['user_msngr_id']) && !empty($user_info['user_msngr_id'])?$user_info['user_msngr_id']:'');?>" id="user_msngr_id">
												</div>
												
												<label class="mb-5">City <span class="text-danger">*</span></label>
												<div class="input-group mb-15"> <span class="input-group-addon"><i class="zmdi zmdi-city"></i></span>
													<input type="text" class="form-control" value="<?php echo (isset($user_info['user_city']) && !empty($user_info['user_city'])?$user_info['user_city']:'');?>" id="user_city">
												</div>
												
												<label class="mb-5">Country <span class="text-danger">*</span></label>
												<div class="input-group mb-15"> <span class="input-group-addon"><i class="zmdi zmdi-globe"></i></span>
													<select class="form-control" id="user_country"<?php echo (isset($user_info['user_country']) && !empty($user_info['user_country'])?' disabled':'');?>>
														<option value="">Please Select Country</option>
														<?php
														$countries = get_countries();
														if(isset($countries) && !empty($countries)){
															foreach($countries as $single_country){
																	echo '<option value="'.$single_country['country_id'].'"'.(isset($user_info['user_country']) && $user_info['user_country']==$single_country['country_id']?' selected="selected"':'').'>'.utf8_decode(utf8_encode($single_country['country_name'])).'</option>';
															}
														}
														?>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="form-wrap">
											<div class="form-group mb-30">
												<label class="mb-5">Address <span class="text-danger">*</span></label>
												<div class="input-group mb-15"> <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
													<input type="text" class="form-control" value="<?php echo (isset($user_info['user_address']) && !empty($user_info['user_address'])?$user_info['user_address']:'');?>" id="user_address">
												</div>
												
												<div class="checkbox checkbox-success">
													<input id="user_newsletter_status" type="checkbox" <?php echo (isset($user_info['user_newsletter_status']) && $user_info['user_newsletter_status']==1?' checked="checked"':'');?>>
													<label for="user_newsletter_status">
														I Would like to subscribe to the newsletter.
													</label>
												</div>
												
												<div class="text-center mt-10">
														<button id="save_user_profile" class="btn btn-success btn-lable-wrap left-label"> <span class="btn-label"><i class="fa fa-save"></i> </span><span class="btn-text">Save</span></button>
														<br>
														<img id="user_info_save_loading" src="dist/img/circle_loading.gif" style="display:none;">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="user_pwd_change" class="tab-pane fade" role="tabpanel">
							<div class="col-md-6">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="form-wrap">
											<div class="form-group mb-10">
												
												<label class="mb-5">Old Password <span class="text-danger">*</span></label>
												<div class="input-group mb-15"> <span class="input-group-addon"><i class="zmdi zmdi-key"></i></span>
													<input type="password" class="form-control" value="" id="user_old_pwd">
													<span class="input-group-addon show_pwd_field"><i class="fa fa-eye" aria-hidden="true"></i></span>	
												</div>
												
												<label class="mb-5">New Password <span class="text-danger">*</span></label>
												<div class="input-group mb-15"> <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
													<input type="password" class="form-control" value="" id="user_new_pwd">
													<span class="input-group-addon show_pwd_field"><i class="fa fa-eye" aria-hidden="true"></i></span>
												</div>
												
												<label class="mb-5">Confirm New Password <span class="text-danger">*</span></label>
												<div class="input-group mb-15"> <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
													<input type="password" class="form-control" value="" id="user_cnfrm_new_pwd">
													<span class="input-group-addon show_pwd_field"><i class="fa fa-eye" aria-hidden="true"></i></span>
												</div>
												<div class="text-center mt-10">
														<button id="save_user_new_pwd" class="btn btn-success btn-lable-wrap left-label"> <span class="btn-label"><i class="fa fa-save"></i> </span><span class="btn-text">Save</span></button>
														<br>
														<img id="user_new_pwd_save_loading" src="dist/img/circle_loading.gif" style="display:none;">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="user_payment_method" class="tab-pane fade " role="tabpanel">
							<!--userPersonalInfo-->
							<div class="col-md-6">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="form-wrap">
											<div class="form-group mb-30">
												<label class="mb-5">Payment Method <span class="text-danger">*</span></label>
												<div class="input-group mb-15"> <span class="input-group-addon"><i class="zmdi zmdi-globe"></i></span>
													<select class="form-control" id="user_payment_method_dropdown">
														<option value="">Please Select</option>
														<?php
														$current_selected_method = '';
														
														$all_payment_methods = get_all_payment_method(1);
														$hide_bank = false;
														if(empty($user_info['user_country'])==true || $user_info['user_country']!=163){
															$hide_bank = true;
														}
														
														if(isset($_SESSION['md5ax_userID']) && !empty($_SESSION['md5ax_userID']) && is_numeric($_SESSION['md5ax_userID'])){
															$user_payment_method = get_user_payment_method($_SESSION['md5ax_userID']);
															
														}
														if(isset($all_payment_methods) && !empty($all_payment_methods)){
															foreach($all_payment_methods as $payment_method){
																	if(isset($user_payment_method['user_pay']) && !empty($user_payment_method['user_pay']) && $user_payment_method['user_pay']==$payment_method['pay_id']){
																		
																		$current_selected_method = strtolower($payment_method['pay_name']);
																	}
																	if($hide_bank == true && $payment_method['pay_id']==6){
																		
																	}else{
																		echo '<option value="'.$payment_method['pay_id'].'"'.(isset($user_payment_method['pay_name']) && $payment_method['pay_name']==$user_payment_method['pay_name']?' selected="selected"':'').'>'.$payment_method['pay_name'].'</option>';
																	}
															}
														}
														?>
													</select>
												</div>
																									
												<label class="user_payment_id_label mb-5"><?php
												
												$user_payment_icon = '';
												if($current_selected_method=='webmoney(wmz)' || $current_selected_method=='crypto-btc' || $current_selected_method=='crypto-usdt'){
													echo strtoupper($current_selected_method).' Wallet ID';
													$user_payment_icon = '#';
												}else if($current_selected_method=='bank transfer'){
													echo strtoupper($current_selected_method).' DETAILS <br>Example:- <br>Account Title:Name Account No.123456789 Bank Name:The First Bank';
													$user_payment_icon = '#';
												}else{
													echo 'Email';
													$user_payment_icon = '@';
												}
												?><span class="text-danger">*</span></label>
												<div class="input-group mb-15"> <span class="input-group-addon user_payment_icon"><?php echo $user_payment_icon;?></span>
													<input id="user_payment_id_input" type="text" class="form-control" value="<?php echo (isset($user_payment_method['user_pay_email_id']) && !empty($user_payment_method['user_pay_email_id'])?$user_payment_method['user_pay_email_id']:'');?>">
												</div>
												<div class="text-center mt-10">
														<button id="save_payment_method" class="btn btn-success btn-lable-wrap left-label"> <span class="btn-label"><i class="fa fa-save"></i> </span><span class="btn-text">Save</span></button>
														<br>
														<img id="save_payment_method_loading" src="dist/img/circle_loading.gif" style="display:none;">
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
		</div>
	</div>
</div>