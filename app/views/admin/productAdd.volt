{% include 'partials/alert.volt' %}
<h2>Додати товар </h2>
<br>
<form method="POST" enctype='multipart/form-data'>
  <div class="form-group">
    <label>Назва</label>
    <input type="text" name="name" class="form-control btn-radius" required>
  </div>
  <div class="form-group">
    <label>Опис</label>
    <textarea class="form-control btn-radius" name="description" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label>Ціна</label>
    <input type="number" name="price" class="form-control btn-radius" required>
  </div>
  <div class="form-group">
    <label>Знижка</label>
    <input type="number" name="sale" class="form-control btn-radius" required>
  </div>
  <div class="form-group">
    <label>Зображення</label>
    <input type="file" name="image" class="form-control-file btn-radius" required>
    <small class="form-text text-muted">Виберіть зображення товару</small>
  </div>
  <input type='submit' class="btn btn-success btn-radius" value="Додати">
</form>