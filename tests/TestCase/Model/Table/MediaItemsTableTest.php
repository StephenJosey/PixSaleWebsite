<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MediaItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MediaItemsTable Test Case
 */
class MediaItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MediaItemsTable
     */
    public $MediaItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.media_items',
        'app.categories',
        'app.registered_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MediaItems') ? [] : ['className' => MediaItemsTable::class];
        $this->MediaItems = TableRegistry::get('MediaItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MediaItems);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
