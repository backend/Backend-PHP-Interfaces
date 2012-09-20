<?php
/**
 * File defining Backend\Interfaces\RequestContextInterface.
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
 * Class to define the context of a Request.
 *
 * @category Backend
 * @package  Interfaces
 * @author   J Jurgens du Toit <jrgns@backend-php.net>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://backend-php.net
 */
interface RequestContextInterface
{
    /**
     * The class constructor.
     *
     * @param \Backend\Interfaces\RequestInterface $request The request from which
     * the context is derived.
     */
    public function __construct(RequestInterface $request);

    /**
     * Get the Request scheme.
     *
     * If the Request URL was, http://backend-php.net/test, this will return
     * http
     *
     * @return string
     */
    public function getScheme();

    /**
     * Get the hostname of the Request.
     *
     * If the Request URL was, http://backend-php.net/test, this will return
     * backend-php.net
     *
     * @return string
     */
    public function getHost();

    /**
     * Get the path of the Request.
     *
     * If the Request URL was, http://backend-php.net/test, this will return
     * /test
     *
     * @return string
     */
    public function getPath();

    /**
     * Get a link to the base site of the Request.
     *
     * If the Request URL was, http://backend-php.net/test, this will return
     * http://backend-php.net/
     *
     * @return string
     */
    public function getLink();
}