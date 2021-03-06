<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Prop Details Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('prop_detail/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Property Id</th>
						<th>Bathrooms</th>
						<th>Garage</th>
						<th>Bedrooms</th>
						<th>Area</th>
						<th>Lounge</th>
						<th>Price</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($prop_details as $p){ ?>
                    <tr>
						<td><?php echo $p['prop_id']; ?></td>
						<td><?php echo $p['bathrooms']; ?></td>
						<td><?php echo $p['garage']; ?></td>
						<td><?php echo $p['bedrooms']; ?></td>
						<td><?php echo $p['area']; ?></td>
						<td><?php echo $p['lounge']; ?></td>
						<td><?php echo $p['price']; ?></td>
						<td>
                            <a href="<?php echo site_url('prop_detail/edit/'.$p['prop_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('prop_detail/remove/'.$p['prop_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
