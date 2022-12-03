@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Админ панель</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Пользователи</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form action="{{route('user.store')}}" method="post">
                @csrf
                    <div class="form-group">
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="password" value="{{old('password')}}" class="form-control" placeholder="Пароль">
                    </div>
                    <div class="form-group">
                        <input type="text" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control" placeholder="Подтвредите пароль">
                    </div>
                    <div class="form-group">
                        <input type="text" name="surname" value="{{old('surname')}}" class="form-control" placeholder="Фамилия">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" value="{{old('phone')}}" class="form-control" placeholder="Номер телефона">
                    </div>
                    <div class="form-group">
                        <input type="text" name="city" value="{{old('city')}}" class="form-control" placeholder="Город">
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" value="{{old('address')}}" class="form-control" placeholder="Адресс">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
