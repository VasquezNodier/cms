<div class="sidebar shadow">
    <div class="section-top shadow px-3">
        <div class="logo pt-3">
            <h1 class="text-center">LOGOTIPO</h1>
        </div>
        <div class="user py-3">
            <span class="subtitle">Hola:</span>
            <div class="name">
                {{ Auth::user()->name }} {{ Auth::user()->surname }}
                <a href="{{ url('logout') }}" data-toggle="tooltip" data-placement="top" title="Salir">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
            <div class="name">{{ Auth::user()->email }}</div>
        </div>
    </div>
    <div class="main d-block mt-2">
      <ul>
        <li>
            <a class="d-block p-2" href="{{ url('admin') }}"><i class="fas fa-home"></i> Dashboard</a>
        </li>
        <li>
            <a class="d-block p-2" href="{{ url('admin/products') }}"><i class="fas fa-boxes"></i> Products</a>
        </li>
        <li>
            <a class="d-block p-2" href="{{ url('admin/users') }}"><i class="fa-solid fa-users"></i> Users</a>
        </li>
      </ul>
    </div>
</div>
