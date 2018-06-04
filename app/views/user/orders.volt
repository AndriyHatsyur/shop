<h3>Замовлення</h3>
<br>
{% for order in orders %}

    <div class="row user-order">
        <div class="col-md-3">
            № <?=str_pad($order->id,5,0,STR_PAD_LEFT)?>
        </div>
        <div class="col-md-3">
            Сума: {{order.sum}} грн
        </div>
        <div class="col-md-3">
            Статус: {{order.status}}
        </div>
        <div class="col-md-3">
            <a class="pink-link" href="/user/order/{{ order.id }}">Переглянути</a>
        </div>
    </div>

{% endfor %}