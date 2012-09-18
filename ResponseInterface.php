<?php
/**
 * File defining Backend\Interfaces\ResponseInterface.
 *
 * PHP Version 5.3
 *
 * @category  Backend
 * @package   Interfaces
 * @author    J Jurgens du Toit <jrgns@backend-php.net>
 * @copyright 2011 - 2012 Jade IT (cc)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @link      http://backend-php.net
 */
namespace Backend\Interfaces;
/**
 * The response that will be sent back to the client.
 *
 * @category Backend
 * @package  Interfaces
 * @author   J Jurgens du Toit <jrgns@backend-php.net>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://backend-php.net
 */
interface ResponseInterface
{
    /**
     * The constructor for the Response class
     *
     * @param string $body    The body for the response
     * @param int    $status  The status code for the response
     * @param array  $headers The headers for the response
     */
    public function __construct($body = '', $status = 200, array $headers = array());

    /**
     * Return the current status code for the Response
     *
     * @return int The status code
     */
    public function getStatusCode();

    /**
     * Set the status code for the Response
     *
     * @param int $code The new status code
     *
     * @return Response The current object
     */
    public function setStatusCode($code);

    /**
     * Return the specified Response header.
     *
     * @param string $name The name of the header to return.
     *
     * @return string
     */
    public function getHeader($name);

    /**
     * Set the specified Response header.
     *
     * If the name is null, the header won't have a name, and will contain only
     * the value of the header.
     *
     * @param string $name  The name of the header to set.
     * @param string $value The value of the header.
     *
     * @return \Backend\Interfaces\ResponseInterface
     */
    public function setHeader($name, $value);

    /**
     * Return the Response's headers
     *
     * @return array An array containing the Response's headers
     */
    public function getHeaders();

    /**
     * Set the headers for the Response
     *
     * @param array $headers The new headers
     *
     * @return \Backend\Interfaces\ResponseInterface
     */
    public function setHeaders(array $headers);

    /**
     * Return the Response's body
     *
     * @return mixed The Response's body
     */
    public function getBody();

    /**
     * Set the body for the Response
     *
     * @param mixed $body The new body
     *
     * @return \Backend\Interfaces\ResponseInterface
     */
    public function setBody($body);

    /**
     * Output the response to the client.
     *
     * @return null
     */
    public function output();
}
