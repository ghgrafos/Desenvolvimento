<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Post']), ['action' => 'edit', $post->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Post']), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Posts']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Post']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Users']), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['User']), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Categories']), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Category']), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="posts view col-lg-10 col-md-9">
    <h3><?= h($post->title) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Url</th>
            <td><?= h($post->url) ?></td>
        </tr>
        <tr>
            <th>Title</th>
            <td><?= h($post->title) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($post->id) ?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($post->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($post->modified) ?></tr>
        </tr>
    </table>
    <div class="row">
        <h4>Description</h4>
        <?= $this->Text->autoParagraph(h($post->description)); ?>
    </div>
    <div class="row">
        <h4>Context</h4>
        <?= $this->Text->autoParagraph(h($post->context)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Users']) ?></h4>
        <?php if (!empty($post->users)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Group Id</th>
                <th>Image Id</th>
                <th>Post Id</th>
                <th>Category Id</th>
                <th>Created</th>
                <th>Modified</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($post->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->group_id) ?></td>
                <td><?= h($users->image_id) ?></td>
                <td><?= h($users->post_id) ?></td>
                <td><?= h($users->category_id) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Categories']) ?></h4>
        <?php if (!empty($post->categories)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Created</th>
                <th>Modified</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($post->categories as $categories): ?>
            <tr>
                <td><?= h($categories->id) ?></td>
                <td><?= h($categories->title) ?></td>
                <td><?= h($categories->created) ?></td>
                <td><?= h($categories->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $categories->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $categories->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categories', 'action' => 'delete', $categories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categories->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
