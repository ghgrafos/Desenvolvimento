<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Posts'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Post'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form col-md-10 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= 'Edit User' ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('group_id', ['options' => $groups, 'empty' => true]);
            echo $this->Form->input('image_id', ['options' => $images, 'empty' => true]);
            echo $this->Form->input('post_id', ['options' => $posts, 'empty' => true]);
            echo $this->Form->input('category_id', ['options' => $categories, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
