<header>
    <div class="container header">
        <div class="row">
            <div class="col-lg-4 col-md-4 header-logo">
                <a href="/"><img class="logo" src="/public/img/avon.png"></a>
            </div>
            <div class="col-lg-6 col-md-5">
                <a href="/staty-predstavnykom"><img class="banner" src="/public/img/3.jpg"></a>
            </div>    
            <div class="col-lg-2 col-md-3 header-contact">
                <a  class="link-header" href="#">Вхід </a>|
                <a  class="link-header" href="#">Реєстрація</a>
                <br>
                <a  class="cart-info" href="#"><img class="cart-img" src="/public/img/cart.png" alt="Кошик: товарів 10шт"> Товарів: 10 шт. </a>
            </div>    
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav container">
                <a class="nav-item nav-link" href="/">Головна <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">розпродаж</a>
                <a class="nav-item nav-link" href="/staty-predstavnykom">стати предстаником</a>
                <a class="nav-item nav-link" href="/contact">Каталог</a>
                <a class="nav-item nav-link" href="/contact">Контакти</a>
            </div>
        </div>
    </nav>
</header>
<aside class="container slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="/staty-predstavnykom"><img class="d-block w-100" src="/public/img/slider/1.png"></a>
            </div>
            <div class="carousel-item">
                <a href="/staty-predstavnykom"><img class="d-block w-100" src="/public/img/slider/2.png"></a>
            </div>
            <div class="carousel-item">
                <a href="/staty-predstavnykom"><img class="d-block w-100" src="/public/img/slider/3.png"></a>
            </div>
            <div class="carousel-item">
                <a href="/staty-predstavnykom"><img class="d-block w-100" src="/public/img/slider/4.png"></a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>    
</aside>
<main>
    <div class="container content">
        <div class="row">
            <div class="col-lg-9 col-md-8 main">
                <article>
                        {{content()}}
                </article>
            </div>
            <div class="col-lg-3 col-md-4 sidebar">
                
                <a href="/staty-predstavnykom"><img class="logo" src="/public/img/avon-predstav.png"></a>
                <br><br>
                <a href="/staty-predstavnykom"><img class="logo" src="/public/img/avon-koord.png"></a>
            </div>
    
        </div>
    </div>
</main>
<div class="container product-slide">
    <h5>Рекомендовані товари</h5>
    <br>
    <div class="row">
        <div class="col-md-3">
            <a href=""><p>Туалетна вода Musk Marine (75 мл)</p></a>
            <a href=""><img class="product-img" src="/public/img/product/prod_1186711_1_310x310.jpg"></a>
            <br>
            <p class="price"><span class="price-old">300,00 грн</span> <span class="price-new">280,00 грн</span> </p>
        </div>
        <div class="col-md-3">
            <a href=""><p>Туалетна вода Musk Marine (75 мл)</p></a>
            <a href=""><img class="product-img" src="/public/img/product/prod_1188721_1_310x310.jpg"></a>
            <br>
            <p class="price"><span class="price-old">300,00 грн</span> <span class="price-new">280,00 грн</span> </p>
        </div>
        <div class="col-md-3">
            <a href=""><p>Туалетна вода Musk Marine (75 мл)</p></a>
            <a href=""><img class="product-img" src="/public/img/product/prod_1189979_1_310x310.jpg"></a>
            <br>
            <p class="price"><span class="price-old">300,00 грн</span> <span class="price-new">280,00 грн</span> </p>
        </div>    
        <div class="col-md-3">
            <a href=""><p>Туалетна вода Musk Marine (75 мл)</p></a>
            <a href=""><img class="product-img" src="/public/img/product/prod_1186711_1_310x310.jpg"></a>
            <br>
            <p class="price"><span class="price-old">300,00 грн</span> <span class="price-new">280,00 грн</span> </p>
        </div>
    </div>
</div>

<div class="bag"></div>
<footer class="footer">
    <h2>AVON УКРАЇНА</h2>
    <nav>
        <a class="nav-item nav-link" href="/">Головна <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#">розпродаж</a>
        <a class="nav-item nav-link" href="/staty-predstavnykom">стати предстаником</a>
        <a class="nav-item nav-link" href="/contact">Контакти</a>
    </nav>
    <div class="social">
        <a href=""><img src="/public/img/social/facebook.png"></a>
        <a href=""><img src="/public/img/social/instagram.png"></a>
        <a href=""><img src="/public/img/social/gmail.png"></a>
        <a href=""><img src="/public/img/social/vk.png"></a>
    </div>
     <p>©2018 ЕЙВОН КОСМЕТІКС ЮКРЕЙН</p>  
</footer>
