@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($singers as $singer)
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $singer->name }}</h4>
                            <h6 class="card-text">{{ $singer->surname }}</h6>
                            <p class="card-text">{{ $singer->birth_date }}</p>
                            <p class="card-text">{{ $singer->record_company }}</p>
                            <p class="card-text">{{ $singer->genre}}</p>
                            <p class="card-text">{{ $singer->updated_at}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
