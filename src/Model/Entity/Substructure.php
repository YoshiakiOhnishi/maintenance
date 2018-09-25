<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Substructure Entity
 *
 * @property string $bridge_id
 * @property int $skeleton_number
 * @property int $skeleton_branch_number
 * @property string $structure_classification
 * @property string $material
 * @property float $height
 * @property string $foundation_type
 * @property \Cake\I18n\FrozenTime $completion_date
 * @property int $design_company_id
 * @property int $construction_company_id
 *
 * @property \App\Model\Entity\Bridge $bridge
 * @property \App\Model\Entity\DesignCompany $design_company
 * @property \App\Model\Entity\ConstructionCompany $construction_company
 */
class Substructure extends Entity
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
        'skeleton_number' => true,
        'skeleton_branch_number' => true,
        'structure_classification' => true,
        'material' => true,
        'height' => true,
        'foundation_type' => true,
        'completion_date' => true,
        'design_company_id' => true,
        'construction_company_id' => true,
        'bridge' => true,
        'design_company' => true,
        'construction_company' => true
    ];
}
