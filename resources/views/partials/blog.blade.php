<section class="main-wrapper__section blog">
    <div class="container blog__container">
        <div class="blog__headline">
            <h2 class="blog__title">Блог</h2>
        </div>
        <ul class="blog__list">
            @foreach($blogs as $blog)
                @if($blog->id == 4)
                    @break
                @endif
            <li class="blog__item">
                <article class="blog__card">
                    <div class="blog__preview">
                        <img src="{{Storage::url($blog->image)}}" alt="Берег моря" class="blog__preview-img">
                    </div>
                    <a href="#!" class="blog__detail">
                        <h3 class="blog__name">{{$blog->title}}
                        </h3>
                    </a>
                </article>
            </li>
            @endforeach
        </ul>
    </div>
</section>
