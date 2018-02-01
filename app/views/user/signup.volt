<h2>Реєстрація</h2><br>
{% if errors is defined %}
    {% for error in errors %}
        <span class="message-error">{{error.getMessage()}}</span>
    {% endfor %}
    <br><br>
{% endif %}	
{% if message is defined %}
    <span class="message-ok">{{message}}</span>
    <br><br>
{% endif %}	
<form class="form-predstavnuk" method="POST">
    <div class="form-group">
        <label>*Ім`я</label>
        <input type="text" name="name" class="form-control btn-radius" required>
    </div>
    <div class="form-group">
        <label>*Адреса електронної пошти</label>
        <input type="email" name="email" class="form-control btn-radius" required>
    </div>
    <div class="form-group">
        <label>*Пароль</label>
        <input type="password" name="password" class="form-control btn-radius" required>
    </div>
    
    <input type='submit' class="btn btn-pink btn-radius" value="Зареєструватись">
</form>