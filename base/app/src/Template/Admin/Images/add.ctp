<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Images'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="images form col-md-10 columns content">
    <?= $this->Form->create($image) ?>
    <fieldset>
        <legend><?= 'Add Image' ?></legend>
        <?php
            echo $this->Form->input('url');
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->input('categories._ids', ['options' => $categories]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
