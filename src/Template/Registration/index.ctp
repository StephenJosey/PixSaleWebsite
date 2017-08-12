<div id = "registration_form">
<?php echo $this->Form->create(null, ['class' => 'form-group', 'type' => 'post', 'url' => ['controller' => 'Registration', 'action' => 'index']]); ?>
    <?php echo $this->Form->input('username', ['type' => 'text', "class" => "form-control",
                'templates' => ['inputContainer' => '{{content}}']] ); ?>
    <?php echo $this->Form->input('pass', ['type' => 'password',
                'templates' => ['inputContainer' => '{{content}}'], 'class' => 'form-control', 'label' => 'Password']); ?>
    <?php echo $this->Form->input('email', ['type' => 'text', "class" => "form-control",
                'templates' => ['inputContainer' => '{{content}}']] ); ?>
    <?php echo $this->Form->input('first_name', ['type' => 'text', "class" => "form-control",
                'templates' => ['inputContainer' => '{{content}}'] , 'label' => 'First Name'] ); ?>
    <?php echo $this->Form->input('last_name', ['type' => 'text', "class" => "form-control", 
                'templates' => ['inputContainer' => '{{content}}'] , 'label' => 'Last Name'] ); ?>                        
    <br>
    <?php echo $this->Form->button(__('Register'), ['type'=>'submit', 'class' => 'btn btn-primary btn-block']); ?>
<?php echo $this->Form->end(); ?>
</div>