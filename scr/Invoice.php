<?php
namespace conceptCore\invoiced;

/**
* Invoice class
*/
class Invoice
{
	public static $currency = "";
	public static $fields = array(
		"tax"=>"%",
		"discounts"=>false,
		"shipping"=>false
		);

	public static $logo = null; // Url to logo
	public static $from = nul; // The name of your organization
	public static $to = null; // The entity being billed - multiple lines ok
	public static $number = null; // Invoice number
	public static $purchase_order = null; // Purchase order number
	public static $date = \date('D j, Y'); // Invoice date
	public static $due_date = \Date('D j, Y', strtotime("+14 days"); // Invoice due date
	public static $payment_terms = null; // Payment terms summary (i.e. NET 30)
	public static $items = array(); // Array of hashes - see Line Items below
	public static $discounts = 0; // Subtotal discounts - numbers only
	public static $tax = 0; // Tax - numbers only
	public static $shipping = 0; // Shipping - numbers only
	public static $amount_paid = 0; // Amount paid - numbers only
	public static $notes = null; // Notes - any extra information not included elsewhere
	public static $terms = null; // Terms and conditions - all the details

	/**
	 * set items
	 */
	public static function setItems() {

	}

	/**
	 * Get items
	 * @return array returns an array with all parameters.
	 */
	public static function getItems() {

	}
}