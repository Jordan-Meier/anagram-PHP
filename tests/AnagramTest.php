<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_anagramCheckSplit()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = "bread";

            //Act
            $result = $test_Anagram->anagramCheckSplit($input);

            //Assert
            $this->assertEquals(array("b", "r", "e", "a", "d"), $result);
        }

        function test_anagramCheckSort()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = "bread";


            //Act
            $result = $test_Anagram->anagramCheckSort($input);


            //Assert
            $this->assertEquals(array("a","b","d","e","r"), $result);
        }
        function test_anagramCheckCompare()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = "bread";
            $input2 = array("beard", "bird", "apple", "bared", "debra");

            //Act
            $result = $test_Anagram->anagramCheckCompare($input1, $input2);


            //Assert
            $this->assertEquals(array("beard", "bared", "debra"), $result);
        }
    }

?>
