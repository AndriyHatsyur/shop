{% include 'partials/alert.volt' %}
<h2>Категорії </h2>
<a href="/admin/category/add" class="add-link"> Додати <span class="fa fa-plus"></span> </a>
<br>
<br>
<ul class="list-group">
	{% for category in categories %}
	<li class="list-group-item"> {{category.name}}  
		<a href="/admin/category/edit/{{category.id}}" class="icon-edit"><span class="fa fa-pencil-square-o"></span></a>
	
		<span class="fa fa-times icon-delete" onclick="remov({{category.id}})"></span>
	</li>
	{% endfor %}
</ul>
<script type="text/javascript">
function remov(id){
	$.ajax({
		url: '/admin/category',
		type: "POST",
		data: "id="+id,
		cache: false,
		success: function (html){
			$('.wrapper').html(html);
		}
	});
}	
</script>



