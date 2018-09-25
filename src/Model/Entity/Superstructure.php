<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Superstructure Entity
 *
 * @property string $bridge_id
 * @property int $span_number
 * @property int $span_branch_number
 * @property float $span_length
 * @property string $material_classification
 * @property string $girder_type_classification
 * @property string $girder_structure_classification
 * @property string $road_surface_position
 * @property string $slab_type
 * @property string $bearing_support_type
 * @property int $bearing_support_maker_id
 * @property int $extension_device_name
 * @property float $extension_device_design_temperature
 * @property float $extension_device_design_gap
 * @property int $extension_device_maker_id
 * @property float $mail_girder_height
 * @property int $the_number_of_main_girder
 * @property float $main_girder_interval
 * @property string $method_of_construction
 * @property int $design_company_id
 * @property int $construction_company_id
 *
 * @property \App\Model\Entity\Bridge $bridge
 * @property \App\Model\Entity\BearingSupportMaker $bearing_support_maker
 * @property \App\Model\Entity\ExtensionDeviceMaker $extension_device_maker
 * @property \App\Model\Entity\DesignCompany $design_company
 * @property \App\Model\Entity\ConstructionCompany $construction_company
 */
class Superstructure extends Entity
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
        'span_number' => true,
        'span_branch_number' => true,
        'span_length' => true,
        'material_classification' => true,
        'girder_type_classification' => true,
        'girder_structure_classification' => true,
        'road_surface_position' => true,
        'slab_type' => true,
        'bearing_support_type' => true,
        'bearing_support_maker_id' => true,
        'extension_device_name' => true,
        'extension_device_design_temperature' => true,
        'extension_device_design_gap' => true,
        'extension_device_maker_id' => true,
        'mail_girder_height' => true,
        'the_number_of_main_girder' => true,
        'main_girder_interval' => true,
        'method_of_construction' => true,
        'design_company_id' => true,
        'construction_company_id' => true,
        'bridge' => true,
        'bearing_support_maker' => true,
        'extension_device_maker' => true,
        'design_company' => true,
        'construction_company' => true
    ];
}
