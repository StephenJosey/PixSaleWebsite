<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RegisteredUser Entity
 *
 * @property int $id
 * @property string $pass
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $username
 *
 * @property \App\Model\Entity\MediaItem[] $media_items
 */
class RegisteredUser extends Entity
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
        '*' => true,
        'id' => false
    ];
}
