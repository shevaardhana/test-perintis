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
    <div class="card">
        <div class="card-header">
            <strong>+ Employee Data</strong>
        </div>
        <div class="card-body card-block">
             <form action="{{ route('employee.update', $item->id) }}" method="post">
                @method('PUT')
                 @csrf
                 <div class="form-group">
                     <label for="name" class="form-control-label">Nama Pegawai</label>
                     <input type="text" name="name"
                     value="{{ old('name') ? old('name') : $item->name}}"
                     class="form-control @error('name') is-invalid @enderror"/>
                     @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                 </div>


                 <div class="form-group">
                     <label for="email" class="form-control-label">Email</label>
                     <input type="text" name="email"
                     value="{{ old('email') ? old('email') : $item->email}}"
                     class="form-control @error('email') is-invalid @enderror"/>
                     @error('email') <div class="text-muted">{{ $message }}</div> @enderror
                 </div>

                 <div class="form-group">
                     <label for="position" class="form-control-label">position</label>
                     <input type="text" name="position" value="{{ old('position') ? old('position') : $item->position}}"
                     class="form-control @error('position') is-invalid @enderror"/>
                     @error('position') <div class="text-muted">{{ $message }}</div> @enderror
                 </div>

                 <div class="form-group">
                     <label for="phone" class="form-control-label">phone</label>
                     <input type="text" name="phone" value="{{ old('phone') ? old('phone') : $item->phone}}"
                     class="form-control @error('phone') is-invalid @enderror"/>
                     @error('phone') <div class="text-muted">{{ $message }}</div> @enderror
                 </div>


                <div class="form-group">
                    <label for="address">address</label>
                    <textarea name="address"
                    class="form-control @error('address') is-invalid @enderror">
                        {{ old('address') ? old('address') : $item->address }}
                    </textarea>
                    @error('address') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                 <div class="form-group">
                     <button class="btn btn-primary btn-block" type="submit">Update Employee</button>
                 </div>
             </form>
        </div>
    </div>
</body>
</html>
