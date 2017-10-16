{% include 'partials/alert.volt' %}
<h2>Додати товар </h2>
<br>
<form method="POST" enctype='multipart/form-data'>
  <div class="form-group">
    <label>Назва</label>
    <input type="text" name="name" class="form-control btn-radius" value="{{product.title}}" required>
  </div>
  <div class="form-group">
    <label>Опис</label>
    <textarea class="form-control btn-radius" name="description" rows="3">{{product.description}}</textarea>
  </div>
  <div class="form-group">
    <label>Ціна</label>
    <input type="text" name="price" class="form-control btn-radius" value="{{product.price}}" required>
  </div>
  <div class="form-group">
    <label>Знижка</label>
    <input type="text" name="sale" class="form-control btn-radius" value="{{product.sale}}" required>
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Категорія</label>
    {% for category in categories %}
    <div class="form-check">
      <label class="form-check-label">
        {% for productCategory in product.productCategory %}
          {% if  category.id == productCategory.category.id %}
            <input type="checkbox" class="form-check-input" name="categories[]" value="{{category.id}}" checked>
          {% else %}
            <input type="checkbox" class="form-check-input" name="categories[]" value="{{category.id}}">
          {% endif %}  
        {% endfor %}
        {{category.name}}
      </label>
    </div>
    {% endfor %}
  </div>
  <div class="form-group">
    <label>Зображення</label><br>
    <img class="form-image" src="{{product.image}}"><br><br>
    <input type="file" name="files" class="form-control-file btn-radius">
    <small class="form-text text-muted">Виберіть зображення товару для того щоб його замінити</small>
  </div>
  <input type='submit' class="btn btn-success btn-radius" value="Редагувати">
</form>
