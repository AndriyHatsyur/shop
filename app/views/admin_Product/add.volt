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
    <textarea class="form-control btn-radius" name="description" rows="12"></textarea>
  </div>
  <div class="form-group">
    <label>Ціна</label>
    <input type="text" name="price" class="form-control btn-radius" required>
  </div>
  <div class="form-group">
    <label>Знижка</label>
    <input type="text" name="sale" class="form-control btn-radius" required>
  </div>
  <div class="form-group">
    <label>На складі</label>
    <input type="text" name="stock" class="form-control btn-radius" required>
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Категорія</label>
    {% for category in categories %}
    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="categories[]" value="{{category.id}}">
        {{category.name}}
      </label>
    </div>
    {% endfor %}
  </div>
  <div class="form-group">
    <label>Зображення</label>
    <input type="file" name="files" class="form-control-file btn-radius" required>
    <small class="form-text text-muted">Виберіть зображення товару</small>
  </div>
  <div class="form-group">
    <label>Опис СЕО</label>
    <textarea class="form-control btn-radius" name="description_seo" rows="12"></textarea>
  </div>
  <input type='submit' class="btn btn-success btn-radius" value="Додати">
</form>
<script type="text/javascript">
  $( document ).ready(function() {
      $('#exampleModal').modal('show');
    });
</script>