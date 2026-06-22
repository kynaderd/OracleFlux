<?php
/**
 * Tests for OracleFlux
 */

use PHPUnit\Framework\TestCase;
use Oracleflux\Oracleflux;

class OraclefluxTest extends TestCase {
    private Oracleflux $instance;

    protected function setUp(): void {
        $this->instance = new Oracleflux(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Oracleflux::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
