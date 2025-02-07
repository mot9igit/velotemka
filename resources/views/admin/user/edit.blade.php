@extends('layouts.admin.admin')
@section('header')
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6"><h3 class="mb-0">{{ $user->name }}</h3></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Панель администратора</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Пользователи</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Редактирование {{ $user->name }}</li>
                </ol>
            </div>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
@endsection
@section('content')
    <div class="card card-primary card-outline mb-4">
        <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            @csrf
            @method('PATCH')
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">Редактирование пользователя {{ $user->name }}</div></div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                <div class="mb-3">
                    <label for="title" class="form-label">Наименование</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Выберите роль</label>
                    <select class="form-control" name="role">
                        @foreach($roles as $role_id => $role)
                            <option
                                {{ $role_id == $user->role ? 'selected' : '' }}
                                value="{{ $role_id }}">{{ $role }}</option>
                        @endforeach
                    </select>
                    @error('role')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!--end::Body-->
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Редактировать пользователя</button>
            </div>
        </form>
    </div>
@endsection
