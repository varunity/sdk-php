<?php namespace InvoiceNinja\Models;

use stdClass;

class Invoice extends RemoteModel
{
    public static $route = 'invoices';
    public static $include = 'invitations';

    public $invoice_items = [];
    public $invitations = [];

    public function __construct()
    {

    }

    public function addInvoiceItem($product_key, $notes, $cost, $qty = 1)
    {
        $item = new stdClass();
        $item->product_key = $product_key;
        $item->notes = $notes;
        $item->cost = $cost;
        $item->qty = $qty;

        $this->invoice_items[] = $item;
    }
}
