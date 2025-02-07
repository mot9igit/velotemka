@extends('layouts.personal.personal')
@section('header')
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6"><h3 class="mb-0">Редактирование комментария</h3></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="{{ route('personal.main.index') }}">Панель администратора</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('personal.comment.index') }}">Комментарии</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Редактирование</li>
                </ol>
            </div>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
@endsection
@section('content')
    <div class="card card-primary card-outline mb-4">
        <form action="{{ route('personal.comment.update', $comment->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">Редактирование комментария</div></div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                <div class="mb-3">
                    <label for="message" class="form-label">Контент</label>
                    <textarea class="text-editor" name="message" id="message">{{ $comment->message }}</textarea>
                    <div id="titleHelp" class="form-text">
                        Комментарий
                    </div>
                </div>
                @error('message')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <!--end::Body-->
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Редактировать комментарий</button>
            </div>
        </form>
    </div>
@endsection
