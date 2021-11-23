<?php
echo '<div class="card col-lg-3 col-md-6">';
echo '    <img src="'.$book_imgurl.'"';
echo '        class="card-img-top" alt="'.$book_name.'">';
echo '    <div class="card-body">';
echo '        <h5 class="card-title">'.$book_name.'</h5>';
echo '        <p style="font-size: 12px; color: gray;">Còn lại: '.$book_quantity.'</p>';
echo '        <p class="card-text text-danger">'.$book_price.'</p>';
echo '    </div>';
echo '</div>';
?>