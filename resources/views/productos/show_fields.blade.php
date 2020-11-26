<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $productos->id }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $productos->nombre }}</p>
</div>

<!-- Marca Field -->
<div class="form-group">
    {!! Form::label('marca', 'Marca:') !!}
    <p>{{ $productos->marca }}</p>
</div>

<!-- Precio Field -->
<div class="form-group">
    {!! Form::label('precio', 'Precio:') !!}
    <p>{{ $productos->precio }}</p>
</div>

<!-- Cantidad Field -->
<div class="form-group">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $productos->cantidad }}</p>
</div>

<!-- Categoria Id Field -->
<div class="form-group">
    {!! Form::label('categoria_id', 'Categoria Id:') !!}
    <p>{{ $productos->categoria_id }}</p>
</div>

<!-- Proveedor Id Field -->
<div class="form-group">
    {!! Form::label('proveedor_id', 'Proveedor Id:') !!}
    <p>{{ $productos->proveedor_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $productos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $productos->updated_at }}</p>
</div>

