<?php
/**
 * File defining Backend\Interfaces\AuthenticatorInterface.
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

use Backend\Interfaces\CallbackInterface;

/**
 * Authenticator classes provide a mechanism with which to check a user and it's
 * permissions.
 *
 * @category Backend
 * @package  Interfaces
 * @author   J Jurgens du Toit <jrgns@backend-php.net>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://backend-php.net
 */
interface AuthenticatorInterface
{
    /**
     * Check if the user has access to the given callback.
     *
     * The interface only defined the bare minimum of parameters to pass. Feel
     * free to add more parameters, such as the user, session or container, to
     * help your Authenticator do it's job.
     *
     * @param Backend\Interfaces\CallbackInterface $callback The callback the user
     * is trying to access.
     *
     * @return boolean Whether or not the user may access the callback.
     */
    public function check(CallbackInterface $callback);
}
