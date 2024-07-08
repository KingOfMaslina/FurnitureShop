<section class = "main-wrapper__section fullproduct">
    <div class = "container fullproduct__container">
       <div class = "fullproduct__header">
       </div>
       <div class = "fullproduct__info">
        <img src="{{Storage::url($products->image)}}" alt="Блог"  width="500"  class="fulproduct__img">
        <div class = "fullproduct__info-dop">
        <h2 class="fullproduct__title">{{$products->name}}</h2>
        <h1 class="fullproduct__price">{{$products->price}} Р</h1>

        <button class="products__btn">
            <i class='bx bx-cart' ></i> <p>В корзину</p>
          </button>
        </div>
       </div>
        <h2 class="fullproduct__subtitle">Описание</h2>
        <p class="fullproduct__text">{{$products->description}}</p>
             <h2 class="fullproduct__subtitle">Общие характерисктики</h2>
             <ul class = "fullproduct__detail">
                <li class = "fullproduct__detail-item">
                    <p class = "fullproduct__detail-name">Коллекция: {{$products->collection}}</p>
                    <p class = "fullproduct__detail-name">Производитель: {{$products->manufacturer}}</p>
                    <p class = "fullproduct__detail-name">Гарантия: {{$products->guarantee}}</p>
                    <p class = "fullproduct__detail-name">Срок службы: {{$products->expire}}</p>
                    <p class = "fullproduct__detail-name">Размеры дивана (ШхВхГ): {{$products->size}}</p>
                    <p class = "fullproduct__detail-name">Обшивка: {{$products->sheathing}}</p>
                    <p class = "fullproduct__detail-name">Цвет: {{$products->color}}</p>
                </li>
             </ul>
    </div>
</section>
