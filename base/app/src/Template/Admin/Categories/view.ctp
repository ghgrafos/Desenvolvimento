<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Category']), ['action' => 'edit', $category->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Category']), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Categories']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Category']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Users']), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['User']), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Images']), ['controller' => 'Images', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Image']), ['controller' => 'Images', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Posts']), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Post']), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categories view col-lg-10 col-md-9">
    <h3><?= h($category->title) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Title</th>
            <td><?= h($category->title) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($category->id) ?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($category->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($category->modified) ?></tr>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Users']) ?></h4>
        <?php if (!empty($category->users)): ?>
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
            <?php foreach ($category->users as $users): ?>
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
        <h4><?= __('Related {0}', ['Images']) ?></h4>
        <?php if (!empty($category->images)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Url</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created</th>
                <th>Modified</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->images as $images): ?>
            <tr>
                <td><?= h($images->id) ?></td>
                <td><?= h($images->url) ?></td>
                <td><?= h($images->title) ?></td>
                <td><?= h($images->description) ?></td>
                <td><?= h($images->created) ?></td>
                <td><?= h($images->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Images', 'action' => 'view', $images->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Images', 'action' => 'edit', $images->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Images', 'action' => 'delete', $images->id], ['confirm' => __('Are you sure you want to delete # {0}?', $images->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Posts']) ?></h4>
        <?php if (!empty($category->posts)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Url</th>
                <th>Title</th>
                <th>Description</th>
                <th>Context</th>
                <th>Created</th>
                <th>Modified</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->posts as $posts): ?>
            <tr>
                <td><?= h($posts->id) ?></td>
                <td><?= h($posts->url) ?></td>
                <td><?= h($posts->title) ?></td>
                <td><?= h($posts->description) ?></td>
                <td><?= h($posts->context) ?></td>
                <td><?= h($posts->created) ?></td>
                <td><?= h($posts->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Posts', 'action' => 'view', $posts->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Posts', 'action' => 'edit', $posts->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Posts', 'action' => 'delete', $posts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $posts->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
