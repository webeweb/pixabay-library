<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Pixabay\Tests\Model;

use WBW\Library\Pixabay\Tests\AbstractTestCase;
use WBW\Library\Pixabay\Tests\Fixtures\Model\TestHit;

/**
 * Abstract hit test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pixabay\Tests\Model
 */
class AbstractHitTest extends AbstractTestCase {

    /**
     * Test setComments()
     *
     * @return void
     */
    public function testSetComments(): void {

        $obj = new TestHit();

        $obj->setComments(1);
        $this->assertEquals(1, $obj->getComments());
    }

    /**
     * Test setDownloads()
     *
     * @return void
     */
    public function testSetDownloads(): void {

        $obj = new TestHit();

        $obj->setDownloads(1);
        $this->assertEquals(1, $obj->getDownloads());
    }

    /**
     * Test setFavorites()
     *
     * @return void
     */
    public function testSetFavorites(): void {

        $obj = new TestHit();

        $obj->setFavorites(1);
        $this->assertEquals(1, $obj->getFavorites());
    }

    /**
     * Test setLikes()
     *
     * @return void
     */
    public function testSetLikes(): void {

        $obj = new TestHit();

        $obj->setLikes(1);
        $this->assertEquals(1, $obj->getLikes());
    }

    /**
     * Test setPageURL()
     *
     * @return void
     */
    public function testSetPageURL(): void {

        $obj = new TestHit();

        $obj->setPageURL("pageURL");
        $this->assertEquals("pageURL", $obj->getPageURL());
    }

    /**
     * Test setTags()
     *
     * @return void
     */
    public function testSetTags(): void {

        $obj = new TestHit();

        $obj->setTags("tags");
        $this->assertEquals("tags", $obj->getTags());
    }

    /**
     * Test setUser()
     *
     * @return void
     */
    public function testSetUser(): void {

        $obj = new TestHit();

        $obj->setUser("user");
        $this->assertEquals("user", $obj->getUser());
    }

    /**
     * Test setUserId()
     *
     * @return void
     */
    public function testSetUserId(): void {

        $obj = new TestHit();

        $obj->setUserId(1);
        $this->assertEquals(1, $obj->getUserId());
    }

    /**
     * Test setUserImageURL()
     *
     * @return void
     */
    public function testSetUserImageURL(): void {

        $obj = new TestHit();

        $obj->setUserImageURL("userImageURL");
        $this->assertEquals("userImageURL", $obj->getUserImageURL());
    }

    /**
     * Test setViews()
     *
     * @return void
     */
    public function testSetViews(): void {

        $obj = new TestHit();

        $obj->setViews(1);
        $this->assertEquals(1, $obj->getViews());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestHit();

        $this->assertNull($obj->getId());
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
