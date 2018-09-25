<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sensor Entity
 *
 * @property string $sensor_id
 * @property string $sensor_name
 * @property string $model_name_number
 * @property int $maker_id
 * @property string $application_areas
 * @property string $sensor_type
 * @property \Cake\I18n\FrozenDate $sales_start_date
 * @property string $NETIS
 * @property string $measurement_method
 * @property string $measurement_range
 * @property string $accuracy
 * @property string $resolution
 * @property string $ability
 * @property string $contact_input_output
 * @property string $interface
 * @property string $output
 * @property string $external_dimensions
 * @property string $power_source
 * @property string $weight
 * @property string $power_consumption
 * @property string $temperature_range
 * @property string $environmental_resistance
 *
 * @property \App\Model\Entity\SensorSetting[] $sensor_setting
 */
class Sensor extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
    ];
}
