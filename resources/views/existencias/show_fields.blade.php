<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $existencias->id }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $existencias->nombre }}</p>
</div>

<!-- Producto Id Field -->
<div class="form-group">
    {!! Form::label('producto_id', 'Producto Id:') !!}
    <p>{{ $existencias->producto_id }}</p>
</div>

<!-- Proveedor Id Field -->
<div class="form-group">
    {!! Form::label('proveedor_id', 'Proveedor Id:') !!}
    <p>{{ $existencias->proveedor_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $existencias->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $existencias->updated_at }}</p>
</div>

