<a href="javascript:void(0)" onclick="document.getElementById('logout').submit();">Logout</a>
<form style="display: none" action="{{route('logout')}}" method="POST" id="logout">
@csrf
</form>