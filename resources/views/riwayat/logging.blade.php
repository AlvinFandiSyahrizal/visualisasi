<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AYEE</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
</head>

<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3 class="text-center my-4">Data LOGGING</h3>
                    <table id="dataInputTable" class="table table-bordered mt-3">
                        <thead>
                            <tr>
                                <th>TIMESTAMP</th>
                                <th>DCCODE LINE 2</th>
                                <th>PART NO LINE 2</th>
                                <th>FLANGENON LINE 2</th>
                                <th>DC CODE LINE 3</th>
                                <th>PART NO LINE 3</th>
                                <th>FLANGENON LINE 3</th>
                                <th>DC CODE LINE 4</th>
                                <th>PART NO LINE 4</th>
                                <th>FLANGENON LINE 4</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($logs as $logging)
                                <tr>
                                    <td>{{ $logging->TIMESTAMP }}</td>
                                    <td>{{ $logging->{'DCCODELINE2'} }}</td>
                                    <td>{{ $logging->{'PARTNOLINE2'} }}</td>
                                    <td>{{ $logging->{'FLANGENONLINE2'} }}</td>
                                    <td>{{ $logging->{'DCCODELINE3'} }}</td>
                                    <td>{{ $logging->{'PARTNOLINE3'} }}</td>
                                    <td>{{ $logging->{'FLANGENONLINE3'} }}</td>
                                    <td>{{ $logging->{'DCCODELINE4'} }}</td>
                                    <td>{{ $logging->{'PARTNOLINE4'} }}</td>
                                    <td>{{ $logging->{'FLANGENONLINE4'} }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10">No data available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <button class="btn btn-success" id="exportExcel">Export to Excel</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var table = $('#dataInputTable').DataTable({
            "order": [[0, "desc"]],
            "dom": 'Bfrtip', // Add buttons to the DOM
            "buttons": [
                {
                    extend: 'excelHtml5', // Choose the Excel export option
                    text: 'Export to Excel',
                    className: 'btn btn-success'
                }
            ]
        });

        $('#exportExcel').on('click', function() {
            table.button('.buttons-excel').trigger();
        });
    });
</script>

</body>

</html>
