<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Posts'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Post'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categories form col-md-10 columns content">
    <?= $this->Form->create($category) ?>
    <fieldset>
        <legend><?= 'Add Category' ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('images._ids', ['options' => $images]);
            echo $this->Form->input('posts._ids', ['options' => $posts]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
