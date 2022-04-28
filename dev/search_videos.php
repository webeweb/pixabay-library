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
use WBW\Library\Pixabay\Tests\AbstractTestCase;

// Create the API provider.
$provider = new ApiProvider(AbstractTestCase::getToken());

// Create a Search images request.
$request = new SearchVideosRequest();
$request->setQ("paysage");
// ...

// Call the API and get the response.
$response = $provider->searchVideos($request);

// Handle the response.
$format = "%20s: %s\n";

echo sprintf($format, "Total", $response->getTotal());
echo sprintf($format, "Total hits", $response->getTotalHits());

/** @var VideoHit $current */
foreach ($response->getVideoHits() as $current) {

    echo "\n";
    echo sprintf($format, "Id", $current->getId());
    echo sprintf($format, "Page URL", $current->getPageURL());
    echo sprintf($format, "Type", $current->getType());
    echo sprintf($format, "Tags", $current->getTags());
    echo sprintf($format, "Duration", $current->getDuration());
    echo sprintf($format, "Picture id", $current->getPictureId());

    /** @var Video $v */
    foreach ($current->getVideos() as $v) {
        echo sprintf($format, "Quality", $v->getQuality());
        echo sprintf($format, "URL", $v->getUrl());
        echo sprintf($format, "Width", $v->getWidth());
        echo sprintf($format, "Height", $v->getHeight());
        echo sprintf($format, "Size", $v->getSize());
    }

    echo sprintf($format, "Views", $current->getViews());
    echo sprintf($format, "Downloads", $current->getDownloads());
    echo sprintf($format, "Likes", $current->getLikes());
    echo sprintf($format, "Comments", $current->getComments());
    echo sprintf($format, "User id", $current->getUserId());
    echo sprintf($format, "User", $current->getUser());
    echo sprintf($format, "User image URL", $current->getUserImageURL());
}
