@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Lista de Salas</div>
          <div class="card-body">
            @foreach ($salas as $sala)
              <a href="/salas/{{$sala->id}}">{{ $sala->nome }}</a>
              <br><br>
            @endforeach
            <a href="salas/adicionar">{{ __('Adicionar') }}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
