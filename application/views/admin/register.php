<?php include ('header.php'); ?>
<div class="container" style="margin-top:20px;">
	<h1>Register Form</h1>
	<?php echo form_open('admin/sendemail'); ?>
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label for="Username">Username:</label>
				<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'uname','value'=>	set_value('uname')]); ?>
			</div>
		</div>
		<div class="col-lg-6" style="margin-top: 40px;">
			<?php form_error('uname'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">	
			<div class="form-group">
				<label for="pwd">Password:</label>
				
				<?php echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter password','name'=>'pass','value'=>set_value('pass')]); ?>
			</div>
		</div>
			<div class="col-lg-6" style="margin-top:40px;">
			<?php echo form_error('password'); ?>
			</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label for="Firstname">First Name:</label>
				<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Firstname','type'=>'text','name'=>'fname','value'=>set_value('fname')]); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label for="Lastname">Last Name:</label>
				<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Lastname','name'=>'lname','value'=>set_value('lname')]); ?>
			</div>
		</div>
		<div class="col-lg-6" style="margin-top:40px;">
			<?php echo form_error('lname'); ?>
			</div>
	</div>
	
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label for="email">Email Address:</label>
				<?php echo form_input(['class'=>'form-control','placeholder'=>' Enter email address','name'=>'email','value'=>set_value('email')]); ?>
			</div>
		</div>
		<div class="col-lg-6" style="margin-top:40px;">
			<?php echo form_error('email'); ?>
		</div>
	</div>

	
			<?php echo form_submit(['class'=>'btn btn-default','type'=>'submit','value'=>'Submit']); ?>
			<?php echo form_reset(['class'=>'btn btn-primary','type'=>'reset','value'=>'Reset']); ?>
			
		
		
	</div> 
	<?php include ('footer.php'); ?>