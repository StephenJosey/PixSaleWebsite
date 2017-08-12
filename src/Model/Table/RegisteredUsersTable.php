<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RegisteredUsers Model
 *
 * @property \App\Model\Table\MediaItemsTable|\Cake\ORM\Association\HasMany $MediaItems
 *
 * @method \App\Model\Entity\RegisteredUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\RegisteredUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RegisteredUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RegisteredUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RegisteredUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RegisteredUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RegisteredUser findOrCreate($search, callable $callback = null, $options = [])
 */
class RegisteredUsersTable extends Table
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

        $this->setTable('registered_users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('MediaItems', [
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('pass', 'create')
            ->notEmpty('pass');

        $validator
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('username')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }
}
