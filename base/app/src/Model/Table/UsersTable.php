<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Auth\DefaultPasswordHasher;

class UsersTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Acl.Acl', ['type' => 'requester']);

        $this->belongsTo('Groups', [
            'foreignKey' => 'group_id'
        ]);
        $this->belongsTo('Images', [
            'foreignKey' => 'image_id'
        ]);
        $this->belongsTo('Posts', [
            'foreignKey' => 'post_id'
        ]);
        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id'
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 100)
            ->allowEmpty('password');

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->existsIn(['group_id'], 'Groups'));
        $rules->add($rules->existsIn(['image_id'], 'Images'));
        $rules->add($rules->existsIn(['post_id'], 'Posts'));
        $rules->add($rules->existsIn(['category_id'], 'Categories'));

        return $rules;
    }

    public function beforeSave(\Cake\Event\Event $event, \Cake\ORM\Entity $entity, 
	\ArrayObject $options)
    {
        $hasher = new DefaultPasswordHasher;
        $entity->password = $hasher->hash($entity->password);
        return true;
    }
}
