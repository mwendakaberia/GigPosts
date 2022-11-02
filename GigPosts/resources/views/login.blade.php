<hi>Login Here</h1><br><br>

<form action="user/login" method="post">
    @csrf
    @if(session("error"))
    <span style="color:red">{{session('error')}}</span><br>
    @endif
    @error('username')
    <span style="color:red">{{$message}}</span><br>
    @enderror
    <input type="text" name="username" placeholder="Enter Username"><br><br>
     @error('password')
    <span style="color:red">{{$message}}</span><br>
    @enderror
    <input type="password" name="password" placeholder="Enter Password"><br><br>
    <button type="submit">Login</button><br><br>
    <h3>Don't have an account?<span style = "color:blue"><a href = "register">Register Here</a></span></h3>

</form>