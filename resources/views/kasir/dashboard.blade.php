@extends('layouts.master')

@section('title')
    Статистика
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Статистика</li>
@endsection

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-body text-center">
                <h1>ДОБРО ПОЖАЛОВАТЬ,</h1>
                <h2>Вы вошли в систему как КАССИР</h2>
                <br><br>
                <a href="{{ route('transaksi.baru') }}" class="btn btn-success btn-lg">Новая транзакция</a>
                <br><br><br>
            </div>
        </div>
    </div>
</div><!-- visit "codeastro" for more projects! -->
<!-- /.row (main row) -->
@endsection