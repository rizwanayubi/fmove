<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Add Admin</h3>
			</div>
			<?php echo form_open('admin/add'); ?>
			<div class="box-body">
				<div class="col-sm-1 col-md-3"></div>
				<div class="col-sm-10 col-md-6">
					<div class="callus clearfix border_radius submit_property">

					<?php
if($this->session->flashdata('successsub'))
{
    echo "<br>
    <div class='col-md-offset-2 col-md-8'>
    <div  id='alert-pop' class='text-center alert alert-success'>";
    
echo $this->session->flashdata('successsub');
  echo "</div> 
  </div>";
echo "<script>
    window.location.hash = '#alert-pop';
    
</script>";
}
?>
						<div class="row clearfix">
							<div class="col-md-12">
								<label for="username" class="control-label">
									<span class="text-danger">*</span>Username</label>
								<div class="form-group">
									<input type="text" name="username" autofocus placeholder="Enter Username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username"
									/>
									<span class="text-danger">
										<?php echo form_error('username');?>
									</span>
								</div>
							</div>
							<div class="col-md-12">
								<label for="email" class="control-label">
									<span class="text-danger">*</span>Email</label>
								<div class="form-group">
									<input type="text" name="email" autofocus placeholder="Enter Email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
									<span class="text-danger">
										<?php echo form_error('email');?>
									</span>
								</div>
							</div>
							<div class="col-md-12">
								<label for="password" class="control-label">
									<span class="text-danger">*</span>Password</label>
								<div class="single-query form-group">
									<input type="password" autofocus placeholder="Password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control keyword-input"
									 id="password" />
									<span class="text-danger">
										<?php echo form_error('password');?>
									</span>
								</div>

							</div>
							<!-- <div class="col-md-6">
						<label for="log" class="control-label">Log</label>
						<div class="form-group">
							<textarea name="log" class="form-control" id="log"><?php echo $this->input->post('log'); ?></textarea>
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
			</div>
			<div class="col-sm-1 col-md-3"></div>
			<div class="col-sm-4"></div>

			<?php echo form_close(); ?>
		</div>
	</div>
</div>