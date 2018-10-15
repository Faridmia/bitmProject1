<?php
    namespace App\classes;

class Example {


    public static function wordCharacterCount($data){
        $StringLength = strlen($data['given_string']);
        $WordLength = str_word_count($data['given_string']);


        $result = [
            "string_length" => $StringLength,
            "word_length"   => $WordLength
        ];

        return $result;

    }

}