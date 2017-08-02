<section class="mainContent clearfix logIn">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
          <div class="panel panel-default">
            <div class="panel-heading"><h3>Upload</h3></div>
            <div class="panel-body">
                <?php echo $this->Form->create($uploadData, ['type' => 'file']); ?>
                    <div class="form-group"><?php echo $this->Form->input('title', ['type' => 'text', 'class' => 'form-control']); ?></div>
                    <div class="form-group"><?php echo $this->Form->input('price', ['type' => 'text', 'class' => 'form-control']); ?></div>
                    <div class="form-group"><?php echo $this->Form->input('description', ['type' => 'text', 'class' => 'form-control']); ?></div>
                    <div class="form-group"><?php echo $this->Form->input('category', ['type' => 'select', 'class' => 'form-control', 'options' => $categories]); ?></div>
                    <div class="form-group"><?php echo $this->Form->input('file', ['type' => 'file', 'class' => 'form-control']); ?></div>
                    <div class="form-group"><?php echo $this->Form->button(__('Upload File'), ['type'=>'submit', 'class' => 'btn btn-right btn-block']); ?></div>
                <?php echo $this->Form->end(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>