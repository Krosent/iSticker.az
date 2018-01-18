<?php
include "header.php";
if($_GET['sub_cat'] == 'smartphone') {
    echo '
        <br>
        <br>
        <br>
        
            <h2 class="text-center subtitle">На смартфон:</h2>
            
        <hr>
        <div class="body_category">
            
            <div class="block">
                <div class="middle">
                    <img src="http://www.skinon.ru/products/3626/38/web.jpg?7317-160118" alt="pic" />
                </div>
        
                <div class="bottom">
                    <div class="heading">Наклейка с яблоком Carbon для iPhone 7</div>
                    <div class="price">Цена от: <span>5 AZN</span></div>
                     <br>
                   ';
//                IMPORT MODAL BLOCK FOR POPING ORDER DETAILS
                   include 'order_modal.php';
//                END OF IMPORTING
                   echo '
                    </div>
        
                </div>
                
                
                
            <div class="block">
                <div class="middle">
                    <img src="http://www.skinon.ru/products/3626/234715/web.jpg?7317-160118" alt="pic" />
                </div>
        
                <div class="bottom">
                    <div class="heading">Наклейка с яблоком Supreme камуфляж для iPhone 7</div>
                    <div class="price">Цена: <span>1 AZN</span></div>
                    <br>
                    ';

    include 'order_modal.php';

                   echo '
                </div>
       
            </div>
        </div>
    ';
}
include_once "footer.php";
?>