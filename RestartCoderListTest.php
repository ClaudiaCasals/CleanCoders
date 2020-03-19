<?php

use PHPUnit\Framework\TestCase;
use App\RestartCodersList;


final class RestartCodersListTest extends TestCase
{
    public function testCryptIsEmpty()
    {
        $crypt = [];
        $restartCodersList = new RestartCodersList;
        $emptyList = $restartCodersList->restartList($crypt);
        $this->assertEmpty($emptyList);
    }

    public function testCryptIsInCoders()
    {
        $coders = ['Diego','Ana'];
        $crypt = ['Javi','Claudia'];
        $restartCodersList = new RestartCodersList;
        $restartList = $restartCodersList->restartList($crypt);
        $this->assertFalse(in_array($restartList, $coders));
    }

}
