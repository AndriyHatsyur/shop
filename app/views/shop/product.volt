{% include 'partials/alert-shop.volt' %}
<div class="row">
    <div class="col-md-6 product-image">
        <img class="product-img" src="{{product.image}}">
    </div>
    <div class="col-md-6 product-info">
        <h1>{{product.title}}</h1>
        <p class="stock">В наявності: <span id="stock">{{product.stock}}</span> шт</p>
        <p class="old-price">Повна вартість: {{product.price}} грн</p>
        <p class="sale-price">{{product.sale}} грн</p>
        <form id="product">
            <span class="minus">-</span>
            <input class="count"  name="count" value="1">
            <input type="hidden" name="product_id" value="{{product.id}}">
            <span class="plus">+</span><br><br>
            <button type="button" class="btn btn-add" id="b-send">Замовити</button>
        </form>
    </div>
    <div class="about-product">
        <p class="about-header">Опис:</p>
        <p class="about-text">{{product.description}}</p>
    </div>
</div>

<script type="text/javascript">
    $("#b-send").click(
        function() {
            var data = $('#product').serializeArray();
            $('.btn-add').blur();
            $.ajax({
                url: '/shop/cart/add',
                type: "POST",
                data: data,
                cache: false,
                success: function (){
                    var count = Number($('#cart-count').text());
                    count += Number(data[0].value);
                    $('#cart-count').text(count);
                    $('#exampleModal').modal('show');
                },
                error: function () {
                    alert('Error ');
                }
            });
        }
    );
</script>