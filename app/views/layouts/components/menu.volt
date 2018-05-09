<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav container">
            <a class="nav-item nav-link" href="/">Головна <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="/shop">розпродаж</a>
            <a class="nav-item nav-link" href="/staty-predstavnykom#header">стати предстаником</a>
            <a class="nav-item nav-link" target="_blanck" href="http://www.avon.ua/PRSuite/custonlineOrderEBrochure.page?custRepOrdr=1&acNo=MTM0MzM1NzE%3D&source=V0lER1Q=&c=vbrochure&s=brochurewidget_vbrochure">Каталог</a>
            <a class="nav-item nav-link" href="/contact">Контакти</a>
        </div>
    </div>
</nav>
<script>
    $(function () {
        $(' .navbar-nav a ').each(function () {
            var location = window.location.href.split('/')[3];
            var link = this.href.split('/')[3];
            location = location.split('?')[0];
            link = link.split('?')[0];

            if(location == link) {
                $(this).addClass('active-link');
            }
        });
    });
</script>