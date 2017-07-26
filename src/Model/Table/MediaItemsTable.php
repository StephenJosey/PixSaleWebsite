<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MediaItems Model
 *
 * @property \App\Model\Table\CategoriesTable|\Cake\ORM\Association\BelongsTo $Categories
 * @property \App\Model\Table\RegisteredUsersTable|\Cake\ORM\Association\BelongsTo $RegisteredUsers
 *
 * @method \App\Model\Entity\MediaItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\MediaItem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MediaItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MediaItem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MediaItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MediaItem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MediaItem findOrCreate($search, callable $callback = null, $options = [])
 */
class MediaItemsTable extends Table
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

        $this->setTable('media_items');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id'
        ]);
        $this->belongsTo('RegisteredUsers', [
            'foreignKey' => 'registered_user_id'
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
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->integer('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->allowEmpty('dimensions');

        $validator
            ->integer('video_length')
            ->allowEmpty('video_length');

        $validator
            ->requirePresence('media_type', 'create')
            ->notEmpty('media_type');

        $validator
            ->requirePresence('file_path', 'create')
            ->notEmpty('file_path')
            ->add('file_path', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['file_path']));
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        $rules->add($rules->existsIn(['registered_user_id'], 'RegisteredUsers'));

        return $rules;
    }
}
