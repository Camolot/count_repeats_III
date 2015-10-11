<?php

    require_once "src/Count.php";

    class CountTest extends PHPUnit_Framework_TestCase
    {

      function test_makeCount_true()
      {
        //arrange
        $test_Count = new Count;
        $search_word = "and";
        $sentence = "chips and blips";

        //act
        $result = $test_Count->contains($search_word, $sentence);

        //assert
        $this->assertEquals(1, $result);
      }

      function test_makeCount_false()
      {
        //arrange
        $test_Count = new Count;
        $search_word = "and";
        $sentence = "king shadow the great";

        //act
        $result = $test_Count->contains($search_word, $sentence);

        //assert
        $this->assertEquals(0, $result);
      }
    }
?>
