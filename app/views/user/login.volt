<h2>Вхід для Клієнтів</h2><br>
{% if error is defined %}
    <span class="message-error">{{error}}</span>
<br><br>
{% endif %}	
<form class="form-predstavnuk" method="POST">
    <div class="form-group">
        <label>*Адреса електронної пошти</label>
        <input type="email" name="email" class="form-control btn-radius" required>
    </div>
    <div class="form-group">
        <label>*Пароль</label>
        <input type="password" name="password" class="form-control btn-radius" required>
    </div>
    
    <input type='submit' class="btn btn-pink btn-radius" value="Вхід">
</form>