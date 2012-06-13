<?php
/**
 * File defining Backend\Interfaces\ControllerInterface.
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
 * Interface for Controllers that serve as the connection between Models and Views.
 *
 * @category Backend
 * @package  Interfaces
 * @author   J Jurgens du Toit <jrgns@backend-php.net>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://backend-php.net
 */
interface ControllerInterface
{
    /**
     * Set the Request for the Controller.
     *
     * @param \Backend\Interfaces\RequestInterface $request The request for the
     * Controller.
     *
     * @return \Backend\Interfaces\ControllerInterface The current object.
     */
    public function setRequest(RequestInterface $request);

    /**
     * Get the request associated with the Controller.
     *
     * @return RequestInterface
     */
    public function getRequest();
}
