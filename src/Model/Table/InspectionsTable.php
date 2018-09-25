<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Inspections Model
 *
 * @property \App\Model\Table\InspectionsTable|\Cake\ORM\Association\BelongsTo $Inspections
 * @property \App\Model\Table\BridgesTable|\Cake\ORM\Association\BelongsTo $Bridges
 * @property \App\Model\Table\InspectorsTable|\Cake\ORM\Association\BelongsTo $Inspectors
 * @property \App\Model\Table\DeteriorationsTable|\Cake\ORM\Association\HasMany $Deteriorations
 * @property \App\Model\Table\InspectionsTable|\Cake\ORM\Association\HasMany $Inspections
 *
 * @method \App\Model\Entity\Inspection get($primaryKey, $options = [])
 * @method \App\Model\Entity\Inspection newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Inspection[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Inspection|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Inspection|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Inspection patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Inspection[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Inspection findOrCreate($search, callable $callback = null, $options = [])
 */
class InspectionsTable extends Table
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

        $this->setTable('inspections');

        $this->belongsTo('Bridges', [
            'foreignKey' => 'bridge_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Deteriorations', [
            'foreignKey' => 'inspection_id'
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
            ->dateTime('inspection_date')
            ->requirePresence('inspection_date', 'create')
            ->notEmpty('inspection_date');

        $validator
            ->scalar('inspection_type')
            ->maxLength('inspection_type', 10)
            ->requirePresence('inspection_type', 'create')
            ->notEmpty('inspection_type');

        $validator
            ->scalar('soundness')
            ->maxLength('soundness', 1)
            ->requirePresence('soundness', 'create')
            ->notEmpty('soundness');

        $validator
            ->scalar('inspection_report')
            ->requirePresence('inspection_report', 'create')
            ->notEmpty('inspection_report');

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
        $rules->add($rules->existsIn(['inspection_id'], 'Inspections'));
        $rules->add($rules->existsIn(['bridge_id'], 'Bridges'));
        $rules->add($rules->existsIn(['inspector_id'], 'Inspectors'));

        return $rules;
    }
}
