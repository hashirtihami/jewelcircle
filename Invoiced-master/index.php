<?php
use ConceptCore\Invoiced\Core;
use Carbon\Carbon;
require 'app/app.php';

/**
 * setup the core object
 * @var Core
 */
$t = new Core();

/**
 * setup date object
 * @var Carbon
 */
$date = Carbon::now();
$twoWeeks = Carbon::now()->addWeeks(2);
/**
 * holds array with data that needs to be passed trough.
 * @var array
 */

$invoice = array(
	"logo" => "test.dev", // url to logo
	"from" => "Wouter van Marrum \n<a href=\"http://www.concept-core.nl\">concept-core.nl</a>", // The name of your organization
	"to" => "marleen", // The entity being billed - multiple lines ok
	"number" => 20001, // Invoice number
	//"purchase_order" => "", // Purchase order number
	"date" => $date->toFormattedDateString(), // Invoice date
	"due_date" => $twoWeeks->toFormattedDateString(), // Invoice due date
	"payment_terms" => null, // Payment terms summary (i.e. NET 30)
	// items
	"items[0][name]" => "Website",
	"items[0][quantity]" => 1,
	"items[0][unit_cost]" => 300,

	"items[1][name]" => "logo",
	"items[1][quantity]" => 1,
	"items[1][unit_cost]" => 150,
	// End items

	// Fields
	"fields[tax]" => true, // can be true, false
	"fields[discounts]" => false, // Subtotal discounts - numbers only
	"fields[shipping]" => false, // Can be true or false
	// End fields
	"tax"=> 21, // Tax - numbers only
	"amount_paid" => 0, // Amount paid - numbers only
	"notes" => "", // Notes - any extra information not included elsewhere
	"terms" => "Lees dit", // Terms and conditions - all the details
	);

/**
 * perform a filter and validation check
 */
$cleanData = $t->check($invoice);

/**
 * Generate invoice
 */
$pdf = $t->generate($cleanData, true);