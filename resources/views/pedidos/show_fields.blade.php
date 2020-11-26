<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $pedidos->id }}</p>
</div>

<!-- Producto Id Field -->
<div class="form-group">
    {!! Form::label('producto_id', 'Producto Id:') !!}
    <p>{{ $pedidos->producto_id }}</p>
</div>

<!-- Cliente Id Field -->
<div class="form-group">
    {!! Form::label('cliente_id', 'Cliente Id:') !!}
    <p>{{ $pedidos->cliente_id }}</p>
</div>

<!-- Empleado Id Field -->
<div class="form-group">
    {!! Form::label('empleado_id', 'Empleado Id:') !!}
    <p>{{ $pedidos->empleado_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pedidos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pedidos->updated_at }}</p>
</div>

