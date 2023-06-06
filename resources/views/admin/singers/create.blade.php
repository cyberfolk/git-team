@extends('layouts.app')

@section('content')
    <div class="container">

        {{-- @include('partials.validation_errors') --}}

        <h5 class="text-uppercase text-secondary my-4">Add a new Singer</h5>
        <form action="{{ route('singers.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" required
                    value="{{ old('name') }}" name="name" id="name"
                    class="form-control @error('name') is-invalid @enderror"
                    placeholder="singer name here"
                    aria-describedby="nameHelper">
                <small id="nameHelper" class="text-secondary @error('name') text-danger @enderror">
                    Type the name of the singer
                </small>
            </div>
            {{-- /.name --}}
            <div class="mb-3">
                <label for="surname" class="form-label">Surname</label>
                <input type="text"
                    value="{{ old('surname') }}" name="surname" id="surname"
                    class="form-control @error('surname') is-invalid @enderror"
                    placeholder="singer surname here"
                    aria-describedby="surnameHelper">
                <small id="surnameHelper"
                    class="text-secondary @error('surname') text-danger @enderror">
                    Type the source image of the singer
                </small>
            </div>
            {{-- /.surname --}}
            <div class="mb-3">
                <label for="birth_date" class="form-label">Birth date</label>
                <input type="date"
                    value="{{ old('birth_date') }}" name="birth_date" id="birth_date"
                    class="form-control @error('birth_date') is-invalid @enderror"
                    placeholder="singer birth_date here"
                    aria-describedby="birth_dateHelper">
                <small id="birth_dateHelper" class="text-secondary @error('birth_date') text-danger @enderror">
                    Type the birth date of the singer
                </small>
            </div>
            {{-- /.birth_date --}}
            <div class="mb-3">
                <label for="record_company" class="form-label">Genre</label>
                <input type="text"
                    value="{{ old('genre') }}" name="genre" id="genre"
                    class="form-control @error('genre') is-invalid @enderror"
                    placeholder="singer genre here"
                    aria-describedby="genreHelper">
                <small id="genreHelper"
                    class="text-secondary @error('genre') text-danger @enderror">
                    Type the genre of the singer
                </small>
            </div>
            {{-- /.genre --}}
            <div class="mb-3">
                <label for="record_company" class="form-label">Record company</label>
                <input type="text"
                    value="{{ old('record_company') }}" name="record_company" id="record_company"
                    class="form-control @error('record_company') is-invalid @enderror"
                    placeholder="singer record_company here"
                    aria-describedby="record_companyHelper">
                <small id="record_companyHelper"
                    class="text-secondary @error('record_company') text-danger @enderror">
                    Type the record company of the singer
                </small>
            </div>
            {{-- /.record_company --}}
            <button type="submit" class="btn btn-dark w-100 my-4">Save</button>
        </form>
    </div>
@endsection
