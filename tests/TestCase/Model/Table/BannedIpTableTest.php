<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BannedIpTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BannedIpTable Test Case
 */
class BannedIpTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BannedIpTable
     */
    public $BannedIp;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.banned_ip'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BannedIp') ? [] : ['className' => BannedIpTable::class];
        $this->BannedIp = TableRegistry::get('BannedIp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BannedIp);

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
