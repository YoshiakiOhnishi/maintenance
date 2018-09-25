<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BridgeMembers Model
 *
 * @property \App\Model\Table\MembersTable|\Cake\ORM\Association\BelongsTo $Members
 *
 * @method \App\Model\Entity\BridgeMember get($primaryKey, $options = [])
 * @method \App\Model\Entity\BridgeMember newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BridgeMember[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BridgeMember|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BridgeMember|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BridgeMember patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BridgeMember[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BridgeMember findOrCreate($search, callable $callback = null, $options = [])
 */
class BridgeMembersTable extends Table
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

        $this->setTable('bridge_members');
        $this->primaryKey('member_id');
        $this->hasMany('Repairs', [
            'foreignKey' => 'member_id'
        ]);
        $this->hasMany('Deteriorations', [
            'foreignKey' => 'member_id'
        ]);
        $this->hasMany('SensorSettings', [
            'foreignKey' => 'member_id'
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
            ->scalar('construction_type')
            ->maxLength('construction_type', 10)
            ->requirePresence('construction_type', 'create')
            ->notEmpty('construction_type');

        $validator
            ->requirePresence('span_number/skeleton_number', 'create')
            ->notEmpty('span_number/skeleton_number');

        $validator
            ->requirePresence('branch_number', 'create')
            ->notEmpty('branch_number');

        $validator
            ->scalar('member_sign')
            ->maxLength('member_sign', 3)
            ->requirePresence('member_sign', 'create')
            ->notEmpty('member_sign');

        $validator
            ->scalar('member_name')
            ->maxLength('member_name', 10)
            ->requirePresence('member_name', 'create')
            ->notEmpty('member_name');

        $validator
            ->integer('element_number')
            ->requirePresence('element_number', 'create')
            ->notEmpty('element_number');

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
        $rules->add($rules->existsIn(['member_id'], 'Members'));

        return $rules;
    }
}
