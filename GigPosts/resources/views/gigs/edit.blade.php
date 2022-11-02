<form action="{{route('edit',$data->id)}}" method="post">
    @csrf
    <lable name="tl"><b>Job Title</b></lable><t><t>
    <input type="text" name="title" placeholder="Job title" value={{$data->title}}></br>
    @error('title')
    <span style = "color:red">{{$message}}</span><br><br>
    @enderror
    <lable name="cl"><b>Company Name</b1></lable><t><t>
    <input type="text" name="company" placeholder="Company name" value={{$data->company}}></br>
    @error('company')
    <span style = "color:red">{{$message}}</span><br><br>
    @enderror
    <lable name="ll"><b>Job Location</b></lable><t><t>
    <input type="text" name="location" placeholder="Job location" value={{$data->location}}></br>
    @error('location')
    <span style = "color:red">{{$message}}</span><br><br>
    @enderror
    <lable name="dl"><b>Job Description</b></lable><t><t>
    <textarea name="description" cols="50" rows="4">{{htmlspecialchars($data->description)}}</textarea></br>
    @error('description')
    <span style = "color:red">{{$message}}</span><br><br>
    @enderror
    <lable name="pl"><b>Job Price</b></lable><t><t>
    <input type="number" name="price" placeholder=0 value={{$data->price}}></br>
    @error('price')
    <span style = "color:red">{{$message}}</span><br><br>
    @enderror
    <label for="type"><b>Choose Job Type</b></lable>
    <select name="type">
        <option value="">--Select Type--</option>
        <option value="part time" @if($data->type == "part time") {{"selected"}} @endif>Part Time</option>
        <option value="full time" @if($data->type == "full time") {{"selected"}} @endif>Full Time</option>
        <option value="remote" @if($data->type == "remote") {{"selected"}} @endif>Remote</option>
    </select></br>
    @error('type')
    <span style = "color:red">{{$message}}</span><br><br>
    @enderror
    <label for="level"><b>Choose Job Level</b></lable>
    <select name="level">
        <option value="">--Select Level--</option>
        <option value="Beginner Level" @if($data->level == "Beginner Level") {{"selected"}} @endif>Beginner Level</option>
        <option value="Junior Level" @if($data->level == "Junior Level") {{"selected"}} @endif>Junior Level</option>
        <option value="Mid Level" @if($data->level == "Mid Level") {{"selected"}} @endif>Mid Level</option>
        <option value="Advanced Level" @if($data->level == "Advanced Level") {{"selected"}} @endif>Advanced Level</option>
    </select></br>
    @error('level')
    <span style = "color:red">{{$message}}</span><br><br>
    @enderror
    <button type="submit">Edit Advert</button>
</form>