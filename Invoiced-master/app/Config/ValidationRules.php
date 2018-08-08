<?php
/**
 * Holds default validation rules.
 */

return array(
	"from" => "required", 
	"to" => "required", 
	"number" => "required|integer|min_len,1", 
	"date" => "required",
	"due_date" => "required",
	"payment_terms" => "alpha_space", 
	"fields[tax]" => "required|boolean",
	"fields[discounts]" => "required|boolean",
	"fields[shipping]" => "required|boolean",
	"tax"=> "integer",
	"shipping"=> "integer",
	"amount_paid" => "integer",
	"terms" => "required"
);