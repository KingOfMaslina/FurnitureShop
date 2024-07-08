<section class = "main-wrapper__section products">
    <div class = "container products__container">
        <div class = "products__filter">
            <p class = "products__filter-subtitle">Категории</p>
            <p class = "products__filter-subtitle">Цена</p>
            <p class = "products__filter-subtitle">Коллекция</p>
            <p class = "products__filter-subtitle">Цвет</p>
        </div>
        <ul class = "products__list">
            @foreach($products as $product)
            <li class = "products__item">
                <article class="products__card">
                    <div class="products__preview">
                        <img src="{{Storage::url($product->image)}}" alt="Товар" class="products__preview-img">
                    </div>
                    <a href="{{ route('frontend.product_full', $product->id) }}" class="products__detail">
                        <h3 class="products__name">{{$product->name}}
                        </h3>
                    </a>
                   <h2 class = "products__price">{{$product->price}}</h2>
                   <button class="products__btn">
                    <i class='bx bx-cart' ></i> <p>В корзину</p>
                  </button>
                </article>
            </li>
            @endforeach
        </ul>
    </div>
</section>
