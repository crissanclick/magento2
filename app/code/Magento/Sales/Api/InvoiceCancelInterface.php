<?php
/**
 * *
 *  *
 *  * @package Interactiv4_
 *  * @author      Cristian Sanclemente Lladó
 *  * @copyright   Copyright (c) 2017 Interactiv4, Inc. (http://www.interactiv4.com)
 *
 *
 */
namespace Magento\Sales\Api;

/**
 * Interface InvoiceCancelInterface
 *
 * @package Magento\Sales\Api
 */
interface InvoiceCancelInterface
{

    /**
     * Cancel invoice
     *
     * @param int $invoiceId
     * @return bool
     */
    public function cancel($invoiceId);
}
