<?php

// -------------------------
// --- REQUIRED SETTINGS ---
// -------------------------

// --- Encryption key for URLS ---
// Used to mask links and other private data configured within miner stats
// Set this to a random string of at least 20 characters
	$conf['key'] = '86XzjlVmdY4TY8NHLD4*';


// --- Wallet/Account Address ---
// Used to pull stats from ethermine, as well as the etherium blockchain
// This is the same as "<Your_Ethereum_Address>" when configuring your miner
// on ethermine.org
	$conf['wallet'] = '70d37408c284178565c8091356684cb87d55f2f4';


// --- Timezone ---
// Set this to your timezone, so that "next eth" and other date/time related
// statistics are calculated so they are relevant to you.
// To find your timezone see - http://php.net/manual/en/timezones.php
	date_default_timezone_set('Europe/London');


// --- Cache File ---
// In the event that the Ethermine API returns no data, a local cache file
// is created and used.  No data is returned from the API query when there
// are too many requests being made.  Specify what you'd like your cache
// file to be called.  This file will be readable from your webserver, so
// use a random name to maintain the obscurity of your mining wallet
// address.
	$conf['cache_file'] = 'changeme.tmp';


// -------------------------
// --- OPTIONAL SETTINGS ---
// -------------------------

// Set the base FIAT currency (ISO 4217) you are interested in.  Currently
// I have only created support for USD, EUR and GBP.  If you want others
// adding let me know.
	$conf['fiat'] = 'gbp';


// --- Power Usage (for profitability calculator) ---
// Average power consumption of your mining rig in Watts. If you have 1 mining
// rig that in total consumes 300 watts, then this is simply 300.
// If however you have two rigs, one consuming 300 and one consuming 400, as
// long as they are subject to the same electricity costs, you can combine them
// here as 700 Watts
	$conf['watts'] = '300';


// Put how much your electricity costs per kWh. I guess the unit currency would be
// the same as fiat?
	$conf['kwh_cost'] = '0.13901';


// Set the colour scheme of all elements using the bootstrap utility
// standards (info = blue, success = green, warning = yellow, danger = red).
	$conf['colour'] = 'success';


// --- Display Settings ---
// These settings control what is displayed on your dashboard
// Yes = 1, No = 0

	// Display the mining progress bar
	$conf['show_bar'] = '1';

	// Display overall profitability based on energy cost
	$conf['show_kwh'] = '0';

	// Display stats related to the mining performance of time period
	$conf['show_min'] = '1';		// per minute performace
	$conf['show_hour'] = '1';		// per hour performace
	$conf['show_day'] = '1';		// per day performance
	$conf['show_week'] = '1';		// per week performance
	$conf['show_month'] = '1';		// per month performance


// --- Show Hashrate ---
// Some miners (qtminer, ethminer etc) don't correctly "report" a hashrate to
// to ethermine.org.  Check your stats via ethermine.org, if there is no
// figure shown for "Reported Hashrate", then set this to 0. Setting this to
// 0 will replace the "Reported Hashrate" section on the dashboard with the
// value of ETH mined so far on the job cycle.
	$conf['show_reportedhash'] = '1';



// ----------------------
// --- DEBUG SETTINGS ---
// ----------------------

// You can safely leave these settings as they are, unless you know what
// you are doing and need to change them for some reason.
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
// error_reporting(E_ALL);
// ini_set('allow_url_fopen', 1);


?>
