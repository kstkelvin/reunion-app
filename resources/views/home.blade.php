@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Suas Salas</div>
          <div class="card-body">
            <table class="table-sm table table-borderless">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($salas as $sala)
                  <tr>
                    <td>
                      <div class="form-group row mb-0" >
                        <div class="col-md-6 offset-md-4">
                          <p>{{$sala->hora}}</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="form-group row mb-0" >
                        <div class="col-md-6 offset-md-4">
                          <p>{{$sala->nome}}</p>
                        </div>
                      </div>
                    </td>
                    <td class="text-md-right">
                      <div class="form-group row mb-0" >
                        <div class="col-md-6 offset-md-4">
                          <button form="delete_reserva" class="btn btn-outline-danger mb-0" formmethod="post">{{ __('Cancelar') }}</button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <form action="/reservas/{{ $sala->id }}/excluir" id="delete_reserva" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$sala->id}}" />
                  </form>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
