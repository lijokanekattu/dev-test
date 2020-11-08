<style>
table {
    border-collapse:separate;
    border:solid black 1px;
    border-radius:6px;
    -moz-border-radius:6px;
}
.table>tbody>tr>td{
border-top: 0px solid #ddd;
text-align:left;
}
.table>thead>tr>th{
border-top: 0px solid #ddd;
text-align:left;
}
</style>
<!-- Character listing -->
<div style="min-height: 300px;max-height: 550px; overflow-y:scroll;overflow-x: hidden;text-align:center;">

				<?php
					$result_val=$result_list;
					//echo "<pre>";
					//print_r($result_val);exit;
					if(isset($result_val['results']))
					{
						foreach($result_val['results'] as $val)
						{
						
				?>
				<div class="row">

						<div class="col-md-11 col-xs-11" style="padding-left:30px">

							<div class="row" style="background-color:#000000; margin-bottom:10px;border-radius: 15px;">

										<div class="col-md-3 col-xs-3">
										     <img src="<?=$val['image']; ?>" class="img-responsive img-circle" alt="" style="margin-top: 12%;width:100%" > 
										</div>
										<div class="col-md-9 col-xs-9 table-responsive">
										       <table class="table" style="margin-top: 2%">
									
																		<tr>
																			<td style="width:30%;text-align:left;">
																			Name 
																			</td>
																			<td style="text-align:left">:<strong>
																			<?php echo $val['name']; ?> (<?php echo $val['status']; ?>)<strong>
																			</td>
																		
																		</tr>
																		<tr>
																			<td style="width:30%;text-align:left">
																			Gender 
																			</td>
																			<td style="text-align:left">:<strong>
																			<?php echo $val['gender']; ?><strong>
																			</td>
																		
																		</tr>
																		<tr>
																			<td style="text-align:left">
																			Species
																			</td>
																			<td style="text-align:left">:<strong>
																			<?php echo $val['species']; ?></strong>
																			</td>
																		
																		</tr>
																		<tr>
																			<td style="text-align:left">
																			Orgin
																			</td>
																			<td style="text-align:left">:<strong>
																			<?php echo $val['origin']['name']; ?></strong>
																			</td>
																		
																		</tr>
																		<tr>
																			<td colspan="2" style="text-align:left">
																			<button type="button" class="btn btn-primary" onclick="appeared_episode(<?=$val['id']; ?>,'<?=$val['name']; ?>');">Click Here to See Appear Episodes</button>
																			</td>
																			
																		
																		</tr>
														
									
															</table>
										 </div>
                               </div>
								
							</div>
				</div>
				<?php
			}
			}else{

				echo "No Result Found....";
			}
			?>	
</div>
<!-- Next and Previous -->
<div class="row" style="margin-top:10px">
		<div class="col-md-6 col-xs-6" style="text-align:left">
		<?php if(isset($result_val['info']['prev']) && $result_val['info']['prev']!=""){ ?>
		<button type="button" class="btn btn-primary" onclick="paginationfun('<?=$result_val['info']['prev']; ?>');">Prev<<</button>
		<?php } ?>
		</div>
		<div class="col-md-5 col-xs-5" style="text-align:right">
		<?php if(isset($result_val['info']['next']) && $result_val['info']['next']!=""){ ?>
		<button type="button" class="btn btn-primary" onclick="paginationfun('<?=$result_val['info']['next']; ?>');">Next>></button>
		<?php } ?>
		</div>
		<div class="col-md-1 col-xs-1" style="text-align:right">
		</div>
</div>
	