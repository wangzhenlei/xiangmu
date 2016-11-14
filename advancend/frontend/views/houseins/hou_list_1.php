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
																<input type="checkbox" class="aces" conid="<?=$val['hou_id']?>"/>
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
								