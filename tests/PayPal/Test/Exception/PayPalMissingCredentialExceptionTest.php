<?php
use PayPal\Exception\PayPalMissingCredentialException;
use PHPUnit\Framework\TestCase;

/**
 * Test class for PayPalMissingCredentialException.
 *
 */
class PayPalMissingCredentialExceptionTest extends TestCase
{
    /**
     * @var PayPalMissingCredentialException
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new PayPalMissingCredentialException;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
    }

    /**
     * @test
     */
    public function testErrorMessage()
    {
        $msg = $this->object->errorMessage();
        $this->assertContains('Error on line', $msg);
    }
}
