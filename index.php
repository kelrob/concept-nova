<?php

// Encipher
function enciphered($string) {
    
    $array = str_split(strtolower($string));
    
    foreach ($array as $value) {
        
        $index = array_search($value, $array);
        if($index !== false && $index > 0 ) $prev = $array[$index-1];
        if($index !== false && $index < count($array)-1) $next = $array[$index+1];
        
        if ($value == 'a') {
            $value = 'e';
        }else if ($value == 'e') {
            $value = 'a';
        }
        
        if ($value == 'o') {
            $value = 'u';
        }else if ($value == 'u') {
            $value = 'o';
        }
        
        if ($value == 'b') {
            $value = 'p';
        }else if ($value == 'p') {
            $value = 'b';
        }
        
        if ($value == 't') {
            $value = 'd';
        } else if ($value == 'd') {
            $value = 't';
        }
        
        if ($value == 's') {
            $value = 'c';
        }else if ($value == 'c') {
            $value = 's';
        }
        
        if ($value == 'j') {
            $value = 'g';
        }else if ($value == 'g') {
            $value = 'j';
        }
        
        if ($value == 'm') {
            $value = 'n';
        } else if ($value == 'n') {
            $value = 'm';
        }
        
        
        if ($value == $next) {
            $value = strtoupper($prev);
        }
        
                
        echo $value;
    
    }
}

// Decipher
function deciphered($string) {
    
    $array = str_split(strtolower($string));
    
    foreach ($array as $value) {
        
        $index = array_search($value, $array);
        if($index !== false && $index > 0 ) $prev = $array[$index-1];
        if($index !== false && $index < count($array)-1) $next = $array[$index+1];
        
        if ($value == 'a') {
            $value = 'e';
        }else if ($value == 'e') {
            $value = 'a';
        }
        
        if ($value == 'o') {
            $value = 'u';
        }else if ($value == 'u') {
            $value = 'o';
        }
        
        if ($value == 'b') {
            $value = 'p';
        }else if ($value == 'p') {
            $value = 'b';
        }
        
        if ($value == 't') {
            $value = 'd';
        } else if ($value == 'd') {
            $value = 't';
        }
        
        if ($value == 's') {
            $value = 'c';
        }else if ($value == 'c') {
            $value = 's';
        }
        
        if ($value == 'j') {
            $value = 'g';
        }else if ($value == 'g') {
            $value = 'j';
        }
        
        if ($value == 'm') {
            $value = 'n';
        } else if ($value == 'n') {
            $value = 'm';
        }
        
        
        if ($value == $next) {
            $value = strtoupper($prev);
        }
        
                
        echo $value;
    
    }
}

enciphered('nem');
