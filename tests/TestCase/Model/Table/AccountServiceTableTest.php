<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccountServiceTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccountServiceTable Test Case
 */
class AccountServiceTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AccountServiceTable
     */
    public $AccountService;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.account_service',
        'app.accounts',
        'app.account_ban',
        'app.services'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AccountService') ? [] : ['className' => AccountServiceTable::class];
        $this->AccountService = TableRegistry::get('AccountService', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AccountService);

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
