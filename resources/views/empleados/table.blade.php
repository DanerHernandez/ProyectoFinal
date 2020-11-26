<div class="table-responsive">
    <table class="table" id="empleados-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($empleados as $empleados)
            <tr>
                <td>{{ $empleados->nombre }}</td>
            <td>{{ $empleados->direccion }}</td>
            <td>{{ $empleados->telefono }}</td>
                <td>
                    {!! Form::open(['route' => ['empleados.destroy', $empleados->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('empleados.show', [$empleados->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('empleados.edit', [$empleados->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
