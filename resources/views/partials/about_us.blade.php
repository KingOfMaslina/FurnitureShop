<section class="main-wrapper__section about">
    <div class="container about__container">
        <div class="about__headline">
            <h2 class="about__title">О нас</h2>
        </div>
        <ul class="about__list">
            @foreach($abouts as $about)
                @if($about->id == 5)
                    @break
                @endif
            <li class="about__item">
                <article class="about__card">
                        <h3 class="about__name">{{$about->title}}</h3>
                        <p class = "abour__text">{{$about->text}}</p>
                </article>
            </li>
            @endforeach
        </ul>
    </div>
</section>
