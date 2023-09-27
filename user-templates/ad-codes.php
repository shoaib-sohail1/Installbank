<?php
$this_user_id = $_SESSION['md5ax_userID'];

?>
<style>
#download-btn-code1,#download-btn-code2,#header-js-code{
	font-weight: bold;
}
</style>

<!-- Title -->
<div class="row heading-bg">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h5 class="txt-dark">Ad Codes</h5>
	</div>
	<!-- Breadcrumb -->
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			
			<li class="active">User</li>
			<li class="active"><span>Ad Codes</span></li>
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
								<div class="form-group">
									<label class="control-label mb-10 text-primary">Select Active Website to Generate Ad Codes</label>
									<select id="gen-adcode-select" class="form-control select2">
										<option value="">Choose Website</option>
										<?php
											$site_check 	= 0;
											$selected_site 	= '';
											if(!empty($this_user_id) && is_numeric($this_user_id)){
												$this_user_websites = get_user_websites($this_user_id,'web_id,web_url,web_status');
												
												if(!empty($this_user_websites) && is_array($this_user_websites)){
													foreach($this_user_websites as $this_user_single_web){
														if($this_user_single_web['web_status']==1){
															$selected_site 	= '';
															if(isset($_GET['site_id']) && $_GET['site_id']==$this_user_single_web['web_id']){
																$site_check    = $this_user_single_web['web_id'];
																$selected_site = ' selected="selected"';
															}
															echo '<option value="'.$this_user_single_web['web_id'].'"'.$selected_site.'>'.$this_user_single_web['web_url'].'</option>';
														}
													}
												}
											}
										?>
									</select>
								</div>
							</form>
						</div>
					</div>
				</div>				
				<div class="clearfix"></div>
			</div>
			<div class="panel-wrapper collapse in">
				<div class="panel-body">
					<input type="hidden" id="copy-paste-area">
					
					<div id="js-section" class="mb-30" <?php echo (empty($site_check)?'style="display:none;"':'')?>>
						<div class="alert alert-warning alert-dismissable alert-style-1">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<i class="zmdi zmdi-alert-circle-o"></i><strong style="color:red;">Hi! Users having large traffic are advised to ask their manager for dedicated ads domains.</strong>
						</div>
						<h2 class="mb-10">Step 1</h2>
						<p class="text-muted">You must add this meta tag in your site head section for your site security.</p>						
						<div id="header-js-code" class="form-control filled-input pt-10 mb-10 text-info">
						<?php echo htmlspecialchars('<meta name="referrer" content="no-referrer" />');?>
						</div>
						<button class="copy_any_text btn btn-success btn-lable-wrap left-label" data-section-id="#header-js-code"> <span class="btn-label"><i class="fa fa-copy"></i> </span><span class="btn-text">Copy Meta Code</span></button>
						
					</div>
					
					<div id="btn-code-section" class="mb-30" <?php echo (empty($site_check)?' style="display:none;"':'')?>>
						
						<h2 class="mb-10">Step 2</h2>
						<p class="text-muted"><h6>Code Option - 1 (Direct Link)</h6>Place this Code where you want to show the Download Button.</p>						
						<div id="download-btn-code1" class="form-control filled-input pt-10 mb-10 text-info" style="min-height: 60px;"><?php echo htmlspecialchars('<a href="javascript:void(0);" onclick="window.location.href = \'//ADS-Domain-HERE.com/u-'.$site_check.'/?rd='.rand(356,1003303).'&t=TITLE_HERE\';" rel="noreferrer noopener"> <img src="//Replace-With-Yoursite.com/add-image-file.ext"></a>');?></div>
						<button class="copy_any_text btn btn-success btn-lable-wrap left-label" data-section-id="#download-btn-code1"> <span class="btn-label"><i class="fa fa-copy"></i> </span><span class="btn-text">Copy Direct Link Code</span></button>
						
						<p class="text-muted mt-20"><h6>Code Option - 2 (Form Code)</h6>Place this Code where you want to show the Download Button.</p>						
						<div id="download-btn-code2" class="form-control filled-input pt-10 mb-10 text-info" style="min-height: 60px;"><?php echo htmlspecialchars('<form id="'.rand(356,1003303).'" style="text-align:center;" action="<?php echo \'//ADS-Domain-HERE.com/st-\'.md5(rand()).\'/\';?>" method="POST" target="_blank"> <input type="hidden" name="id" value="'.$site_check.'"> <input type="hidden" name="title" value="<?php echo the_title();?>"> <input type="image" src="//yoursite.com/image-file.ext"> </form>');?></div>
						<button class="copy_any_text btn btn-success btn-lable-wrap left-label" data-section-id="#download-btn-code2"> <span class="btn-label"><i class="fa fa-copy"></i> </span><span class="btn-text">Copy Form Code</span></button>
						
					</div>
					
					<div id="instructions-section" <?php echo (empty($site_check)?'style="display:none;"':'')?>>
						<h2 class="mb-10">Instructions</h2>
						
						<p class="mt-10"><strong>Note:</strong> Please ask your manager for ads domain and code placement on your site.</p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>