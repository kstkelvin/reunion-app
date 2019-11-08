@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <div class="d-flex mb-0">
              <div class="mr-auto p-2">
                <div class="mb-0" >
                    <p>{{ $sala->nome }}</p>
                </div>
              </div>
              <div class="p-2">
                <div class="mb-0" >
                    <a class="btn btn-success btn-sm" href="/salas/{{ $sala->id }}/editar">{{ __('Editar Sala') }}</a>
                </div>
              </div>
              <div class="p-2">
                <div class="mb-0" >
                    <button class="btn btn-sm btn-danger" form="delete_sala" formmethod="post">{{ __('Excluir Sala') }}</button>
                    <form action="/salas/{{ $sala->id }}/excluir" id="delete_sala" method="POST">
                      {{csrf_field()}}
                      <input type="hidden" name="id" value="{{$sala->id}}" />
                    </form>
                </div>
              </div>
            </div>
          </div>

          <div class="card-body">
            <div id="dia-reserva">
              <reserva></reserva>
            </div>
            <table class="table-sm table table-borderless">
              <thead>

              </thead>
              <tbody>
                @foreach ($horarios as $horario)
                  <tr>
                    <td>
                      <p class="col-md-4 col-form-label text-md-right">{{$horario->hora}}</p>
                    </td>
                    <td class="text-md-right">
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
                          <div class="form-group row mb-0" >
                            <div class="col-md-6 offset-md-4">
                              <p>HORA COINCIDE</p>
                            </div>
                          </div>
                        @endif
                      @elseif ($horario->user_id == Auth::User()->id)
                        <div class="form-group row mb-0" >
                          <div class="col-md-6 offset-md-4">
                            <button form="delete_reserva" class="btn btn-danger" formmethod="post">{{ __('Cancelar') }}</button>
                          </div>
                        </div>
                      @else
                        <div class="form-group row mb-0" >
                          <div class="col-md-6 offset-md-4">
                            <p>INDISPONÍVEL</p>
                          </div>
                        </div>
                      @endif
                    </td>
                  </tr>
                  <form action="/reservas/{{ $horario->id }}/excluir" id="delete_reserva" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$horario->id}}" />
                  </form>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
