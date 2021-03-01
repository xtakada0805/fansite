<header class="mb-4">
    <nav class="navbar navbar-light" style="background-color: #f9e3fd;">
        <a class="navbar-brand" href="/" ><img src="{{ asset('/img/icon.jpg') }}" height="40" alt="icon" loading="lazy" /></a>
        <div class="dropdown ml-auto">
            @if (Auth::check())
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"href="#"id="navbarDropdown"role="button"data-mdb-toggle="dropdown"aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <button class="dropdown-item" type="button">{!! link_to_route('login', 'マイプロフィール') !!}</a>
                            <button class="dropdown-item" type="button">{!! link_to_route('logout.get', 'ログアウト') !!}</a>
                        </ul>
                    </li>
                </ul>
            @else
                <button id="btnOpenMenu" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    新規登録・ログインはこちら
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="btnOpenMenu">
                    <button class="dropdown-item" type="button">{!! link_to_route('login', 'ログイン') !!}</a>
                    <button class="dropdown-item" type="button">{!! link_to_route('signup.get', '新規登録') !!}</a>
                </div>
            @endif
        </div>
    </nav>
</header>
