<?php
/**
 * File defining Backend\Interfaces\FormatterInterface.
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
 * Transform results into the specified format.
 *
 * @category Backend
 * @package  Interfaces
 * @author   J Jurgens du Toit <jrgns@backend-php.net>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://backend-php.net
 */
interface FormatterInterface
{
    /**
     * Output the response to the client.
     *
     * @param mixed $result The result to transform.
     *
     * @return \Backend\Interfaces\ResponseInterface;
     */
    public function transform($result);
}
