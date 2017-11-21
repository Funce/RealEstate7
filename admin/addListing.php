<form class="well form-horizontal" method="post" enctype="multipart/form-data" action='#'>
	<fieldset>
		<!-- Form Start -->
		<legend>List a property</legend> 

		<div class="form-group">
			<label for="dwelling" class="control-label">Please Select</label>
			<select class="form-control" name="type" id="type1">
				<option selected="selected" value="0">Region ↓↓↓</option> 
				<?php
					$query = "SELECT * FROM tbl_city";
					$result = mysqli_query($link, $query);
					while ($row = mysqli_fetch_array($result))
					{?>
				<option value="<?php echo $row['c_id'];?>"><?php echo $row['c_name'];?></option>
					<?php
					}
					mysqli_free_result($result);
					?>
			</select>
		</div>  

		<div class="form-group">
			<label for="listingtitle" class="control-label">Listing Title</label>
			<div class="input-group">
			  <input type="text" class="form-control" name="listing-title" id="listing-title" aria-describedby="basic-addon1">
			</div>  <br />
			<h5><strong>Details</strong></h5>
			<textarea rows="8" cols="25" name="details"></textarea> 
			<br /><br />
			<h5><strong>Asking Price</strong></h5>
			<input type="text" name="price">$
		</div>
		
		<h5><strong>Upload Photo</strong></h5>
		<ul>          
			<li><input type="file" name="photo"></li>
		</ul>
		<span class="error-message"><?php echo $listing_error; ?></span>
		<br>
		<input type="reset"> <input type="submit">           
	</fieldset>
</form>