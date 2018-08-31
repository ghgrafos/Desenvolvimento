<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['User']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Groups']), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Group']), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Images']), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Image']), ['controller' => 'Images', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Posts']), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Post']), ['controller' => 'Posts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Categories']), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Category']), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index col-md-10 columns content">
    <h3>Users</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('username') ?></th>
                <th><?= $this->Paginator->sort('password') ?></th>
                <th><?= $this->Paginator->sort('group_id') ?></th>
                <th><?= $this->Paginator->sort('image_id') ?></th>
                <th><?= $this->Paginator->sort('post_id') ?></th>
                <th><?= $this->Paginator->sort('category_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= $user->has('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?></td>
                <td><?= $user->has('image') ? $this->Html->link($user->image->title, ['controller' => 'Images', 'action' => 'view', $user->image->id]) : '' ?></td>
                <td><?= $user->has('post') ? $this->Html->link($user->post->title, ['controller' => 'Posts', 'action' => 'view', $user->post->id]) : '' ?></td>
                <td><?= $user->has('category') ? $this->Html->link($user->category->title, ['controller' => 'Categories', 'action' => 'view', $user->category->id]) : '' ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <center>
            <ul class="pagination">
                <?= $this->Paginator->prev('&laquo; ' . __('previous'), ['escape'=>false]) ?>
                <?= $this->Paginator->numbers(['escape'=>false]) ?>
                <?= $this->Paginator->next(__('next') . ' &raquo;', ['escape'=>false]) ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} records out of
         {{count}} total, starting on record {{start}}, ending on {{end}}')) ?></p>
        </div>
    </center>
</div>
</div>