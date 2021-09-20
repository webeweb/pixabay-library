<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once __DIR__ . "/../vendor/autoload.php";

use WBW\Library\Pixabay\Model\Video;
use WBW\Library\Pixabay\Model\VideoHit;
use WBW\Library\Pixabay\Provider\ApiProvider;
use WBW\Library\Pixabay\Request\SearchVideosRequest;

// Create the API provider.
$provider = new ApiProvider("YOUR_API_KEY");

// Create a Search images request.
$request = new SearchVideosRequest();
$request->setQ("paysage");
// ...

// Call the API and get the response.
$response = $provider->searchVideos($request);

// Handle the response.
echo "Total:" . $response->getTotal() . "\n";
echo "Total hits:" . $response->getTotalHits() . "\n";

/** @var VideoHit $current */
foreach ($response->getVideoHits() as $current) {

    echo "\n";
    echo "Id: " . $current->getId() . "\n";
    echo "Page URL: " . $current->getPageURL() . "\n";
    echo "Type: " . $current->getType() . "\n";
    echo "Tags: " . $current->getTags() . "\n";
    echo "Duration: " . $current->getDuration() . "\n";
    echo "Picture id: " . $current->getPictureId() . "\n";

    /** @var Video $v */
    foreach ($current->getVideos() as $v) {
        echo "Video " . $v->getQuality() . " URL:" . $v->getUrl() . "\n";
        echo "Video " . $v->getQuality() . " width:" . $v->getWidth() . "\n";
        echo "Video " . $v->getQuality() . " height:" . $v->getHeight() . "\n";
        echo "Video " . $v->getQuality() . " size:" . $v->getSize() . "\n";
    }

    echo "Views: " . $current->getViews() . "\n";
    echo "Downloads: " . $current->getDownloads() . "\n";
    echo "Likes: " . $current->getLikes() . "\n";
    echo "Comments: " . $current->getComments() . "\n";
    echo "User id: " . $current->getUserId() . "\n";
    echo "User: " . $current->getUser() . "\n";
    echo "User image URL: " . $current->getUserImageURL() . "\n";
}
