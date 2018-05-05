{% if message is defined %}
    <span class="message-ok">{{message}}</span>
    <br><br>
{% endif %}

{% if error is defined %}
    <span class="message-error">{{error}}</span>
    <br><br>
{% endif %}

<form class="form-predstavnuk" method="POST">
    <div class="form-group">
        <label>*Адреса електронної пошти</label>
        <input type="email" name="email" class="form-control btn-radius" required>
    </div>
    <input type='submit' class="btn btn-pink btn-radius" value="Скинути пароль">
</form>