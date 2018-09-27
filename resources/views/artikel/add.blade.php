@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Artikell') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('art.store') }}" aria-label="{{ __('Tambah Artikel') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Judul') }}</label>

                            <div class="col-md-6">
                                <input id="judul" type="text" class="form-control{{ $errors->has('judul') ? ' is-invalid' : '' }}" name="judulartikel" value="{{ old('judul') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Isi') }}</label>

                            <div class="col-md-6">
                                <input id="isi" type="text" class="form-control{{ $errors->has('isi') ? ' is-invalid' : '' }}" name="isiartikel" value="{{ old('isi') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Gambar') }}</label>

                            <div class="col-md-6">
                                <input id="gambar" type="file" class="form-control{{ $errors->has('gambar') ? ' is-invalid' : '' }}" name="gambar" value="{{ old('gambar') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
