
{% for order in orders %}

	{{ order.address.name}}
    {{ order.address.surname}}
	{{ order.sum }}


{% endfor %}





