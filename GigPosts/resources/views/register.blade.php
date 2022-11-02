<hi style="align:center">Register Here</h1><br><br>

<form action="user/register" method="post">
    @csrf
    @error('username')
    <span style="color:red">{{$message}}</span><br>
    @enderror
    <input type="text" name="username" placeholder="Enter Username" value="{{ old('username') }}"><br><br>
    @error('email')
    <span style="color:red">{{$message}}</span><br>
    @enderror
    <input type="text" name="email" placeholder="Enter Email" value="{{ old('email') }}"><br><br>
    @error('password')
    <span style="color:red">{{$message}}</span><br>
    @enderror
    <input type="password" name="password" placeholder="Enter Password" value="{{ old('password') }}"><br><br>
    <button type="submit">Register</button><br><br>
    <h3>Already have an account?<span style="color:blue"><a href="login">Login Here</a></span></h3>

</form>