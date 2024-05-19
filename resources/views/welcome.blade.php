<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
  </head>
  <body>
    <button><a href="/create">create</a></button>
    <table border="1px">
      <tr>
        <td>#</td>
        <td>Company</td>
        <td>Capital</td>
        <td colspan="2">Action</td>
      </tr>
      @foreach($companys as $index => $x)
      <div>
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $x->Company }}</td>
            <td>{{ $x->Capital }}</td>
            <form action="/delete/{{ $x->id }}" method="post">
              @csrf
              @method('delete')
              <td><button><img src="delete.png" width="10" height="10"><a href="/delete/{{ $x->id }}"></img></a></button></td>
            </form>
            <td><a href="/edit/{{$x->id}}"><button><img src="edit.png" width="10" height="10"></button></a></td>
        </tr>
      </div>
      @endforeach
    </table>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
  </body>
</html>