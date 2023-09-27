<?php
$this_user_id 	= $_SESSION['md5ax_userID'];
$this_user_rev 	= get_user_revenue_history($this_user_id);

$end_date 	= date('Y-m-d');
$start_date = date('Y-m-d',strtotime('-15 days',strtotime($end_date)));
$date_range = getDatesFromRange($start_date, $end_date);
$conversions=0;
$revenue	=0;
$chart_arr = array();
$chart_js_obj='';

if(isset($date_range) && !empty($date_range)){
	$fliped_dates = array_flip($date_range);
	foreach($fliped_dates as $this_fliped_key=>$this_fliped_val){
		$fliped_dates[$this_fliped_key] = 0;
	}
	$qry ="SELECT stats.stats_date,stats.installs,stats.user_rev 
			FROM ".TBL_IB_STATS." as stats 
			LEFT JOIN ".TBL_IB_WEBS." as webs ON stats.web_id=webs.web_id 
			WHERE webs.user_id=".$this_user_id." 
			AND	stats.stats_date between '".$start_date."' 
			AND '".$end_date."' ORDER BY stats.stats_date ASC"; 
					
	$res 	= $conn->query($qry);
	if(isset($res->num_rows) && $res->num_rows>0){
		while($row = $res->fetch_assoc()){
			$fliped_dates[$row['stats_date']] += $row['user_rev'];
			$conversions+=$row['installs'];
			$revenue+=$row['user_rev'];
		}
	}
	foreach($fliped_dates as $date_key=>$date_val){
		
		if(!empty($date_val)){
			$chart_arr []= "{period: '".date('d M',strtotime($date_key))."',revenue: ".$date_val.",}";
		}else{
			$chart_arr []= "{period: '".date('d M',strtotime($date_key))."',revenue: 0,}";
		}
	}
	$chart_js_obj = implode(',',$chart_arr);
	
}



// pa($start_date);
// pa($end_date);
// pa($fliped_dates);
// pa($revenue);
// pa($conversions);
//exit;
?>
<!-- Title -->
<div class="row heading-bg">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h5 class="txt-dark">Dashboard</h5>
	</div>
	<!-- Breadcrumb -->
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			
			<li class="active">Dashboard</li>
			<li class="active"><span>Analytics</span></li>
		</ol>
	</div>
	<!-- /Breadcrumb -->
</div>
<!-- /Title -->
	
<!-- Row -->
<div class="row">
	<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
		<div class="panel panel-default card-view">
			<div class="panel-heading">
				<div class="pull-left">
					<h6 class="panel-title txt-dark">Last 15 Days Stats</h6>
				</div>
				<div class="pull-right">
					<a href="#" class="pull-left inline-block full-screen">
						<i class="zmdi zmdi-fullscreen"></i>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="panel-wrapper collapse in">
				<div class="panel-body">
					<ul class="flex-stat mb-10 ml-15">
						<li class="text-left auto-width mr-60">
							<span class="block">Conversions</span>
							<span class="block txt-dark weight-500 font-18"><span class="counter-anim"><?php echo $conversions;?></span></span>
							<div class="clearfix"></div>
						</li>
						<li class="text-left auto-width">
							<span class="block">Revenue</span>
							<span class="block txt-dark weight-500 font-18">$<span class="counter-anim"><?php echo $revenue;?></span></span>							
							<div class="clearfix"></div>
						</li>
					</ul>
					<div id="user_home_chart" class="morris-chart" style="height:300px;"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
		<div class="panel panel-default card-view panel-refresh">
			<div class="row">
					<div class="col-md-12 mb-20">
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
					
					<div class="col-md-12 mb-20">
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
					<div class="col-md-12 mb-20">
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
					<div class="col-md-12">
						<div class="alert alert-success alert-dismissable alert-style-1">
							
							<i class="zmdi zmdi-chart"></i>Goto Full <a href="?nav=stats" class="text-primary">Stats</a> 
						</div>
					</div>
				</div>
			
		</div>		
	</div>
</div>
<!-- /Row -->
<?php if(!empty($chart_js_obj)){?>
<!-- Morris Charts JavaScript -->
    <script src="vendors/bower_components/raphael/raphael.min.js"></script>
    <script src="vendors/bower_components/morris.js/morris.min.js"></script>
    <script src="vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	if($('#user_home_chart').length > 0) {
		// Area Chart
		var data=[<?php echo $chart_js_obj;?>];
		var areaChart = Morris.Area({
				element: 'user_home_chart',
				data: data,
				xkey: 'period',
				ykeys: ['revenue'],
				labels: ['$'],
				pointSize: 3,
				lineWidth: 2,
				pointStrokeColors:['#e69a2a'],
				pointFillColors:['#ffffff'],
				behaveLikeLine: true,
				gridLineColor: 'rgba(33,33,33,0.1)',
				smooth: false,
				hideHover: 'auto',
				lineColors: ['#e69a2a'],
				resize: true,
				gridTextColor:'#878787',
				gridTextFamily:"Roboto",
				parseTime: false,
				fillOpacity:0.2
			});	
	}
	
});
</script>
<?php } ?>


