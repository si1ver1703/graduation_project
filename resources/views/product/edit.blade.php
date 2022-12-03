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
                        <li class="breadcrumb-item active">Категории</li>
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
                <form action="{{route('product.update', $product->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Название" value="{{$product->title}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="description" class="form-control" placeholder="Описание" value="{{$product->description}}">
                    </div>
                    <div class="form-group">
                        <input type="number" name="price" class="form-control" placeholder="Цена" value="{{$product->price}}">
                    </div>
                    <div class="form-group">
                        <input type="number" name="amount" class="form-control" placeholder="Колличество" value="{{$product->amount}}">
                    </div>

                    <div class="form-group">
                        <img src="{{asset("storage/".$product->preview_image)}}" height="250" width="250">
                        <label for="exampleInputFile">Выберите фотографию</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="preview_image">
                                <label class="custom-file-label" for="preview_image">Выбрать фотографию</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Категория</label>
                        <select class="form-control" name="category_id" value="{{$product->category_id}}>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Редактировать">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
