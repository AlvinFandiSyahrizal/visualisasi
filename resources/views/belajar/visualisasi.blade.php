<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualisasi</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        /* Tambahkan styling untuk mengunci gambar */
        .fixed-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* agar gambar tampil di belakang teks */
        }

        .carousel-caption {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            z-index: 1;
            height: 100vh; /* Set tinggi 100% dari viewport height */
            width: 100%; /* Set lebar 100% */
            position: absolute; /* Tambahkan posisi absolut */
            top: 50%; /* Pusatkan vertikal ke tengah */
            left: 50%; /* Pusatkan horizontal ke tengah */
            transform: translate(-50%, -50%); /* Pusatkan ke tengah */
        }

        .enlarged-text {
            font-size: 90px;
        }

        /* Tambahkan styling untuk tanggal dan jam */
        #datetime-container {
            position: relative; /* Ubah menjadi relatif untuk menghindari tumpang tindih */
            z-index: 2; /* tinggikan lapisan di atas gambar */
            text-align: left; /* Set teks ke kiri */
            width: 100%; /* Lebar penuh */
            padding-left: 20px; /* Jarak kiri */
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px; /*  Tambahkan jarak ke bawah */
        }

        #date {
            margin-right: auto; /* Biarkan tanggal menempati sejauh mungkin ke kiri */
            font-size: 70px;
        }

        #time {
            margin-left: auto; /* Biarkan waktu menempati sejauh mungkin ke kanan */
            font-size: 70px;
        }

        #partNumber-container {
            position: relative;
            z-index: 2;
            text-align: center; /* Mengubah alignment ke center */
            width: 100%;
            margin-top: 30px;
            margin-bottom: 100px; /* Tambahkan jarak ke bawah */
        }

        #partNumber {
            font-size: 200px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 100%;
        }

        /* Tambahkan styling untuk hari bulan tanggal tahun */
        #flangeStatusLine {
            position: relative; /* Ubah menjadi relatif untuk menghindari tumpang tindih */
            z-index: 2; /* tinggikan lapisan di atas gambar */
            text-align: left; /* Set teks ke kiri */
            width: 100%; /* Lebar penuh */
            padding-left: 20px; /* Jarak kiri */
            display: flex;
            justify-content: space-between;
        }

        #flangeStatus {
            margin-right: auto; /* Biarkan tanggal menempati sejauh mungkin ke kiri */
            font-size: 120px;
        }

        #line {
            margin-left: auto; /* Biarkan tanggal menempati sejauh mungkin ke kiri */
            font-size: 120px;
        }
    </style>

    <<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <!-- Gambar yang di-fixed position -->
    <img class="fixed-image" src="{{ asset('black.jpg') }}" alt="Background Image">

    <!-- Konten utama -->
    <div class="carousel-caption">
        <div id="datetime-container">
            <div id="date"></div>
            <div id="time"></div>
        </div>
        <div id="partNumber-container">
            <p class="enlarged-text mb-3" id="partNumber"></p>
        </div>
        <div class="enlarged-text mb-3" id="flangeStatusLine">
            <span id="flangeStatus"></span>
            <span id="line"></span>
        </div>
    </div>

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
                url: "{{ route('belajar.visualisasi') }}",
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

</body>

</html>
