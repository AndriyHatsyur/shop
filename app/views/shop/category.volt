<h2 class="shop-header">Розпродаж косметики AVON</h2>
<div class="row">
    {% for product in page.items %}
        {% if product.product.stock > 0 %}
    <div class="col-lg-6 col-md-6 card-shop">
        <div class="card-product">
            <a href="/shop/product/{{product.product.link}}"><p>{{product.product.title}}</p></a>
            <a href="/shop/product/{{product.product.link}}"><img class="product-img" src="{{product.product.image}}"></a>
            <br>
            <p class="price"><span class="price-old">{{product.product.price}} грн</span> <span class="price-new">{{product.product.sale}} грн</span> </p>
            <button class="btn btn-add" data-id="{{product.product.id}}" id="b-send">Замовити</button>
        </div>
    </div>
    {% endif %}
    {% endfor %}
</div>

{% include 'partials/pagination.volt' %}

<script type="text/javascript">
    $("#b-send").click(
        function() {
            var product_id = $( this ).data('id');
            var data = {'product_id': product_id, 'count': 1 }
            $('.btn-add').blur();
            $.ajax({
                url: '/shop/cart/add',
                type: "POST",
                data: data,
                cache: false,
                success: function (){
                    var count = Number($('#cart-count').text());
                    $('#cart-count').text(count + data.count);

                },
                error: function () {
                    alert('Error ');
                }
            });
        }
    );
</script>