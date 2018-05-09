<h2 id="header">Стати представником Ейвон</h2>
<p>
    Для реєстрації в компанії Avon просто заповніть анкету і протягом декількох годин з вами по телефону зв'яжеться партнер Avon. При заповненні анкети на реєстрацію вказуйте будь ласка свої реальні дані, інакше ваша реєстрація Avon буде анульована. Всі поля позначені зірочкою (*) повинні бути заповнені.
</p>
<form class="form-predstavnuk" method="POST">
  <div class="form-group">
    <label>*Ім`я</label>
    <input type="text" name="name" class="form-control btn-radius" required>
  </div>
  <div class="form-group">
    <label>*Прізвище</label>
    <input type="text" name="surname" class="form-control btn-radius" required>
  </div>
  <div class="form-group">
      <label>*Дата народження (ДД/ММ/РРРР)</label>
      <input type="text" name="birth" class="form-control btn-radius" required>
  </div>
  <div class="form-group">
      <label>*Адреса електронної пошти</label>
      <input type="email" name="email" class="form-control btn-radius" required>
  </div>
  <div class="form-group">
      <label>*Область</label>
      <input type="text" name="region" class="form-control btn-radius" required>
  </div>
  <div class="form-group">
      <label>*Адміністративний район</label>
      <input type="text" name="area" class="form-control btn-radius" required>
  </div>
  <div class="form-group">
      <label>*Населений пункт</label>
      <input type="text" name="city" class="form-control btn-radius" required>
  </div>
  <div class="form-group">
      <label>Мобільний телефон (80XXXXXXXXX)</label>
      <input type="text" name="mobile" class="form-control btn-radius" required>
  </div>
  <input type='submit' class="btn btn-pink btn-radius" value="Відправити">
</form>

{% if alert is defined %}
<div class="modal" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">AVON УКРАЇНА</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>{{alert}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-pink" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
{% endif %}	
<script type="text/javascript">
    $( document ).ready(function() {
        $('#exampleModal').modal('show');
      });
</script>