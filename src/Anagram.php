<?php

    class Anagram
    {

        function anagramCheckSplit($single_word)
        {
            return str_split($single_word);
        }

        function anagramCheckSort($single_word)
        {
            $one_word = $this->anagramCheckSplit($single_word);
            return sort($one_word);
        }

        function anagramCheckCompare($single_word, $word_array)
        {

        }

    }

?>
