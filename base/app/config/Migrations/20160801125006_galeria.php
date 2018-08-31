<?php
use Migrations\AbstractMigration;

class Galeria extends AbstractMigration
{
    public function up()
    {

        $this->table('categories')
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('categories_images')
            ->addColumn('category_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('image_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'category_id',
                ]
            )
            ->addIndex(
                [
                    'image_id',
                ]
            )
            ->create();

        $this->table('categories_posts')
            ->addColumn('category_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('post_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'category_id',
                ]
            )
            ->addIndex(
                [
                    'post_id',
                ]
            )
            ->create();

        $this->table('images')
            ->addColumn('url', 'string', [
                'default' => null,
                'limit' => 500,
                'null' => false,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 500,
                'null' => true,
            ])
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('posts')
            ->addColumn('url', 'string', [
                'default' => null,
                'limit' => 500,
                'null' => false,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 500,
                'null' => true,
            ])
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('context', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('categories_images')
            ->addForeignKey(
                'category_id',
                'categories',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->addForeignKey(
                'image_id',
                'images',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();
    }

    public function down()
    {
        $this->table('categories_images')
            ->dropForeignKey(
                'category_id'
            )
            ->dropForeignKey(
                'image_id'
            );

        $this->table('categories_posts')
            ->dropForeignKey(
                'category_id'
            )
            ->dropForeignKey(
                'post_id'
            );

        $this->dropTable('categories');
        $this->dropTable('categories_images');
        $this->dropTable('images');
        $this->dropTable('posts');
    }
}
