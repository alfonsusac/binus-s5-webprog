<!DOCTYPE html>
<html lang="en">
<head>
  <title>Database Access</title>
<head>
<body>
	<h1>WEB PROGRAMMING COURSE</h1>
	<hr>
	  @forelse ($mahasiswas as $mahasiswa)
	    <p>Nama : {{$mahasiswa->name}}</p>
	    <p>Email : {{$mahasiswa->email}}</p>
	  @empty
	    <h2>No Data</h2>
	  @endforelse

  <small>&copyBinus University 2021</small>
</body>
</html>