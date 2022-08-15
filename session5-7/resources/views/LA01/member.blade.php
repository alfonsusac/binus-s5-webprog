<!DOCTYPE html>
<html lang="en">
<head>
  <title>Relational Tables Access</title>
<head>
<body>
	<h1>MEMBERSHIP LIST</h1>
	<hr>
	  @forelse ($memberships as $membership)
	  	<p>Member Name : {{$membership->member->name}}</p>
	    <p>Membership Category : {{$membership->category}}</p>
	  @empty
	    <h2>No Data</h2>
	  @endforelse

  <small>&copyBinus University 2021</small>
</body>
</html>