<?php
/**
 * Tests for QuicknodeRpc
 */

use PHPUnit\Framework\TestCase;
use Quicknoderpc\Quicknoderpc;

class QuicknoderpcTest extends TestCase {
    private Quicknoderpc $instance;

    protected function setUp(): void {
        $this->instance = new Quicknoderpc(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Quicknoderpc::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
