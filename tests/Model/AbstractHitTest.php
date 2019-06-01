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
use WBW\Library\Pixabay\Tests\Fixtures\Model\TestHit;

/**
 * Abstract hit test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Tests\Model
 */
class AbstractHitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestHit();

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

        $obj = new TestHit();

        $obj->setComments(1);
        $this->assertEquals(1, $obj->getComments());
    }

    /**
     * Tests the setDownloads() method.
     *
     * @return void
     */
    public function testSetDownloads() {

        $obj = new TestHit();

        $obj->setDownloads(1);
        $this->assertEquals(1, $obj->getDownloads());
    }

    /**
     * Tests the setFavorites() method.
     *
     * @return void
     */
    public function testSetFavorites() {

        $obj = new TestHit();

        $obj->setFavorites(1);
        $this->assertEquals(1, $obj->getFavorites());
    }

    /**
     * Tests the setId() method.
     *
     * @return void
     */
    public function testSetId() {

        $obj = new TestHit();

        $obj->setId(1);
        $this->assertEquals(1, $obj->getId());
    }

    /**
     * Tests the setLikes() method.
     *
     * @return void
     */
    public function testSetLikes() {

        $obj = new TestHit();

        $obj->setLikes(1);
        $this->assertEquals(1, $obj->getLikes());
    }

    /**
     * Tests the setPageURL() method.
     *
     * @return void
     */
    public function testSetPageURL() {

        $obj = new TestHit();

        $obj->setPageURL("pageURL");
        $this->assertEquals("pageURL", $obj->getPageURL());
    }

    /**
     * Tests the setTags() method.
     *
     * @return void
     */
    public function testSetTags() {

        $obj = new TestHit();

        $obj->setTags("tags");
        $this->assertEquals("tags", $obj->getTags());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new TestHit();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests the setUser() method.
     *
     * @return void
     */
    public function testSetUser() {

        $obj = new TestHit();

        $obj->setUser("user");
        $this->assertEquals("user", $obj->getUser());
    }

    /**
     * Tests the setUserId() method.
     *
     * @return void
     */
    public function testSetUserId() {

        $obj = new TestHit();

        $obj->setUserId(1);
        $this->assertEquals(1, $obj->getUserId());
    }

    /**
     * Tests the setUserImageURL() method.
     *
     * @return void
     */
    public function testSetUserImageURL() {

        $obj = new TestHit();

        $obj->setUserImageURL("userImageURL");
        $this->assertEquals("userImageURL", $obj->getUserImageURL());
    }

    /**
     * Tests the setViews() method.
     *
     * @return void
     */
    public function testSetViews() {

        $obj = new TestHit();

        $obj->setViews(1);
        $this->assertEquals(1, $obj->getViews());
    }
}
