<header>
    <div class="container header">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <img class="logo" src="/public/img/avon.png">
            </div>
            <div class="col-lg-6 col-md-5">
                    
                <img class="banner" src="/public/img/3.jpg">
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
                <a class="nav-item nav-link" href="/statu-predstavnukom">стати предстаником</a>
                <a class="nav-item nav-link" href="/contact">Контакти</a>
            </div>
        </div>
    </nav>
</header>
<aside class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/public/img/slider/1.png">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/public/img/slider/2.png">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/public/img/slider/3.jpg">
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
<div class="container content">
    <div class="row">
        <div class="col-lg-9 col-md-8 main">
            <main>
                <article>
                    {{content()}}
                </article>
            </main>
        </div>
        <div class="col-lg-3 col-md-4 sidebar">
            sidebar <br>
            sidebar <br>
        </div>

    </div>
</div>
<div class="bag"></div>
<footer class="footer">
   
</footer>
