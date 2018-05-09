{% include 'partials/alert.volt' %}
<h2>Замовлення </h2>
<br>
<br>
<table class="admin-list">
	<thead>
	<tr>
		<th>№</th>
		<th>Ім`я</th>
		<th>Мобільний телефон </th>
		<th>Сума</th>
		<th>Статус</th>
		<th></th>
	</tr>
	</thead>
	<tbody>
    {% for order in page.items %}
		<tr class="message-{{order.status}}">
			<td><?=str_pad($order->id,5,0,STR_PAD_LEFT)?></td>
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

<div class="paginator">
	Cторінка {{page.current}} з {{page.total_pages}} <br><br>
	<a href='/admin/orders'> Перша </a>
	<a href='/admin/orders?page=<?= $page->before; ?>'> << Попередня  </a>
	<a href='/admin/orders?page=<?= $page->next; ?>'> Наступна >> </a>
	<a href='/admin/orders?page=<?= $page->last; ?>'> Остання </a>
</div>





