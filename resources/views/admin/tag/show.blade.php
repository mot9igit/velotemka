@extends('layouts.admin.admin')
@section('header')
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6"><h3 class="mb-0">{{ $tag->title }}</h3></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Панель администратора</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.tag.index') }}">Теги</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $tag->title }}</li>
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
                <a href="{{ route('admin.tag.edit', $tag->id) }}" class="btn btn-primary">
                    Редактировать тег
                </a>
            </div>
            <div class="mt-3">
                <table class="table table-bordered">
                    <tbody>
                    <tr class="align-middle">
                        <td>ID</td>
                        <td>{{ $tag->id }}</td>
                    </tr>
                    <tr class="align-middle">
                        <td>Заголовок</td>
                        <td>{{ $tag->title }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
