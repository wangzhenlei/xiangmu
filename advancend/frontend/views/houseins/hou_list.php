<?php use yii\helpers\Html;use yii\widgets\LinkPager;?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8" />
		<title>入住验房管理</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->
		

		<!-- fonts -->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="assets/js/ace-extra.min.js"></script>
		

		<script src="assets/js/jquery-2.0.3.min.js"></script>
		<script src="assets/js/ajaxfileupload.js"></script>
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<script src="assets/js/hou_list.js"></script>
	</head>

	<body class="body">
		<?php include(substr(__DIR__,0,strrpos(__DIR__,"\\")) . '/public/header.html');?>

				
			<?php include(substr(__DIR__,0,strrpos(__DIR__,"\\")) . '/public/left.html');?>
					 
					
				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">UI Elements</a>
							</li>
							<li class="active">Buttons &amp; Icons</li>
						</ul><!-- .breadcrumb -->
						
						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Buttons &amp; Icon
								<small>
									<i class="icon-double-angle-right"></i>
									Common Buttons &amp; Icons
								</small>
							</h1>
						</div><!-- /.page-header -->
						<div></div>
						<div>
							用户：<input type="text" name="user_name" id="" style="width:100px">&nbsp;&nbsp;&nbsp;&nbsp;
							房源：<input type="text" name="room_city" id="" style="width:100px">&nbsp;&nbsp;&nbsp;&nbsp;
							初验时间：<input type="text" name="hou_time" id="" style="width:150px">&nbsp;&nbsp;&nbsp;&nbsp;
							复验时间：<input type="text" name="rption_time" id="" style="width:150px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="button" value="搜索" id="search">&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="button" value="批删" id="deleteAll">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="button" id="add_hou" value="新增">
						</div>

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row" >
									<div class="col-xs-12">
										<div class="table-responsive">

											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>用户</th>
														<th>房源</th>
														<th class="hidden-480">验房师</th>

														<th>
															<i class="icon-time bigger-110 hidden-480"></i>
															初验时间
														</th>
														<th class="hidden-480">初验是否合格</th>
														<th class="hidden-300">复验时间</th>
														<th class="hidden-300">复验是否合格</th>
														<th>操作</th>
													</tr>
												</thead>
												<tbody id="tbody">
												<?php foreach ($houlist as $val) { ?>
														<tr>
														<td class="center">
															<label>
																<input type="checkbox" class="aces" houid="<?=$val['hou_id']?>"/>
																<span class="lbl"></span>
															</label>
														</td>
												
														<td>
															<a href="#"><?=$val['users']['user_name']?></a>
														</td>
														<td>
															<a href="#"><?=$val['room']['room_city']?></a>
														</td>
														<td><?=$val['inspector']?></td>
														<td class="hidden-480"><?=date("Y-m-d",$val['hou_time'])?></td>
														
												
														<td class="hidden-480">
															
																<?php if($val['isone_qualified']==0){?>
																<span class="label label-sm label-warning">合格</span>
																<?php }elseif($val['isone_qualified']==1){?>
																<span class="label label-sm label-warning">不合格</span>
																<?php }?>
														</td>
														<td><?=date("Y-m-d",$val['rption_time']);?></td>
														<td>
															<?php if($val['istwo_qualified']==0){?>
																合格
																<?php }elseif($val['istwo_qualified']==1){?>
																不合格
																<?php }elseif($val['istwo_qualified']==2){?>
																已合格
																<?php }elseif($val['istwo_qualified']==3){?>
																待验
																<?php } ?>
															</td>
														
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-success" houid="<?=$val['hou_id']?>">
																	<i class="icon-ok bigger-120"></i>
																</button>
												
																<button class="btn btn-xs btn-info" houid="<?=$val['hou_id']?>">
																	<i class="icon-edit bigger-120"></i>
																</button>
												
																<button class="btn btn-xs btn-danger" houid="<?=$val['hou_id']?>">
																	<i class="icon-trash bigger-120"></i>
																</button>
												
																
															</div>
												
															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-cog icon-only bigger-110"></i>
																	</button>
												
																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>
												
																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>
												
																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>
											<?php	} ?>	
												</tbody>
											</table>
											<div> <center>		
											<?php 
											
												// 显示分页
													$page=LinkPager::widget([
													    'pagination' => $pages,
													]);
												echo str_replace("href","ajaxhref",$page);
													?>
													</center>	
													</div>
										</div><!-- /.table-responsive -->
									</div><!-- /span -->
								</div><!-- /row -->

								
								<div id="modal-table" class="modal fade" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													Results for "Latest Registered Domains
												</div>
											</div>

											

											<div class="modal-footer no-margin-top">
												<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
													<i class="icon-remove"></i>
													Close
												</button>

												<ul class="pagination pull-right no-margin">
													<li class="prev disabled">
														<a href="#">
															<i class="icon-double-angle-left"></i>
														</a>
													</li>

													<li class="active">
														<a href="#">1</a>
													</li>

													<li>
														<a href="#">2</a>
													</li>

													<li>
														<a href="#">3</a>
													</li>

													<li class="next">
														<a href="#">
															<i class="icon-double-angle-right"></i>
														</a>
													</li>
												</ul>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								Inside
								<b>.container</b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> -->

		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				$('#loading-btn').on(ace.click_event, function () {
					var btn = $(this);
					btn.button('loading')
					setTimeout(function () {
						btn.button('reset')
					}, 2000)
				});
			
				$('#id-button-borders').attr('checked' , 'checked').on('click', function(){
						$('#default-buttons .btn').toggleClass('no-border');
				});
			})
		</script>
		
		<script>
			var insert_url="?r=houseins/insert";
			var file_url="?r=houseins/upload";
			var add_url="?r=houseins/addhou";
			var show_url="?r=houseins/show";
			var token = "<?= \Yii::$app->request->getCsrfToken()?>";
			var del_url="?r=houseins/delete";
			var err500="?r=error/error500";
			var cat_url="?r=houseins/cat";
		</script>
	<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>

