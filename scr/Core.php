<?php
namespace conceptCore\invoiced;

use conceptCore\invoiced\Template as Template;
use conceptCore\invoiced\Invoice as Invoice;

/**
 * static core class.
 */
class Core
{

	/**
	 * set the invoice.
	 * @param array  $invoiceItems  list with items that are needed for invoice
	 * @param array $templateItems if array not empty change template items
	 */
	public function setInvoice($invoiceItems, $templateItems = array) {

	}

	public function generate() {
		$client = new GuzzleHttp\Client();
	}
}