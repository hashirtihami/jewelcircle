<?php
/**
 * Holds default filter rules.
 */

return array(
	"logo" => "sanitize_string|trim",
	"from" => "trim", 
	"to" => "trim", 
	"payment_terms" => "trim",
	"tax"=> "whole_number",
);