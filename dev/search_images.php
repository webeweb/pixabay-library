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

use WBW\Library\Pixabay\Model\ImageHit;
use WBW\Library\Pixabay\Provider\ApiProvider;
use WBW\Library\Pixabay\Request\SearchImagesRequest;

// Create the API provider.
$provider = new ApiProvider("YOUR_API_KEY");

// Create a Search images request.
$request = new SearchImagesRequest();
$request->setQ("paysage");
// ...

// Call the API and get the response.
$response = $provider->searchImages($request);

// Handle the response.
$format = "%20s: %s\n";

echo sprintf($format, "Total", $response->getTotal());
echo sprintf($format, "Total hits", $response->getTotalHits());

/** @var ImageHit $current */
foreach ($response->getImageHits() as $current) {

    echo "\n";
    echo sprintf($format, "Id", $current->getId());
    echo sprintf($format, "Page URL", $current->getPageURL());
    echo sprintf($format, "Type", $current->getType());
    echo sprintf($format, "Tags", $current->getTags());
    echo sprintf($format, "Preview URL", $current->getPreviewUrl());
    echo sprintf($format, "Preview width", $current->getPreviewWidth());
    echo sprintf($format, "Preview height", $current->getPreviewHeight());
    echo sprintf($format, "Web format URL", $current->getWebFormatUrl());
    echo sprintf($format, "Web format width", $current->getWebFormatWidth());
    echo sprintf($format, "Web format height", $current->getWebFormatHeight());
    echo sprintf($format, "Large image URL", $current->getLargeImageUrl());
    echo sprintf($format, "Full HD URL", $current->getFullHdUrl());
    echo sprintf($format, "Image URL", $current->getImageUrl());
    echo sprintf($format, "Image width", $current->getImageWidth());
    echo sprintf($format, "Image height", $current->getImageHeight());
    echo sprintf($format, "Image size", $current->getImageSize());
    echo sprintf($format, "Views", $current->getViews());
    echo sprintf($format, "Downloads", $current->getDownloads());
    echo sprintf($format, "Likes", $current->getLikes());
    echo sprintf($format, "Comments", $current->getComments());
    echo sprintf($format, "User id", $current->getUserId());
    echo sprintf($format, "User", $current->getUser());
    echo sprintf($format, "User image URL", $current->getUserImageURL());
}
