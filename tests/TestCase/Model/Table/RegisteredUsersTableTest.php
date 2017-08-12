<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegisteredUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegisteredUsersTable Test Case
 */
class RegisteredUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RegisteredUsersTable
     */
    public $RegisteredUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.registered_users',
        'app.media_items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RegisteredUsers') ? [] : ['className' => RegisteredUsersTable::class];
        $this->RegisteredUsers = TableRegistry::get('RegisteredUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RegisteredUsers);

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
