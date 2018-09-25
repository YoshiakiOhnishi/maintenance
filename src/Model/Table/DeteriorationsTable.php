<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Deteriorations Model
 *
 * @property \App\Model\Table\DeteriorationsTable|\Cake\ORM\Association\BelongsTo $Deteriorations
 * @property \App\Model\Table\InspectionsTable|\Cake\ORM\Association\BelongsTo $Inspections
 * @property \App\Model\Table\MembersTable|\Cake\ORM\Association\BelongsTo $Members
 * @property \App\Model\Table\DeteriorationsTable|\Cake\ORM\Association\HasMany $Deteriorations
 *
 * @method \App\Model\Entity\Deterioration get($primaryKey, $options = [])
 * @method \App\Model\Entity\Deterioration newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Deterioration[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Deterioration|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Deterioration|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Deterioration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Deterioration[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Deterioration findOrCreate($search, callable $callback = null, $options = [])
 */
class DeteriorationsTable extends Table
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

        $this->setTable('deteriorations');

        $this->belongsTo('Inspections', [
            'foreignKey' => 'inspection_id',
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
            ->scalar('deterioration_type')
            ->maxLength('deterioration_type', 10)
            ->requirePresence('deterioration_type', 'create')
            ->notEmpty('deterioration_type');

        $validator
            ->scalar('deterioration_level_evaluation')
            ->maxLength('deterioration_level_evaluation', 1)
            ->requirePresence('deterioration_level_evaluation', 'create')
            ->notEmpty('deterioration_level_evaluation');

        $validator
            ->scalar('deterioration_level_quantitative')
            ->maxLength('deterioration_level_quantitative', 10)
            ->requirePresence('deterioration_level_quantitative', 'create')
            ->notEmpty('deterioration_level_quantitative');

        $validator
            ->scalar('soundness')
            ->maxLength('soundness', 1)
            ->requirePresence('soundness', 'create')
            ->notEmpty('soundness');

        $validator
            ->scalar('deterioration_cause')
            ->maxLength('deterioration_cause', 20)
            ->requirePresence('deterioration_cause', 'create')
            ->notEmpty('deterioration_cause');

        $validator
            ->scalar('inspection_method')
            ->maxLength('inspection_method', 20)
            ->requirePresence('inspection_method', 'create')
            ->notEmpty('inspection_method');

        $validator
            ->scalar('strategy_classification')
            ->maxLength('strategy_classification', 2)
            ->requirePresence('strategy_classification', 'create')
            ->notEmpty('strategy_classification');

        $validator
            ->requirePresence('deterioration_photo', 'create')
            ->notEmpty('deterioration_photo');

        $validator
            ->scalar('memo')
            ->requirePresence('memo', 'create')
            ->notEmpty('memo');

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
        $rules->add($rules->existsIn(['deterioration_id'], 'Deteriorations'));
        $rules->add($rules->existsIn(['inspection_id'], 'Inspections'));
        $rules->add($rules->existsIn(['member_id'], 'Members'));

        return $rules;
    }
}
