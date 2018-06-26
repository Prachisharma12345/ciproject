<?php include ('header.php'); ?>
<div class="container" style="margin-top:20px;">
	<h1>Add Articles</h1>
	<?php echo form_hidden('user_id','$this->session->userdata('id')'); ?>
	<?php form_open('admin/userValidation'); ?>
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label for="title">Article Title:</label>
				<?php echo form_input(['class'=>'form-control','placeholder'=>' Enter Article Title','name'=>'title','value'=>set_value('title')]); ?>
			</div>
		</div>
		<div class="col-lg-6" style="margin-top:40px;">
			<?php echo form_error('title'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">	
			<div class="form-group">
				<label for="body">Article body:</label>
				
				<?php echo form_textarea(['class'=>'form-control','placeholder'=>'Enter Article body','name'=>'body','value'=>set_value('body')]); ?>
			</div>
		</div>
			<div class="col-lg-6" style="margin-top:40px;">
			<?php echo form_error('body'); ?>
			</div>
	</div>
			<?php echo form_submit(['class'=>'btn btn-default','type'=>'submit','value'=>'Submit']); ?>
			<?php echo form_reset(['class'=>'btn btn-primary','type'=>'reset','value'=>'Reset']); ?>
			
			
		
		
	</div> 
	<?php include ('footer.php'); ?>