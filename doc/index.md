DOCUMENTATION
=============

Search images

```php
// Create the API provider.
$provider = new ApiProvider("YOUR_API_KEY");

// Create a Search images request.
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

```php
// Create the API provider.
$provider = new ApiProvider("YOUR_API_KEY");

// Create a Search videos request.
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
