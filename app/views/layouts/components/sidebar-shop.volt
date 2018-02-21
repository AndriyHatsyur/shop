<div class="sidebar-shop">
    <p class="category-header">Категорії</p>
    <ul>
        {% for category in categories %}
        <li><a class="" href="/shop/category/{{category.link}}">{{category.name}}</a></li>
        {% endfor %}
    </ul>
</div>
<script>
    $(function () {
        $(' .sidebar-shop li a').each(function () {
            var location = window.location.href.split('?')[0];
            var link = this.href.split('?')[0];

            if(location == link) {
                $(this).addClass('active');

            }
        });
    });
</script>