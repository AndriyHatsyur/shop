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
                    {{ product.title }}
                </p>
                <p class="p-price">{{ product.price }} грн</p>
                <p class="p-count">{{ product.count }}</p>
                <p class="p-sum"> {{ product.getSum()  }} грн</p>
            </div>
            {% endfor %}
        </div>
    <div class="cart-footer">
        <p>Сума: {{ totalSum }} грн</p>
    </div>
        {% else %}
        <p class="cart-empty">Кошик порожній</p>
    {% endif %}
</div>







