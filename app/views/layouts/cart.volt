<header>
    {% include 'layouts/components/header.volt' %}
    {% include 'layouts/components/menu.volt' %}
</header>
<main>
    <div class="container content">
        <div class="row">
            <div class="col-lg-12 main">
                <article>
                    {{content()}}
                </article>
            </div>
        </div>
    </div>
</main>
{% include 'layouts/components/product.volt' %}
<div class="bag"></div>
{% include 'layouts/components/footer.volt' %}