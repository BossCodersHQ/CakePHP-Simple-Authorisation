<h3>-Register-</h3>
<div class="container">
	<div class="users form">
	<?php echo $this->Form->create('User'); ?>
	    <fieldset>
	        <?php echo $this->Form->input('username');
	        echo $this->Form->input('password');
	        // The default option for user has been set to author for safety reasons
	        // This way no user can create a new admin from the client side
	        // echo $this->Form->input('role', array(
	        //     'options' => array('admin' => 'Admin', 'author' => 'Author')
	        // ))
	        ;
	    ?>
	    </fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>