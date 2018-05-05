{% for order in orders %}
    <?=str_pad($order->id,5,0,STR_PAD_LEFT)?>

        {{order.sum}}
        {{order.status}}

{% endfor %}