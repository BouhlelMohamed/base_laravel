<?php

namespace App\Domain\Invoices\Actions;

use App\Domain\Invoices\Services\InvoiceContentService;
use App\Domain\Invoices\Services\InvoiceTypeService;

class GenerateInvoice implements GenerateInvoiceInterface
{
    public function execute(InvoiceTypeService $invoiceTypeService,
                            InvoiceContentService $invoiceContentService)
    {
    }
}
