<?php
/**
 * File defining \Backend\Interfaces\RenderInterface
 *
 * PHP Version 5.3
 *
 * @category   Backend
 * @package    Base
 * @subpackage Interfaces
 * @author     J Jurgens du Toit <jrgns@backend-php.net>
 * @copyright  2011 - 2012 Jade IT (cc)
 * @license    http://www.opensource.org/licenses/mit-license.php MIT License
 * @link       http://backend-php.net
 */
namespace Backend\Interfaces;
/**
 * Utility to render templates
 *
 * @category   Backend
 * @package    Base
 * @subpackage Interfaces
 * @author     J Jurgens du Toit <jrgns@backend-php.net>
 * @license    http://www.opensource.org/licenses/mit-license.php MIT License
 * @link       http://backend-php.net
 */
interface RenderInterface
{
    /**
     * Constructor for the Rendering Utility
     */
    public function __construct();

    /**
     * Render the specified file
     *
     * @param string $template The name of the template
     * @param array  $values   Extra variables to consider
     *
     * @return string The contents of the rendered template
     */
    public function file($template, array $values = array());
}
