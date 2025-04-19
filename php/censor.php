<?php
function censor_text($text) {
    $banned_words = ['fuck', 'shit', 'bitch', 'merde', 'putain', 'connard', 'conne'];
    foreach ($banned_words as $word) {
        $replacement = str_repeat('*', strlen($word));
        $text = str_ireplace($word, $replacement, $text);
    }
    return $text;
}
?>
