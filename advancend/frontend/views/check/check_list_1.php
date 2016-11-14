<?php use yii\helpers\Html;use yii\widgets\LinkPager;?>
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
														<th><i class="icon-time bigger-110 hidden-480"></i>
															提交日期</th>

														<th>
															<i class="icon-time bigger-110 hidden-480"></i>
															续租起始日期
														</th>
														<th><i class="icon-time bigger-110 hidden-480"></i>续租终止日期</th>
														<th class="hidden-300">预付租金</th>
														<th class="hidden-300">合同状态</th>
														<th>操作</th>
													</tr>
												</thead>
												<tbody id="tbody">
												<?php foreach ($checklist as $val) { ?>
														<tr>
														<td class="center">
															<label>
																<input type="checkbox" class="aces" renid="<?=$val['ren_id']?>"/>
																<span class="lbl"></span>
															</label>
														</td>
												
														<td>
															<a href="#"><?=$val['users']['user_name']?></a>
														</td>
														<td>
															<a href="#"><?=$val['room']['room_city']?></a>
														</td>
														<td><?=date("Y-m-d",$val['sub_time'])?></td>
														<td class="hidden-480"><?=date("Y-m-d",$val['start_time'])?></td>
														
												
														<td class="hidden-480">
															
															<?=date("Y-m-d",$val['end_time'])?>
														</td>
														<td><?=$val['rent'];?>￥</td>
														<td>
															<span class="label label-sm label-warning">
															<?php if($val['ren_status']==0){?>
																审核中
																<?php }elseif($val['ren_status']==1){?>
																生效
																<?php }elseif($val['ren_status']==2){?>
																作废
																<?php } ?>
																</span>
															</td>
														
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-success" renid="<?=$val['ren_id']?>">
																	<i class="icon-ok bigger-120"></i>
																</button>
												
																<button class="btn btn-xs btn-info" renid="<?=$val['ren_id']?>">
																	<i class="icon-edit bigger-120"></i>
																</button>
												
																<button class="btn btn-xs btn-danger" renid="<?=$val['ren_id']?>">
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