<!DOCTYPE html>
<html>
    <head>
        <title>{{env('APP_NAME')}}</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <form method="POST" action="{{route('login')}}">
            @csrf
            
                @if (Session::has('error'))
                <label for="" style="color: red">{{Session::get('error')}}</label>
                    
                @endif
            
            <div>
                <label for="">User</label>
                <p>
                <input type="text" name="user" placeholder="User">
                </p>
            </div>
            <div>
                <label for="">Password</label>
                <p>
                <input type="password" name="password" placeholder="Put Your password">
                </p>
            </div>
            <button>Send</button>
        </form>
    </body>
</html>