<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SensorPortalTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SensorPortalTable Test Case
 */
class SensorPortalTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SensorPortalTable
     */
    public $SensorPortal;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sensor_portal',
        'app.sensors',
        'app.makers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SensorPortal') ? [] : ['className' => SensorPortalTable::class];
        $this->SensorPortal = TableRegistry::getTableLocator()->get('SensorPortal', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SensorPortal);

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
