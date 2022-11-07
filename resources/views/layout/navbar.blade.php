<nav class="navbar navbar-expand-lg" style="background-color: #cfc0ff ;">
    <div class="container-fluid container">
        <a class="navbar-brand" href="#" style="color: #F4F1FF;">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('welcome')}}" style="color: #F4F1FF;">Главная</a>
                </li>

                @guest()
                <li class="nav-item">
                    <a class="nav-link" href="{{route('RegPage')}}" style="color: #F4F1FF;">Регистрация</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('AuthPage')}}" style="color: #F4F1FF;">Авторизация</a>
                </li>
                @endguest

                @auth()
                    @if(\Illuminate\Support\Facades\Auth::user()->role==1)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin')}}" style="color: #F4F1FF;">Админ панель</a>
                </li>
                <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #F4F1FF;">
                                Добавить
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('category')}}">Категорию</a></li>
                                <li><a class="dropdown-item" href="{{route('content')}}">Пост</a></li>
                            </ul>
                        </li>

                    @endif
                <li class="nav-item">
                    <a class="nav-link " href="{{route('logout')}}" style="color: #e8e1ff;">Выход</a>
                </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
