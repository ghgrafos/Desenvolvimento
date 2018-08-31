<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {
        $this->table('comments')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('comment', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('url', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->create();

        $this->table('messages')
            ->addColumn('sender', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('receiver', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('subject', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('message', 'text', [
                'default' => null,
                'limit' => 4294967295,
                'null' => true,
            ])
            ->create();

        $this->table('pages')
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('body', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('url', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->create();

    }

    public function down()
    {
        $this->dropTable('comments');
        $this->dropTable('messages');
        $this->dropTable('pages');
    }
}
