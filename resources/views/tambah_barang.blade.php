<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Tambah Barang</title>
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center align-items-center pt-5 mt-5">
                <div class="card" style="width: 24rem;">
                    <div class="card-header">
                        <b>Tambah Barang</b>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('barang.store') }}" id="myForm">
                            @csrf

                            <div class="form-group">
                                <label for="name">Code Barang</label>
                                <input type="text" name="code" class="form-control" id="code" placeholder="Enter code">
                            </div>

                            <div class="form-group">
                                <label for="name">Nama Barang</label>
                                <input type="text" name="name" class="form-control" id="name"  placeholder="Enter name">
                            </div>

                            <div class="form-group">
                                <label for="qty">Qty</label>
                                <input type="number" name="qty" class="form-control" id="qty" placeholder="Enter qty">
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>