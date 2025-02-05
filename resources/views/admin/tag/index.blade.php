@extends('layouts.admin.admin')
@section('header')
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6"><h3 class="mb-0">Теги</h3></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Панель администратора</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Теги</li>
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
                <a href="{{ route('admin.tag.create') }}" class="btn btn-primary">
                    Создать тег
                </a>
            </div>
            <div class="mt-3">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Наименование</th>
                        <th colspan="2">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tags as $tag)
                        <tr class="align-middle">
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->title }}</td>
                            <td>
                                <div class="btn-group mb-2">
                                    <a href="{{ route('admin.tag.show', $tag->id) }}" type="button" class="btn btn-outline-secondary">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.tag.edit', $tag->id) }}" type="button" class="btn btn-outline-primary">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <form action="{{ route('admin.tag.delete', $tag->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" type="button" class="btn btn-outline-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
