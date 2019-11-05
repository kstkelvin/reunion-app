@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Editar Sala') }}</div>

          <div class="card-body">
            <form method="POST" action="/salas/{{$sala->id}}">
              @csrf

              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome da Sala') }}</label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>

                  @error('nome')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Editar') }}
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
