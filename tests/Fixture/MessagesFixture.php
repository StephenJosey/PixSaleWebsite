<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MessagesFixture
 *
 */
class MessagesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'sender' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'receiver' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'message' => ['type' => 'string', 'length' => 250, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'media_items_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_sender' => ['type' => 'index', 'columns' => ['sender'], 'length' => []],
            'fk_receiver' => ['type' => 'index', 'columns' => ['receiver'], 'length' => []],
            'fk_media_item' => ['type' => 'index', 'columns' => ['media_items_id'], 'length' => []],
        ],
        '_constraints' => [
            'fk_media_item' => ['type' => 'foreign', 'columns' => ['media_items_id'], 'references' => ['media_items', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_receiver' => ['type' => 'foreign', 'columns' => ['receiver'], 'references' => ['registered_users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_sender' => ['type' => 'foreign', 'columns' => ['sender'], 'references' => ['registered_users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'sender' => 1,
            'receiver' => 1,
            'message' => 'Lorem ipsum dolor sit amet',
            'media_items_id' => 1
        ],
    ];
}
