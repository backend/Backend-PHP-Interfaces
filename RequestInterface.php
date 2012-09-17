<?php
/**
 * File defining Backend\Interfaces\RequestInterface.
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
 * The Request class which helps determine the Query string and request format.
 *
 * @category Backend
 * @package  Interfaces
 * @author   J Jurgens du Toit <jrgns@backend-php.net>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://backend-php.net
 */
interface RequestInterface
{
    /**
     * The constructor for the class
     *
     * If no parameters are supplied, determine the properties of the Request
     * from the current state.
     *
     * @param mixed  $url     The URL of the request
     * @param string $method  The request method.
     * @param mixed  $payload The request data.
     */
    function __construct($url = null, $method = null, $payload = null);

    /**
     * Return the HTTP Method used to make the request.
     *
     * @return string
     */
    public function getMethod();

    /**
     * Set the Request's method.
     *
     * @param string $method The Request Method.
     *
     * @return \Backend\Interfaces\RequestInterface
     */
    public function setMethod($method);

    /**
     * Return the Request headers.
     *
     * @return array
     */
    public function getHeaders();

    /**
     * Set the Request headers.
     *
     * @param array $headers An array of headers for the Request.
     *
     * @return \Backend\Interfaces\RequestInterface
     */
    public function setHeaders(array $headers);

    /**
     * Return the specified Request header.
     *
     * @param string $name The name of the header to return.
     *
     * @return string
     */
    public function getHeader($name);

    /**
     * Set the specified Request headers.
     *
     * @param string $name  The name of the header to set.
     * @param string $value The value of the header.
     *
     * @return array
     */
    public function setHeader($name, $value);

    /**
     * Return the path of the Request.
     *
     * @return string
     */
    public function getPath();

    /**
     * Set and cleanup the path.
     *
     * The path should be URL decoded before calling this method.
     *
     * @param string $path The path.
     *
     * @return \Backend\Interfaces\RequestInterface
     */
    public function setPath($path);

    /**
     * Return the url to this Request.
     *
     * @return string
     */
    public function getUrl();

    /**
     * Set the Request's URL.
     *
     * @param string $url The url.
     *
     * @return \Backend\Interfaces\RequestInterface
     */
    public function setUrl($url);

    /**
     * Determine the requested MIME Type for the request.
     *
     * @return string The MIME Type for the request.
     */
    public function getMimeType();

    /**
     * Set the Request MIME Type.
     *
     * @param mixed $mimeType The Request's MIME Type.
     *
     * @return \Backend\Interfaces\RequestInterface
     */
    public function setMimeType($mimeType);

    /**
     * Determine the requested format for the request.
     *
     * @return string The format for the request.
     */
    public function getSpecifiedFormat();

    /**
     * Set the Request Specified Format.
     *
     * @param mixed $format The Request's specified format.
     *
     * @return \Backend\Interfaces\RequestInterface
     */
    public function setSpecifiedFormat($format);

    /**
     * Get the Request Extension.
     *
     * @return string The extension of the request.
     */
    public function getExtension();

    /**
     * Set the Request Extension.
     *
     * @param mixed $extension The Request's extension.
     *
     * @return \Backend\Interfaces\RequestInterface
     */
    public function setExtension($extension);

    /**
     * Return the request's payload.
     *
     * @return array The Request Payload.
     */
    public function getPayload();

    /**
     * Set the request's payload.
     *
     * Strings should be parsed for variables and objects should be casted to arrays.
     *
     * @param mixed $payload The Request's Payload.
     *
     * @return \Backend\Interfaces\RequestInterface
     */
    public function setPayload($payload);
}
