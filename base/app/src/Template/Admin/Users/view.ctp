<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['User']), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['User']), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Users']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['User']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Groups']), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Group']), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Images']), ['controller' => 'Images', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Image']), ['controller' => 'Images', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Posts']), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Post']), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Categories']), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Category']), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view col-lg-10 col-md-9">
    <h3><?= h($user->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Username</th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th>Group</th>
            <td><?= $user->has('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Image</th>
            <td><?= $user->has('image') ? $this->Html->link($user->image->title, ['controller' => 'Images', 'action' => 'view', $user->image->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Post</th>
            <td><?= $user->has('post') ? $this->Html->link($user->post->title, ['controller' => 'Posts', 'action' => 'view', $user->post->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Category</th>
            <td><?= $user->has('category') ? $this->Html->link($user->category->title, ['controller' => 'Categories', 'action' => 'view', $user->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($user->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($user->modified) ?></tr>
        </tr>
    </table>
</div>
