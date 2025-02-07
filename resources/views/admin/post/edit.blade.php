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
                    <li class="breadcrumb-item active" aria-current="page">Редактирование {{ $post->title }}</li>
                </ol>
            </div>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
@endsection
@section('content')
    <div class="card card-primary card-outline mb-4">
        <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">Редактирование поста</div></div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                <div class="mb-3">
                    <label for="title" class="form-label">Наименование</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
                    @error('title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Описание</label>
                    <textarea class="form-control" name="description" id="description">{{ $post->description }}</textarea>
                    <div id="descriptionHelp" class="form-text">
                        Описание поста
                    </div>
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Категория</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == $post->category_id ? 'selected' : '' }}
                            >{{ $category->title }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tags" class="form-label">Теги</label>
                    <select class="custom-select form-control" name="tag_ids[]" multiple="multiple">
                        @foreach($tags as $tag)
                            <option
                                {{ (is_array( $post->tags->pluck('id')->toArray() ) && in_array($tag->id, $post->tags->pluck('id')->toArray())) ? 'selected' : '' }}
                                value="{{ $tag->id }}">{{ $tag->title }}</option>
                        @endforeach
                    </select>
                    @error('tag_ids')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <div class="mb-3">
                        <div class="w-25">
                            <img src="{{ url('storage/' . $post->image_preview) }}" class="w-100" alt=""/>
                        </div>
                    </div>
                    <input type="file" name="image_preview" class="form-control" id="image_preview">
                    <label class="input-group-text" for="image_preview">Превью поста</label>
                    @error('image_preview')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <div class="mb-3">
                        <div class="w-25">
                            <img src="{{ url('storage/' . $post->image) }}" class="w-100" alt=""/>
                        </div>
                    </div>
                    <input type="file" name="image" class="form-control" id="image">
                    <label class="input-group-text" for="image">Изображение поста</label>
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Контент</label>
                    <textarea class="text-editor" name="content" id="content">{{ $post->content }}</textarea>
                    <div id="titleHelp" class="form-text">
                        Контент поста
                    </div>
                </div>
            </div>
            <!--end::Body-->
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Редактировать пост</button>
            </div>
        </form>
    </div>
@endsection
