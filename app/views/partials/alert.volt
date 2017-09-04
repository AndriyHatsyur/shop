{% if alert is defined %}
	<div class="alert alert-success btn-radius" role="alert">{{alert}}</div>
	<script type="text/javascript">
	function hidden()
	{
		var elem = document.getElementsByClassName("alert")[0];
		elem.remove(); 
	}
	setTimeout(hidden, 2000);
	</script>
{% endif %}	