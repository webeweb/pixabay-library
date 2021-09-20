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
echo "Total:" . $response->getTotal() . "\n";
echo "Total hits:" . $response->getTotalHits() . "\n";

/** @var ImageHit $current */
foreach ($response->getImageHits() as $current) {

    echo "\n";
    echo "Id: " . $current->getId() . "\n";
    echo "Page URL: " . $current->getPageURL() . "\n";
    echo "Type: " . $current->getType() . "\n";
    echo "Tags: " . $current->getTags() . "\n";
    echo "Preview URL: " . $current->getPreviewURL() . "\n";
    echo "Preview width: " . $current->getPreviewWidth() . "\n";
    echo "Preview height: " . $current->getPreviewHeight() . "\n";
    echo "Web format URL: " . $current->getWebFormatURL() . "\n";
    echo "Web format width: " . $current->getWebFormatWidth() . "\n";
    echo "Web format height: " . $current->getWebFormatHeight() . "\n";
    echo "Large image URL: " . $current->getLargeImageURL() . "\n";
    echo "Full HD URL: " . $current->getFullHDURL() . "\n";
    echo "Image URL: " . $current->getImageURL() . "\n";
    echo "Image width: " . $current->getImageWidth() . "\n";
    echo "Image height: " . $current->getImageHeight() . "\n";
    echo "Image size: " . $current->getImageSize() . "\n";
    echo "Views: " . $current->getViews() . "\n";
    echo "Downloads: " . $current->getDownloads() . "\n";
    echo "Likes: " . $current->getLikes() . "\n";
    echo "Comments: " . $current->getComments() . "\n";
    echo "User id: " . $current->getUserId() . "\n";
    echo "User: " . $current->getUser() . "\n";
    echo "User image URL: " . $current->getUserImageURL() . "\n";
}
