@extends('layouts.app')

@section('content')
    @if(Auth::check())
        {{-- <div class="center jumbotron">
            <div class="text-center">
                <h1>Niziu Fan Siteにログインしました</h1>
            </div>
        </div> --}}
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Niziu Fan Siteへようこそ</h1>
                <!--ユーザ登録ページへのリンク-->
                <p class="mt-2">新規登録はこちら {!! link_to_route('signup.get', '新規登録') !!}</p>
            </div>
        </div>
    @endif

    <!-- Background image -->
    <div class="p-5 text-center bg-image" style="background-image: url(/img/banner.jpg);height: 400px;">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
            <h1 class="mb-3">Niziuファンの為の交流サイトです。</h1>
            {{-- <h4 class="mb-3">Subheading</h4>
            <a class="btn btn-outline-light btn-lg" href="#!" role="button">Call to action</a> --}}
        </div>
        </div>
    </div>
    </div>
@endsection
