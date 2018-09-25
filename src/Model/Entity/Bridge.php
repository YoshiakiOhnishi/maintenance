<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bridge Entity
 *
 * @property string $bridge_id
 * @property string $bridge_name
 * @property string $bridge_name_ruby
 * @property string $location_start
 * @property string $location_end
 * @property string $route_name
 * @property string $road_type
 * @property string $bridge_classification
 * @property string $bridge_type
 * @property string $structure_type
 * @property string $structure_system
 * @property string $structure_diagram
 * @property float $bridge_length
 * @property float $bridge_area
 * @property float $bridge_width
 * @property float $roadway_width
 * @property float $sidewalk_width
 * @property float $wheel_guard_width
 * @property float $design_live_load
 * @property float $design_horizontal_seismic_coefficient
 * @property float $design_vertical_seismic_coefficient
 * @property string $specifications
 * @property \Cake\I18n\FrozenDate $in-service_date
 * @property int $the-number-of-span
 * @property int $manager_id
 *
 * @property \App\Model\Entity\Bridge[] $bridges
 * @property \App\Model\Entity\Manager $manager
 * @property \App\Model\Entity\Inspection[] $inspections
 * @property \App\Model\Entity\Repair[] $repairs
 * @property \App\Model\Entity\SensorSetting[] $sensor_settings
 * @property \App\Model\Entity\Substructure[] $substructures
 * @property \App\Model\Entity\Superstructure[] $superstructures
 */
class Bridge extends Entity
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
        'bridge_id' => true,
        'bridge_name' => true,
        'bridge_name_ruby' => true,
        'location_start' => true,
        'location_end' => true,
        'route_name' => true,
        'road_type' => true,
        'bridge_classification' => true,
        'bridge_type' => true,
        'structure_type' => true,
        'structure_system' => true,
        'structure_diagram' => true,
        'bridge_length' => true,
        'bridge_area' => true,
        'bridge_width' => true,
        'roadway_width' => true,
        'sidewalk_width' => true,
        'wheel_guard_width' => true,
        'design_live_load' => true,
        'design_horizontal_seismic_coefficient' => true,
        'design_vertical_seismic_coefficient' => true,
        'specifications' => true,
        'in-service_date' => true,
        'the-number-of-span' => true,
        'manager_id' => true,
        'bridges' => true,
        'manager' => true,
        'inspections' => true,
        'repairs' => true,
        'sensor_settings' => true,
        'substructures' => true,
        'superstructures' => true
    ];
}
