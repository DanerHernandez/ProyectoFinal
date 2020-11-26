<!-- Producto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('producto_id', 'Producto Id:') !!}
    {!! Form::text('producto_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Cliente Id:') !!}
    {!! Form::text('cliente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Empleado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empleado_id', 'Empleado Id:') !!}
    {!! Form::text('empleado_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pedidos.index') }}" class="btn btn-default">Cancel</a>
</div>
