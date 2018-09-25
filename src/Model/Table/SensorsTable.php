<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sensors Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $SensorMakers
 *
 * @method \App\Model\Entity\Sensor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sensor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sensor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sensor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sensor|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sensor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sensor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sensor findOrCreate($search, callable $callback = null, $options = [])
 */
class SensorsTable extends Table
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

        $this->setTable('sensors');
        $this->setDisplayField('sensor_id');
        $this->setPrimaryKey('sensor_id');

        $this->belongsTo('SensorMakers', [
            'foreignKey' => 'maker_id',
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
            ->scalar('sensor_id')
            ->maxLength('sensor_id', 20)
            ->notEmpty('sensor_id');

        $validator
            ->scalar('sensor_name')
            ->maxLength('sensor_name', 30)
            ->requirePresence('sensor_name', 'create')
            ->allowEmpty('sensor_name');

        $validator
            ->scalar('model_name_number')
            ->maxLength('model_name_number', 30)
            ->requirePresence('model_name_number', 'create')
            ->allowEmpty('model_name_number');

        $validator
            ->scalar('application_areas')
            ->maxLength('application_areas', 20)
            ->requirePresence('application_areas', 'create')
            ->allowEmpty('application_areas');

        $validator
            ->scalar('sensor_type')
            ->maxLength('sensor_type', 50)
            ->requirePresence('sensor_type', 'create')
            ->allowEmpty('sensor_type');

        $validator
            ->date('sales_start_date')
            ->requirePresence('sales_start_date', 'create')
            ->notEmpty('sales_start_date');

        $validator
            ->scalar('NETIS')
            ->maxLength('NETIS', 20)
            ->requirePresence('NETIS', 'create')
            ->allowEmpty('NETIS');

        $validator
            ->scalar('measurement_method')
            ->maxLength('measurement_method', 20)
            ->allowEmpty('measurement_method');

        $validator
            ->scalar('measurement_range')
            ->maxLength('measurement_range', 20)
            ->allowEmpty('measurement_range');

        $validator
            ->scalar('accuracy')
            ->maxLength('accuracy', 20)
            ->allowEmpty('accuracy');

        $validator
            ->scalar('resolution')
            ->maxLength('resolution', 20)
            ->allowEmpty('resolution');

        $validator
            ->scalar('ability')
            ->maxLength('ability', 20)
            ->allowEmpty('ability');

        $validator
            ->scalar('contact_input_output')
            ->maxLength('contact_input_output', 20)
            ->allowEmpty('contact_input_output');

        $validator
            ->scalar('interface')
            ->maxLength('interface', 20)
            ->allowEmpty('interface');

        $validator
            ->scalar('output')
            ->maxLength('output', 20)
            ->allowEmpty('output');

        $validator
            ->scalar('external_dimensions')
            ->maxLength('external_dimensions', 20)
            ->allowEmpty('external_dimensions');

        $validator
            ->scalar('power_source')
            ->maxLength('power_source', 20)
            ->allowEmpty('power_source');

        $validator
            ->scalar('weight')
            ->maxLength('weight', 20)
            ->allowEmpty('weight');

        $validator
            ->scalar('power_consumption')
            ->maxLength('power_consumption', 20)
            ->allowEmpty('power_consumption');

        $validator
            ->scalar('temperature_range')
            ->maxLength('temperature_range', 20)
            ->allowEmpty('temperature_range');

        $validator
            ->scalar('environmental_resistance')
            ->maxLength('environmental_resistance', 20)
            ->allowEmpty('environmental_resistance');

            $validator
            ->scalar('sensor_info_url')
            ->allowEmpty('sensor_info_url');

        $validator
            ->scalar('catalog_url')
            ->allowEmpty('catalog_url');

        $validator
            ->scalar('use_case_url')
            ->allowEmpty('use_case_url');

        $validator
            ->scalar('paper_url')
            ->allowEmpty('paper_url');

        $validator
            ->scalar('instruction_url')
            ->allowEmpty('instruction_url');

        $validator
            ->scalar('document_url')
            ->allowEmpty('document_url');

        $validator
            ->scalar('phone_number')
            ->maxLength('phone_number', 15)
            ->allowEmpty('phone_number');

            $validator
            ->scalar('mail')
            ->allowEmpty('mail');


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
        $rules->add($rules->existsIn(['maker_id'], 'SensorMakers'));

        return $rules;
    }
}
