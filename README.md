# SwaggerClient-php
The Selling Partner API for Listings Items (Listings Items API) provides programmatic access to selling partner listings on Amazon. Use this API in collaboration with the Selling Partner API for Product Type Definitions, which you use to retrieve the information about Amazon product types needed to use the Listings Items API.  For more information, see the [Listings Items API Use Case Guide](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/use-case-guides/listings-items-api-use-case-guide/listings-items-api-use-case-guide_2021-08-01.md).

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2021-08-01
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen
For more information, please visit [https://sellercentral.amazon.com/gp/mws/contactus.html](https://sellercentral.amazon.com/gp/mws/contactus.html)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_id = "seller_id_example"; // string | A selling partner identifier, such as a merchant account or vendor code.
$sku = "sku_example"; // string | A selling partner provided identifier for an Amazon listing.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$issue_locale = "issue_locale_example"; // string | A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \"en_US\", \"fr_CA\", \"fr_FR\". Localized messages default to \"en_US\" when a localization is not available in the specified locale.

try {
    $result = $apiInstance->deleteListingsItem($seller_id, $sku, $marketplace_ids, $issue_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->deleteListingsItem: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_id = "seller_id_example"; // string | A selling partner identifier, such as a merchant account or vendor code.
$sku = "sku_example"; // string | A selling partner provided identifier for an Amazon listing.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$issue_locale = "issue_locale_example"; // string | A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \"en_US\", \"fr_CA\", \"fr_FR\". Localized messages default to \"en_US\" when a localization is not available in the specified locale.
$included_data = array("included_data_example"); // string[] | A comma-delimited list of data sets to include in the response. Default: summaries.

try {
    $result = $apiInstance->getListingsItem($seller_id, $sku, $marketplace_ids, $issue_locale, $included_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->getListingsItem: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ListingsItemPatchRequest(); // \Swagger\Client\Model\ListingsItemPatchRequest | The request body schema for the patchListingsItem operation.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$seller_id = "seller_id_example"; // string | A selling partner identifier, such as a merchant account or vendor code.
$sku = "sku_example"; // string | A selling partner provided identifier for an Amazon listing.
$issue_locale = "issue_locale_example"; // string | A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \"en_US\", \"fr_CA\", \"fr_FR\". Localized messages default to \"en_US\" when a localization is not available in the specified locale.

try {
    $result = $apiInstance->patchListingsItem($body, $marketplace_ids, $seller_id, $sku, $issue_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->patchListingsItem: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ListingsItemPutRequest(); // \Swagger\Client\Model\ListingsItemPutRequest | The request body schema for the putListingsItem operation.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$seller_id = "seller_id_example"; // string | A selling partner identifier, such as a merchant account or vendor code.
$sku = "sku_example"; // string | A selling partner provided identifier for an Amazon listing.
$issue_locale = "issue_locale_example"; // string | A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \"en_US\", \"fr_CA\", \"fr_FR\". Localized messages default to \"en_US\" when a localization is not available in the specified locale.

try {
    $result = $apiInstance->putListingsItem($body, $marketplace_ids, $seller_id, $sku, $issue_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->putListingsItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://sellingpartnerapi-na.amazon.com/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ListingsApi* | [**deleteListingsItem**](docs/Api/ListingsApi.md#deletelistingsitem) | **DELETE** /listings/2021-08-01/items/{sellerId}/{sku} | 
*ListingsApi* | [**getListingsItem**](docs/Api/ListingsApi.md#getlistingsitem) | **GET** /listings/2021-08-01/items/{sellerId}/{sku} | 
*ListingsApi* | [**patchListingsItem**](docs/Api/ListingsApi.md#patchlistingsitem) | **PATCH** /listings/2021-08-01/items/{sellerId}/{sku} | 
*ListingsApi* | [**putListingsItem**](docs/Api/ListingsApi.md#putlistingsitem) | **PUT** /listings/2021-08-01/items/{sellerId}/{sku} | 

## Documentation For Models

 - [Decimal](docs/Model/Decimal.md)
 - [Error](docs/Model/Error.md)
 - [ErrorList](docs/Model/ErrorList.md)
 - [FulfillmentAvailability](docs/Model/FulfillmentAvailability.md)
 - [Issue](docs/Model/Issue.md)
 - [Item](docs/Model/Item.md)
 - [ItemAttributes](docs/Model/ItemAttributes.md)
 - [ItemImage](docs/Model/ItemImage.md)
 - [ItemIssues](docs/Model/ItemIssues.md)
 - [ItemOfferByMarketplace](docs/Model/ItemOfferByMarketplace.md)
 - [ItemOffers](docs/Model/ItemOffers.md)
 - [ItemProcurement](docs/Model/ItemProcurement.md)
 - [ItemSummaries](docs/Model/ItemSummaries.md)
 - [ItemSummaryByMarketplace](docs/Model/ItemSummaryByMarketplace.md)
 - [ListingsItemPatchRequest](docs/Model/ListingsItemPatchRequest.md)
 - [ListingsItemPutRequest](docs/Model/ListingsItemPutRequest.md)
 - [ListingsItemSubmissionResponse](docs/Model/ListingsItemSubmissionResponse.md)
 - [Money](docs/Model/Money.md)
 - [PatchOperation](docs/Model/PatchOperation.md)
 - [Points](docs/Model/Points.md)

## Documentation For Authorization

 All endpoints do not require authorization.


## Author


