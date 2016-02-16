<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_anagramCheck_split()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = "bread";

            //Act
            $result = $test_Anagram->anagramCheckSingle($input);

            //Assert
            $this->assertEquals(array("b", "r", "e", "a", "d"), $result);
        }
    }

?>
