<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <title>Data outlet</title>
    </head>

    <body>
                <!-- A grey horizontal navbar that becomes vertical on small screens -->
            <nav class="navbar navbar-expand-sm bg-light">

            <!-- Links -->
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo url('transaksi') ?>">Transaksi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo url('users') ?>">User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo url('barang') ?>">Barang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo url('outlet') ?>">Outlet</a>
            </li>
            </ul>
            </nav>


            <div class="col mr-4">
              <div class="justify-content-center align-items-center">
                    <div class="d-flex justify-content-between mt-5 mb-2">
                        <h3 class="font-weight-bold">Master outlet</h3>
                        <a href="{{ route('outlet.create') }}"><button class="btn btn-primary align">Tambah outlet</button></a>
                    </div>

                <table class="table">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">address</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($outlet as $outlet)
                        <tr>
                            <td>{{ $outlet->code }}</td>
                            <td>{{ $outlet->name }}</td>
                            <td>{{ $outlet->qty }}</td>
                            <td>
                                <a href="{{ route('outlet.edit', $outlet->id) }}">
                                    <button type="button" class="btn btn-warning">Edit</button>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('outlet.destroy', $outlet->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
              </div> 
            </div>
        </div> 
    </body>
</html>