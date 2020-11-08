<div class="container">
	<h1>Rick and Morty</h1>
	<!-- Searching Section -->
    <form class="form-horizontal form-label-left input_mask" id="search_form"  onsubmit="searchresult(); return false;">
			<div class="row">
						<div class="col-md-5 col-xs-5">
						   <input type="text" value="" style="width:100%" class="form-control" name="search_val_name" id="search_val_name" placeholder="Search by Character Name">
						</div>
						<div class="col-md-4 col-xs-4">
						   <input type="text" value="" style="width:100%" class="form-control" name="search_val_species" id="search_val_species" placeholder="Search by Species">
						</div>
						<div class="col-md-3 col-xs-3"></div>				
			</div>
			<div class="row" style="margin-top:10px;">
						<div class="col-md-5 col-xs-5">
						   <input type="text" value="" style="width:100%" class="form-control" name="search_gender" id="search_gender" placeholder="Search by Gender">
						</div>
						<div class="col-md-5 col-xs-5">
							<button type="submit" class="btn btn-success">Search</button>	
							<button type="button" class="btn btn-primary" onclick="resetsearch();">Clear</button>
						</div>
						<div class="col-md-2 col-xs-2"></div>					
			</div>
	</form>
	<!-- Character loading div -->
	<div class="row" style="background-color:#808080">
				<div class="col-md-10 col-xs-10" id="search_result_list" style="margin-top:20px;text-align:center"></div>
				<div class="col-md-2 col-xs-2"></div>				
	</div>
</div>
<!-- Character appeare episode popup -->
<div class="modal fade" id="episodemodal" role="dialog" style="color:#000000 !important;">
    <div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<div class="modal-content">
							<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title" id="char_name"></h4>
							</div>
							<div class="modal-body" id="ch_episode_list_data" style="min-height: 300px;max-height: 600px; overflow-y:scroll;overflow-x:hidden;text-align:center;">
							</div>
							<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
			</div>
    </div>
  </div>
