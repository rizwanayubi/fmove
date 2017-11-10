<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title"> Edit User</h3>
            </div>
			<?php echo form_open('user/edit/'.$user['userid']); ?>
			<div class="box-body">
				<div class="col-sm-1 col-md-2"></div>
				<div class="col-sm-10 col-md-8">
					<div class="callus clearfix border_radius submit_property">

						<div class="row clearfix">
							<div class="col-md-6">
								<label for="username" class="control-label"><span class="text-danger">*</span>Username</label>
								<div class="form-group">
									<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $user['username']); ?>" class="form-control" id="username" />
									<span class="text-danger"><?php echo form_error('username');?></span>
								</div>
							</div>
							<div class="col-md-6">
								<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
								<div class="form-group">
									<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $user['email']); ?>" class="form-control" id="email" />
									<span class="text-danger"><?php echo form_error('email');?></span>
								</div>
							</div>
							<div class="col-md-6">
								<label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
								<div class="form-group">
									<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $user['password']); ?>" class="form-control" id="password" />
									<span class="text-danger"><?php echo form_error('password');?></span>
								</div>
							</div>
							
							<!-- <div class="col-md-6">
								<label for="created_on" class="control-label"><span class="text-danger">*</span>Created On</label>
								<div class="form-group">
									<input type="text" name="created_on" value="<?php echo ($this->input->post('created_on') ? $this->input->post('created_on') : $user['created_on']); ?>" class="form-control" id="created_on" />
									<span class="text-danger"><?php echo form_error('created_on');?></span>
								</div>
							</div> -->
							<div class="col-md-6">
								<label for="agent_image" class="control-label">User Image</label>
								<div class="input-group form-group agncy_btn">
									<label class="input-group-btn">
										<span class="btn btn-primary">
											Upload Image… <input name="user_file" value="" class="form-control" id="upload_image" style="display: none;" type="file">
										</span>
									</label>
									<input id="upload_image_sho" value="" class="form-control" readonly="" type="text">
									<span class="text-danger">
																	</span>
								</div>
							</div>
							<!-- <div class="col-md-6">
								<label for="payment_details" class="control-label">Payment Details</label>
								<div class="form-group">
									<div class="single-query">
										<div class="intro">
											<select name="payment_details" class="form-control"  id="payment_details">
												<option value="" selected="" disabled=""><?php echo ($this->input->post('payment_details') ? $this->input->post('payment_details') : $user['payment_details']); ?></option>
												<option value="paypal">Paypal</option>
												<option value="credit_card">Credit Card</option>
											</select>
										</div>
									</div>
								
								</div>
							</div> -->
							<!-- <div class="col-md-6">
								<label for="myfavorites" class="control-label">Myfavorites</label>
								<div class="form-group">
									<textarea name="myfavorites" class="form-control" id="myfavorites"><?php echo ($this->input->post('myfavorites') ? $this->input->post('myfavorites') : $user['myfavorites']); ?></textarea>
								</div>
							</div> -->
						</div>
						<div class="box-footer">
							<div class="col-md-6 col-md-offset-3">
								<button type="submit" class="btn btn-block btn-success">
									<i class="fa fa-check"></i> Save
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-1 col-md-2"></div>
				<div class="col-sm-4"></div>
			</div>			
			<?php echo form_close(); ?>
		</div>
    </div>
</div>