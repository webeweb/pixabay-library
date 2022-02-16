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
     * Tests setComments()
     *
     * @return void
     */
    public function testSetComments(): void {

        $obj = new TestHit();

        $obj->setComments(1);
        $this->assertEquals(1, $obj->getComments());
    }

    /**
     * Tests setDownloads()
     *
     * @return void
     */
    public function testSetDownloads(): void {

        $obj = new TestHit();

        $obj->setDownloads(1);
        $this->assertEquals(1, $obj->getDownloads());
    }

    /**
     * Tests setFavorites()
     *
     * @return void
     */
    public function testSetFavorites(): void {

        $obj = new TestHit();

        $obj->setFavorites(1);
        $this->assertEquals(1, $obj->getFavorites());
    }

    /**
     * Tests setLikes()
     *
     * @return void
     */
    public function testSetLikes(): void {

        $obj = new TestHit();

        $obj->setLikes(1);
        $this->assertEquals(1, $obj->getLikes());
    }

    /**
     * Tests setPageURL()
     *
     * @return void
     */
    public function testSetPageURL(): void {

        $obj = new TestHit();

        $obj->setPageURL("pageURL");
        $this->assertEquals("pageURL", $obj->getPageURL());
    }

    /**
     * Tests setTags()
     *
     * @return void
     */
    public function testSetTags(): void {

        $obj = new TestHit();

        $obj->setTags("tags");
        $this->assertEquals("tags", $obj->getTags());
    }

    /**
     * Tests setUser()
     *
     * @return void
     */
    public function testSetUser(): void {

        $obj = new TestHit();

        $obj->setUser("user");
        $this->assertEquals("user", $obj->getUser());
    }

    /**
     * Tests setUserId()
     *
     * @return void
     */
    public function testSetUserId(): void {

        $obj = new TestHit();

        $obj->setUserId(1);
        $this->assertEquals(1, $obj->getUserId());
    }

    /**
     * Tests setUserImageURL()
     *
     * @return void
     */
    public function testSetUserImageURL(): void {

        $obj = new TestHit();

        $obj->setUserImageURL("userImageURL");
        $this->assertEquals("userImageURL", $obj->getUserImageURL());
    }

    /**
     * Tests setViews()
     *
     * @return void
     */
    public function testSetViews(): void {

        $obj = new TestHit();

        $obj->setViews(1);
        $this->assertEquals(1, $obj->getViews());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
