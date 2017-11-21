<form class="well form-horizontal" method="post" enctype="multipart/form-data" action='#'>
	<fieldset>
		<!-- Form Start -->
		<legend>Edit/Remove City</legend> 
		
		<div class="form-group">
			<label for="listingtitle" class="control-label">Cities</label>
			<div class="input-group">
			  <table>
			  	<tr>
			  		<th>City Name</th>
			  		<th></th>
			  		<th>Actions</th>
			  	</tr>
			  	<?php
					$query = "SELECT * FROM tbl_city"; // Gets all cities
		  			$result = mysqli_query($link, $query);
				  	while($row = mysqli_fetch_array($result))
					{
				  	?>
				<tr>
					<td><p><?php echo $row['c_name']; ?></p></td>
					<td width=30px></td>
					<td>
					<a href="editCityProcess.php?id=<?php echo $row['c_id']; ?>"><img src="<?php echo ROOT_DIRECTORY; ?>img/edit.ico" style="width: 20px;" alt="edit" /></a>
					<a href="deleteCityProcess.php?id=<?php echo $row['c_id']; ?>"><img src="<?php echo ROOT_DIRECTORY; ?>img/delete.ico" style="width: 20px;" alt="delete"/></a></td>
					
				</tr>		
					<?php
					}
				?>
			  </table>
			</div>
		</div>    
	</fieldset>
</form>