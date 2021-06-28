<?php

if (!function_exists('createStep'))
{
    function createStep($text, $page, $step) 
    {
        $checkbox_id = "done-ck-" . $page . "-" . $step;
        echo "<li>";
            echo "<div>";
                echo "<input type='checkbox' name='step-checkbox' id='" . $checkbox_id . "' class='stepckbox'/>";
                echo "<label for='" . $checkbox_id . "'>" . $text . "</label>";
                echo "</br>";
            echo "</div>";
        echo "</li>";
    }      
}

if (!function_exists('createNote'))
{
    function createNote($hardcore, ...$notes) 
    {
        if (!$hardcore) {
            echo '<div class="note-box"><strong>Additional Information</strong><br>';
            echo "<ul>";
            foreach ( $notes as $text ) {
                echo "<li>" . $text . "</li>";   
            }
            echo "</ul>";
            echo '</div>';
        } elseif ($hardcore) {
            echo '<div class="hardcore-box"><strong>Hardcore Ironman</strong><br>';
            foreach ( $notes as $text ) {
                echo $text;   
            }
            echo '</div><br>'; 
        }
    }      
}

if (!function_exists('createSetupBox'))
{
    function createSetupBox($title, ...$setup) 
    {
        $base_add = base_url();
        echo '<div class="setup-box"><strong>' . $title . '</strong><br>';
        echo '<ul>';
            foreach ( $setup as $text ) {
                echo '<li>' . $text . '</li>';   
            }
        echo '</ul>';
        echo '</div><br>';
    }      
}
?>
