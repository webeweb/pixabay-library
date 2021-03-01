<?php

/*
 * This file is part of the pixabay-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pixabay\Provider;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use InvalidArgumentException;
use Psr\Log\LoggerInterface;
use WBW\Library\Core\Exception\ApiException;
use WBW\Library\Core\Provider\AbstractProvider as BaseProvider;
use WBW\Library\Pixabay\Model\AbstractRequest;
use WBW\Library\Pixabay\Model\RateLimitTrait;

/**
 * Abstract provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pixabay\Provider
 */
abstract class AbstractProvider extends BaseProvider {

    use RateLimitTrait;

    /**
     * Endpoint path.
     *
     * @var string
     */
    const ENDPOINT_PATH = "https://pixabay.com/api";

    /**
     * Key.
     *
     * @var string|null
     */
    private $key;

    /**
     * Constructor.
     *
     * @param string|null $key The key.
     * @param LoggerInterface|null $logger The logger.
     */
    public function __construct(string $key = null, LoggerInterface $logger = null) {
        parent::__construct($logger);
        $this->setDebug(false);
        $this->setKey($key);
    }

    /**
     * Build the configuration.
     *
     * @return array Returns the configuration.
     */
    private function buildConfiguration(): array {
        return [
            "base_uri"    => self::ENDPOINT_PATH . "/",
            "debug"       => $this->getDebug(),
            "headers"     => [
                "Accept"     => "application/json",
                "User-Agent" => "webeweb/pixabay-library",
            ],
            "synchronous" => true,
        ];
    }

    /**
     * Call the API.
     *
     * @param AbstractRequest $request The request.
     * @param array $queryData The query data.
     * @return string Returns the raw response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    protected function callApi(AbstractRequest $request, array $queryData): string {

        if (null === $this->getKey()) {
            throw new InvalidArgumentException('The mandatory parameter "key" is missing');
        }

        try {

            $config = $this->buildConfiguration();

            $client = new Client($config);

            $method  = "GET";
            $uri     = substr($request->getResourcePath(), 1);
            $options = [
                "query" => array_merge(["key" => $this->getKey()], $queryData),
            ];

            $this->logInfo(sprintf("Call Pixabay API %s %s", $method, $uri), ["config" => $config, "options" => $options]);

            $response = $client->request($method, $uri, $options);

            $this->setLimit(intval($response->getHeaderLine("X-Ratelimit-Limit")));
            $this->setRemaining(intval($response->getHeaderLine("X-Ratelimit-Remaining")));
            //$this->setReset(new DateTime("@" . $response->getHeaderLine("X-Ratelimit-Reset")));

            return $response->getBody()->getContents();
        } catch (Exception $ex) {

            throw new ApiException("Call Pixabay API failed", 500, $ex);
        }
    }

    /**
     * Get the key.
     *
     * @return string|null Returns the key.
     */
    public function getKey(): ?string {
        return $this->key;
    }

    /**
     * Set the key.
     *
     * @param string|null $key The key.
     * @return AbstractProvider Returns this provider.
     */
    public function setKey(?string $key): AbstractProvider {
        $this->key = $key;
        return $this;
    }
}
