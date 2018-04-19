{% include 'partials/alert.volt' %}
<h2>Замовлення </h2>
<br>
<br>
<table class="admin-list">
	<thead>
	<tr>
		<th>Ім`я</th>
		<th>Мобільний телефон </th>
		<th>Сума</th>
		<th>Статус</th>
		<th></th>
	</tr>
	</thead>
	<tbody>
    {% for order in orders %}
		<tr class="message-{{order.status}}">
			<td>{{order.address.name}}</td>
			<td>{{order.address.mobile}}</td>
			<td>{{order.sum}}</td>
			<td>{{order.status}}</td>
			<td class="text-center">
				<a href="/admin/order/{{order.id}}" class="icon-edit">
					<span class="fas fa-sign-out-alt"></span>
				</a>
			</td>
		</tr>
    {% endfor %}
	<tbody>
</table>





