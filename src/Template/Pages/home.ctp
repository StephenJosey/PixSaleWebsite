<?php $this->assign("title", "Home");  ?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">

    <ul class="side-nav">
            <li class="heading"><?= __('Where do you want to go?') ?></li>
            <li><?= $this->Html->link(__('About Us'), ['controller' => 'Home', 'action' => 'about']) ?></li>
    </ul>
</nav>
<h2>This is our Home page!</h2>