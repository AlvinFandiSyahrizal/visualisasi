<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data Line2</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4-beta3/css/all.min.css" integrity="sha512-dU/jbJt+Exm6aSyq8Mscy9xLvbq8zAZdspt4xWsoJ1x+K1B9CbAGG2TpR8t+ntLj3qIi0IXL+abF99MReOj5Jw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                        <form action="{{ route('line2.store') }}" method="POST">
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
                                            <input type="text" name="PARTNUMBER" class="form-control" placeholder="Write here">
                                        </td>
                                        <td>
                                            <select name="FLANGENON" class="form-control">
                                                <option value="1">1</option>
                                                <option value="0">0</option>
                                                <option value="2">2</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" name="LINE" class="form-control" value="Line2" readonly>
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
                                @forelse($dbflange2s as $dbflange)
                                    <tr>
                                        <td>{{ $dbflange->{'PARTNUMBER'} }}</td>
                                        <td>{{ $dbflange->FLANGENON }}</td>
                                        <td>{{ $dbflange->LINE }}</td>
                                        <td>{{ $dbflange->{'DCCODE'} }}</td>

                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-primary edit-button"
                                                data-toggle="modal" data-target="#editModal"
                                                data-partnumber="{{ $dbflange->{'PARTNUMBER'} }}"
                                                data-flangenon="{{ $dbflange->FLANGENON }}"
                                                data-dccode="{{ $dbflange->{'DCCODE'} }}">
                                                <i class="fa-solid fa-pen-to-square"></i> Edit
                                            </a>
                                            <form action="{{ route('line2.destroy', $dbflange->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
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

    </div>

    <!-- Modal for Edit -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Add your form fields for editing here -->
                    <form id="editForm">
                        @csrf
                        @method('PUT') <!-- Assuming you are using a PUT request for editing -->
                        <div class="form-group">
                            <label for="editPartNumber">PartNumber</label>
                            <input type="text" class="form-control" id="editPartNumber" name="editPartNumber" placeholder="Edit PartNumber">
                        </div>
                        <div class="form-group">
                            <label for="editFlangeNon">FlangeNon</label>
                            <select class="form-control" id="editFlangeNon" name="editFlangeNon">
                                <option value="1">1</option>
                                <option value="0">0</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="editDcCode">DcCode</label>
                            <input type="number" class="form-control" id="editDcCode" name="editDcCode" min="0" step="1" placeholder="Edit DcCode">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script>
        $('.edit-button').on('click', function () {
            var partNumber = $(this).data('partnumber');
            var flangeNon = $(this).data('flangenon');
            var dcCode = $(this).data('dccode');

            $('#editPartNumber').val(partNumber);
            $('#editFlangeNon').val(flangeNon);
            $('#editDcCode').val(dcCode);

            // Modify the form action based on the record ID
            var recordId = $(this).data('recordid');
            $('#editForm').attr('action', '/line2/' + recordId);
        });
    </script>

</body>

</html>
