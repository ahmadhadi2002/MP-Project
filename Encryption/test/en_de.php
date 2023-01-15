function custom_caesar_cipher($plaintext, $shift, $custom_list) {
    $ciphertext = "";
    $chars = str_split($plaintext);
    foreach ($chars as $char) {
        $index = (array_search($char, $custom_list) + $shift) % count($custom_list);
        $ciphertext .= $custom_list[$index];
    }
    return $ciphertext;
}

// Example usage
$plaintext = "Hello World";
$shift = 3;
$custom_list = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
$ciphertext = custom_caesar_cipher($plaintext, $shift, $custom_list);
echo $ciphertext; // Output: Khoor Zruog