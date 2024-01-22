<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data</title>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('jsjquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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
                        <form action="{{ route('line2.store') }}" method="POST" id="createForm">
                            @csrf
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Part Number</th>
                                        <th>FlangeNon</th>
                                        <th>Line</th>
                                        <th>Dc Code</th>
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
                        <table id="dataInputTable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Part Number</th>
                                    <th>FlangeNon</th>
                                    <th>Line</th>
                                    <th>DC Code</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($dbflange2s as $dbflange)
                                    <tr>
                                        <td>{{ $dbflange->PARTNUMBER }}</td>
                                        <td>{{ $dbflange->FLANGENON }}</td>
                                        <td>{{ $dbflange->LINE }}</td>
                                        <td>{{ $dbflange->DCCODE }}</td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-primary edit-button"
                                                data-toggle="modal" data-target="#editModal-{{ $dbflange->id }}"
                                                data-partnumber="{{ $dbflange->PARTNUMBER }}"
                                                data-flangenon="{{ $dbflange->FLANGENON }}"
                                                data-line="{{ $dbflange->LINE }}"
                                                data-dccode="{{ $dbflange->DCCODE }}"
                                                data-recordid="{{ $dbflange->id }}">Edit
                                            </a>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('line2.destroy', $dbflange->id) }}" method="POST"
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

        @foreach ($dbflange2s as $dbflange)

            <div class="modal fade" id="editModal-{{ $dbflange->id }}" tabindex="-1" role="dialog"
                aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="editForm-{{ $dbflange->id }}" method="POST"
                                action="{{ route('line2.update', ['line2' => $dbflange->id]) }}">
                                @csrf
                                @method('PUT')
                                <div>
                                    <label for="editPartNumber">Part Number</label>
                                    <input type="text" id="editPartNumber-{{ $dbflange->id }}" name="PARTNUMBER" class="form-control" placeholder="Write here">
                                </div>
                                <div>
                                    <label for="editFlangeNon">FlangeNon</label>
                                    <select name="FLANGENON" id="editFlangeNon-{{ $dbflange->id }}" class="form-control">
                                        <option value="1">1</option>
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="editLine">Line</label>
                                    <input type="text" id="editLine-{{ $dbflange->id }}" name="LINE" class="form-control" value="Line2" readonly>
                                </div>
                                <div>
                                    <label for="editDcCode">Dc Code</label>
                                    <input type="text" id="editDcCode-{{ $dbflange->id }}" name="DCCODE" class="form-control" min="0" step="1">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success save-edit-button"
                                data-inputid="{{ $dbflange->id }}">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>

    <div aria-live="polite" aria-atomic="true"
        class="d-flex justify-content-center align-items-center" style="min-height: 200px;">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="mr-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            // Inisialisasi DataTable setelah tabel dimuat
            $('#dataInputTable').DataTable({
                "order": [[0, "desc"]]
            });

            $('.edit-button').on('click', function () {
                var inputId = $(this).data('recordid');
                var modalId = '#editModal-' + inputId;
                var editForm = $(modalId).find('form');
                var partNumber = $(this).data('partnumber');
                var flangeNon = $(this).data('flangenon');
                var line = $(this).data('line');
                var dcCode = $(this).data('dccode');

                editForm.find('#editPartNumber-' + inputId).val(partNumber);
                editForm.find('#editFlangeNon-' + inputId).val(flangeNon);
                editForm.find('#editLine-' + inputId).val(line);
                editForm.find('#editDcCode-' + inputId).val(dcCode);

                $(modalId).modal('show');
            });

            $('.save-edit-button').on('click', function () {
                var inputId = $(this).data('inputid');
                var editForm = $('#editForm-' + inputId);
                var formData = editForm.serialize();

                $.ajax({
                    type: 'POST',
                    url: editForm.attr('action'),
                    data: formData,
                    success: function (response) {
                        var modalId = '#editModal-' + inputId;
                        $(modalId).modal('hide');

                        // Menampilkan pesan toast
                        var toast = $('.toast');
                        toast.toast('show');

                        // Menyegarkan halaman setelah berhasil edit
                        location.reload();
                    },
                    error: function (xhr) {
                        var errors = xhr.responseJSON;
                    }
                });
            });
        });
    </script>
</body>

</html>
