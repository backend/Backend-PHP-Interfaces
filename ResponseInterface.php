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
     * @return Response The current object
     */
    public function setBody($body);

    /**
     * Add a header to the Response.
     *
     * @param string $content The content of the header
     *
     * @return Response The current object
     */
    public function addHeader($content);

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
     * @return Response The current object
     */
    public function setHeaders(array $headers);

    /**
     * Output the response to the client.
     *
     * @return null
     */
    public function output();
}
