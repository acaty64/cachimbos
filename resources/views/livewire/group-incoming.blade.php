<div>
    <div class="card">
        <div class="card-body">
            @if( $status == 'index')
                <div class="row">
                    <div class="col">
                        <span class="float-left">
                            <h1>Grupo de Ingresantes</h1>
                        </span>
                        {{-- <span class="float-right">
                            @can('admin.document.create')
                            <button id= "btn-create" class="btn-success btn-lg float-right" wire:click="setStatus('create')">Agregar</button>
                            @endcan
                        </span> --}}
                    </div>
                </div>
                <div class="container">
                    {{-- 'alumno_nombres', 'alumno', 'fac', 'car', 'mod', 'postulante' --}}
                    <table class="table table-striped table-hover">
                        <thead>
                            <th>Id</th>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Fac</th>
                            <th>Car</th>
                            <th>Mod</th>
                            <th>Turno</th>
                            <th>Sede</th>
                            <th>Grupo</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($incomings as $incoming)
                            <tr>
                                <td>{{$incoming->id}}</td>
                                <td>{{$incoming->alumno}}</td>
                                <td>{{$incoming->alumno_nombres}}</td>
                                <td>{{$incoming->fac}}</td>
                                <td>{{$incoming->car}}</td>
                                <td>{{$incoming->mod}}</td>
                                <td>{{$incoming->turno->turno}}</td>
                                <td>{{$incoming->sd}}</td>
                                <td>{{$incoming->group}}</td>
                                <td>
                                    {{-- @can('admin.document.edit')
                                    <a id="btnEdit{{ $document->id }}" class='btn btn-primary me-md-2' wire:click="setStatus('edit', {{ $document->id }})">Editar</a>
                                    @endcan
                                    @can('admin.document.destroy')
                                    <a id="btnDestroy{{ $document->id }}" class='btn btn-danger' wire:click="setStatus('destroy', {{ $document->id }})">Borrar</a>
                                    @endcan --}}
                                </td>
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>
                    <div class="px-6 py-3">{{ $incomings->links() }}</div>
                </div>
            @endif

        </div>
    </div>
</div>
