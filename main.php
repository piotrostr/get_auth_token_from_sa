<?php

require 'vendor/autoload.php';

use Google\Client;

$jsonKeyFilePath = 'creds.json';

$client = new Client();
$client->setAuthConfig($jsonKeyFilePath);

$scopes = [
	'https://www.googleapis.com/auth/cloud-platform',
	'https://www.googleapis.com/auth/sqlservice.login',
	'https://www.googleapis.com/auth/cloud-platform',
	'https://www.googleapis.com/auth/compute',
	'https://www.googleapis.com/auth/appengine.admin',
	'https://www.googleapis.com/auth/userinfo.email',
	'openid'
];

$client->useApplicationDefaultCredentials();
$client->setScopes($scopes);

$accessToken = $client->fetchAccessTokenWithAssertion();

if (isset($accessToken['access_token'])) {
	echo $accessToken['access_token'];
} else {
	echo "Failed to fetch access token.";
}