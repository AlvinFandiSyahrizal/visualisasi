<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data Line2</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Input Data</h3>
                    <hr>
                </div>

                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('line3.store') }}" method="POST">
                            @csrf
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>PartNumber</th>
                                        <th>FlangeNon</th>
                                        <th>Line</th>
                                        <th>DcCode</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" name="PartNumber" class="form-control" placeholder="Write here">
                                        </td>
                                        <td>
                                            <select name="FLANGENON" class="form-control">
                                                <option value="1">1</option>
                                                <option value="0">0</option>
                                                <option value="2">2</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" name="LINE" class="form-control" value="Line3" readonly>
                                        </td>
                                        <td>
                                            <input type="number" name="DCCODE" class="form-control" min="0" step="1">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3 class="text-center my-4">Data Input</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>PartNumber</th>
                                    <th>FlangeNon</th>
                                    <th>Line</th>
                                    <th>DcCode</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($dbflanges as $dbflange)
                                    <tr>
                                        <td>{{ $dbflange->{'PART NUMBER'} }}</td>
                                        <td>{{ $dbflange->FLANGENON }}</td>
                                        <td>{{ $dbflange->LINE }}</td>
                                        <td>{{ $dbflange->{'DC CODE'} }}</td>

                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('line3.destroy', $dbflange->id) }}" method="POST">
                                                @csrf
                                                <a href="#" class="btn btn-sm btn-primary edit-button"
                                                    data-toggle="modal" data-target="#editModal-{{ $dbflange->id }}"
                                                    data-operations="{{ $dbflange->LINE }}">Edit</a>
                                            </form>
                                            <form action="{{ route('line3.destroy', $dbflange->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Apakah Anda yakin?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No data available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script>

    </script>


</body>

</html>
