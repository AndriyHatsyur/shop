<header>
    {% include 'layouts/components/header.volt' %}
    {% include 'layouts/components/menu.volt' %}
</header>
{% include 'layouts/components/slider.volt' %}
<main>
    <div class="container content">
        <div class="row">
            <div class="col-lg-9 col-md-8 main">
                <article>
                        {{content()}}
                </article>
            </div>
            <div class="col-lg-3 col-md-4 sidebar">
                
                <a href="/staty-predstavnykom#header"><img class="logo" src="/public/img/avon-predstav.png"></a>
                <br><br>
                <a href="/staty-predstavnykom#header"><img class="logo" src="/public/img/avon-koord.png"></a>
            </div>
    
        </div>
    </div>
</main>
{% include 'layouts/components/product.volt' %}
<div class="bag"></div>
{% include 'layouts/components/footer.volt' %}
