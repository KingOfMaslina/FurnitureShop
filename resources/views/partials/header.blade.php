<header class="application__header header" id="header">
  <div class="container header__container">
    <a href="{{url('/')}}" title="Главная" class="header__logo logo">
      <img src="{{asset("img/logo.png")}}" alt="Логотип сайта MetaBlog" height="125" width="125" class="logo__brand">
    </a>
    <nav class="header__navbar navbar">
      <menu class="navbar__menu">
        <li class="navbar__item"><a href="{{url('/')}}" title="Home" class="navbar__link">Home</a></li>
        <li class="navbar__item"><a href="{{ url('/userblog') }}" title="Blog" class="navbar__link">Blog</a></li>
        <li class="navbar__item"><a href="{{ url('/userprod') }}" title="Products" class="navbar__link">Products</a></li>
      </menu>
    </nav>
    <div class="header__action">
      <button class = "header__actions-login">Login</button>
      <button class = "header__actions-regist">Register</button>
    </div>
  </div>
</header>
