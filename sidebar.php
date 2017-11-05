<div class="well">
        <h3 class="text-center">Find Your Home</h3>
        <form class="form-horizontal">
          <div class="form-group">
            <label for="location1" class="control-label">Location</label>
            <select class="form-control" name="" id="location1">
              <option selected="selected" value="100">All regions</option>
              <?php
				$query = "SELECT DISTINCT c_name FROM tbl_city";
				$result = mysqli_query($link, $query);
				$counter = 0;
				while ($row = mysqli_fetch_array($result))
				{?>
				<option value="<?php echo $row['c_id'];?>"><?php echo $row['c_name'];?></option>
				<?php
				}
				mysqli_free_result();
				?>
            </select>
          </div>
          <div class="form-group">
            <label for="type1" class="control-label">Type</label>
            <select class="form-control" name="" id="type1">
              <option selected="selected" value="101">All</option>
              <option value="1">For Sale</option>
              <option value="2">For Rent</option>
              <option value="3">For Lease</option>
            </select>
          </div>
          <div class="form-group">
            <label for="pricefrom" class="control-label">Price From</label>
            <div class="input-group">
              <div class="input-group-addon" id="basic-addon1">$</div>
              <input type="text" class="form-control" id="pricefrom" aria-describedby="basic-addon1">
            </div>
          </div>
          <div class="form-group">
            <label for="priceto" class="control-label">Price To</label>
            <div class="input-group">
              <div class="input-group-addon" id="basic-addon2">$</div>
              <input type="text" class="form-control" id="priceto" aria-describedby="basic-addon1">
            </div>
          </div>
          <p class="text-center"><a href="#" class="btn btn-danger" role="button">Search </a></p>
        </form>
      </div>
      <hr>
      <h3 class="text-center">Agents</h3>
      <div class="media-object-default">
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object img-rounded" src="img/64X64.gif" alt="placeholder image"> </a> </div>
          <div class="media-body">
            <h4 class="media-heading">Clayton</h4>
            <abbr title="Phone">P:</abbr> (123) 456-7890 <a href="mailto:#">clayton@realeastate7.co.nz</a> </div>
        </div>
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object img-rounded" src="img/64X64.gif" alt="placeholder image"> </a> </div>
          <div class="media-body">
            <h4 class="media-heading">Elliott</h4>
            <abbr title="Phone">P:</abbr> (123) 456-7890 <a href="mailto:#">Elliott@realeastate7.co.nz</a> </div>
        </div>
      </div>