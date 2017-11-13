{% include 'partials/alert.volt' %}
<h2>Товари </h2>
<a href="/admin/product/add" class="add-link"> Додати <span class="fa fa-plus"></span> </a>
<br>
<br>
<ul class="list-group">
	{% for product in products %}
	<li class="list-group-item"> {{product.title}}  
		<a href="/admin/product/edit/{{product.id}}" class="icon-edit"><span class="fa fa-pencil-square-o"></span></a>
	
		<span class="fa fa-times icon-delete" onclick="remov({{product.id}})"></span>
	</li>
	{% endfor %}
</ul>

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