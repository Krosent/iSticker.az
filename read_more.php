<?php
require_once 'header.php';
?>
<!--A little space between header and body blocks-->

<?php
if($_GET['cat'] == 1) {
    // Стикеры
    echo '
        <br>
        <br>
        <br>
        
            <h2 class="text-center subtitle">Стикеры:</h2>
            
        <hr>
        <div class="body_category">
            <div class="block">
                <div class="middle">
                    <img src="images/car-stck.jpg" alt="pic" />
                </div>
        
                <div class="bottom">
                    <div class="heading">Для авто</div>
                    <div class="price">Цена от: <span>5 AZN</span></div>
                </div>
        
            </div>
        
        
        
            <div class="block">
                <div class="middle">
                    <img src="images/stickers-stck.jpeg" alt="pic" />
                </div>
        
                <div class="bottom">
                    <div class="heading">Обычные стикеры</div>
                    <div class="price">Цена: <span>1 AZN</span></div>
                </div>
        
            </div>
        
            <div class="block">
                <div class="middle">
                    <img src="images/laptop-stck.jpg" alt="pic" />
                </div>
        
                <div class="bottom">
                    <div class="heading">На ноутбук</div>
                    <div class="price">Цена: <span>20 AZN</span></div>
                </div>
        
            </div>
            <div class="block">
                <div class="middle">
                    <img src="images/stickerbombing-stck.jpg" alt="pic" />
                </div>
        
                <div class="bottom">
                    <div class="heading">Стикербомбинг</div>
                    <div class="price">Цена от: <span>50 AZN</span></div>
                </div>
        
            </div>
        
            <div class="block">
                <div class="middle">
                    <img src="images/byc-stck.jpg" alt="pic" />
                </div>
        
                <div class="bottom">
                    <div class="heading">На велосипед</div>
                    <div class="price">Цена: <span>30 AZN</span></div>
                </div>
        
            </div>
            
               <div class="block">
                <div class="middle">
                    <img src="images/smartphone-stck.jpeg" alt="pic" />
                </div>
        
                <div class="bottom">
                    <div class="heading">Для телефона</div>
                    <a href="smartphone.php" class="btn btn-default">Перейти к каталогу</a>
                    <div class="price">Цена: <span>15 AZN</span></div>
                </div>
        
            </div>
            
              <div class="block">
                <div class="middle">
                    <img src="images/console-stcks.jpg" alt="pic" />
                </div>
        
                <div class="bottom">
                    <div class="heading">Для игровой консоли</div>
                    <div class="price">Цена: <span>20 AZN</span></div>
                </div>
        
            </div>
        </div>
    ';


} elseif($_GET['cat'] == 2) {
// Печать на одежде
    echo '
    <div id="StckBomber" class="container-fluid lightDiv">
    <div class="row">
        <div id="leftImage" class="col-md-6 col-sm-12 col-xs-12">
            <img id="circledImage" class="img-responsive img-thumbnail" src="images/print_clothes1.jpeg">
        </div>
        <div id="rightText" class="text-center col-md-6 col-sm-12 col-xs-12">

            <h3 class="subtitle" style="color: #990000; font-size: 50px;">Качество</h3>
            <hr>
            <br>

            <p class="" style="color: black;font-size: 17px;">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <br>
        </div>
    </div>
</div>

<div id="StckBomber" class="container-fluid darkDiv">
    <div class="row">
        <div id="leftImage" class="col-md-6 col-sm-12 col-xs-12">
            <img id="circledImage" class="img-responsive img-thumbnail" src="images/print_clothes2.jpeg">
        </div>
        <div id="rightText" class="text-center col-md-6 col-sm-12 col-xs-12">

            <h3 class="subtitle" style="color: white; font-size: 50px;">Креативность</h3>
            <hr>
            <br>

            <p class="" style="color: white; font-size: 17px;">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </div>
</div>

<div id="StckBomber" class="container-fluid lightDiv">
    <div class="row">
        <div id="leftImage" class="col-md-7 col-sm-12 col-xs-12">
            <img id="circledImage" class="img-responsive img-thumbnail" src="images/print_clothes3.jpeg">
        </div>
        <div id="rightText" class="text-center col-md-5 col-sm-12 col-xs-12">
            <img id="circledImage" class="img-responsive img-thumbnail" src="http://davidnaylor.org/temp/firefox-logo-200x200.png">
            <p class="" style="color: black;font-size: 17px;">
                <br>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                <br>
                <br>
                <a href="" class="btn btn-default">Click</a>
            </p>
            <br>
        </div>
    </div>
</div>

    ';

} elseif($_GET['cat'] == 3) {
// Фотообои
    echo '
  
<div id="StckBomber" class="container-fluid lightDiv">
    <div class="row">
        <div id="leftImage" class="col-md-6 col-sm-12 col-xs-12">
            <img id="circledImage" class="img-responsive img-thumbnail" src="images/dostavka.jpg">
        </div>
        <div id="rightText" class="text-center col-md-6 col-sm-12 col-xs-12">

            <h3 class="subtitle" style="font-size: 50px;">Время</h3>
            <hr>
            <br>

            <p class="" style="">
            Вы можете положиться на нас!<br> 
            Мы не заставим Вас долго ждать! <br><br>
            Как правило срок изготовления занимает от 3-7 дней, но наша команда сделает все, <br>
            чтобы уложиться в самые короткие сроки. <br><br>
            А также осуществляется доставка <span style="color: orange; text-decoration: none; font-size: 25px;">по всему Азербайджану</span>.<br>
            </p>
        </div>
    </div>
</div>

  <div id="StckBomber" class="kachestvo container-fluid darkDiv">
    <div class="row">
        <div id="rightText" class="divCaption text-center col-md-6 col-sm-12 col-xs-12">

            <h3 class="subtitle" style="color: white; font-size: 50px;">Качество</h3>
            <hr>
            <br>

            <p class="" style="color: white;">
            Благодаря поддержке Eco Print, фотообои <span style="color: orange;">#DS</span> серии <span style="color: orange;">#AURA</span> порадуют вас богатством оттенков
            и еще большим контрастом между яркими и затемненными участками кадра. <br>
            Безупречную картинку легко спутать с реальностью.<br>
            Инновационная технология Slim Backlight Drive+ в <span style="color: orange;">#фотообоях</span> <span style="color: orange;">#DS</span> точнее контролирует локальное затемнение. <br>
            Технология освещает обои на необходимых участках, делая сцены ярче и повышая контрастность изображения. <br>
            Каждый момент любимого изображения станет еще реалистичнее. <span style="color: orange;">#фотообои</span> <span style="color: orange;">#fotooboibaku</span> <span style="color: orange;">#DStecnology</span><br>
             
            </p>
            <br>
        </div>
    </div>
</div>

<div id="StckBomber" class="container-fluid darkDiv">
    <div class="row">
        <div id="leftImage" class="col-md-6 col-sm-12 col-xs-12">
            <img id="circledImage" class="img-responsive img-thumbnail" src="images/fo03.jpg">
        </div>
        <div id="rightText" class="text-center col-md-6 col-sm-12 col-xs-12">

            <h3 class="subtitle" style="color: white; font-size: 50px;">Материалы</h3>
            <hr>
            <br>

            <p class="" style="color: white;font-size: 17px;">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <br>
        </div>
    </div>
</div>

<div id="StckBomber" class="montaj container-fluid lightDiv">
    <div class="row">
       <!-- <div id="leftImage" class="col-md-6 col-sm-12 col-xs-12">
            <img id="circledImage" class="img-responsive img-thumbnail" src="images/montaj-oboi.jpg">
        </div>-->
        <div id="rightText" class="divCaption text-center col-md-6 col-sm-12 col-xs-12">

            <h3 class="subtitle" style="font-size: 50px; color: white;">Монтаж</h3>
            <hr>
            <br>

            <p class="" style="font-size: 17px; color: white;">
            Порядок поклейки бумажных фотообоев не сильно отличается от поклейки виниловых фотообоев.<br>
            Используйте универсальный клей для поклейки обоев. Поклейка производится <b>ВНАХЛЕСТ</b>. <br><br>
            <b style="font-size: 22px; color: red;">Обратите внимание:</b><br>
            1 - Поскольку бумага достаточно тонкая — постарайтесь изначально приложить обои правильно по месту — отрывать и переклеивать придется очень осторожно!<br>
            2 - Не трите обои, а прикатывайте валиком<br>
            3 - Пузыри не выглаживайте, а сводите к краям, придавливая тряпкой или выкатывая валиком<br>
            4 - Не пытайтесь удалить абсолютно все пузыри — после высыхания бумага натянется.<br>
            </p>
        </div>
    </div>
</div>
    ';

} elseif($_GET['cat'] == 4) {
// Модульный картины
    echo '
    <div id="StckBomber" class="container-fluid darkDiv">
    <div class="row">
        <div id="leftImage" class="col-md-6 col-sm-12 col-xs-12">
            <img id="circledImage" class="img-responsive img-circle" src="images/1.jpg">
        </div>
        <div id="rightText" class="text-center col-md-6 col-sm-12 col-xs-12">

            <h3 class="subtitle" style="color: white; font-size: 50px;">Block #1</h3>
            <hr>
            <br>

            <p class="" style="color: white;font-size: 17px;">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <br>
        </div>
    </div>
</div>

<div id="StckBomber" class="container-fluid lightDiv">
    <div class="row">
        <div id="leftImage" class="col-md-6 col-sm-12 col-xs-12">
            <img id="circledImage" class="img-responsive img-circle" src="images/1.jpg">
        </div>
        <div id="rightText" class="text-center col-md-6 col-sm-12 col-xs-12">

            <h3 class="subtitle" style="font-size: 50px;">Block #2</h3>
            <hr>
            <br>

            <p class="" style="font-size: 17px;">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </div>
</div>

<div id="StckBomber" class="container-fluid darkDiv">
    <div class="row">
        <div id="leftImage" class="col-md-6 col-sm-12 col-xs-12">
            <img id="circledImage" class="img-responsive img-circle" src="images/1.jpg">
        </div>
        <div id="rightText" class="text-center col-md-6 col-sm-12 col-xs-12">

            <h3 class="subtitle" style="color: white; font-size: 50px;">Block #3</h3>
            <hr>
            <br>

            <p class="" style="color: white;font-size: 17px;">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <br>
        </div>
    </div>
</div>

<div id="StckBomber" class="container-fluid lightDiv">
    <div class="row">
        <div id="leftImage" class="col-md-6 col-sm-12 col-xs-12">
            <img id="circledImage" class="img-responsive img-circle" src="images/1.jpg">
        </div>
        <div id="rightText" class="text-center col-md-6 col-sm-12 col-xs-12">

            <h3 class="subtitle" style="font-size: 50px;">Block #4</h3>
            <hr>
            <br>

            <p class="" style="font-size: 17px;">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </div>
</div>
    ';

} elseif($_GET['cat'] == 5) {

    echo '
   <div id="StckBomber" class="container-fluid lightDiv">
    <div class="row">
        <div id="leftImage" class="col-md-6 col-sm-12 col-xs-12">
            <img id="circledImage" class="img-responsive img-thumbnail " src="images/uviprint.jpg">
        </div>
        <div id="rightText" class="text-center col-md-6 col-sm-12 col-xs-12">

            <h3 class="subtitle" style="font-size: 50px;">UV-печать</h3>
            <hr>
            <br>

            <p class="" style="font-size: 17px;">
            В 21 веке технологии шагнули далеко вперед, и в результате эволюционирования такой разновидности печати как «струйная»<br>
            мы с вами получили такой продукт как «Ультра-Фиолетовая» печать.<br><br>
            <b style="font-size: 22px;">Возможности этого плоттера по истине велики:</b> <br>
            <ol>
            <li><p style="font-size: 17px;"><span class="glyphicon glyphicon-star-empty"></span> Печать на любой ровной поверхности не выше 5 см</li>
            <li><p style="font-size: 17px;"><span class="glyphicon glyphicon-star-empty"></span> Печать на мебели</li>
            <li><p style="font-size: 17px;"><span class="glyphicon glyphicon-star-empty"></span> Печать на подвесных потолках</li>
            <li><p style="font-size: 17px;"><span class="glyphicon glyphicon-star-empty"></span> Печать на стекле</li>
            <li><p style="font-size: 17px;"><span class="glyphicon glyphicon-star-empty"></span> Печать на кухонном фартуке</li>
            <li><p style="font-size: 17px;"><span class="glyphicon glyphicon-star-empty"></span> Печать на плитке</li>
            <li><p style="font-size: 17px;"><span class="glyphicon glyphicon-star-empty"></span> Печать на орг-стекле</li>
            <li><p style="font-size: 17px;"><span class="glyphicon glyphicon-star-empty"></span> Печать на ручках</li>
            <li><p style="font-size: 17px;"><span class="glyphicon glyphicon-star-empty"></span> Печать на магнитиах</li>
            </ol>
                        
            </p>
        </div>
    </div>
    </div> 
    ';


} else {
    // No such category
    echo '
    <div class="alert alert-danger" role="alert">
        <a href="#" class="alert-link">Такого раздела не существует, вернитесь на главную страницу!</a>
    </div>
    ';
}

?>

<?php
require_once 'footer.php';
?>
