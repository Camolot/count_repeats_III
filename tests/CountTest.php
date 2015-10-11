<?php

    require_once "src/Count.php";

    class CountTest extends PHPUnit_Framework_TestCase
    {
      function test_makeCount_oneWord
      {
        //arrange
        $test_Count = new Count;
        $search_word = "and";
        $sentence = "chips and blips"

        //act
        $result = $test_Count->makeCount($search_word, $sentence);

        //assert
        $this->assertEquals(1, $result);
      }
    }
?>
