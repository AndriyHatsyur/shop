{% include 'partials/alert.volt' %}
<h2>Товари </h2>
<a href="/admin/product/add" class="add-link"> Додати <span class="fa fa-plus"></span> </a>
<br>
<br>
<ul class="nav nav-tabs" id="myTab" role="tablist">
	<li class="nav-item">
		<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">В наявності</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="profile-tab" data-toggle="tab" href="#missing" role="tab" aria-controls="profile" aria-selected="false">Відсутні</a>
	 </li>	
</ul>
<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
		<table class="admin-list">
			<thead>
				<tr>
					<th>Назва</th> <th>Ціна</th> <th>На складі</th> <th></th>
				</tr>
			</thead>
			<tbody>
				{% for product in page.items %}
				{% if product.stock > 0 %}
				<tr>
					<td class="name-w" >{{product.title}}</td> <td>{{product.price}} Грн.</td> <td>{{product.stock}} шт.</td>
					<td>
						<a href="/admin/product/edit/{{product.id}}" class="icon-edit">
							<span class="fa fa-pencil-square-o"></span>
						</a>
						<span class="fa fa-times icon-delete" onclick="remov({{product.id}})"></span>
					</td>
				</tr>
				{% endif %}
				{% endfor %}
			<tbody>
		</table>		
	</div>
	<div class="tab-pane fade" id="missing" role="tabpanel" aria-labelledby="profile-tab">
		<table class="admin-list">
			<thead>
				<tr>
					<th>Назва</th> <th>Ціна</th> <th>На складі</th> <th></th>
				</tr>
			</thead>
			<tbody>
				{% for product in page.items %}
				{% if product.stock <= 0 %}
				<tr>
					<td class="name-w" >{{product.title}}</td> <td>{{product.price}} Грн.</td> <td>{{product.stock}} шт.</td>
					<td>
						<a href="/admin/product/edit/{{product.id}}" class="icon-edit">
							<span class="fa fa-pencil-square-o"></span>
						</a>
						<span class="fa fa-times icon-delete" onclick="remov({{product.id}})"></span>
					</td>
				</tr>
				{% endif %}
				{% endfor %}
			<tbody>
		</table>		
	</div>	
</div>
<div class="paginator">
	Cторінка {{page.current}} з {{page.total_pages}} <br><br>
	<a href='/admin/product'> Перша </a>
	<a href='/admin/product?page=<?= $page->before; ?>'> << Попередня  </a>
	<a href='/admin/product?page=<?= $page->next; ?>'> Наступна >> </a>
	<a href='/admin/product?page=<?= $page->last; ?>'> Остання </a>
</div>



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