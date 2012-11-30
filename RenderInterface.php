<?php
/**
 * File defining \Backend\Interfaces\RenderInterface.
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
 * Utility with which to render templates
 *
 * @category Backend
 * @package  Interfaces
 * @author   J Jurgens du Toit <jrgns@backend-php.net>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://backend-php.net
 */
interface RenderInterface
{
    /**
     * Render the specified template, using the given values
     *
     * @param string $template The name of the template to render
     * @param array  $values   The values to use to render the template
     *
     * @return string The contents of the rendered template
     */
    public function file($template, array $values = array());
}
