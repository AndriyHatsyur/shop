{% include 'partials/alert.volt' %}
<h2>Повідомлення </h2>
<br>
<br>
<table class="admin-list">
    <thead>
        <tr>
            <th>Ім`я</th> <th>Мобільний телефон </th> <th></th>
        </tr>
    </thead>
    <tbody>
		{% for message in messages %}
        <tr class="message-{{message.status}}">
			<td>{{message.name}}</td> <td>{{message.mobile}}</td>
			<td class="text-center">
                    <a href="/admin/message/view/{{message.id}}" class="icon-edit">
                        <span class="fas fa-sign-out-alt"></span>
                    </a>

                <span class="fa fa-times icon-delete" onclick="remov({{message.id}})"></span>
                
			</td>
		</tr>
		{% endfor %}
    <tbody>
</table>

<script type="text/javascript">
	function remov(id){

		$.ajax({
			url: '/admin/message/delete',
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

