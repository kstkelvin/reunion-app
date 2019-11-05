@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ $sala->nome }}</div>
          <div class="card-body">
            <a href="/salas/{{ $sala->id }}/editar">{{ __('Editar') }}</a>
            <button form="delete_sala" formmethod="post">{{ __('Excluir') }}</button>
            <form action="/salas/{{ $sala->id }}/excluir" id="delete_sala" method="POST">
              {{csrf_field()}}
              <input type="hidden" name="id" value="{{$sala->id}}" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
