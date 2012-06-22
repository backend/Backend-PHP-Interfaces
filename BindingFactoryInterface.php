<?php
/**
 * File defining Backend\Interfaces\BindingFactoryInterface.
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
 * Class to create bindings.
 *
 * @category Backend
 * @package  Interfaces
 * @author   J Jurgens du Toit <jrgns@backend-php.net>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://backend-php.net
 */
interface BindingFactoryInterface
{
    /**
     * Convert a string to a callback.
     *
     * @param string $modelName The name of the model to get the Binding for.
     *
     * @return CallbackInterface
     */
    public function build($modelName);
}
