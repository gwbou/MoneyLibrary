<?php
/**
 * Created 30.07.2014 11:38
 * Author: Gustav Wellner Bou <wellner@solutica.de>
 */

/**
 * Templates for formatting amounts in a given currency.
 * @var array Currency codes as keys and templates as values.
 */
return array(
	'EUR' => array('decimals' => 2, 'dec_point' => ',', 'thousands_sep' => '.', 'format' => ':-:amount €'),
	'AUD' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => ':-$:amount'),
	'BGN' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => ':-:amount лв'),
	'BRL' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => ':-R$'),
	'CAD' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => ':-$'),
	'CHF' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => ':-:amount SFr'),
	'CNY' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => '¥:-:amount'),
	'CZK' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => 'Kč:-:amount'),
	'DKK' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => 'kr:-:amount'),
	'GBP' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => ':-£:amount'),
	'HKD' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => ':-$:amount'),
	'HRK' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => 'kn:-:amount'),
	'HUF' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => 'Ft:-:amount'),
	'IDR' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => 'Rp:-:amount'),
	'ILS' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => '₪:-:amount'),
	'INR' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => '₹:-:amount'),
	'JPY' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => '¥:-:amount'),
	'KRW' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => '₩:-:amount'),
	'LTL' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => 'Lt:-:amount'),
	'MXN' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => '$:-:amount'),
	'MYR' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => 'RM:-:amount'),
	'NOK' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => 'kr:-:amount'),
	'NZD' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => ':-$:amount'),
	'PHP' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => '₱:-:amount'),
	'PLN' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => 'zł:-:amount'),
	'RON' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => 'lei:-:amount'),
	'RUB' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => 'руб:-:amount'),
	'SEK' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => 'kr:-:amount'),
	'SGD' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => '$:-:amount'),
	'THB' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => '฿:-:amount'),
	'TRY' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => '₺:-:amount'),
	'USD' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => ':-$:amount'),
	'ZAR' => array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',', 'format' => 'R:-:amount'),
);