<?php
/**
 * File defining Backend\Interfaces\UrlGeneratorInterface.
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
 * Class to generate URL's using routing information.
 *
 * @category Backend
 * @package  Interfaces
 * @author   J Jurgens du Toit <jrgns@backend-php.net>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://backend-php.net
 */
interface UrlGeneratorInterface
{
    /**
     * The class constructor.
     *
     * @param \Backend\Interfaces\RequestContextInterface $context The context of
     * the current request.
     * @param \Backend\Interfaces\ConfigInterface         $config  A config object
     * containing route definitions.
     */
    public function __construct(RequestContextInterface $context, ConfigInterface $config);

    /**
     * Generate a link for the given Route.
     *
     * @param string $routeName The name of the route to generate a link for.
     *
     * @return string
     */
    public function generate($routeName);
}