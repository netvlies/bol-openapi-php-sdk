## Bol.com OpenApi PHP SDK

[![Build Status](https://secure.travis-ci.org/netvlies/bol-openapi-php-sdk.png)](http://travis-ci.org/netvlies/bol-openapi-php-sdk)

The [Bol.com Open Api](http://developers.bol.com/documentatie/handleiding/) is an RESTfull API wich you can use to communicate with the Bol.com webshop catalogue. This library makes it very easy to use this API as a service within your PHP application.

You need to have a developer key to use this API. You can get one by [registering at the Bol.com developer center](https://developers.bol.com/inloggen/?action=register).

**NOTE** this bundle is in development and cannot be used in an production enviroment.

## License
This library is released under the MIT license. See the complete license in the LICENSE file.

## Installation
First [install composer](http://getcomposer.org/doc/01-basic-usage.md#installation) and after that [install the dependencies](http://getcomposer.org/doc/01-basic-usage.md#installing-dependencies).

## Requirements
PHP >=5.3.0

## Using it

    // ..
    $httpBrowser = new \Buzz\Browser();
    $accessKey = 'ABC';
    $secretAccessKey = 'DEF';
    $apiClient = new Client($accessKey, $secretAccessKey, $httpBrowser);
    // ..
  
### Search for products / categories
The searchresults operation returns product information by supplying keywords or ISBN/EAN. The operation has filtering and paging options.
    
    // ..
    $term = 'PHP';
    $options = array(
        // Set your options here
    );
    $searchResult = $apiClient->searchResults($term, $options);
    // ..

### List products / categories
The listresults operation returns various product lists, based on list type and category. The category is based on the id, which can be obtained by the category list request.

For available list types see the [documentation](http://developers.bol.com/documentatie/handleiding/).

    // ..
    $type = 'toplist_default';
    $categoryIdAndRefinements = '87';
    $options = array(
        // Set your options here
    );
    $listResult = $apiClient->listResults($type, $categoryIdAndRefinements, $options);
    // ..

### Get product information
The products operation gets detailed information for products.

    // ...
    $productId = '1002004011800815';
    $productResponse = $apiClient->products($productId);
    // ...

## Documentation
Further documentation about the API can be found at the [Bol.com developer center](http://developers.bol.com/documentatie/handleiding/).

## Testing
Be sure to install the dependencies first and after that just run phpunit in the lib root:

    phpunit
