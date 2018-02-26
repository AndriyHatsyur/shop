{% include 'partials/alert-shop.volt' %}
<h2 class="shop-header">Розпродаж косметики AVON</h2>
<div class="row">
    {% for product in page.items %}
    <div class="col-lg-6 col-md-6 card-shop">
        <div class="card-product">
            <a href="/shop/product/{{product.link}}"><p class="product-title">{{product.title}}</p></a>
            <a href="/shop/product/{{product.link}}"><img class="product-img" src="{{product.image}}"></a>
            <br>
            <p class="price"><span class="price-old">{{product.price}} грн</span> <span class="price-new">{{product.sale}} грн</span> </p>
            <button class="btn btn-add" data-id="{{product.id}}">Замовити</button>
        </div>
    </div>
    {% endfor %}
</div>
{% include 'partials/pagination.volt' %}

<script type="text/javascript">
    $(".btn-add").click(
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
                    $('#exampleModal').modal('show');

                },
                error: function () {
                    alert('Error ');
                }
            });
        }
    );
</script>