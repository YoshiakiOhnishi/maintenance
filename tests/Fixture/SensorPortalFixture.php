<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SensorPortalFixture
 *
 */
class SensorPortalFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'sensor_portal';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'sensor_id' => ['type' => 'string', 'fixed' => true, 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'sensor_name' => ['type' => 'string', 'fixed' => true, 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'model_name/number' => ['type' => 'string', 'fixed' => true, 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'maker_id' => ['type' => 'integer', 'length' => 5, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'application_areas' => ['type' => 'string', 'fixed' => true, 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'sensor_type' => ['type' => 'string', 'fixed' => true, 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'sales_start_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'NETIS' => ['type' => 'string', 'fixed' => true, 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'measurement_method' => ['type' => 'string', 'fixed' => true, 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'measurement_range' => ['type' => 'string', 'fixed' => true, 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'accuracy' => ['type' => 'string', 'fixed' => true, 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'resolution' => ['type' => 'string', 'fixed' => true, 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'ability' => ['type' => 'string', 'fixed' => true, 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'contact_input/output' => ['type' => 'string', 'fixed' => true, 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'interface' => ['type' => 'string', 'fixed' => true, 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'output' => ['type' => 'string', 'fixed' => true, 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'external_dimensions' => ['type' => 'string', 'fixed' => true, 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'power_source' => ['type' => 'string', 'fixed' => true, 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'weight' => ['type' => 'string', 'fixed' => true, 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'power_consumption' => ['type' => 'string', 'fixed' => true, 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'temperature_range' => ['type' => 'string', 'fixed' => true, 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'environmental_resistance' => ['type' => 'string', 'fixed' => true, 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'sensor_id' => 'Lorem ipsum dolor ',
                'sensor_name' => 'Lorem ipsum dolor sit amet',
                'model_name/number' => 'Lorem ipsum dolor sit amet',
                'maker_id' => 1,
                'application_areas' => 'Lorem ipsum dolor ',
                'sensor_type' => 'Lorem ipsum dolor sit amet',
                'sales_start_date' => '2018-06-26',
                'NETIS' => 'Lorem ipsum dolor ',
                'measurement_method' => 'Lorem ipsum dolor ',
                'measurement_range' => 'Lorem ipsum dolor ',
                'accuracy' => 'Lorem ipsum dolor ',
                'resolution' => 'Lorem ipsum dolor ',
                'ability' => 'Lorem ipsum dolor ',
                'contact_input/output' => 'Lorem ipsum dolor ',
                'interface' => 'Lorem ipsum dolor ',
                'output' => 'Lorem ipsum dolor ',
                'external_dimensions' => 'Lorem ipsum dolor ',
                'power_source' => 'Lorem ipsum dolor ',
                'weight' => 'Lorem ipsum dolor ',
                'power_consumption' => 'Lorem ipsum dolor ',
                'temperature_range' => 'Lorem ipsum dolor ',
                'environmental_resistance' => 'Lorem ipsum dolor '
            ],
        ];
        parent::init();
    }
}
