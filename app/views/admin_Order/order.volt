<h3>Замовлення № {{ order.id_ }}</h3>

<table class="order-view">
    <thead>
    <tr>
        <th >Назва товару</th>
        <th>Кількість</th>
        <th>Сума</th>
        <th>Загальна</th>
    </tr>
    </thead>
    <tbody>
    {% for product in order.orderProduct %}
        <tr class="">
            <td>{{ product.title }}</td>
            <td>{{ product.count }} шт.</td>
            <td>{{product.price}} грн</td>
            <td>{{product.price * product.count}} грн</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
<br>
<b>Загальна кількість: {{ order.count }} шт</b><br>
<b>Загальна сума: {{ order.sum }} грн</b>
<br>
<br>
<h5>Адреса доставки</h5>
Ім`я: {{ order.address.name }} <br>
Прізвище: {{ order.address.surname }} <br>
Мобільний телефон: {{ order.address.mobile }} <br>
Адреса електронної пошти: {{ order.address.email }} <br>
Область: {{ order.address.region }} <br>
Адміністративний район: {{ order.address.area }} <br>
Населений пункт: {{ order.address.city }} <br>
Відділення Нової Пошти: {{ order.address.post }} <br>
<br>
<form action="" method="post">
    <select class="form-control" style="width: 20%;" name="status">
        <option {% if order.status == 'new' %} selected {% endif %}value="new">new</option>
        <option {% if order.status == 'cancel' %} selected {% endif %} value="cancel">cancel</option>
        <option {% if order.status == 'send' %} selected {% endif %} value="send">send</option>
    </select>
    <br>
    <button class="btn btn-success">Зерегти</button>
</form>