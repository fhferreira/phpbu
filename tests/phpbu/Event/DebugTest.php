<?php
namespace phpbu\App\Event;

/**
 * Debug test
 *
 * @package    phpbu
 * @subpackage tests
 * @author     Sebastian Feldmann <sebastian@phpbu.de>
 * @copyright  Sebastian Feldmann <sebastian@phpbu.de>
 * @license    http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 * @link       http://www.phpbu.de/
 * @since      Class available since Release 2.0.0
 */
class DebugTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests Debug::getMessage
     */
    public function testGetResult()
    {
        $msg    = 'test';
        $debug  = new Debug($msg);
        $this->assertEquals('test', $debug->getMessage());
    }
}
