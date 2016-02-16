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
            sort($one_word);
            return $one_word;
        }

        function anagramCheckCompare($single_word, $word_array)
        {
            $matching_words = array();
            $single_word = $this->anagramCheckSort($single_word);
            foreach ($word_array as $word) {
                $split_word = $this->anagramCheckSort($word);
                if ($split_word == $single_word) {

                    array_push($matching_words, $word);
                }

            }
            return $matching_words;

        }

    }

?>
