<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Substructures Model
 *
 * @property \App\Model\Table\BridgesTable|\Cake\ORM\Association\BelongsTo $Bridges
 * @property \App\Model\Table\DesignCompaniesTable|\Cake\ORM\Association\BelongsTo $DesignCompanies
 * @property \App\Model\Table\ConstructionCompaniesTable|\Cake\ORM\Association\BelongsTo $ConstructionCompanies
 *
 * @method \App\Model\Entity\Substructure get($primaryKey, $options = [])
 * @method \App\Model\Entity\Substructure newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Substructure[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Substructure|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Substructure|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Substructure patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Substructure[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Substructure findOrCreate($search, callable $callback = null, $options = [])
 */
class SubstructuresTable extends Table
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

        $this->setTable('substructures');

        $this->belongsTo('Bridges', [
            'foreignKey' => 'bridge_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('DesignCompanies', [
            'foreignKey' => 'design_company_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ConstructionCompanies', [
            'foreignKey' => 'construction_company_id',
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
            ->requirePresence('skeleton_number', 'create')
            ->notEmpty('skeleton_number');

        $validator
            ->requirePresence('skeleton_branch_number', 'create')
            ->notEmpty('skeleton_branch_number');

        $validator
            ->scalar('structure_classification')
            ->maxLength('structure_classification', 10)
            ->requirePresence('structure_classification', 'create')
            ->notEmpty('structure_classification');

        $validator
            ->scalar('material')
            ->maxLength('material', 10)
            ->requirePresence('material', 'create')
            ->notEmpty('material');

        $validator
            ->numeric('height')
            ->requirePresence('height', 'create')
            ->notEmpty('height');

        $validator
            ->scalar('foundation_type')
            ->maxLength('foundation_type', 10)
            ->requirePresence('foundation_type', 'create')
            ->notEmpty('foundation_type');

        $validator
            ->dateTime('completion_date')
            ->requirePresence('completion_date', 'create')
            ->notEmpty('completion_date');

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
        $rules->add($rules->existsIn(['bridge_id'], 'Bridges'));
        $rules->add($rules->existsIn(['design_company_id'], 'DesignCompanies'));
        $rules->add($rules->existsIn(['construction_company_id'], 'ConstructionCompanies'));

        return $rules;
    }
}
