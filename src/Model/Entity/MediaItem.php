<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MediaItem Entity
 *
 * @property string $title
 * @property int $category_id
 * @property int $price
 * @property int $registered_user_id
 * @property string $description
 * @property string $dimensions
 * @property int $video_length
 * @property string $media_type
 * @property string $file_path
 * @property int $id
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\RegisteredUser $registered_user
 */
class MediaItem extends Entity
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
