<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Inspection Entity
 *
 * @property string $inspection_id
 * @property string $bridge_id
 * @property \Cake\I18n\FrozenTime $inspection_date
 * @property string $inspection_type
 * @property string $soundness
 * @property int $inspector_id
 * @property string $inspection_report
 *
 * @property \App\Model\Entity\Inspection[] $inspections
 * @property \App\Model\Entity\Bridge $bridge
 * @property \App\Model\Entity\Inspector $inspector
 * @property \App\Model\Entity\Deterioration[] $deteriorations
 */
class Inspection extends Entity
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
        'inspection_id' => true,
        'bridge_id' => true,
        'inspection_date' => true,
        'inspection_type' => true,
        'soundness' => true,
        'inspector_id' => true,
        'inspection_report' => true,
        'inspections' => true,
        'bridge' => true,
        'inspector' => true,
        'deteriorations' => true
    ];
}
