DOCUMENTATION
=============

> IMPORTANT NOTICE: The API provider can be used with a debug flag and/or a
> logger with the following code:

```php
use Psr\Log\LoggerInterface;
use WBW\Library\Pixabay\Provider\ApiProvider;

/** @var LoggerInterface $logger */
// $logger = ...

// Create the API provider.
$provider = new ApiProvider("YOUR_API_KEY", $logger);
$provider->setDebug(true);
```

---

Search images

```php
use WBW\Library\Pixabay\Model\ImageHit;
use WBW\Library\Pixabay\Provider\ApiProvider;
use WBW\Library\Pixabay\Request\SearchImagesRequest;

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

    $current->getId();
    $current->getPageURL();
    $current->getType();
    $current->getTags();
    $current->getPreviewURL();
    $current->getPreviewWidth();
    $current->getPreviewHeight();
    $current->getWebFormatURL();
    $current->getWebFormatWidth();
    $current->getWebFormatHeight();
    $current->getLargeImageURL();
    $current->getFullHDURL();
    $current->getImageURL();
    $current->getImageWidth();
    $current->getImageHeight();
    $current->getImageSize();
    $current->getViews();
    $current->getDownloads();
    $current->getLikes();
    $current->getComments();
    $current->getUserId();
    $current->getUser();
    $current->getUserImageURL();
}
```

Search videos

```php
use WBW\Library\Pixabay\Model\Video;
use WBW\Library\Pixabay\Model\VideoHit;
use WBW\Library\Pixabay\Provider\ApiProvider;
use WBW\Library\Pixabay\Request\SearchVideosRequest;

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

    $current->getId();
    $current->getPageURL();
    $current->getType();
    $current->getTags();
    $current->getDuration();
    $current->getPictureId();

    /** @var Video $v */
    foreach($current->getVideos() as $v) {
        
        $v->getQuality();
        $v->getUrl();
        $v->getWidth();
        $v->getHeight();
        $v->getSize();
    }

    $current->getViews();
    $current->getDownloads();
    $current->getLikes();
    $current->getComments();
    $current->getUserId();
    $current->getUser();
    $current->getUserImageURL();
}
```
