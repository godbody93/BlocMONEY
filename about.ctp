
<?php

$api_key = “Y2BhjljBRMdoWUeSQRq75RyHtlNJBd8FRLa1BT5oL2Vr3zaHGoumNnI8i87BJkhZ”;
$xpub = “xpub6BgyETiwKAAbFLS1so6AqCaoVzqmh3KNnxiZmExjwZPfwMxc7TBqnFiqGhVEvFSzQqMdnpnPQ3pRGzqiRWgRCk39XnvkccQnR6te63cPps4”;
$secret = “Don123”;
$root URL = http://godbody-macbook.local/dashboard/”;
$orderID = unigid():

$callback_url = $rootURL. “/callback.php?invoice””.$orderID. “&secret=“.$secret;
$receive_url = “https:/api.blockchain.info/v2/receive?key=“.$api_key.”&xpub=“&callback=“.urlencode($callback_url);
$ch = curl_init ();
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt ($ch, CURLOPT_URL, $receive_url);
$ccc = curl_exec ($ch);
$json = json_decode ($ccc, true);
$payTo = $json [‘address’];
echo $payTo

?>