<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Sales\Api;

/**
 * Interface InvoiceCancelRepositoryInterface
 *
 * @package Magento\Sales\Api
 */
interface InvoiceCancelRepositoryInterface
{

    /**
     * Cancel invoice
     *
     * @param int $invoiceId
     * @return bool
     */
    public function cancel($invoiceId);
}
