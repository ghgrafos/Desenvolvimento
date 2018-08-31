<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Images Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $Users
 * @property \App\Model\Table\CategoriesTable|\Cake\ORM\Association\BelongsToMany $Categories
 *
 * @method \App\Model\Entity\Image get($primaryKey, $options = [])
 * @method \App\Model\Entity\Image newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Image[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Image|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Image|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Image patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Image[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Image findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ImagesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('images');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Users', [
            'foreignKey' => 'image_id'
        ]);
        $this->belongsToMany('Categories', [
            'foreignKey' => 'image_id',
            'targetForeignKey' => 'category_id',
            'joinTable' => 'categories_images'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('url')
            ->maxLength('url', 500)
            ->requirePresence('url', 'create')
            ->notEmpty('url');

        $validator
            ->scalar('title')
            ->maxLength('title', 500)
            ->allowEmpty('title');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        return $validator;
    }
}
