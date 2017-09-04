{% include 'partials/alert.volt' %}
<h2>Додати категорію </h2>
<br>
<form method="POST">
  <div class="form-group">
    <label>Назва</label>
    <input type="text" name="name" class="form-control btn-radius" required>
  </div>
  <div class="form-group">
    <label>Порядковий №</label>
    <input type="text" name="number" class="form-control btn-radius" required>
  </div>
  <input type='submit' class="btn btn-success btn-radius" value="Додати">
</form>
