<header class="container-fluid header">
		<div class="brand"> ADMIN PANEL</div>
		<div class="logout"><a href="/admin/logout">LOGOUT</a></div>
</header>
<div class="container-fluid">
	 <div class="row">
		<div class="col-md-3 sidebar">
			<ul class="nav flex-column">
				<li class="nav-item">
				   	<a class="nav-link menu" href="/admin">Головна</a>
				</li>
				<li class="nav-item">
					<a class="nav-link menu" href="/admin/orders">Замовлення</a>
				</li>
				<li class="nav-item">
					<a class="nav-link menu" href="/admin/message">Повідомлення</a>
				 </li>
				 <li class="nav-item">
					<a class="nav-link menu" href="/admin/representative">Заявки на реєстрацію</a>
			 	</li>
				<li class="nav-item">
				    <a class="nav-link menu" href="/admin/category">Категорії</a>
				</li>
				<li class="nav-item">
				    <a class="nav-link menu" href="/admin/product">Товари</a>
				</li>
			</ul>
		</div>
		<div class="col-md-9 content">{{content()}}</div>
	</div>
</div>


