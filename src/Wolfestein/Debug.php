<?php

namespace Hackathon3\Wolfestein;

class Debug
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    /** Cette fonction doit retourner un tableau contenant les homophones des phrases. Exemple : "Le maitre va mettre fin au combat" retourne => array('maitre','mettre) */
    public function myHomophones($text)
    {
        $tab_word = explode(' ',$text);
        $i = 1;
        $tab_phone_word_decrypt = array();
        $result = array();

        // Decrypte chaque mot de la phrase, le metaphone puis l'ajoute dans un tableau
        foreach($tab_word as $word){
            $word_decrypt = str_rot($word, (26-$i));
            $tab_phone_word_decrypt[$word_decrypt] = metaphone($word_decrypt);
            $i++;
        }

        // Récuperation des mots dans le tableau ayant les mêmes metaphone
        $counts = array_count_values($tab_phone_word_decrypt);
        $result = array_filter($tab_phone_word_decrypt, function ($value) use ($counts) {
            return $counts[$value] > 1;
        });


        return array_keys($result);
    }

}

    function str_rot($s, $n = 13) {
        static $letters = 'AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz';
        $n = (int)$n % 26;
        if (!$n) return $s;
        if ($n < 0) $n += 26;
        if ($n == 13) return str_rot13($s);
        $rep = substr($letters, $n * 2) . substr($letters, 0, $n * 2);
        return strtr($s, $letters, $rep);
    }


   function get_duplicates ($array) {
        return array_unique( array_diff_assoc( $array, array_unique( $array ) ) );
    }
