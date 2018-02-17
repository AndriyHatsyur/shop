<div class="container header">
    <div class="row">
        <div class="col-lg-4 col-md-4 header-logo">
            <a href="/"><img class="logo" src="/public/img/avon.png"></a>
        </div>
        <div class="col-lg-6 col-md-5">
            <a href="/staty-predstavnykom"><img class="banner" src="/public/img/3.jpg"></a>
        </div>    
        <div class="col-lg-2 col-md-3 header-contact">
            {% if user is defined %}
                {{user.name}} | <a  class="link-header" href="/logout">Вийти</a>
            {% else %}
                <a  class="link-header" href="/login">Вхід </a>|
                <a  class="link-header" href="/signup">Реєстрація</a>
            {% endif %}	
            <br>
            <a  class="cart-info" href="#"><img class="cart-img" src="/public/img/cart.png" alt="Кошик: товарів 10шт"> Товарів: 10 шт. </a>
        </div>    
    </div>
</div>