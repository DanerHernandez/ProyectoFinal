<div class="table-responsive">
    <table class="table" id="existencias-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Producto Id</th>
        <th>Proveedor Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($existencias as $existencias)
            <tr>
                <td>{{ $existencias->nombre }}</td>
            <td>{{ $existencias->producto_id }}</td>
            <td>{{ $existencias->proveedor_id }}</td>
                <td>
                    {!! Form::open(['route' => ['existencias.destroy', $existencias->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('existencias.show', [$existencias->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('existencias.edit', [$existencias->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
