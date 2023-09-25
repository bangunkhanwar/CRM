<script>
$(document).ready(function() {
});

</script>
<div class="row">
	<div class="col-sm-12 col-md-6">
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">
				Name</span>
			</div>
			<input type="text"  id="lookup_key" name="t_lookup_key" class="form-control" placeholder="Search Key" onkeydown="if( event.keyCode == 13 ) pageLoadMemberBeonLookup(1)">
			
		</div>
	</div>
	<div class="col-sm-12 col-md-6">
		<div class="dataTables_length" id="DataTables_Table_0_length">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
								Store</span>
							</div>
							<select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm" id="store_search_beon" name="t_store_search_beon">
								<?php foreach($strlist as $strkey=>$str){ ?>
								  <option  value="<?=$str['StoreCode']?>"><?=$str['StoreCode']?> - <?=$str['Description']?></option>
								<?php }?>
							</select>
						</div>
		</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-sm-12 col-md-6">
		<div class="dataTables_length" id="DataTables_Table_0_length">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
								Birth Date</span>
							</div>
							<input class="form-control border-primary" type="date" placeholder="Birh Date" id="birthdate" name="t_birthdate" value="" max="9999-12-31" onkeydown="if( event.keyCode == 13 ) pageLoadMemberBeonLookup(1)">
						</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-6">
		<div class="dataTables_length" id="DataTables_Table_0_length">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
					Show</span>
				</div>
				<select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm" id="row_per_page" name="t_row_per_page">
					<option value="10">10</option>
					<option value="25">25</option>
					<option value="50">50</option>
					<option value="100">100</option>
				</select>
			</div>
		</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-sm-12 col-md-8">
		<div class="dataTables_length" id="DataTables_Table_0_length">
						<div class="input-group">
						
						</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-4">
		<div class="dataTables_length" id="DataTables_Table_0_length">
						<div class="input-group">
							<button type="button" class="btn btn-primary loading-button  ladda-button " onclick="pageLoadMemberBeonLookup(1)">Search Member <i class="la la-search"></i></button>
						</div>
		</div>
	</div>
</div>
<hr>
<div id="resultContentLookup">
</div>