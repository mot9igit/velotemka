@extends('layouts.admin.admin')
@section('header')
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6"><h3 class="mb-0">Создание поста</h3></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Панель администратора</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Посты</a></li>
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
        <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">Создание нового поста</div></div>
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
                        Описание поста
                    </div>
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Категория</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == old('category_id') ? 'selected' : '' }}
                            >{{ $category->title }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="text-danger">Это поле обязательно для заполнения!</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tags" class="form-label">Теги</label>
                    <select class="custom-select form-control" name="tag_ids[]" multiple="multiple">
                        @foreach($tags as $tag)
                            <option
                                {{ (is_array( old('tag_ids') ) && in_array($tag->id, old('tag_ids'))) ? 'selected' : '' }}
                                value="{{ $tag->id }}">{{ $tag->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <input type="file" name="image_preview" class="form-control" id="image_preview">
                    <label class="input-group-text" for="image_preview">Превью поста</label>
                </div>
                <div class="input-group mb-3">
                    <input type="file" name="image" class="form-control" id="preview_image">
                    <label class="input-group-text" for="image">Изображение поста</label>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Контент</label>
                    <textarea class="text-editor" name="content" id="content" aria-describedby="emailHelp"></textarea>
                    <div id="titleHelp" class="form-text">
                        Контент поста
                    </div>
                </div>
            </div>
            <!--end::Body-->
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Создать пост</button>
            </div>
        </form>
    </div>
@endsection
