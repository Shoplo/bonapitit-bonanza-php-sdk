# bonapiti-bonanza-php-sdk
PHP SDK for Bonanza Marketplace and its "Bonapitit" REST API.

Package currently has got support for calling Bonanza's methods:

| Method name  | Is secure |
| ------------- | ------------- |
| fetchToken  | no  |
| getCategories  | no |
| getCategoryTraits  | no |
| getSingleItem  | no |
| getBoothItems  | for basic data - no, for more detailed data - yes|
| getUnlistedItem  | yes |
| getOrders  | yes |
| getUser  | yes |
| addFixedPriceItem  | yes |
| reviseFixedPriceItem  | yes |
| endFixedPriceItem  | yes |
| updateBooth  | yes |
| setNotificationPreferences  | yes |
| getNotificationPreferences  | yes |

Please refer to the Bonanza's API docs here: https://api.bonanza.com/docs

# Basic usage

For every call you need devID and certID that you can obtain here: https://api.bonanza.com/accounts/new

### Unsecure calls

```php
<?php

use Shoplo\BonanzaApi\Client\BonanzaClient;
use Shoplo\BonanzaApi\Credentials\Credentials;
use Shoplo\BonanzaApi\Request\GetBoothItemsRequest;

//Create credentials object using obtained data
$credentials = new Credentials('devID', 'certID');

//Create bonanza client
$client = new BonanzaClient($credentials);

//Create request
$request = new GetBoothItemsRequest();
$request->page = 1;
$request->itemsPerPage = 3;
$request->boothId = 'boothName';

//Make a call and receive GetBoothItemsResponse object
$response = $client->getBoothItems($request);
```

### Secure calls

To make secure call, you need to obtain user auth token first.
To receive it, you need to make fetchToken call:

```php
<?php

use Shoplo\BonanzaApi\Request\FetchTokenRequest;

//Create request, and provide the callback url
$request = new FetchTokenRequest();
$request->validationCompleteURL = 'http://return.to/url';

//Make a call and get the authorization URL
$response = $client->fetchToken($request);

//You have the auth token here, but it is inactive, so you can save it for example in the session
$authToken = $response->fetchTokenResponse->authToken;

//Then you redirect user to the page, where he need to log in and confirm the token.
// After confirmation the user is taken back to the validationCompleteURL.
header('Location: '.$response->fetchTokenResponse->authenticationURL);
```

When the access token is signed, you can make a secure call.

```php
<?php

use Shoplo\BonanzaApi\Client\BonanzaClient;
use Shoplo\BonanzaApi\Credentials\Credentials;
use Shoplo\BonanzaApi\Request\GetBoothItemsRequest;
use Shoplo\BonanzaApi\Type\RequesterCredentialsType;

//Create credentials object using obtained data
$credentials = new Credentials('devID', 'certID');

//Create bonanza client
$client = new BonanzaClient($credentials);

//Create requester credentials containing the received token
$requesterCredentials = new RequesterCredentialsType();
$requesterCredentials->bonanzleAuthToken = 'authToken';

//Create request and pass the requesterCredentials to authorize the request
$request = new GetBoothItemsRequest();
$request->requesterCredentials = $requesterCredentials;
$request->page = 1;
$request->itemsPerPage = 3;
$request->boothId = 'boothName';

//Make a call and receive GetBoothItemsResponse object
$response = $client->getBoothItems($request);
```
