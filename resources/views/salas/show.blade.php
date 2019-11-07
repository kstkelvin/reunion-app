@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">

          <div class="card-header">{{ $sala->nome }}
          </div>

          <div class="card-body">
            <a href="/salas/{{ $sala->id }}/editar">{{ __('Editar Sala') }}</a>

            <button form="delete_sala" formmethod="post">{{ __('Excluir Sala') }}</button>

            <form action="/salas/{{ $sala->id }}/excluir" id="delete_sala" method="POST">
              {{csrf_field()}}
              <input type="hidden" name="id" value="{{$sala->id}}" />
            </form>

            @foreach ($horarios as $horario)
              <p class="col-md-4 col-form-label text-md-right">{{$horario->hora}}</p>
              @if (!$horario->ocupado)
                @foreach($reservas as $reserva)
                  @if($reserva->hora == $horario->hora)
                    {{$horario->hora = null}}
                  @endif
                @endforeach
                @if($horario->hora != null)
                  <form method="POST" action="/reservas">
                    {{csrf_field()}}
                    <div class="form-group row mb-0" >
                      <div class="col-md-6 offset-md-4">
                        <input type="hidden" name="id" value="{{$horario->id}}"></input>
                        <button type="submit" class="btn btn-primary" name="user_id" value="{{Auth::User()->id}}">
                          {{ __('Reservar') }}
                        </button>
                      </div>
                    </div>
                  </form>
                @else
                  <p>COINCIDE COM OUTRA ALOCAÇÃO</p>
                @endif
              @elseif ($horario->user_id == Auth::User()->id)
                <button form="delete_reserva" formmethod="post">{{ __('Cancelar') }}</button>
                <form action="/reservas/{{ $horario->id }}/excluir" id="delete_reserva" method="POST">
                  {{csrf_field()}}
                  <input type="hidden" name="id" value="{{$horario->id}}" />
                </form>
              @else
                <p>INDISPONÍVEL</p>
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
