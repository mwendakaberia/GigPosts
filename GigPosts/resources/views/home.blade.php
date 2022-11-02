<h3>Would you like to post a Gig? <span style="color:blue"><a href="login">Sign In </a><a href="register"> Sign Up</a></span></h3>

    <form action = "gig/search" method = "post">
        @csrf
        <span style="color:cyan"><b>Filter Results:   </b></span>
        <label for="type"><b>Job Type</b></lable>
        <select name="type">
            <option value="">--Select Type--</option>
            <option value="part time">Part Time</option>
            <option value="full time">Full Time</option>
            <option value="remote">Remote</option>
        </select>
        <label for="level"><b>Job Level</b></lable>
        <select name="level">
            <option value="">--Select Level--</option>
            <option value="Beginner Level">Beginner Level</option>
            <option value="Junior Level">Junior Level</option>
            <option value="Mid Level">Mid Level</option>
            <option value="Advanced Level">Advanced Level</option>
        </select>
        <button type="submit">Search</button>
        @if($message)
        <span style="color:red">{{$message}}</span>
        @endif
    </form>

<h1>Available Gigs</h1><br>

<table border=1>
    <tr>
    <td>
        <h2>Title</h2>
    </td>
    <td>
        <h2>Location</h2>
    </td>
    <td>
        <h2>Type</h2>
    </td>
    <td>
        <h2>Level</h2>
    </td>
    <td>
        <h2>Company</h2>
    </td>
    <td>
        <h2>Price</h2>
    </td>
    <td>
        <h2>Description</h2>
    </td>
    <td>
        <h2>Date</h2>
    </td>
</tr>
@foreach ($gigs as $gigs)
<tr>
    <td>
        {{$gigs->title}}
    </td>
    <td>
        {{$gigs->location}}
    </td>
    <td>
        {{$gigs->type}}
    </td>
    <td>
        {{$gigs->level}}
    </td>
    <td>
        {{$gigs->company}}
    </td>
    <td>
        {{$gigs->price}}
    </td>
    <td>
        {{$gigs->description}}
    </td>
    <td>
        {{$gigs->date}}
    </td>
    <td>
        <a href="#">Apply</a>
    </td>
</tr>
@endforeach
</table><br><br>



