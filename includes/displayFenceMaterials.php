<?php
/**
 * Returns a string representation of a fence
 *
 * @param integer $someLength
 * @return string
 */
function displayFenceMaterials(int $someLength) : string{
    $fence = '';
    $panels = howManyPanels($someLength);
    $posts = $panels + 1;
    
    for($i = 0; $i < $panels ; $i++){
        $fence .= '<img class="fence-posts" src="images/post.png" alt="a fence post">';
        $fence .= '<img class="fence-panel" src="images/panel.png" alt="a fence panel">';
    }

    $fence .= '<img class="fence-posts" src="images/post.png" alt="a fence post">';

    return $fence;
}