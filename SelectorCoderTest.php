
<?php

use PHPUnit\Framework\TestCase;
use App\SelectorCoder;
use App\CoderList;

final class SelectorCoderTest extends TestCase
{
    public function testSelectionCoderFromList()
    {
        $coders = ['Javi', 'Pepe','Diego'];
        $selectorCoder = new SelectorCoder;
        $selected = $selectorCoder->getName($coders);
        $this->assertTrue(in_array($selected, $coders));
        echo $selected;
    }

    public function testSelectionCoderFromOne()
    {
        $coders = ['Laura'];
        $selectorCoder = new SelectorCoder;
        $selected = $selectorCoder->getName($coders);
        $this->assertTrue(in_array($selected, $coders));
    }

    public function testRandomSelectionCoderFromList()
    {
        $coders = ['Laura', 'Javi', 'Ana', 'Magali', 'Diego' ];
        $selectorCoder = new SelectorCoder;
        $selected = $selectorCoder->getName($coders);
        $selected2 = $selectorCoder->getName($coders);
        $this->assertNotSame($selected, $selected2);
    }
}



