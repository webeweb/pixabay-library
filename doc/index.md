DOCUMENTATION
=============

Search images
-------------

```php
// Create the API provider.
$provider = new APIProvider("YOUR_API_KEY");

// Create a Seacrh images model.
$request = new SearchImagesRequest();
// ...

// Call the API and get the response.
$response = $provider->searchImages($request);

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
$provider = new APIProvider("YOUR_API_KEY");

// Create a Search videos model.
$request = new SearchVideosRequest();
// ...

// Call the API and get the response.
$response = $provider->searchVideos($request);

// Handle the response.
$response->getTotal();
$response->getTotalHits();

/** @var VideoHit $current */
foreach ($response->getImageHits() as $current) {
    // ...
}
```
