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
use WBW\Library\Pixabay\Response\SearchImagesResponse;

// Create the API provider.
$provider = new ApiProvider("YOUR_API_KEY");

// Create a Search images request.
$request = new SearchImagesRequest();
// ...

/** @var SearchImagesResponse $response */
$response = $provider->sendRequest($request);

// Handle the response.
$response->getTotal();
$response->getTotalHits();

/** @var ImageHit $current */
foreach ($response->getImageHits() as $current) {

    $current->getId();
    $current->getPageURL();
    $current->getType();
    $current->getTags();
    $current->getPreviewUrl();
    $current->getPreviewWidth();
    $current->getPreviewHeight();
    $current->getWebFormatUrl();
    $current->getWebFormatWidth();
    $current->getWebFormatHeight();
    $current->getLargeImageUrl();
    $current->getFullHdUrl();
    $current->getImageUrl();
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
use WBW\Library\Pixabay\Response\SearchVideosResponse;

// Create the API provider.
$provider = new ApiProvider("YOUR_API_KEY");

// Create a Search videos request.
$request = new SearchVideosRequest();
// ...

/** @var SearchVideosResponse $response */
$response = $provider->sendRequest($request);

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
