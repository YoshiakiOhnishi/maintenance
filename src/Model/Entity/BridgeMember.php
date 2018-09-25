<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BridgeMember Entity
 *
 * @property string $member_id
 * @property string $construction_type
 * @property int $span_number/skeleton_number
 * @property int $branch_number
 * @property string $member_sign
 * @property string $member_name
 * @property int $element_number
 *
 * @property \App\Model\Entity\Member $member
 */
class BridgeMember extends Entity
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
        'member_id' => true,
        'construction_type' => true,
        'span_number/skeleton_number' => true,
        'branch_number' => true,
        'member_sign' => true,
        'member_name' => true,
        'element_number' => true,
        'member' => true
    ];
}
