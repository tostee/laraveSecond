<nav>
<a class="btn btn-light" href="javascript:void(0)" onclick="document.getElementById('logout').submit();">Logout</a>
<form style="display: none" action="{{route('logout')}}" method="POST" id="logout">
@csrf
</form>

</nav>

  
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        @if ($breadcrumb == 'bHome')
        <li class="breadcrumb-item active" aria-current="page">Home</li>
        @else
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        @endif
        @if ($breadcrumb == 'bUsers')
        <li class="breadcrumb-item active" aria-current="page">User</li>
        @else
        <li class="breadcrumb-item"><a href="{{route('users.index')}}">Users</a></li>
        @endif
        @if ($breadcrumb == 'bTypes')
        <li class="breadcrumb-item active" aria-current="page">User Types</li>
        @else
        <li class="breadcrumb-item"><a href="{{route('types.index')}}" >User Types</a></li>
        @endif
        @if ($breadcrumb == 'bRoles')
        <li class="breadcrumb-item active" aria-current="page">Roles</li>
        @else
        <li class="breadcrumb-item"><a href="{{route('roles.save')}}">Roles</a></li>
        @endif
    
      
    </ol>
  </nav>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
    
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#">Features</a>
          <a class="nav-link" href="#">Pricing</a>
          <a class="nav-link" href="#">Pricing</a>
          
        </div>
      </div>
    </div>
  </nav>
 