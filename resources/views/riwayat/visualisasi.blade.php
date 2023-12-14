<!-- resources/views/riwayat.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Visualisasi</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2>ongoing</h2>

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
                {{-- @if($ongoing) --}}
                    <tr>
                        <td><div id="partNumber-container">
                            <p class="enlarged-text mb-3" id="partNumber"></p>
                        </div></td>
                        <td><div id="partNumber-container">
                            <p class="enlarged-text mb-3" id="flangestatusline">
                            <span id="flangeStatus"></span>
                        </div></td>
                        <td><div id="partNumber-container">
                            <p class="enlarged-text mb-3" id="flangestatusline">
                            <span id="line"></span>
                        </div></td>
                        <td>QTY</td>
                        <!-- Sesuaikan dengan struktur data -->
                        {{-- <td>{{ $ongoing->PartNumber }}</td>
                        <td>{{ $ongoing->FlangeNon == 1 ? 'Flange' : 'Non-Flange' }}</td>
                        <td>{{ $ongoing->Line }}</td> --}}
                    </tr>
            </tbody>
        </table>

        <h2>Riwayat</h2>

        <!-- Tabel kedua untuk menampilkan riwayat visualisasi -->
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
                @if($riwayatData && count($riwayatData) > 0)
                    @foreach($riwayatData as $riwayat)
                        <tr>
                            <!-- Sesuaikan dengan struktur data -->
                            <td>{{ $riwayat->PartNumber }}</td>
                            <td>{{ $riwayat->FlangeNon == 1 ? 'Flange' : 'Non-Flange' }}</td>
                            <td>{{ $riwayat->Line }}</td>
                            <td>{{ $riwayat->Quantity }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">No additional data available</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function updateDateTime() {
        var currentDate = new Date();
        var optionsDate = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        var optionsTime = { hour: 'numeric', minute: 'numeric', second: 'numeric' };
        var formattedDate = currentDate.toLocaleDateString('en-US', optionsDate);
        var formattedTime = currentDate.toLocaleTimeString('en-US', optionsTime);

        $('#date').text(formattedDate);
        $('#time').text(formattedTime);
    }

    function fetchData() {
        $.ajax({
            url: "{{ route('data.visual') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                if (data) {
                    var flangeStatus = (data.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus').text(flangeStatus);
                    $('#line').text(data.Line);
                }
            }
        });
    }

    updateDateTime();
    setInterval(updateDateTime, 1000); // Update time every second
    fetchData();
    setInterval(fetchData, 3000);

    $(document).ready(function () {
        console.log('jQuery berhasil dimuat!');
    });
</script>


</html>
