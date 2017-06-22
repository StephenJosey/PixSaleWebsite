<?php $this->assign("title", $title);  ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
            <li class="heading"><?= __('Developers') ?></li>
            <li><?= $this->Html->link(__('Stephen Josey'), ['controller' => 'Home', 'action' => 'stephen']) ?></li>
            <li><?= $this->Html->link(__('Ryan Jung'), ['controller' => 'Home', 'action' => 'ryan']) ?></li>
            <li><?= $this->Html->link(__('Yuezhou Yu'), ['controller' => 'Home', 'action' => 'Yuezhou']) ?></li>
            <li><?= $this->Html->link(__('Manuel Duran'), ['controller' => 'Home', 'action' => 'manuel']) ?></li>
            <li><?= $this->Html->link(__('Youssef Hakkou'), ['controller' => 'Home', 'action' => 'youssef']) ?></li>
    </ul>
</nav>
<h2>Find out about our developers!</h2>
