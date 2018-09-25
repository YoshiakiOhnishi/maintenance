<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SensorSettings Model
 *
 * @property \App\Model\Table\SettingsTable|\Cake\ORM\Association\BelongsTo $Settings
 * @property \App\Model\Table\SensorsTable|\Cake\ORM\Association\BelongsTo $Sensors
 * @property \App\Model\Table\BridgesTable|\Cake\ORM\Association\BelongsTo $Bridges
 * @property \App\Model\Table\MembersTable|\Cake\ORM\Association\BelongsTo $Members
 *
 * @method \App\Model\Entity\SensorSetting get($primaryKey, $options = [])
 * @method \App\Model\Entity\SensorSetting newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SensorSetting[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SensorSetting|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SensorSetting|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SensorSetting patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SensorSetting[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SensorSetting findOrCreate($search, callable $callback = null, $options = [])
 */
class SensorSettingsTable extends Table
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

        $this->setTable('sensor_settings');

        $this->belongsTo('Sensors', [
            'foreignKey' => 'sensor_id',
            'joinType' => 'INNER'
        ]);
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
            ->dateTime('setting_date')
            ->requirePresence('setting_date', 'create')
            ->notEmpty('setting_date');

        $validator
            ->dateTime('record_start_date')
            ->requirePresence('record_start_date', 'create')
            ->notEmpty('record_start_date');

        $validator
            ->dateTime('record_end_date')
            ->requirePresence('record_end_date', 'create')
            ->notEmpty('record_end_date');

        $validator
            ->scalar('record_interval')
            ->maxLength('record_interval', 10)
            ->requirePresence('record_interval', 'create')
            ->notEmpty('record_interval');

        $validator
            ->scalar('setting_method')
            ->maxLength('setting_method', 10)
            ->requirePresence('setting_method', 'create')
            ->notEmpty('setting_method');

        $validator
            ->scalar('setting_direction')
            ->maxLength('setting_direction', 1)
            ->requirePresence('setting_direction', 'create')
            ->notEmpty('setting_direction');

        $validator
            ->scalar('setting_photo')
            ->requirePresence('setting_photo', 'create')
            ->notEmpty('setting_photo');

        $validator
            ->scalar('monitoring_data')
            ->requirePresence('monitoring_data', 'create')
            ->notEmpty('monitoring_data');

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
        $rules->add($rules->existsIn(['setting_id'], 'Settings'));
        $rules->add($rules->existsIn(['sensor_id'], 'Sensors'));
        $rules->add($rules->existsIn(['bridge_id'], 'Bridges'));
        $rules->add($rules->existsIn(['member_id'], 'Members'));

        return $rules;
    }
}
