<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Repair Entity
 *
 * @property string $repair_id
 * @property string $bridge_id
 * @property string $member_id
 * @property string $repair_type
 * @property string $repair_method
 * @property \Cake\I18n\FrozenTime $repair_date
 * @property string $repair_photo
 * @property string $cost
 * @property int $construction_company_id
 *
 * @property \App\Model\Entity\Repair[] $repairs
 * @property \App\Model\Entity\Bridge $bridge
 * @property \App\Model\Entity\Member $member
 * @property \App\Model\Entity\ConstructionCompany $construction_company
 */
class Repair extends Entity
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
        'repair_id' => true,
        'bridge_id' => true,
        'member_id' => true,
        'repair_type' => true,
        'repair_method' => true,
        'repair_date' => true,
        'repair_photo' => true,
        'cost' => true,
        'construction_company_id' => true,
        'repairs' => true,
        'bridge' => true,
        'member' => true,
        'construction_company' => true
    ];
}
