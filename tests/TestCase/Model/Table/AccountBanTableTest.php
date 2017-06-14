<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccountBanTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccountBanTable Test Case
 */
class AccountBanTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AccountBanTable
     */
    public $AccountBan;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.account_ban',
        'app.accounts',
        'app.account_service',
        'app.service'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AccountBan') ? [] : ['className' => AccountBanTable::class];
        $this->AccountBan = TableRegistry::get('AccountBan', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AccountBan);

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
