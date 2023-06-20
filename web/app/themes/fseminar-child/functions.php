<?php
function custom_date_format($the_date) {
    return 'Le ' . date('d/m/Y', strtotime($the_date));
}
add_filter('get_the_date', 'custom_date_format');

?>




