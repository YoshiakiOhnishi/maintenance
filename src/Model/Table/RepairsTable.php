<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Repairs Model
 *
 * @property \App\Model\Table\RepairsTable|\Cake\ORM\Association\BelongsTo $Repairs
 * @property \App\Model\Table\BridgesTable|\Cake\ORM\Association\BelongsTo $Bridges
 * @property \App\Model\Table\MembersTable|\Cake\ORM\Association\BelongsTo $Members
 * @property \App\Model\Table\ConstructionCompaniesTable|\Cake\ORM\Association\BelongsTo $ConstructionCompanies
 * @property \App\Model\Table\RepairsTable|\Cake\ORM\Association\HasMany $Repairs
 *
 * @method \App\Model\Entity\Repair get($primaryKey, $options = [])
 * @method \App\Model\Entity\Repair newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Repair[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Repair|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Repair|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Repair patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Repair[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Repair findOrCreate($search, callable $callback = null, $options = [])
 */
class RepairsTable extends Table
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

        $this->setTable('repairs');

        $this->belongsTo('Bridges', [
            'foreignKey' => 'bridge_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Members', [
            'foreignKey' => 'member_id',
            'joinType' => 'INNER'
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
            ->scalar('repair_type')
            ->maxLength('repair_type', 10)
            ->requirePresence('repair_type', 'create')
            ->notEmpty('repair_type');

        $validator
            ->scalar('repair_method')
            ->maxLength('repair_method', 20)
            ->requirePresence('repair_method', 'create')
            ->notEmpty('repair_method');

        $validator
            ->dateTime('repair_date')
            ->requirePresence('repair_date', 'create')
            ->notEmpty('repair_date');

        $validator
            ->scalar('repair_photo')
            ->requirePresence('repair_photo', 'create')
            ->notEmpty('repair_photo');

        $validator
            ->scalar('cost')
            ->maxLength('cost', 20)
            ->requirePresence('cost', 'create')
            ->notEmpty('cost');

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
        $rules->add($rules->existsIn(['repair_id'], 'Repairs'));
        $rules->add($rules->existsIn(['bridge_id'], 'Bridges'));
        $rules->add($rules->existsIn(['member_id'], 'Members'));
        $rules->add($rules->existsIn(['construction_company_id'], 'ConstructionCompanies'));

        return $rules;
    }
}
