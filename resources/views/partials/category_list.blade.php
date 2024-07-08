<section class="main-wrapper__section articles">
    <div class="container articles__container">
        <div class="articles__headline">
            <h2 class="articles__title">Категории</h2>
        </div>
        <ul class="articles__list">
           @foreach($categories as $ctg)
            <li class="articles__item">
                <article class="articles__card">
                    <div class="articles__preview">
                        <img src="{{Storage::url($ctg->image)}}" alt="Берег моря" class="articles__preview-img">
                    </div>
                    <a href="{{url('/userprod')}}" class="articles__detail">
                        <h3 class="articles__name">{{$ctg->name}}
                        </h3>
                    </a>
                </article>
            </li>
            @endforeach
        </ul>
    </div>
</section>
