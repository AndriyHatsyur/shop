{% include 'partials/alert.volt' %}
<h2>Список представників для реєстрації </h2>
<br>
<br>
<table class="admin-list">
    <thead>
        <tr>
            <th>Ім`я</th> <th>Мобільний телефон </th> <th></th>
        </tr>
    </thead>
    <tbody>
		{% for representative in representatives %}
        <tr class="message-{{representative.status}}">
			<td>{{representative.name}}</td> <td>{{representative.mobile}}</td>
			<td class="text-center">
                    <a href="/admin/representative/view/{{representative.id}}" class="icon-edit">
                        <span class="fas fa-sign-out-alt"></span>
                    </a>

                <span class="fa fa-times icon-delete" onclick="remov({{representative.id}})"></span>
                
			</td>
		</tr>
		{% endfor %}
    <tbody>
</table>

<script type="text/javascript">
	function remov(id){

		$.ajax({
			url: '/admin/representative/delete',
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

