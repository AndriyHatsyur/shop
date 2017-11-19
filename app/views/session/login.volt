<div class="ligin-header">
<h3>Адмін панель</h3>
</div>
<div class="admin-login">
  {% if error is defined %}
  <span class="error">{{error}}</span>
  {% endif %}
  <form method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1">Логін</label>
      <input type="text" class="form-control form-login" name="login">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Пароль</label>
      <input type="password" class="form-control form-login" name="password">
    </div>
    <button type="submit" class="btn btn-primary btn-login"> Вхід </button>
  </form>
</div>
