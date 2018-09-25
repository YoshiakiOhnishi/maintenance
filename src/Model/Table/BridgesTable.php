<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bridges Model
 *
 * @property \App\Model\Table\BridgesTable|\Cake\ORM\Association\BelongsTo $Bridges
 * @property \App\Model\Table\ManagersTable|\Cake\ORM\Association\BelongsTo $Managers
 * @property \App\Model\Table\BridgesTable|\Cake\ORM\Association\HasMany $Bridges
 * @property \App\Model\Table\InspectionsTable|\Cake\ORM\Association\HasMany $Inspections
 * @property \App\Model\Table\RepairsTable|\Cake\ORM\Association\HasMany $Repairs
 * @property \App\Model\Table\SensorSettingsTable|\Cake\ORM\Association\HasMany $SensorSettings
 * @property \App\Model\Table\SubstructuresTable|\Cake\ORM\Association\HasMany $Substructures
 * @property \App\Model\Table\SuperstructuresTable|\Cake\ORM\Association\HasMany $Superstructures
 *
 * @method \App\Model\Entity\Bridge get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bridge newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bridge[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bridge|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bridge|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bridge patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bridge[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bridge findOrCreate($search, callable $callback = null, $options = [])
 */
class BridgesTable extends Table
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

        $this->setTable('bridges');
        $this->setDisplayField('bridge_id');
        $this->setPrimaryKey('bridge_id');

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
            ->scalar('bridge_id')
            ->maxLength('bridge_id', 20)
            ->notEmpty('bridge_id');

        $validator
            ->scalar('bridge_name')
            ->maxLength('bridge_name', 10)
            ->requirePresence('bridge_name', 'create')
            ->allowEmpty('bridge_name');

        $validator
            ->scalar('bridge_name_ruby')
            ->maxLength('bridge_name_ruby', 20)
            ->requirePresence('bridge_name_ruby', 'create')
            ->allowEmpty('bridge_name_ruby');

        $validator
            ->scalar('location_start')
            ->maxLength('location_start', 20)
            ->requirePresence('location_start', 'create')
            ->allowEmpty('location_start');

        $validator
            ->scalar('location_end')
            ->maxLength('location_end', 20)
            ->requirePresence('location_end', 'create')
            ->allowEmpty('location_end');

        $validator
            ->scalar('route_name')
            ->maxLength('route_name', 10)
            ->requirePresence('route_name', 'create')
            ->allowEmpty('route_name');

        $validator
            ->scalar('road_type')
            ->maxLength('road_type', 10)
            ->requirePresence('road_type', 'create')
            ->allowEmpty('road_type');

        $validator
            ->scalar('bridge_classification')
            ->maxLength('bridge_classification', 10)
            ->requirePresence('bridge_classification', 'create')
            ->allowEmpty('bridge_classification');

        $validator
            ->scalar('bridge_type')
            ->maxLength('bridge_type', 10)
            ->requirePresence('bridge_type', 'create')
            ->allowEmpty('bridge_type');

        $validator
            ->scalar('structure_type')
            ->maxLength('structure_type', 10)
            ->requirePresence('structure_type', 'create')
            ->allowEmpty('structure_type');

        $validator
            ->scalar('structure_system')
            ->maxLength('structure_system', 10)
            ->requirePresence('structure_system', 'create')
            ->allowEmpty('structure_system');

        $validator
            ->scalar('structure_diagram')
            ->requirePresence('structure_diagram', 'create')
            ->allowEmpty('structure_diagram');

        $validator
            ->numeric('bridge_length')
            ->requirePresence('bridge_length', 'create')
            ->allowEmpty('bridge_length');

        $validator
            ->numeric('bridge_area')
            ->requirePresence('bridge_area', 'create')
            ->allowEmpty('bridge_area');

        $validator
            ->numeric('bridge_width')
            ->requirePresence('bridge_width', 'create')
            ->allowEmpty('bridge_width');

        $validator
            ->numeric('roadway_width')
            ->requirePresence('roadway_width', 'create')
            ->allowEmpty('roadway_width');

        $validator
            ->numeric('sidewalk_width')
            ->requirePresence('sidewalk_width', 'create')
            ->allowEmpty('sidewalk_width');

        $validator
            ->numeric('wheel_guard_width')
            ->requirePresence('wheel_guard_width', 'create')
            ->allowEmpty('wheel_guard_width');

        $validator
            ->numeric('design_live_load')
            ->requirePresence('design_live_load', 'create')
            ->allowEmpty('design_live_load');

        $validator
            ->numeric('design_horizontal_seismic_coefficient')
            ->requirePresence('design_horizontal_seismic_coefficient', 'create')
            ->allowEmpty('design_horizontal_seismic_coefficient');

        $validator
            ->numeric('design_vertical_seismic_coefficient')
            ->requirePresence('design_vertical_seismic_coefficient', 'create')
            ->allowEmpty('design_vertical_seismic_coefficient');

        $validator
            ->scalar('specifications')
            ->maxLength('specifications', 20)
            ->requirePresence('specifications', 'create')
            ->allowEmpty('specifications');

        $validator
            ->date('in-service_date')
            ->requirePresence('in-service_date', 'create')
            ->allowEmpty('in-service_date');

        $validator
            ->requirePresence('the-number-of-span', 'create')
            ->allowEmpty('the-number-of-span');

        $validator
        ->scalar('manager_id')
        ->maxLength('manager_id', 20)
        ->allowEmpty('manager_id');


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
       // $rules->add($rules->existsIn(['bridge_id'], 'Bridges'));

        return $rules;
    }
}
