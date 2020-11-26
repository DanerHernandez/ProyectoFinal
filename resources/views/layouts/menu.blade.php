<li class="{{ Request::is('proveedores*') ? 'active' : '' }}">
    <a href="{{ route('proveedores.index') }}"><i class="fa fa-edit"></i><span>Proveedores</span></a>
</li>

<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{{ route('categorias.index') }}"><i class="fa fa-edit"></i><span>Categorias</span></a>
</li>

<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{{ route('productos.index') }}"><i class="fa fa-edit"></i><span>Productos</span></a>
</li>

<li class="{{ Request::is('existencias*') ? 'active' : '' }}">
    <a href="{{ route('existencias.index') }}"><i class="fa fa-edit"></i><span>Existencias</span></a>
</li>

<li class="{{ Request::is('empleados*') ? 'active' : '' }}">
    <a href="{{ route('empleados.index') }}"><i class="fa fa-edit"></i><span>Empleados</span></a>
</li>

<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{{ route('clientes.index') }}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('locals*') ? 'active' : '' }}">
    <a href="{{ route('locals.index') }}"><i class="fa fa-edit"></i><span>Locals</span></a>
</li>


<li class="{{ Request::is('pedidos*') ? 'active' : '' }}">
    <a href="{{ route('pedidos.index') }}"><i class="fa fa-edit"></i><span>Pedidos</span></a>
</li>


<li class="{{ Request::is('detallePedidos*') ? 'active' : '' }}">
    <a href="{{ route('detallePedidos.index') }}"><i class="fa fa-edit"></i><span>Detalle Pedidos</span></a>
</li>

