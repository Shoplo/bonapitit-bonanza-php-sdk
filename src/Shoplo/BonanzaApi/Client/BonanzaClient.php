<?php


namespace Shoplo\BonanzaApi\Client;


use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Psr\Http\Message\RequestInterface;
use Shoplo\BonanzaApi\Credentials\CredentialsInterface;
use Shoplo\BonanzaApi\Exception\SecureRequestException;
use Shoplo\BonanzaApi\Request\AddFixedPriceItemRequest;
use Shoplo\BonanzaApi\Request\FetchTokenRequest;
use Shoplo\BonanzaApi\Request\GetBoothItemsRequest;
use Shoplo\BonanzaApi\Request\GetCategoriesRequest;
use Shoplo\BonanzaApi\Request\GetCategoryTraitsRequest;
use Shoplo\BonanzaApi\Request\GetOrdersRequest;
use Shoplo\BonanzaApi\Request\GetSingleItemRequest;
use Shoplo\BonanzaApi\Request\GetUserProfileRequest;
use Shoplo\BonanzaApi\Request\GetUserRequest;
use Shoplo\BonanzaApi\Request\ReviseFixedPriceItemRequest;
use Shoplo\BonanzaApi\Response\AddFixedPriceItemResponse;
use Shoplo\BonanzaApi\Response\BaseResponse;
use Shoplo\BonanzaApi\Response\FetchTokenResponse;
use Shoplo\BonanzaApi\Response\GetBoothItemsResponse;
use Shoplo\BonanzaApi\Response\GetCategoriesResponse;
use Shoplo\BonanzaApi\Response\GetCategoryTraitsResponse;
use Shoplo\BonanzaApi\Response\GetOrdersResponse;
use Shoplo\BonanzaApi\Response\GetSingleItemResponse;
use Shoplo\BonanzaApi\Response\GetUserProfileResponse;
use Shoplo\BonanzaApi\Response\GetUserResponse;
use Shoplo\BonanzaApi\Response\ReviseFixedPriceItemResponse;

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
	private $apiUrl = 'api.bonanza.com/api_requests/';

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
		$this->serializer  = SerializerBuilder::create()
		                                      ->setPropertyNamingStrategy(
			                                      new SerializedNameAnnotationStrategy(
				                                      new IdenticalPropertyNamingStrategy()
			                                      )
		                                      )
		                                      ->build();

		$stack = HandlerStack::create();

		$stack->push(function (callable $handler) {
			return function (RequestInterface $request, array $options) use ($handler) {
				$request = $request->withHeader(self::HEADER_DEV_ID, $this->credentials->getDevId());

				if ($this->credentials->getCertId())
				{
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
	 * @return CredentialsInterface
	 */
	public function getCredentials()
	{
		return $this->credentials;
	}

	public function fetchToken(FetchTokenRequest $request): FetchTokenResponse
	{
		return $this->post(__FUNCTION__, $request, true);
	}

	/**
	 * @param string $function
	 * @param mixed $data
	 * @param array $headers
	 * @param bool $isMultipart
	 *
	 * @return mixed
	 */
	private function post($function, $data, $isSecure = false, array $headers = []): BaseResponse
	{
		if ($isSecure)
		{
			if (!$this->credentials->getCertId())
			{
				throw new SecureRequestException("You have to provide app certificate ID to make that secure call");
			}
			$url = 'https://' . $this->apiUrl . '/secure_request';
		}
		else
		{
			$url = 'http://' . $this->apiUrl . '/standard_request';
		}

		$context = new SerializationContext();
		$context->setSerializeNull(false);

		$data = $this->serializer->serialize($data, 'json', $context);

		$rsp = $this->client->request(
			'POST',
			$url,
			[
				'body'    => lcfirst($function) . '=' . $data,
				'headers' => $headers,
			]
		);

		$class = sprintf('Shoplo\\BonanzaApi\\Response\\%s', ucfirst($function) . 'Response');

		return $this->serializer->deserialize((string)$rsp->getBody(), $class, 'json');
	}

	public function getBoothItems(GetBoothItemsRequest $request): GetBoothItemsResponse
	{
		return $this->post(__FUNCTION__, $request, true);
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
		return $this->post(__FUNCTION__, $request, true);
	}

	public function getSingleItem(GetSingleItemRequest $request): GetSingleItemResponse
	{
		return $this->post(__FUNCTION__, $request);
	}

	public function getUser(GetUserRequest $request): GetUserResponse
	{
		return $this->post(__FUNCTION__, $request, true);
	}

	public function getUserProfile(GetUserProfileRequest $request): GetUserProfileResponse
	{
		return $this->post(__FUNCTION__, $request);
	}

	public function reviseFixedPriceItem(ReviseFixedPriceItemRequest $request): ReviseFixedPriceItemResponse
	{
		return $this->post(__FUNCTION__, $request, true);
	}

	public function addFixedPriceItem(AddFixedPriceItemRequest $request): AddFixedPriceItemResponse
	{
		return $this->post(__FUNCTION__, $request, true);
	}
}