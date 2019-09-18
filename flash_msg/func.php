<?php


function flash($type, $flash_heading, $flash_msg){

    if ($type == 'success') {

        $type = 'success-flash';

    } elseif ($type == 'warning') {

        $type = 'warning-flash';

    } elseif ($type == 'error') {

        $type = 'error-flash';

    } elseif ($type == 'info') {

        $type = 'info-flash';

    } elseif ($type == 'secondary') {

        $type = 'secondary-flash';

    }



    $template = '<div class="flash '.$type.'">';
    $template .=    '<span class="remove">&times;</span>';
    $template .=        '<div class="flash-heading">';
    $template .=            '<h5>'.$flash_heading.'</h5>';
    $template .=        '</div>';
    $template .=        '<div class="flesh-body">';
    $template .=           '<p>'.$flash_msg.'</p>';
    $template .=        '</div>';
    $template .= '</div>';

return $template;
}
/* 
function flashSuccess($flash_heading, $flash_msg){
    $template = '<div class="flash success-flash">';
    $template .=    '<span class="remove">&times;</span>';
    $template .=        '<div class="flash-heading">';
    $template .=            '<h4>'.$flash_heading.'</h4>';
    $template .=        '</div>';
    $template .=        '<div class="flesh-body">';
    $template .=           '<p>'.$flash_msg.'</p>';
    $template .=        '</div>';
    $template .= '</div>';

return $template;
}

function flashWarning($flash_heading, $flash_msg){
    $template = '<div class="flash warning-flash">';
    $template.=   '<span class="remove">&times;</span>';
    $template.=       '<div class="flash-heading">';
    $template.=           '<h4>'.$flash_heading.'</h4>';
    $template.=         '</div>';
    $template.=       '<div class="flesh-body">';
    $template.=           '<p>'.$flash_msg.'</p>';
    $template.=       '</div>';
    $template.=      '</div>';
    $template.= '</div>';

 return $template;
}

function flashError($flash_heading, $flash_msg){
    $template = '<div class="flash error-flash">';
    $template.=   '<span class="remove">&times;</span>';
    $template.=       '<div class="flash-heading">';
    $template.=           '<h4>'.$flash_heading.'</h4>';
    $template.=         '</div>';
    $template.=       '<div class="flesh-body">';
    $template.=           '<p>'.$flash_msg.'</p>';
    $template.=       '</div>';
    $template.=      '</div>';
    $template.= '</div>';

 return $template;
} */
?>
