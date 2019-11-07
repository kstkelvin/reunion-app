@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Suas Salas</div>
          <div class="card-body">
            @if($salas == null)
              <p>Você não alocou nenhuma sala.</p>
            @else
              @foreach ($salas as $sala)
                <p class="col-md-4 col-form-label text-md-right">{{$sala->nome}}: {{$sala->hora}}</p>
                <button form="delete_reserva" formmethod="post">{{ __('Cancelar') }}</button>
                <form action="#" id="delete_reserva" method="POST">
                  {{csrf_field()}}
                  <input type="hidden" name="id" value="{{$sala->id}}" />
                </form>
              @endforeach
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
