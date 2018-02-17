<header>
    {% include 'layouts/components/header.volt' %}
    {% include 'layouts/components/menu.volt' %}
</header>
<main>
    <div class="container content">
        <div class="row">
            <div class="col-lg-9 col-md-8 main">
                <article>
                        {{content()}}
                </article>
            </div>
            <div class="col-lg-3 col-md-4 sidebar">
                {% include 'layouts/components/sidebar-shop.volt' %}

            </div>

        </div>
    </div>
</main>
{% include 'layouts/components/product.volt' %}
<div class="bag"></div>
{% include 'layouts/components/footer.volt' %}
