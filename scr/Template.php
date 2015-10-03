<?php
namespace conceptCore/invoiced;

/**
* Template class
*/
class Template
{
	/**
	 * List with parameters for invoiced template.
	 */
	public static $header = 				"INVOICE";
	public static $to_title = 				"Client";
	public static $invoice_number_title = 	"Invoice Number";
	public static $date_title = 			"Date";
	public static $payment_terms_title = 	"Payment Terms";
	public static $due_date_title = 		"Due Date"
	public static $purchase_order_title	= 	"Purchase Order";
	public static $quantity_header = 		"Quantity";
	public static $item_header = 			"Item";
	public static $unit_cost_header	= 		"Rate";
	public static $amount_header = 			"Amount";
	public static $subtotal_title = 		"Subtotal";
	public static $discounts_title = 		"Discounts";
	public static $tax_title = 				"Tax";
	public static $shipping_title = 		"Shipping";
	public static $total_title = 			"Total";
	public static $amount_paid_title = 		"Amount Paid";
	public static $balance_title = 			"Balance"
	public static $terms_title = 			"Terms";
	public static $notes_title = 			"Notes";

	/**
	 * Set text for invoice template
	 */
	public static setParameter($item, $value) {
		self::$item = $value;
	}

	/**
	 * Get value for item
	 */
	public static getParameter($item) {
		return self::$item;
	}
}