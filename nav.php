<?php
if(basename($_SERVER['PHP_SELF']) == 'smartphone.php' ) {
    echo '
       <div id="MyNavBar">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">iSticker.az</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                <li id="navbarLi1"><a href="smartphone.php"><span class="glyphicon glyphicon-star g1" style="display:none;"></span> Выбор смартфона</a></li>
                    <li id="navbarLi1"><a href="index.php"><span class="glyphicon glyphicon-star g1" style="display:none;"></span> Вернуться на главную</a></li>
            
                </ul>
            </div>
        </div>
    </nav>
</div>
        ';
} elseif(basename($_SERVER['PHP_SELF']) == 'read_more.php') {
    echo '
       <div id="MyNavBar">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">iSticker.az</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li id="navbarLi1"><a href="index.php"><span class="glyphicon glyphicon-star g1" style="display:none;"></span> Вернуться на главную</a></li>
            
                </ul>
            </div>
        </div>
    </nav>
</div>
        ';
} else {
    echo '
       <div id="MyNavBar">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">iSticker.az</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="language_select"><a style="color: white;" href="#"><span class="flag-icon flag-icon-az"></span> AZE</a></li>
                    <li id="navbarLi1"><a href="index.php"><span class="glyphicon glyphicon-star g1" style="display:none;"></span> Главная</a></li>
                    <li id="navbarLi2"><a href="#aboutUS"><span class="glyphicon glyphicon-star g2" style="display:none;"></span> О нас</a></li>
                    <li id="navbarLi3"><a href="#Stickers"><span class="glyphicon glyphicon-star g3" style="display:none;"></span> Стикеры</a></li>
                    <li id="navbarLi4"><a href="#PrintOnClothes"><span class="glyphicon glyphicon-star g3" style="display:none;"></span> Печать</a></li>
                    <li id="navbarLi5"><a href="#PhotoOboi"><span class="glyphicon glyphicon-star g4" style="display:none;"></span> Фотообои</a></li>
                    <li id="navbarLi5"><a href="#ModulKartini"><span class="glyphicon glyphicon-star g4" style="display:none;"></span> Модульные картины</a></li>
                    <li id="navbarLi5"><a href="#contacts"><span class="glyphicon glyphicon-star g4" style="display:none;"></span> Связаться с нами</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
        ';
}
?>