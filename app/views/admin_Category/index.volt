{% include 'partials/alert.volt' %}
<h2>Категорії </h2>
<a href="/admin/category/add" class="add-link"> Додати <span class="fa fa-plus"></span> </a>
<br>
<br>
<table class="admin-list">
    <thead>
        <tr>
            <th>Назва</th> <th>Порядковий №</th> <th></th>
        </tr>
    </thead>
    <tbody>
		{% for category in categories %}
        <tr>
			<td>{{category.name}}</td> <td>{{category.number}}</td>
			<td class="text-center">
				<a href="/admin/category/edit/{{category.id}}" class="icon-edit">
					<span class="far fa-edit"></span>
				</a>
				<span class="fa fa-times icon-delete" onclick="remov({{category.id}})"></span>
			</td>
		</tr>
		{% endfor %}
    <tbody>
</table>
<script type="text/javascript">
	function remov(id){

		$.ajax({
			url: '/admin/category/delete',
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




