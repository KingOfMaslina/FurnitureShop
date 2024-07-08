<section class = "main-wrapper__section blogs">
    <div class = "container blogs__container">
        <div class="blogs__headline">
            <h2 class="blogs__title">Блог</h2>
        </div>
        <ul class = "blogs__list">
            @foreach($blogs as $blog)
            <li class = "blogs__item">
                <article class="blogs__card">
                    <a href="{{ route('frontend.blog_card', $blog->id) }}" class="blogs__detail">
                        <h3 class="blogs__name">{{$blog->title}}
                        </h3>
                    </a>
                    <div class="blogs__preview">
                        <img src="{{Storage::url($blog->image)}}" alt="Берег моря" class="blogs__preview-img">
                    </div>

                </article>
            </li>
            @endforeach
        </ul>
    </div>
</section>
