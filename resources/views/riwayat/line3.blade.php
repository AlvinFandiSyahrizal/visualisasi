<!-- resources/views/riwayat.line2.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Visualisasi Line3</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2>Riwayat Visualisasi Line3</h2>

        <!-- Tabel untuk menampilkan riwayat visualisasi -->
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Part Number</th>
                    <th>Flange Status</th>
                    <th>Line</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                @if($data)
                    <tr>
                        <!-- Sesuaikan dengan struktur data -->
                        <td>{{ $data->PartNumber }}</td>
                        <td>{{ $data->FlangeNon == 1 ? 'Flange' : 'Non-Flange' }}</td>
                        <td>{{ $data->Line }}</td>
                    </tr>
                @else
                    <tr>
                        <td colspan="4">No data available</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

</body>

</html>
