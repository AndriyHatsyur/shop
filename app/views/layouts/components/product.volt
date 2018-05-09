<div class="container product-slide">
    <h5>Рекомендовані товари</h5>
    <br>
    <div class="row">
        {% for randProduct in randProducts  %}
        <div class="col-md-3">
            <a href="/shop/product/{{ randProduct.link}}"><p>{{ randProduct.title}}</p></a>
            <a href="/shop/product/{{ randProduct.link}}"><img class="product-img" src="{{ randProduct.image }}"></a>
            <br>
            <p class="price"><span class="price-old">{{ randProduct.price }} грн</span> <span class="price-new">{{ randProduct.sale }} грн</span> </p>
        </div>
       {% endfor %}
    </div>
</div>