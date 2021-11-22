<?php

namespace Tests\Feature\Domain\Invoices;

use PHPUnit\Framework\TestCase;


/**
 * Feature: Be able to generate invoices in several different types
 */
class GenerateInvoiceFTest extends TestCase
{

    public function dataProviderUserAndStatus(): array
    {
        return [
            ['userType' => 'admin','returnCode' => 200],
            ['userType' => 'user','returnCode' => 200],
            ['userType' => 'developer','returnCode' => 401],
        ];
    }

    public function dataProviderValidation(): array
    {
        return [
            ['orderId' => 1,'returnCode' => 422, 'validationErrors' => 'data.non-existent order id'],
            ['orderId' => 'ddsds','returnCode' => 422, 'validationErrors' => 'data.numeric order id'],
        ];
    }

    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     *
    Scenario: as a user I want to be able to generate
    an invoice by passing the order id
     */
    public function testGenerateTest(){
        $this->actingAs($user)
            ->visit('users')
            ->assertResponseOk();
    }

    /**
     * When User choose Pdf type
     * @depends
     */
    public function testWhenPdfType(){

    }

    /**
     * When User choose Png type
     * @depends
     */
    public function testWhenPngType(){

    }

    /**
     *
    Scenario: as a user I want to be able to generate
    an invoice by passing a non-existent order id
     */
    public function testWhenOrderIdNonExistent(){

    }

    public function testValidation(){

    }
}
