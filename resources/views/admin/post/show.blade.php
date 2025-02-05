@extends('layouts.admin.admin')
@section('header')
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6"><h3 class="mb-0">{{ $post->title }}</h3></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Панель администратора</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Посты</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                </ol>
            </div>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-end">
                <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-primary">
                    Редактировать пост
                </a>
            </div>
            <div class="mt-3">
                <table class="table table-bordered">
                    <tbody>
                    <tr class="align-middle">
                        <td>ID</td>
                        <td>{{ $post->id }}</td>
                    </tr>
                    <tr class="align-middle">
                        <td>Заголовок</td>
                        <td>{{ $post->title }}</td>
                    </tr>
                    <tr class="align-middle">
                        <td>Описание</td>
                        <td>{{ $post->description }}</td>
                    </tr>
                    <tr class="align-middle">
                        <td>Контент</td>
                        <td>{{ $post->content }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
