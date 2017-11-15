{% include 'partials/alert.volt' %}
<h2>Редагувати категорію </h2>
<br>
<form method="POST">
  <div class="form-group">
    <label>Назва</label>
    <input type="text" name="name" class="form-control btn-radius" value="{{category.name}}" required>
  </div>
  <div class="form-group">
    <label>Порядковий №</label>
    <input type="text" name="number" class="form-control btn-radius" value="{{category.number}}" required>
  </div>
  <input type='submit' class="btn btn-success btn-radius" value="Редагувати">
</form>
<script type="text/javascript">
  $( document ).ready(function() {
      $('#exampleModal').modal('show');
    });
</script>