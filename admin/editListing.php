<form class="well form-horizontal" method="post" enctype="multipart/form-data" action='#'>
	<fieldset>
		<!-- Form Start -->
		<legend>Edit/Remove Listing</legend> 
		
		<div class="form-group">
			<label for="listingtitle" class="control-label">Cities</label>
			<div class="input-group">
			  <table>
			  	<tr>
			  		<th>Listing Title</th>
			  		<th>Region</th>
			  		<th>Details</th>
			  		<th>Asking Price</th>
			  		<th>Thumbnail</th>
			  		<th width=30px></th>
			  		<th>Actions</th>
			  	</tr>
			  	<?php
					$query = "SELECT * FROM tbl_property JOIN tbl_image ON p_id=i_p_id JOIN tbl_city ON p_c_id=c_id ORDER BY p_id ASC"; // Gets all cities
		  			$result = mysqli_query($link, $query);
				  	while($row = mysqli_fetch_array($result))
					{
				  	?>
				<tr>
					<td><p><?php echo $row['p_title']; ?></p></td>
					<td><p><?php echo $row['c_name']; ?></p></td>
					<td><p><?php echo $row['p_address']; ?></p></td>
					<td><p><?php echo $row['p_price']; ?></p></td>
					<td><p><!--Image--></p></td>
					<td></td>
					<td>
						<a href="editListingProcess.php?id=<?php echo $row['p_id']; ?>"><img src="<?php echo ROOT_DIRECTORY; ?>img/edit.ico" style="width: 20px;" alt="edit" /></a>
						<a href="deleteListingProcess.php?id=<?php echo $row['p_id']; ?>"><img src="<?php echo ROOT_DIRECTORY; ?>img/delete.ico" style="width: 20px;" alt="delete"/></a>
					</td>
					
				</tr>		
					<?php
					}
				?>
			  </table>
			</div>
		</div>    
	</fieldset>
</form>