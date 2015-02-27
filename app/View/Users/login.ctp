
<div id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col">
				&nbsp;
			</div>
			<div class="col-md-8 col">
				<div class="users form">
					<?php echo $this->Session->flash('auth'); ?>
					<?php echo $this->Form->create('User'); ?>
						<fieldset>
							<legend>
								<?php echo __('Please enter your username and password'); ?>
							</legend>
							<?php 
							echo $this->Form->input('username', array('class' => 'form-control'));
							echo $this->Form->input('password', array('class' => 'form-control'));
						?>
						</fieldset>
					<?php echo $this->Form->end(array(
					    'label' => 'Login',
					    'class' => 'btn btn-primary'
					)); ?>
				</div>
			</div>
			<div class="col-md-2 col">
				&nbsp;
			</div>
		</div>
	</div>
</div>