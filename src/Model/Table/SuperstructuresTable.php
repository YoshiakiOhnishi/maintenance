<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Superstructures Model
 *
 * @property \App\Model\Table\BridgesTable|\Cake\ORM\Association\BelongsTo $Bridges
 * @property \App\Model\Table\BearingSupportMakersTable|\Cake\ORM\Association\BelongsTo $BearingSupportMakers
 * @property \App\Model\Table\ExtensionDeviceMakersTable|\Cake\ORM\Association\BelongsTo $ExtensionDeviceMakers
 * @property \App\Model\Table\DesignCompaniesTable|\Cake\ORM\Association\BelongsTo $DesignCompanies
 * @property \App\Model\Table\ConstructionCompaniesTable|\Cake\ORM\Association\BelongsTo $ConstructionCompanies
 *
 * @method \App\Model\Entity\Superstructure get($primaryKey, $options = [])
 * @method \App\Model\Entity\Superstructure newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Superstructure[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Superstructure|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Superstructure|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Superstructure patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Superstructure[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Superstructure findOrCreate($search, callable $callback = null, $options = [])
 */
class SuperstructuresTable extends Table
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

        $this->setTable('superstructures');

        $this->belongsTo('Bridges', [
            'foreignKey' => 'bridge_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('BearingSupportMakers', [
            'foreignKey' => 'bearing_support_maker_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ExtensionDeviceMakers', [
            'foreignKey' => 'extension_device_maker_id',
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
            ->requirePresence('span_number', 'create')
            ->notEmpty('span_number');

        $validator
            ->requirePresence('span_branch_number', 'create')
            ->notEmpty('span_branch_number');

        $validator
            ->numeric('span_length')
            ->requirePresence('span_length', 'create')
            ->notEmpty('span_length');

        $validator
            ->scalar('material_classification')
            ->maxLength('material_classification', 10)
            ->requirePresence('material_classification', 'create')
            ->notEmpty('material_classification');

        $validator
            ->scalar('girder_type_classification')
            ->maxLength('girder_type_classification', 10)
            ->requirePresence('girder_type_classification', 'create')
            ->notEmpty('girder_type_classification');

        $validator
            ->scalar('girder_structure_classification')
            ->maxLength('girder_structure_classification', 10)
            ->requirePresence('girder_structure_classification', 'create')
            ->notEmpty('girder_structure_classification');

        $validator
            ->scalar('road_surface_position')
            ->maxLength('road_surface_position', 10)
            ->requirePresence('road_surface_position', 'create')
            ->notEmpty('road_surface_position');

        $validator
            ->scalar('slab_type')
            ->maxLength('slab_type', 10)
            ->requirePresence('slab_type', 'create')
            ->notEmpty('slab_type');

        $validator
            ->scalar('bearing_support_type')
            ->maxLength('bearing_support_type', 10)
            ->requirePresence('bearing_support_type', 'create')
            ->notEmpty('bearing_support_type');

        $validator
            ->integer('extension_device_name')
            ->requirePresence('extension_device_name', 'create')
            ->notEmpty('extension_device_name');

        $validator
            ->numeric('extension_device_design_temperature')
            ->requirePresence('extension_device_design_temperature', 'create')
            ->notEmpty('extension_device_design_temperature');

        $validator
            ->numeric('extension_device_design_gap')
            ->requirePresence('extension_device_design_gap', 'create')
            ->notEmpty('extension_device_design_gap');

        $validator
            ->numeric('mail_girder_height')
            ->requirePresence('mail_girder_height', 'create')
            ->notEmpty('mail_girder_height');

        $validator
            ->requirePresence('the_number_of_main_girder', 'create')
            ->notEmpty('the_number_of_main_girder');

        $validator
            ->numeric('main_girder_interval')
            ->requirePresence('main_girder_interval', 'create')
            ->notEmpty('main_girder_interval');

        $validator
            ->scalar('method_of_construction')
            ->maxLength('method_of_construction', 20)
            ->requirePresence('method_of_construction', 'create')
            ->notEmpty('method_of_construction');

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
        $rules->add($rules->existsIn(['bearing_support_maker_id'], 'BearingSupportMakers'));
        $rules->add($rules->existsIn(['extension_device_maker_id'], 'ExtensionDeviceMakers'));
        $rules->add($rules->existsIn(['design_company_id'], 'DesignCompanies'));
        $rules->add($rules->existsIn(['construction_company_id'], 'ConstructionCompanies'));

        return $rules;
    }
}
