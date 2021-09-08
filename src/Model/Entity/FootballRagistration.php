<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Footballragistration Entity
 *
 * @property int $id
 * @property int $student_id
 * @property \Cake\I18n\FrozenTime $created_to
 * @property \Cake\I18n\FrozenTime $updated_at
 *
 * @property \App\Model\Entity\Student $student
 */
class Footballragistration extends Entity
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
        'student_id' => true,
        'created_to' => true,
        'updated_at' => true,
        'student' => true,
    ];
}
