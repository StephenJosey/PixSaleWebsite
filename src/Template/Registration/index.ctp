<div id = "registration_form">
<?php 
	echo $this->Form->create();
	echo $this->form->label('username', 'Username');
	echo $this->form->text('username');
	
	echo $this->form->label('pass', 'Password');
	echo $this->form->password('password');
	
	echo $this->form->label('email', 'Email');
	echo $this->form->text('email');
	
	echo $this->form->label('first_name', 'First Name');
	echo $this->form->text('first_name');
	
	
	echo $this->form->label('last_name', 'Last Name');
	echo $this->form->text('last_name');
	
	echo $this->Form->submit('Create Account');
	echo $this->Form->end();
	
	
	
	
?>
</div>