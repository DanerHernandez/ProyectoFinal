<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $detallePedido->id }}</p>
</div>

<!-- Producto Id Field -->
<div class="form-group">
    {!! Form::label('producto_id', 'Producto Id:') !!}
    <p>{{ $detallePedido->producto_id }}</p>
</div>

<!-- Pedido Id Field -->
<div class="form-group">
    {!! Form::label('pedido_id', 'Pedido Id:') !!}
    <p>{{ $detallePedido->pedido_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $detallePedido->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $detallePedido->updated_at }}</p>
</div>

