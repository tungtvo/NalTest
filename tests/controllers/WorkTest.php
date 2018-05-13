<?php
namespace Tests\Controllers;

require_once('src/controllers/WorkController.php');
use Src\Controllers\WorkController;

class WorkTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
    	$foo = true;
    	$this->assertTrue($foo);
    }
    public function testView()
    {
        $this->assertSame(10, WorkController::view());
    }
}