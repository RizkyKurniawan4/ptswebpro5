<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTS CRUD</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTS WEB PRO 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <br>
    <h1>PTS Web Pro 5</h1>
    <a href="students/create" style="margin-bottom:20px;margin-top:10px;" class="btn btn-primary">Create</a>
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Asal Sekolah</th>
      <th scope="col">Edit | Hapus</th>
    </tr>
  </thead>
  <tbody>
        @php 
        $no = 1;
        @endphp
        @foreach ($students as $s)
        <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $s->nama }}</td>
        <td>{{ $s->jeniskelamin  }}</td>
        <td>{{ $s->asal  }}</td>
        <td>
    
        <form action="{{ route('students.destroy', $s->id) }}" onsubmit="return confirm('Apakah Anda Yakin?')" method="POST">
        <a class="btn btn-primary" href="{{ route('students.edit', $s->id) }}">Edit</a>
         @csrf
         @method('DELETE')
         <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
        </tr>
        @endforeach
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>