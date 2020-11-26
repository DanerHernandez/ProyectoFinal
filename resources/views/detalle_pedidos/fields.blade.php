<!-- Producto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('producto_id', 'Producto Id:') !!}
    {!! Form::text('producto_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Pedido Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pedido_id', 'Pedido Id:') !!}
    {!! Form::text('pedido_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('detallePedidos.index') }}" class="btn btn-default">Cancel</a>
</div>
