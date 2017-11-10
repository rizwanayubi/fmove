<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit Admin </h3>
            </div>
			<?php echo form_open('admin/edit/'.$admin['id']); ?>
			<div class="box-body">
					<div class="col-sm-1 col-md-3"></div>
					<div class="col-sm-10 col-md-6">
						<div class="callus clearfix border_radius submit_property">
	
				<div class="row clearfix">
					
					<div class="col-md-12">
						<label for="username" class="control-label"><span class="text-danger">*</span>Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $admin['username']); ?>" class="form-control" id="username" />
							<span class="text-danger"><?php echo form_error('username');?></span>
						</div>
					</div>
					<div class="col-md-12">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $admin['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-12">
						<label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $admin['password']); ?>" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password');?></span>
						</div>
					</div>
					<!-- <div class="col-md-6">
						<label for="log" class="control-label">Log</label>
						<div class="form-group">
							<textarea name="log" class="form-control" id="log"><?php echo ($this->input->post('log') ? $this->input->post('log') : $admin['log']); ?></textarea>
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
		<div class="col-sm-1 col-md-3"></div>
		<div class="col-sm-4"></div>			
			<?php echo form_close(); ?>
		</div>
    </div>
</div>