<section class = "main-wrapper__section fullblog">
    <div class = "container fullblog__container">
       <div class = "fullblog__header">
        <h2 class="fullblog__title">{{$blogs->title}}</h2>
       </div>
       <img src="{{Storage::url($blogs->image)}}" alt="Блог"  width="700"  class="fullblog__img">
       <p class="fullblog__text">{{$blogs->text}}</p>
    </div>
</section>
