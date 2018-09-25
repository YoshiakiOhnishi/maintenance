<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Deterioration Entity
 *
 * @property string $deterioration_id
 * @property string $inspection_id
 * @property string $member_id
 * @property string $deterioration_type
 * @property string $deterioration_level_evaluation
 * @property string $deterioration_level_quantitative
 * @property string $soundness
 * @property string $deterioration_cause
 * @property string $inspection_method
 * @property string $strategy_classification
 * @property string|resource $deterioration_photo
 * @property string $memo
 *
 * @property \App\Model\Entity\Deterioration[] $deteriorations
 * @property \App\Model\Entity\Inspection $inspection
 * @property \App\Model\Entity\Member $member
 */
class Deterioration extends Entity
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
        'deterioration_id' => true,
        'inspection_id' => true,
        'member_id' => true,
        'deterioration_type' => true,
        'deterioration_level_evaluation' => true,
        'deterioration_level_quantitative' => true,
        'soundness' => true,
        'deterioration_cause' => true,
        'inspection_method' => true,
        'strategy_classification' => true,
        'deterioration_photo' => true,
        'memo' => true,
        'deteriorations' => true,
        'inspection' => true,
        'member' => true
    ];
}
