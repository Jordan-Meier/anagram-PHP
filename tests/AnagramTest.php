<?php

    require_once "src/Angagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_makeAnagram_length()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = "bread";

            //Act
            $result = $test_Anagram->makeAnagram($input);

            //Assert
            $this->assertEquals(5, $result);
        }
    }

?>
