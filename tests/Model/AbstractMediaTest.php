<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Tests\Model;

use WBW\Library\Pixabay\Tests\AbstractTestCase;
use WBW\Library\Pixabay\Tests\Fixtures\Model\TestMedia;

/**
 * Abstract media test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Model
 */
class AbstractMediaTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestMedia();

        $this->assertNull($obj->getComments());
        $this->assertNull($obj->getDownloads());
        $this->assertNull($obj->getFavorites());
        $this->assertNull($obj->getLikes());
        $this->assertNull($obj->getPageURL());
        $this->assertNull($obj->getTags());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getUser());
        $this->assertNull($obj->getUserId());
        $this->assertNull($obj->getUserImageURL());
        $this->assertNull($obj->getViews());
    }

    /**
     * Tests the setComments() method.
     *
     * @return void
     */
    public function testSetComments() {

        $obj = new TestMedia();

        $obj->setComments(1);
        $this->assertEquals(1, $obj->getComments());
    }

    /**
     * Tests the setDownloads() method.
     *
     * @return void
     */
    public function testSetDownloads() {

        $obj = new TestMedia();

        $obj->setDownloads(1);
        $this->assertEquals(1, $obj->getDownloads());
    }

    /**
     * Tests the setFavorites() method.
     *
     * @return void
     */
    public function testSetFavorites() {

        $obj = new TestMedia();

        $obj->setFavorites(1);
        $this->assertEquals(1, $obj->getFavorites());
    }

    /**
     * Tests the setId() method.
     *
     * @return void
     */
    public function testSetId() {

        $obj = new TestMedia();

        $obj->setId(1);
        $this->assertEquals(1, $obj->getId());
    }

    /**
     * Tests the setLikes() method.
     *
     * @return void
     */
    public function testSetLikes() {

        $obj = new TestMedia();

        $obj->setLikes(1);
        $this->assertEquals(1, $obj->getLikes());
    }

    /**
     * Tests the setPageURL() method.
     *
     * @return void
     */
    public function testSetPageURL() {

        $obj = new TestMedia();

        $obj->setPageURL("pageURL");
        $this->assertEquals("pageURL", $obj->getPageURL());
    }

    /**
     * Tests the setTags() method.
     *
     * @return void
     */
    public function testSetTags() {

        $obj = new TestMedia();

        $obj->setTags("tags");
        $this->assertEquals("tags", $obj->getTags());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new TestMedia();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests the setUser() method.
     *
     * @return void
     */
    public function testSetUser() {

        $obj = new TestMedia();

        $obj->setUser("user");
        $this->assertEquals("user", $obj->getUser());
    }

    /**
     * Tests the setUserId() method.
     *
     * @return void
     */
    public function testSetUserId() {

        $obj = new TestMedia();

        $obj->setUserId(1);
        $this->assertEquals(1, $obj->getUserId());
    }

    /**
     * Tests the setUserImageURL() method.
     *
     * @return void
     */
    public function testSetUserImageURL() {

        $obj = new TestMedia();

        $obj->setUserImageURL("userImageURL");
        $this->assertEquals("userImageURL", $obj->getUserImageURL());
    }

    /**
     * Tests the setViews() method.
     *
     * @return void
     */
    public function testSetViews() {

        $obj = new TestMedia();

        $obj->setViews(1);
        $this->assertEquals(1, $obj->getViews());
    }
}
