<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SpousesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SpousesTable Test Case
 */
class SpousesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SpousesTable
     */
    protected $Spouses;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Spouses',
        'app.Friends',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Spouses') ? [] : ['className' => SpousesTable::class];
        $this->Spouses = $this->getTableLocator()->get('Spouses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Spouses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SpousesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SpousesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
