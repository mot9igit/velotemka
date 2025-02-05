@extends('layouts.admin.admin')
@section('header')
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6"><h3 class="mb-0">Создание категории</h3></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Панель администратора</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Категории</a></li>
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
        <form action="{{ route('admin.category.store') }}" method="POST">
            @csrf
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">Создание новой категории</div></div>
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
                <div class="mb-3">
                    <label for="description" class="form-label">Описание</label>
                    <textarea class="form-control" name="description" id="description" aria-describedby="descriptionHelp"></textarea>
                    <div id="descriptionHelp" class="form-text">
                        Описание категории
                    </div>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Контент</label>
                    <textarea class="form-control" name="content" id="content" aria-describedby="emailHelp"></textarea>
                    <div id="titleHelp" class="form-text">
                        Контент категории
                    </div>
                </div>
            </div>
            <!--end::Body-->
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Создать категорию</button>
            </div>
        </form>
    </div>
@endsection
