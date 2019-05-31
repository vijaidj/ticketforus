<?php

namespace Sample;

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;

ini_set('error_reporting', E_ALL); // or error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

class PayPalClient
{
    /**
     * Returns PayPal HTTP client instance with environment which has access
     * credentials context. This can be used invoke PayPal API's provided the
     * credentials have the access to do so.
     */
    public static function client()
    {
        return new PayPalHttpClient(self::environment());
    }
    
    /**
     * Setting up and Returns PayPal SDK environment with PayPal Access credentials.
     * For demo purpose, we are using SandboxEnvironment. In production this will be
     * LiveEnvironment.
     */
    public static function environment()
    {
        $clientId = getenv("CLIENT_ID") ?: "AfhDW34NDTXLhTn7sA_rASuQVj5qFY7Y81pvgalF5RwqnkSTMPK_aPXd9Bs4wW8rSeUqbZbiZFcAUbEk";
        $clientSecret = getenv("CLIENT_SECRET") ?: "EPGIPFm2z__QRQxLQE8v7tlMyWRlC_W2yWziN1oB8q3OEqCsbru8ymFZilIxDyR4Xut-pyhyPM9_ct-L";
        return new SandboxEnvironment($clientId, $clientSecret);
    }
}