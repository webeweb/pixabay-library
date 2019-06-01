<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Fixtures;

/**
 * Test fixtures.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Fixtures
 */
class TestFixtures {

    /**
     * Sample Search images response.
     *
     * @var string
     */
    const SAMPLE_SEARCH_IMAGES_RESPONSE = <<< 'EOT'
{
	"total": 4692,
	"totalHits": 500,
	"hits": [
	    {
	        "id": 195893,
	        "pageURL": "https://pixabay.com/en/blossom-bloom-flower-195893/",
	        "type": "photo",
	        "tags": "blossom, bloom, flower",
	        "previewURL": "https://cdn.pixabay.com/photo/2013/10/15/09/12/flower-195893_150.jpg",
	        "previewWidth": 150,
	        "previewHeight": 84,
	        "webformatURL": "https://pixabay.com/get/35bbf209e13e39d2_640.jpg",
	        "webformatWidth": 640,
	        "webformatHeight": 360,
	        "largeImageURL": "https://pixabay.com/get/ed6a99fd0a76647_1280.jpg",
	        "fullHDURL": "https://pixabay.com/get/ed6a9369fd0a76647_1920.jpg",
	        "imageURL": "https://pixabay.com/get/ed6a9364a9fd0a76647.jpg",
	        "imageWidth": 4000,
	        "imageHeight": 2250,
	        "imageSize": 4731420,
	        "views": 7671,
	        "downloads": 6439,
	        "favorites": 1,
	        "likes": 5,
	        "comments": 2,
	        "user_id": 48777,
	        "user": "Josch13",
	        "userImageURL": "https://cdn.pixabay.com/user/2013/11/05/02-10-23-764_250x250.jpg"
	    }
	]
}
EOT;

    /**
     * Sample Search videos response.
     *
     * @var string
     */
    const SAMPLE_SEARCH_VIDEOS_RESPONSE = <<< 'EOT'
{
	"total": 42,
	"totalHits": 42,
	"hits": [
	    {
	        "id": 125,
	        "pageURL": "https://pixabay.com/videos/id-125/",
	        "type": "film",
	        "tags": "flowers, yellow, blossom",
	        "duration": 12,
	        "picture_id": "529927645",
	        "videos": {
	            "large": {
	                "url": "https://player.vimeo.com/external/135736646.hd.mp4?s=ed02d71c92dd0df7d1110045e6eb65a6&profile_id=119",
	                "width": 1920,
	                "height": 1080,
	                "size": 6615235
	            },
	            "medium": {
	                "url": "https://player.vimeo.com/external/135736646.hd.mp4?s=ed02d71c92dd0df7d1110045e6eb65a6&profile_id=174",
	                "width": 1280,
	                "height": 720,
	                "size": 3562083
	            },
	            "small": {
	                "url": "https://player.vimeo.com/external/135736646.sd.mp4?s=db2924c48ef91f17fc05da74603d5f89&profile_id=165",
	                "width": 950,
	                "height": 540,
	                "size": 2030736
	            },
	            "tiny": {
	                "url": "https://player.vimeo.com/external/135736646.sd.mp4?s=db2924c48ef91f17fc05da74603d5f89&profile_id=164",
	                "width": 640,
	                "height": 360,
	                "size": 1030736
	            }
	        },
	        "views": 169,
	        "downloads": 66,
	        "favorites": 7,
	        "likes": 3,
	        "comments": 2,
	        "user_id": 1281706,
	        "user": "CoverrFreeFootage",
	        "userImageURL": "https://cdn.pixabay.com/user/2015/10/16/09-28-45-303_250x250.png"
	    }
	]
}
EOT;
}
