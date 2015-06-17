<?php

// # Create Bitcoin Testnet Address Sample
// This sample code demonstrate how you can create
// an address.

require __DIR__ . '/../bootstrap.php';

$address = null;

// For Sample Purposes Only.
$request = null;

try {
    // ### Create Address
    // Create an address by calling the Address::create() method
    // with a valid ApiContext (See bootstrap.php for more on `ApiContext`)
    $address = \BlockCypher\Api\Address::create(null, $apiContexts['BTC.main']);
} catch (Exception $ex) {
    ResultPrinter::printError("Create Address", "Address", null, $request, $ex);
    exit(1);
}

ResultPrinter::printResult("Create Address", "Address", $address->getAddress(), $request, $address);

return $address;