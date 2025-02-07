@extends('layouts.personal.personal')

@section('content')
    @extends('layouts.personal.personal')

    @section('content')
        <div class="card">
            <div class="card-body">
                <div class="mt-3">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th>Текст</th>
                            <th colspan="2">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $comment)
                            <tr class="align-middle">
                                <td>{{ $comment->id }}</td>
                                <td>{{ $comment->message }}</td>
                                <td>
                                    <div class="btn-group mb-2">
                                        <a href="{{ route("personal.comment.edit", $comment->id) }}" type="button" class="btn btn-outline-secondary">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <form action="{{ route("personal.comment.delete", $comment->id) }}" method="POST">
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

@endsection
