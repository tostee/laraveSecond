    @extends('dashboard.generals.baselogin')
    @section('main')
    <div class="container mt-3">
        
            @if (Session::has('error'))
            <div class="alert alert-danger">
                {{Session::get('error')}}
            </div> 
            @endif
       <div class="row justify-content-center">
        <div class="col-12 col-md-4">
        <form method="POST" action="{{route('login')}}">
            @csrf
                <div class="form-group">
                <label for="">User</label>
                <input class="form-control" type="text" name="user" placeholder="User">
                </div>
                <div class="form-group">
                <label for="">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Put Your password">
                </div>
            <button class="btn btn-primary mt-3 pt-1">Send</button>
        </form>
    </div>
    </div>
    </div>
        @endsection
 