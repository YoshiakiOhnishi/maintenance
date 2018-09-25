<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SensorMaker Model
 *
 * @property \App\Model\Table\MakersTable|\Cake\ORM\Association\BelongsTo $Makers
 *
 * @method \App\Model\Entity\SensorMaker get($primaryKey, $options = [])
 * @method \App\Model\Entity\SensorMaker newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SensorMaker[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SensorMaker|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SensorMaker|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SensorMaker patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SensorMaker[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SensorMaker findOrCreate($search, callable $callback = null, $options = [])
 */
class SensorMakersTable extends Table
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

        $this->setTable('sensor_makers');
        $this->primaryKey('maker_id');
        $this->setDisplayField('name');
        $this->hasMany('Sensors', [
            'foreignKey' => 'maker_id'
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
            ->scalar('name')
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmpty('name', '名前を入力してください')
            ->greaterThan('maker_id', 10000, '10001~99999の範囲で入力してください．')
            ->lessThan('maker_id', 100000, '10001~99999の範囲で入力してください．');
            //->notEmpty('maker_id', 'IDを入力してください');
        
        $validator
        ->add('maker_id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table', 'message' => '既に使用されているIDです．']);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    
}
