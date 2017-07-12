<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Message Entity
 *
 * @property int $id
 * @property int $sender
 * @property int $receiver
 * @property string $message
 * @property int $media_items_id
 *
 * @property \App\Model\Entity\MediaItem $media_item
 */
class Message extends Entity
{

}
