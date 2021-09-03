<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test Perintis</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <a href="{{route('employee.create')}}" class="btn btn-primary">Tambah Data</a>
    <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>position</th>
            <th>phone</th>
            <th>address</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->position}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->address}}</td>
                    <td>
                        <a href="{{route('employee.edit', $item->id)}}" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>

                        <form action="{{route('employee.destroy', $item->id)}}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </form>
                    </td>
                @empty
                    <tr>
                        <td colspan="6" class="text-center p-5">
                            Data Tidak Tersedia
                        </td>
                    </tr>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
