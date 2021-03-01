@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h2>ログイン</h2>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'login.post']) !!}

                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::text('password', old('password'), ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('ログイン', ['class' => 'btn btn-primary col d-flex justify-content-center']) !!}

            {!! Form::close() !!}

            <!--ユーザ登録ページへのリンク-->
            <p class="mt-2">新規登録はこちら {!! link_to_route('signup.get', '新規登録') !!}</p>

        </div>

    </div>
@endsection
