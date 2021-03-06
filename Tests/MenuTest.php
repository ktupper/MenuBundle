<?php

namespace Knplabs\MenuBundle\Tests;
use Knplabs\MenuBundle\Menu;

class MenuTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateMenuWithEmptyParameter()
    {
        $menu = new Menu();
        $this->assertTrue($menu instanceof Menu);
    }

    public function testCreateMenuWithAttributes()
    {
        $menu = new Menu(array('class' => 'root'));
        $this->assertEquals('root', $menu->getAttribute('class'));
    }

    public function testCreateMenuWithItemClass()
    {
        $childClass = 'Knplabs\MenuBundle\OtherMenuItem';
        $menu = new Menu(null, $childClass);
        $this->assertEquals($childClass, $menu->getChildClass());
    }
}
