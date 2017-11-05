<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Sales\Model\Order;

use Magento\Sales\Api\InvoiceCancelRepositoryInterface;
use Magento\Sales\Api\InvoiceRepositoryInterface;

/**
 * Class InvoiceCancelRepository
 */
class InvoiceCancelRepository implements InvoiceCancelRepositoryInterface
{

    /**
     * @var InvoiceRepositoryInterface
     */
    protected $invoiceRepository;

    /**
     * InvoiceCancelRepository constructor.
     * @param InvoiceRepositoryInterface $invoiceRepository
     */
    public function __construct(
        InvoiceRepositoryInterface $invoiceRepository
    ) {
        $this->invoiceRepository = $invoiceRepository;
    }

    /**
     * Cancel invoice
     *
     * @param int $invoiceId
     * @return bool
     */
    public function cancel($invoiceId)
    {
        $invoice = $this->invoiceRepository->get($invoiceId);
        if ($invoice && $invoice->canCancel()) {
            $invoice->cancel();
            $this->invoiceRepository->save($invoice);
            return true;
        }

        return false;
    }
}
