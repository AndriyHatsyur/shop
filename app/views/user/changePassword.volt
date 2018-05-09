{% if error is defined %}
    <span class="message-error">{{error}}</span>
    <br><br>
{% endif %}
{% if message is defined %}
    <span class="message-ok">{{message}}</span>
    <br><br>
{% endif %}

<form class="form-predstavnuk" method="POST">

    <div class="form-group">
        <label>*Діючий пароль</label>
        <input type="password" name="password" class="form-control btn-radius" required>
    </div>
    <div class="form-group">
        <label>*Новий пароль</label>
        <input type="password" name="newpassword" class="form-control btn-radius" required>
    </div>
    <div class="form-group">
        <label>*Повтор нового паролю</label>
        <input type="password" name="repeatpassword" class="form-control btn-radius" required>
    </div>

    <input type='submit' class="btn btn-pink btn-radius" value="Змінити">
</form>