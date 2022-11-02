<h1>Welcome {{session('username')}}</h1> 

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
        <a href="gig/edit/{{$gigs->id}}">Edit</a>
    </td>
    <td>
         <a href="gig/delete/{{$gigs->id}}">Delete</a>
    </td>
</tr>
@endforeach
</table><br><br>

<h3>Would you like to add a new gig? <span style = "color:blue"><a href = "/gigs">Click Here</a></span></h3>