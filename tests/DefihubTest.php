<?php
/**
 * Tests for DeFiHub
 */

use PHPUnit\Framework\TestCase;
use Defihub\Defihub;

class DefihubTest extends TestCase {
    private Defihub $instance;

    protected function setUp(): void {
        $this->instance = new Defihub(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Defihub::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
