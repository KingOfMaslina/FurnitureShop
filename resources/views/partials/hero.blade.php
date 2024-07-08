<section class="main-wrapper__section hero">
    <div class="container hero__container">
        <article class="hero__card">
            @foreach($texts as $text)
                @if($text->id == 2)
                    @break
                @endif
            <div class="hero__preview">
                <img src="{{Storage::url($text->image)}}" alt="Мебель" class="hero__preview-img">
            </div>
            <div class="hero__content">
                <a href="#!" title="The Impact of Technology on the Workplace: How Technology is Changing"
                    class="hero__detail">
                    <h2 class="hero__detail-title">{{$text->text}}
                    </h2>
                </a>
            </div>
            @endforeach
        </article>
    </div>
</section>
