@extends('layouts.admin.admin')
@section('header')
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6"><h3 class="mb-0">Создание тега</h3></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Панель администратора</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.tag.index') }}">Теги</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Создание</li>
                </ol>
            </div>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
@endsection
@section('content')
    <div class="card card-primary card-outline mb-4">
        <form action="{{ route('admin.tag.store') }}" method="POST">
            @csrf
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">Создание нового тега</div></div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                <div class="mb-3">
                    <label for="title" class="form-label">Наименование</label>
                    <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp">
                    @error('title')
                        <div class="text-danger">Это поле обязательно для заполнения!</div>
                    @enderror
                </div>
            </div>
            <!--end::Body-->
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Создать тег</button>
            </div>
        </form>
    </div>
@endsection
