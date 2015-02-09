<?php
/**
 * Paypal Express
 *
 * LICENSE
 *
 * This source file is subject to the MIT license and the version 3 of the GPL3
 * license that are bundled with this package in the folder licences
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@uni-alteri.com so we can send you a copy immediately.
 *
 * @copyright   Copyright (c) 2009-2015 Uni Alteri (http://agence.net.ua)
 * @link        http://teknoo.it/paypal Project website
 * @license     http://teknoo.it/paypal/license/mit         MIT License
 * @license     http://teknoo.it/paypal/license/gpl-3.0     GPL v3 License
 * @author      Richard Déloge <r.deloge@uni-alteri.com>
 * @version     1.0.0
 */
namespace UniAlteri\Paypal\Express\Transport;

/**
 * Interface TransportInterface
 * Interface to define transport to use to communicate with the Paypal API
 * @package UniAlteri\Paypal\Express\Transport
 * @copyright   Copyright (c) 2009-2015 Uni Alteri (http://agence.net.ua)
 * @link        http://teknoo.it/paypal Project website
 * @license     http://teknoo.it/paypal/license/mit         MIT License
 * @license     http://teknoo.it/paypal/license/gpl-3.0     GPL v3 License
 * @author      Richard Déloge <r.deloge@uni-alteri.com>
 */
interface TransportInterface
{
    /**
     * Setter to define the user identifier to use with the api to get an access
     * @param  string $userId
     * @return $this
     */
    public function setUserId($userId);

    /**
     * Return the user identifier to use with the api to get an access
     * @return string
     */
    public function getUserId();

    /**
     * Setter to define the password to use with the api to get an access
     * @param  string $password
     * @return $this
     */
    public function setPassword($password);

    /**
     * Return the password to use with the api to get an access
     * @return string
     */
    public function getPassword();

    /**
     * Setter to define the user's signature to usee with the api to get an access
     * @param  string $signature
     * @return $this
     */
    public function setSignature($signature);

    /**
     * Return the user's signature to usee with the api to get an access
     * @return string
     */
    public function getSignature();

    /**
     * Setter to define the API End point to use for next transactions
     * @param  string $apiEndPoint
     * @return $this
     */
    public function setApiEndPoint($apiEndPoint);

    /**
     * Getter the get the API End point to use for next transactions
     * @return string
     */
    public function getApiEndPoint();

    /**
     * Setter to define the url to contact the Paypal api
     * @param  string $url
     * @return $this
     */
    public function setPaypalUrl($url);

    /**
     * Return the url used to contact the Paypal api
     * @return string
     */
    public function getPaypalUrl();

    /**
     * Return the current version of the api managed by this transport
     * @return string
     */
    public function getPaypalApiVersion();

    /**
     * Setter to define the timeout accepted by the transport to close the transaction when the api
     * could not respond
     * @param  int   $second
     * @return $this
     */
    public function setApiTimeout($second);

    /**
     * Return the max time accepted by the transport to get an answer of the api, in seconds
     * @return int
     */
    public function getApiTimeout();

    /**
     * @param  string               $methodName
     * @param  ArgumentBagInterface $arguments
     * @return \ArrayAccess
     */
    public function call($methodName, $arguments);
}