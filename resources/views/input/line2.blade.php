<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data Line2</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

        <div class="row ">
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
                                @forelse($line2s as $line2)
                                    <tr>
                                        <td>{{ $line2->PartNumber }}</td>
                                        <td>{{ $line2->FlangeNon }}</td>
                                        <td>{{ $line2->Line }}</td>
                                        <td>{{ $line2->DCCODE }}</td>

                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('line2.destroy', $line2->id) }}" method="POST">
                                                @csrf
                                                <a href="#" class="btn btn-sm btn-primary edit-button"
                                                    data-toggle="modal" data-target="#editModal-{{ $line2->id }}"
                                                    data-operations="{{ $line2->Operations }}">Edit</a>
                                            </form>
                                            <form action="{{ route('line2.destroy', $line2->id) }}" method="POST"
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

        @foreach ($line2s as $line2)
            <div class="modal fade" id="editModal-{{ $line2->id }}" tabindex="-1" role="dialog"
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
                            <form id="editForm-{{ $line2->id }}" method="POST"
                                action="{{ route('line2.update', ['line2' => $line2->id]) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="editPartNumber">PartNumber</label>
                                    <input type="text" name="PartNumber" class="form-control" id="editPartNumber-{{ $line2->id }}">
                                </div>
                                <div class="form-group">
                                    <label for="editFlangeNon">FlangeNon</label>
                                    <select name="FLANGENON" class="form-control" id="editFlangeNon-{{ $line2->id }}">
                                        <option value="1">1</option>
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="editLine">Line</label>
                                    <input type="text" name="LINE" class="form-control" value="{{ $line2->Line }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="editDcCode">DcCode</label>
                                    <input type="number" name="DCCODE" class="form-control" min="0" step="1" value="{{ $line2->DCCODE }}">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success save-edit-button"
                                data-inputid="{{ $line2->id }}">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $(document).ready(function() {
                    $('#editModal-{{ $line2->id }}').on('show.bs.modal', function(event) {
                        var modal = $(this);
                        var selectedOperations = modal.find("#editOperations-{{ $line2->id }}").val();
                        var quantityInput = modal.find("#editQuantity-{{ $line2->id }}");

                        if (selectedOperations !== "Produksi") {
                            quantityInput.prop("disabled", true);
                        } else {
                            quantityInput.prop("disabled", false);
                            quantityInput.val("");
                        }
                    });
                });
            </script>
        @endforeach
    </div>

    <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center"
        style="min-height: 200px;">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#from-datepicker").datepicker({
                format: 'yyyy-mm-dd'
            });
        });

        toastr.options = {
            "closeButton": true,
            "positionClass": "toast-top-center",
        };

        $(".edit-button").on("click", function() {
            var inputId = $(this).data("inputid");
            var modalId = "#editModal-" + inputId;
            var editForm = $(modalId).find("form");
            var selectedOperations = editForm.find("#editOperations-" + inputId).val();
            var quantityInput = editForm.find("#editQuantity-" + inputId);

            editForm.find("#editOperations-" + inputId).val(selectedOperations);

            if (selectedOperations !== "Produksi") {
                quantityInput.prop("disabled", true);
            } else {
                quantityInput.prop("disabled", false);
                quantityInput.val("");
            }

            $(modalId).modal("show");
        });

        $('#editModal-{{ $line2->id }}').on('show.bs.modal', function(event) {
            var modal = $(this);
            var selectedOperations = modal.find("#editOperations-{{ $line2->id }}").val();
            var quantityInput = modal.find("#editQuantity-{{ $line2->id }}");

            if (selectedOperations !== "Produksi") {
                quantityInput.prop("disabled", true);
            } else {
                quantityInput.prop("disabled", false);
                quantityInput.val("");
            }
        });

        $(document).on("change", ".edit-operations-select", function() {
            var selectedOperation = $(this).val();
            var quantityInput = $(this).closest("form").find(".edit-quantity-input");

            if (selectedOperation !== "Produksi") {
                quantityInput.prop("disabled", true);
            } else {
                quantityInput.prop("disabled", false);
                quantityInput.val("");
            }
        });
        $(".save-edit-button").on("click", function() {
            var inputId = $(this).data("inputid");
            var editForm = $("#editForm-" + inputId);
            var formData = editForm.serialize();

            $.ajax({
                type: 'POST',
                url: editForm.attr('action'),
                data: formData,
                success: function(response) {
                    var modalId = "#editModal-" + inputId;
                    $(modalId).modal("hide");

                    // Menampilkan pesan toast
                    var toast = $('.toast');
                    toast.toast('show');

                    // Menyegarkan halaman setelah berhasil edit
                    location.reload();
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON;
                }
            });
        });


        $("#operations-select").on("change", function() {
            var selectedOperation = $(this).val();
            var quantityInput = $("#quantity-input");
            if (selectedOperation === "Produksi") {
                quantityInput.prop("disabled", false);
            } else {
                quantityInput.prop("disabled", true);
            }
        });
    </script>
</body>

</html>
