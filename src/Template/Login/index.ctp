<div id = "registration_form">
<?php 
	echo $this->Form->create();
	echo $this->form->label('username', 'Username');
	echo $this->form->text('username');
	
	echo $this->form->label('pass', 'Password');
	echo $this->form->password('pass');
	
	echo $this->Form->submit('Login');
	echo $this->Form->end();	
?>
</div>