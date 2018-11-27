<?php
include_once('/tests/UnitBootstrap.php');
include_once('/src/ET_Util.php');
include_once('/src/ET_Client.php');
use FuelSdk\ET_Client;
use FuelSdk\ET_DataExtension;
use FuelSdk\ET_DataExtension_Column;
use FuelSdk\ET_DataExtension_Row;

try {	
	$myclient = new ET_Client();
	
	//DataExtension Testing
	//Get all Data Extensions
	print_r("Get all Data Extensions \n");
	$getDE = new ET_DataExtension();
	$getDE->authStub = $myclient;
	$getDE->props = array("CustomerKey", "Name");	
	$getResult = $getDE->get();
	print_r('Get Status: '.($getResult->status ? 'true' : 'false')."\n");
	print 'Code: '.$getResult->code."\n";
	print 'Message: '.$getResult->message."\n";
	print_r('More Results: '.($getResult->moreResults ? 'true' : 'false')."\n");
	print 'Result Count: '.count($getResult->results)."\n";
	//print 'Results: '."\n";
	//print_r($getResult->results);
	print "\n---------------\n";


}catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

?>	