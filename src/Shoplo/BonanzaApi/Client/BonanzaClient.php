<?php


namespace Shoplo\BonanzaApi\Client;


use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;
use Shoplo\BonanzaApi\Credentials\CredentialsInterface;
use Shoplo\BonanzaApi\Request\FetchTokenRequest;
use Shoplo\BonanzaApi\Request\GetBoothItemsRequest;
use Shoplo\BonanzaApi\Request\GetCategoriesRequest;
use Shoplo\BonanzaApi\Request\GetCategoryTraitsRequest;
use Shoplo\BonanzaApi\Request\GetOrdersRequest;
use Shoplo\BonanzaApi\Request\GetSingleItemRequest;
use Shoplo\BonanzaApi\Request\GetUserRequest;
use Shoplo\BonanzaApi\Response\BaseResponse;
use Shoplo\BonanzaApi\Response\FetchTokenResponse;
use Shoplo\BonanzaApi\Response\GetBoothItemsResponse;
use Shoplo\BonanzaApi\Response\GetCategoriesResponse;
use Shoplo\BonanzaApi\Response\GetCategoryTraitsResponse;
use Shoplo\BonanzaApi\Response\GetOrdersResponse;
use Shoplo\BonanzaApi\Response\GetSingleItemResponse;
use Shoplo\BonanzaApi\Response\GetUserResponse;

class BonanzaClient
{
	const HEADER_DEV_ID  = 'X-BONANZLE-API-DEV-NAME';
	const HEADER_CERT_ID = 'X-BONANZLE-API-CERT-NAME';

	/**
	 * @var HandlerStack
	 */
	protected $stack;

	/**
	 * @var CredentialsInterface
	 */
	protected $credentials;

	/**
	 * @var string
	 */
	private $apiUrl = 'http://api.bonanza.com/api_requests/secure_request';

	/**
	 * @var Client
	 */
	private $client;

	/**
	 * @var string
	 */
	private $callbackUrl;

	/**
	 * @var SerializerInterface
	 */
	private $serializer;

	/**
	 * @param SerializerInterface $serializer
	 * @param $devId
	 * @param $certID
	 * @param $callbackUrl
	 *
	 */
	public function __construct(CredentialsInterface $credentials, $callbackUrl = null)
	{
		$this->credentials = $credentials;
		$this->callbackUrl = $callbackUrl;
		$this->serializer  = SerializerBuilder::create()->build();

		$stack = HandlerStack::create();

		$stack->push(function (callable $handler) {
			return function (RequestInterface $request, array $options) use ($handler) {
				$request = $request->withHeader(self::HEADER_DEV_ID, $this->credentials->getDevId());
				if ($this->credentials->getCertId())
				{
					/** @var UriInterface $uri */
					$uri = $request->getUri();
					$uri->withScheme('https');

					$request = $request->withUri($uri);
					$request = $request->withHeader(self::HEADER_CERT_ID, $this->credentials->getCertId());
				}

				return $handler($request, $options);
			};
		});

		$this->client = new Client([
			'base_uri' => $this->apiUrl,
			'handler'  => $stack,
		]);
	}

	/**
	 * @param string $function
	 * @param mixed $data
	 * @param array $headers
	 * @param bool $isMultipart
	 *
	 * @return mixed
	 */
	public function post($function, $data, array $headers = [], $isMultipart = false): BaseResponse
	{
		if (is_object($data))
		{
			$data = $this->serializer->serialize($data, 'array');
		}

		$data = [
			lcfirst($function) => $data,
		];

		$rsp = $this->client->request(
			'POST',
			$this->apiUrl,
			[
				($isMultipart ? 'multipart' : 'form_params') => $data,
				'headers'                                    => $headers,
			]
		);

		$class = sprintf('Shoplo\\BonanazaApi\\Response\\%s', ucfirst($function));

		return $this->serializer->deserialize($rsp->getBody(), $class, 'json');
	}

	/**
	 * @return CredentialsInterface
	 */
	public function getCredentials()
	{
		return $this->credentials;
	}

	public function fetchToken(FetchTokenRequest $request): FetchTokenResponse
	{
		return $this->post(__FUNCTION__, $request);
	}

	public function getBoothItems(GetBoothItemsRequest $request): GetBoothItemsResponse
	{
		return $this->post(__FUNCTION__, $request);
	}

	public function getCategories(GetCategoriesRequest $request): GetCategoriesResponse
	{
		return $this->post(__FUNCTION__, $request);
	}

	public function getCategoryTraits(GetCategoryTraitsRequest $request): GetCategoryTraitsResponse
	{
		return $this->post(__FUNCTION__, $request);
	}

	public function getOrders(GetOrdersRequest $request): GetOrdersResponse
	{
		return $this->post(__FUNCTION__, $request);
	}

	public function getSingleItem(GetSingleItemRequest $request): GetSingleItemResponse
	{
		return $this->post(__FUNCTION__, $request);
	}

	public function getUser(GetUserRequest $request): GetUserResponse
	{
		return $this->post(__FUNCTION__, $request);
	}
}