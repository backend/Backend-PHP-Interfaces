<?php
/**
 * File defining InterfacesTest
 *
 * PHP Version 5.3
 *
 * @category  Backend
 * @package   InterfacesTests
 * @author    J Jurgens du Toit <jrgns@backend-php.net>
 * @copyright 2011 - 2012 Jade IT (cc)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @link      http://backend-php.net
 */
namespace Backend\Interfaces\Tests;

/**
 * Class to test all the defined interfaces
 *
 * @category Backend
 * @package  InterfacesTests
 * @author   J Jurgens du Toit <jrgns@backend-php.net>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://backend-php.net
 */
class InterfacesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Data provider for testInterfaces. Return all the interfaces.
     *
     * @return array
     */
    public function dataInterfaces()
    {
        $files = glob(__DIR__ . '/../*Interface.php');
        $files = array_map(array($this, 'getArguments'), $files);

        return $files;
    }

    protected function getArguments($file)
    {
        $file = basename($file);
        if (substr($file, -4) === '.php') {
            $file = substr($file, 0, strlen($file) - 4);
        }

        return array($file);
    }

    /**
     * Compile all the interfaces.
     *
     * @dataProvider dataInterfaces
     */
    public function testInterfaces($interface)
    {
        $interface = '\Backend\Interfaces\\' . $interface;
        $object = $this->getMockForAbstractClass($interface);
        $this->assertInstanceOf($interface, $object);
    }
}
