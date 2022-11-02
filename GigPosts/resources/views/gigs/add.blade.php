<h1>Please add your Job Advert</h1><br><br>

<form action="gig/add" method="post">
    @csrf
    <lable name="tl"><b>Job Title</b></lable><t><t>
    <input type="text" name="title" placeholder="Job title"></br>
    @error('title')
    <span style = "color:red">{{$message}}</span><br><br>
    @enderror
    <lable name="cl"><b>Company Name</b1></lable><t><t>
    <input type="text" name="company" placeholder="Company name"></br>
    @error('company')
    <span style = "color:red">{{$message}}</span><br><br>
    @enderror
    <lable name="ll"><b>Job Location</b></lable><t><t>
    <input type="text" name="location" placeholder="Job location"></br>
    @error('location')
    <span style = "color:red">{{$message}}</span><br><br>
    @enderror
    <lable name="dl"><b>Job Description</b></lable><t><t>
    <textarea name="description" placeholder="Job description" cols="50" rows="4"></textarea></br>
    @error('description')
    <span style = "color:red">{{$message}}</span><br><br>
    @enderror
    <lable name="pl"><b>Job Price</b></lable><t><t>
    <input type="number" name="price" placeholder=0></br>
    @error('price')
    <span style = "color:red">{{$message}}</span><br><br>
    @enderror
    <label for="type"><b>Choose Job Type</b></lable>
    <select name="type">
        <option value="">--Select Type--</option>
        <option value="part time">Part Time</option>
        <option value="full time">Full Time</option>
        <option value="remote">Remote</option>
    </select></br>
    @error('type')
    <span style = "color:red">{{$message}}</span><br><br>
    @enderror
    <label for="level"><b>Choose Job Level</b></lable>
    <select name="level">
        <option value="">--Select Level--</option>
        <option value="Beginner Level">Beginner Level</option>
        <option value="Junior Level">Junior Level</option>
        <option value="Mid Level">Mid Level</option>
        <option value="Advanced Level">Advanced Level</option>
    </select></br>
    @error('level')
    <span style = "color:red">{{$message}}</span><br><br>
    @enderror
    <button type="submit">Upload Advert</button>
</form>