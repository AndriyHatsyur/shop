<img class="img-width"src="/public/img/333.jpg">
<br>
<br>
<p>
    По усіх питання щодо продукції Avon, а також реєстрації в AVON ви можите зв'язатись з
    представником Avon по телефону +3 (098) 761 66 27 Лілія<br>
    А також написавши на E-mail: stasuk.lilia@ukr.net <br>
    Зручніше написати лист ? Заповніть форму нижче , і я зв'яжусь з Вами найближчим часом !
</p>
<form class="form-predstavnuk" method="POST">
    <div class="form-group">
        <label>*Ім`я</label>
        <input type="text" name="name" class="form-control btn-radius" required>
    </div>
    <div class="form-group">
        <label>*Мобільний телефон (80XXXXXXXXX)</label>
        <input type="text" name="mobile" class="form-control btn-radius" required>
    </div>
    <div class="form-group">
      <label>*Адреса електронної пошти</label>
      <input type="email" name="email" class="form-control btn-radius" required>
  </div>
    <div class="form-group">
        <label>*Повідомлення</label>
        <textarea class="form-control btn-radius" name="text" rows="7"></textarea>
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