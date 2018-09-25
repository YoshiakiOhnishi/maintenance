<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SensorSetting Entity
 *
 * @property string $setting_id
 * @property string $sensor_id
 * @property string $bridge_id
 * @property string $member_id
 * @property \Cake\I18n\FrozenTime $setting_date
 * @property \Cake\I18n\FrozenTime $record_start_date
 * @property \Cake\I18n\FrozenTime $record_end_date
 * @property string $record_interval
 * @property string $setting_method
 * @property string $setting_direction
 * @property string $setting_photo
 * @property string $monitoring_data
 *
 * @property \App\Model\Entity\Setting $setting
 * @property \App\Model\Entity\Sensor $sensor
 * @property \App\Model\Entity\Bridge $bridge
 * @property \App\Model\Entity\Member $member
 */
class SensorSetting extends Entity
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
        'setting_id' => true,
        'sensor_id' => true,
        'bridge_id' => true,
        'member_id' => true,
        'setting_date' => true,
        'record_start_date' => true,
        'record_end_date' => true,
        'record_interval' => true,
        'setting_method' => true,
        'setting_direction' => true,
        'setting_photo' => true,
        'monitoring_data' => true,
        'setting' => true,
        'sensor' => true,
        'bridge' => true,
        'member' => true
    ];
}
