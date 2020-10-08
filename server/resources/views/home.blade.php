@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <button type="button" class="btn btn-success" onclick="location.href='/items'">管理票一覧</button>
            <button type="button" class="btn btn-primary" onclick="location.href='/items/create'">台帳登録</button>
        </div>
    </div>
</div>
@endsection