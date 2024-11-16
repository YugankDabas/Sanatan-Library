<?php
function component($booklink, $bookimage, $bookname, $newprice) {
    return "
    <div class=\"swiper-slide box\">
        <div class=\"icons\">
            <a href=\"\" class=\"fas fa-search\"></a>
            <a href=\"\" class=\"fas fa-heart\"></a>
            <a href=\"$booklink\" ><i class=\"fas fa-eye\"></i></a>
        </div>
        <div class=\"image\">
            <img src=\"$bookimage\" alt=\"\">
        </div>
        <div class=\"content\">
            <h3>$bookname</h3>
            <div class=\"price\">$newprice <span><i class=\"fa-solid fa-file-pdf\"></i> form</span></div>
            <a href=\"$booklink\" class=\"btn\">click <i class=\"fas fa-eye\"></i>to read</a>
        </div>
    </div>
    
    ";
}
?>