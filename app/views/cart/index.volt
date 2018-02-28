<div class="cart">
    <h4> Ваш кошик </h4><br>
    {% if products | length > 0 %}
    <div class="cart-header">
        <p class="p-name">Назва продукту</p>
        <p class="p-price">Ціна</p>
        <p class="p-count">Кількість</p>
        <p class="p-sum">Сума</p>
    </div>
        <div class="cart-product">
            {% for product in products %}
            <div class="product-item">
                <p class="p-name">
                    <img src="{{product.image}}">
                    <a href="/shop/product/{{ product.link }}">{{ product.title }}</a>
                </p>
                <p class="p-price">{{ product.price }} грн</p>
                <p class="p-count">
                    <span class="minus fas fa-minus " onclick="edit({{ product.id }}, -1)"></span>
                    {{ product.count }}
                    <span class="plus fas fa-plus " onclick="edit({{ product.id }}, 1)"></span>
                </p>
                <p class="p-sum"> {{ product.getSum()  }} грн</p>
                <p class="p-del" onclick="remove({{ product.id }})"><span class="fa fa-times icon-delete"></span></p>
            </div>
            {% endfor %}
        </div>
    <div class="cart-footer">
        <p>Сума: {{ totalSum }} грн</p>
        <br>
        <p><a class="btn btn-pink" href="/shop/cart/send-order">Оформити замовлення</a></p>
    </div>
        {% else %}
        <p class="cart-empty">Кошик порожній</p>
    {% endif %}
</div>

<script type="text/javascript">
    function remove(id) {
        $.ajax({
            url: '/shop/cart/delete',
            type: "POST",
            data: "id="+id,
            cache: false,
            success: function (html){
                console.log(id);
                $('.wrapper').html(html);
            },
            error: function () {
                alert('Error ');
            }
        });
    }
</script>

<script type="text/javascript">
    function edit(id, count) {

        var data = {'id': id, 'count': count }

        $.ajax({
            url: '/shop/cart/edit',
            type: "POST",
            data: data,
            cache: false,
            success: function (html){
                console.log(data);
                $('.wrapper').html(html);

            },
            error: function () {
                alert('Error ');
            }
        });

    }

</script>





