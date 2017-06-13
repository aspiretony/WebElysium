<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Accounts Model
 *
 * @property \App\Model\Table\AccountBanTable|\Cake\ORM\Association\HasMany $AccountBan
 * @property \App\Model\Table\AccountServiceTable|\Cake\ORM\Association\HasMany $AccountService
 *
 * @method \App\Model\Entity\Account get($primaryKey, $options = [])
 * @method \App\Model\Entity\Account newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Account[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Account|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Account patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Account[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Account findOrCreate($search, callable $callback = null, $options = [])
 */
class AccountsTable extends Table
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

        $this->setTable('accounts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('AccountBan', [
            'foreignKey' => 'account_id'
        ]);
        $this->hasMany('AccountService', [
            'foreignKey' => 'account_id'
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
            ->requirePresence('account', 'create')
            ->notEmpty('account');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('pin', 'create')
            ->notEmpty('pin');

        $validator
            ->integer('cash')
            ->requirePresence('cash', 'create')
            ->notEmpty('cash');

        $validator
            ->boolean('logged_in')
            ->requirePresence('logged_in', 'create')
            ->notEmpty('logged_in');

        $validator
            ->integer('access_level')
            ->requirePresence('access_level', 'create')
            ->notEmpty('access_level');

        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        $validator
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->requirePresence('location', 'create')
            ->notEmpty('location');

        $validator
            ->dateTime('date_created')
            ->requirePresence('date_created', 'create')
            ->notEmpty('date_created');

        $validator
            ->dateTime('date_last_login')
            ->requirePresence('date_last_login', 'create')
            ->notEmpty('date_last_login');

        $validator
            ->requirePresence('creator_ip', 'create')
            ->notEmpty('creator_ip');

        $validator
            ->requirePresence('last_ip', 'create')
            ->notEmpty('last_ip');

        $validator
            ->requirePresence('current_ip', 'create')
            ->notEmpty('current_ip');

        $validator
            ->boolean('pin_attempt')
            ->requirePresence('pin_attempt', 'create')
            ->notEmpty('pin_attempt');

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

        return $rules;
    }
}
