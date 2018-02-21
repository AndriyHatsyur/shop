<div class="row">
    <div class="col-md-6 product-image">
        <img class="product-img" src="{{product.image}}">
    </div>
    <div class="col-md-6 product-info">
        <h1>{{product.title}}</h1>
        <p class="stock">В наявності: <span id="stock">{{product.stock}}</span> шт</p>
        <p class="old-price">Повна вартість: {{product.price}} грн</p>
        <p class="sale-price">{{product.sale}} грн</p>
        <form>
            <span class="minus">-</span>
            <input class="count" name="count" value="1">
            <span class="plus">+</span><br><br>
            <button class="btn btn-add" id="{{product.id}}">Замовити</button>
        </form>
    </div>
    <div class="about-product">
        <p class="about-header">Опис:</p>
        <p class="about-text">{{product.description}}</p>
    </div>
</div>

