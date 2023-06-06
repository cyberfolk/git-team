@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center py-5">
        <h1 class="fw-bold"> Admin Singers</h1>
        <a href="{{route('singers.create')}}" class="btn btn-dark d-block">
            <i class="fas fa-plus-circle fa-sm fa-fw"></i>
            New Singer
        </a>
    </div>

    <div class="pt-5 row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">Birthdate</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Record_company</th>
                            <th scope="col">Actions</th>

                        </thead>
                        <tbody>
                            @foreach ($singers as $singer)
                            <tr>
                                <th class="align-middle" scope="row">{{ $singer->id }}</th>
                                <td class="align-middle">{{ $singer->name }}</td>
                                <td class="align-middle  d-flex justify-content-end align-items-center gap-3">
                                    {{$singer->surname}}
                                </td>
                                <td class="align-middle">{{ $singer->birth_date }}</td>
                                <td class="align-middle">{{ $singer->genre }}</td>
                                <td class="align-middle">{{ $singer->record_company }}</td>
                                <td class="align-middle">VIEW / EDIT / SHOW</td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection