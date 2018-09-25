<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SensorMaker Entity
 *
 * @property string $maker_id
 * @property string $name
 *
 * @property \App\Model\Entity\Maker $maker
 */
class SensorMaker extends Entity
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
        'maker_id' => true,
        'name' => true,
    ];
}
