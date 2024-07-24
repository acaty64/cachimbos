<div>
    <div class="card">
        <div class="card-body">
            @if( $status == 'index')
                <div class="row">
                    <div class="col">
                        <span class="float-left">
                            <h1>Grupos</h1>
                        </span>
                        {{-- <span class="float-right">
                            @can('admin.document.create')
                            <button id= "btn-create" class="btn-success btn-lg float-right" wire:click="setStatus('create')">Agregar</button>
                            @endcan
                        </span> --}}
                    </div>
                </div>
                <div class="container">
                    <table class="table table-striped table-hover">
                        <thead>
                            <th>Sede</th>
                            <th>Fac</th>
                            <th>Car</th>
                            <th>Turno</th>
                            <th>Cantidad</th>
                            <th>Grupo</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($groups as $group)
                            <tr>
                                <td>{{$group->sd}}</td>
                                <td>{{$group->fac}}</td>
                                <td>{{$group->car}}</td>
                                <td>{{$group->turno}}</td>
                                <td>{{$group->cantidad}}</td>
                                {{-- <td>{{$group->group}}</td> --}}
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
                    <div class="px-6 py-3">{{ $groups->links() }}</div>
                </div>
            @endif

        </div>
    </div>
</div>
