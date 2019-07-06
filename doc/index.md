DOCUMENTATION
=============

Search images
-------------

```php
// Create the API provider.
$provider = new APIProvider();

// Set an API key.
$provider->setKey("key");

// Create a Seacrh images model.
$model = new SearchImagesRequest();
// ...

// Call the API and get the response.
$response = $provider->searchImages($model);

// Handle the response.
$response->getTotal();
$response->getTotalHits();

/** @var ImageHit $current */
foreach ($response->getImageHits() as $current) {
    // ...
}
```

Search videos
-------------

```php
// Create the API provider.
$provider = new APIProvider();

// Set an API key.
$provider->setKey("key");

// Create a Search videos model.
$model = new SearchVideosRequest();
// ...

// Call the API and get the response.
$response = $provider->searchVideos($model);

// Handle the response.
$response->getTotal();
$response->getTotalHits();

/** @var VideoHit $current */
foreach ($response->getImageHits() as $current) {
    // ...
}
```
