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
                {{-- @if($ongoing) --}}
                    <tr>
                        <td><div id="partNumber-container2">
                            <p class="enlarged-text mb-3" id="partNumber2"></p>
                        </div></td>
                        <td><div id="partNumber-container2">
                            <p class="enlarged-text mb-3" id="flangestatusline2">
                            <span id="flangeStatus2"></span>
                        </div></td>
                        <td><div id="partNumber-container2">
                            <p class="enlarged-text mb-3" id="flangestatusline2">
                            <span id="line2"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container3">
                            <p class="enlarged-text mb-3" id="partNumber3"></p>
                        </div></td>
                        <td><div id="partNumber-container3">
                            <p class="enlarged-text mb-3" id="flangestatusline3">
                            <span id="flangeStatus3"></span>
                        </div></td>
                        <td><div id="partNumber-container3">
                            <p class="enlarged-text mb-3" id="flangestatusline3">
                            <span id="line3"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container4">
                            <p class="enlarged-text mb-3" id="partNumber4"></p>
                        </div></td>
                        <td><div id="partNumber-container4">
                            <p class="enlarged-text mb-3" id="flangestatusline4">
                            <span id="flangeStatus4"></span>
                        </div></td>
                        <td><div id="partNumber-container4">
                            <p class="enlarged-text mb-3" id="flangestatusline4">
                            <span id="line4"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container5">
                            <p class="enlarged-text mb-3" id="partNumber5"></p>
                        </div></td>
                        <td><div id="partNumber-container5">
                            <p class="enlarged-text mb-3" id="flangestatusline5">
                            <span id="flangeStatus5"></span>
                        </div></td>
                        <td><div id="partNumber-container5">
                            <p class="enlarged-text mb-3" id="flangestatusline5">
                            <span id="line5"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container6">
                            <p class="enlarged-text mb-3" id="partNumber6"></p>
                        </div></td>
                        <td><div id="partNumber-container6">
                            <p class="enlarged-text mb-3" id="flangestatusline6">
                            <span id="flangeStatus6"></span>
                        </div></td>
                        <td><div id="partNumber-container6">
                            <p class="enlarged-text mb-3" id="flangestatusline6">
                            <span id="line6"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container7">
                            <p class="enlarged-text mb-3" id="partNumber7"></p>
                        </div></td>
                        <td><div id="partNumber-container7">
                            <p class="enlarged-text mb-3" id="flangestatusline7">
                            <span id="flangeStatus7"></span>
                        </div></td>
                        <td><div id="partNumber-container7">
                            <p class="enlarged-text mb-3" id="flangestatusline7">
                            <span id="line7"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container8">
                            <p class="enlarged-text mb-3" id="partNumber8"></p>
                        </div></td>
                        <td><div id="partNumber-container8">
                            <p class="enlarged-text mb-3" id="flangestatusline8">
                            <span id="flangeStatus8"></span>
                        </div></td>
                        <td><div id="partNumber-container8">
                            <p class="enlarged-text mb-3" id="flangestatusline8">
                            <span id="line8"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container9">
                            <p class="enlarged-text mb-3" id="partNumber9"></p>
                        </div></td>
                        <td><div id="partNumber-container9">
                            <p class="enlarged-text mb-3" id="flangestatusline9">
                            <span id="flangeStatus9"></span>
                        </div></td>
                        <td><div id="partNumber-container9">
                            <p class="enlarged-text mb-3" id="flangestatusline9">
                            <span id="line9"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container10">
                            <p class="enlarged-text mb-3" id="partNumber10"></p>
                        </div></td>
                        <td><div id="partNumber-container10">
                            <p class="enlarged-text mb-3" id="flangestatusline10">
                            <span id="flangeStatus10"></span>
                        </div></td>
                        <td><div id="partNumber-container3">
                            <p class="enlarged-text mb-3" id="flangestatusline10">
                            <span id="line10"></span>
                        </div></td>
                        <td></td>
                    </tr>

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

        function fetchData2() {
        $.ajax({
            url: "{{ route('data.visual2') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data2) {
                if (data2) {
                    var flangeStatus = (data2.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data2.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber2').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus2').text(flangeStatus);
                    $('#line2').text(data2.Line);
                }
            }
        });
    }
        function fetchData3() {
        $.ajax({
            url: "{{ route('data.visual3') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data3) {
                if (data3) {
                    var flangeStatus = (data3.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data3.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber3').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus3').text(flangeStatus);
                    $('#line3').text(data3.Line);
                }
            }
        });
    }
        function fetchData4() {
        $.ajax({
            url: "{{ route('data.visual4') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data4) {
                if (data4) {
                    var flangeStatus = (data4.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data4.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber4').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus4').text(flangeStatus);
                    $('#line4').text(data4.Line);
                }
            }
        });
    }
        function fetchData5() {
        $.ajax({
            url: "{{ route('data.visual5') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data5) {
                if (data5) {
                    var flangeStatus = (data5.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data5.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber5').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus5').text(flangeStatus);
                    $('#line5').text(data5.Line);
                }
            }
        });
    }
        function fetchData6() {
        $.ajax({
            url: "{{ route('data.visual6') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data6) {
                if (data6) {
                    var flangeStatus = (data6.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data6.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber6').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus6').text(flangeStatus);
                    $('#line6').text(data6.Line);
                }
            }
        });
    }
        function fetchData7() {
        $.ajax({
            url: "{{ route('data.visual7') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data7) {
                if (data7) {
                    var flangeStatus = (data7.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data7.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber7').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus7').text(flangeStatus);
                    $('#line7').text(data7.Line);
                }
            }
        });
    }
        function fetchData8() {
        $.ajax({
            url: "{{ route('data.visual8') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data8) {
                if (data8) {
                    var flangeStatus = (data8.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data8.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber8').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus8').text(flangeStatus);
                    $('#line8').text(data8.Line);
                }
            }
        });
    }
        function fetchData9() {
        $.ajax({
            url: "{{ route('data.visual9') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data9) {
                if (data9) {
                    var flangeStatus = (data9.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data9.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber9').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus9').text(flangeStatus);
                    $('#line9').text(data9.Line);
                }
            }
        });
    }
        function fetchData10() {
        $.ajax({
            url: "{{ route('data.visual10') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data10) {
                if (data10) {
                    var flangeStatus = (data10.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data10.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber10').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus10').text(flangeStatus);
                    $('#line10').text(data10.Line);
                }
            }
        });
    }


    updateDateTime();
    setInterval(updateDateTime, 1000); // Update time every second
    fetchData();
    fetchData2();
    fetchData3();
    fetchData4();
    fetchData5();
    fetchData6();
    fetchData7();
    fetchData8();
    fetchData9();
    fetchData10();
    setInterval(fetchData, 3000);
    setInterval(fetchData2, 3000);
    setInterval(fetchData3, 3000);
    setInterval(fetchData4, 3000);
    setInterval(fetchData5, 3000);
    setInterval(fetchData6, 3000);
    setInterval(fetchData7, 3000);
    setInterval(fetchData8, 3000);
    setInterval(fetchData9, 3000);
    setInterval(fetchData10, 3000);

    $(document).ready(function () {
        console.log('jQuery berhasil dimuat!');
    });
</script>


</html>
