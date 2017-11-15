{% include 'partials/alert.volt' %}
<h2>Товари </h2>
<a href="/admin/product/add" class="add-link"> Додати <span class="fa fa-plus"></span> </a>
<br>
<br>
<table class="admin-list">
    <thead>
        <tr>
            <th>Назва</th> <th>Ціна</th> <th>На складі</th> <th></th>
        </tr>
    </thead>
    <tbody>
		{% for product in products %}
        <tr>
			<td class="name-w" >{{product.title}}</td> <td>{{product.price}} Грн.</td> <td>{{product.stock}} шт.</td>
			<td>
				<a href="/admin/product/edit/{{product.id}}" class="icon-edit">
					<span class="fa fa-pencil-square-o"></span>
				</a>
				<span class="fa fa-times icon-delete" onclick="remov({{product.id}})"></span>
			</td>
		</tr>
		{% endfor %}
    <tbody>
</table>
<script type="text/javascript">
function remov(id){

	$.ajax({
		url: '/admin/product/delete',
		type: "POST",
		data: "id="+id,
		cache: false,
		success: function (html){
			$('.wrapper').html(html);
			$('#exampleModal').modal('show');
		}
	});
}	

</script>