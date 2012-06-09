<?php
/**
 * File defining RouterInterface.
 *
 * PHP Version 5.3
 *
 * @category   Backend
 * @package    Core
 * @subpackage Interfaces
 * @author     J Jurgens du Toit <jrgns@backend-php.net>
 * @copyright  2011 - 2012 Jade IT (cc)
 * @license    http://www.opensource.org/licenses/mit-license.php MIT License
 * @link       http://backend-php.net
 */
namespace Backend\Core\Interfaces;
/**
 * Class to inspect the Request to determine what callback should be executed.
 *
 * @category   Backend
 * @package    Core
 * @subpackage Interfaces
 * @author     J Jurgens du Toit <jrgns@backend-php.net>
 * @license    http://www.opensource.org/licenses/mit-license.php MIT License
 * @link       http://backend-php.net
 */
interface RouterInterface
{
    /**
     * Inspect the specified request and determine what callback to execute.
     *
     * @param RequestInterface $request The request to inspect.
     *
     * @return CallbackInterface
     */
    public function inspect(RequestInterface $request);

    /**
     * Determine what request will result in the specified callback.
     *
     * @param mixed $callback Either a callback or a string representation of
     * a callback.
     *
     * @return RequestInterface
     */
    public function resolve($callback);
}
