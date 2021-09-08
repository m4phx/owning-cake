<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FootballragistrationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FootballragistrationsTable Test Case
 */
class FootballragistrationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FootballragistrationsTable
     */
    protected $Footballragistrations;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Footballragistrations',
        'app.Students',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Footballragistrations') ? [] : ['className' => FootballragistrationsTable::class];
        $this->Footballragistrations = $this->getTableLocator()->get('Footballragistrations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Footballragistrations);

        parent::tearDown();
    }
}
