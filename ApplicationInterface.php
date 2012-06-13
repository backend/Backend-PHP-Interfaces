<?php
/**
 * File defining Backend\Interfaces\ApplicationInterface.
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
 * The Application class wraps the execution process.
 *
 * @category Backend
 * @package  Interfaces
 * @author   J Jurgens du Toit <jrgns@backend-php.net>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://backend-php.net
 */
interface ApplicationInterface
{
    /**
     * Main function for the application
     *
     * @param \Backend\Interfaces\RequestInterface $request The request the
     * application should handle
     *
     * @return mixed The result of the call
     */
    public function main(\Backend\Interfaces\RequestInterface $request = null);
}
