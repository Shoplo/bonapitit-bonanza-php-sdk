<?php


namespace Shoplo\BonanzaApi\Credentials;


/**
 * Provides access to the API credentials used for accessing the Bonanza services.
 */
interface CredentialsInterface
{
	/**
	 * Returns the certificate ID.
	 *
	 * @return string
	 */
	public function getCertId();

	/**
	 * Returns the developer ID.
	 *
	 * @return string
	 */
	public function getDevId();
}