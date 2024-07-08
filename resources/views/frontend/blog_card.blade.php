<!DOCTYPE html>
<html lang="ru">
@include('partials.head')
<body class="application" id="app">
<div class="application__container" id="app-container">
    @include('partials.header')
    <main class="application__main main-wrapper" id="main-wrapper">
        <div class="main-wrapper__content">
            @include('partials.blog_card')
        </div>
    </main>
    @include('partials.footer')
</div>
</body>
</html>

