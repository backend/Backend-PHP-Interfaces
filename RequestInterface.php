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
     * Return the path of the Request.
     *
     * @return string
     */
    public function getPath();

    /**
     * Return the url to this Request.
     *
     * @return string
     */
    public function getUrl();

    /**
     * Determine the requested MIME Type for the request
     *
     * @return string The MIME Type for the request
     */
    public function getMimeType();

    /**
     * Determine the requested format for the request
     *
     * @return string The format for the request
     */
    public function getSpecifiedFormat();

    /**
     * Get the Request Extension
     *
     * @return string The extension of the request
     */
    public function getExtension();
}
