<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Query</title>

    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

    <div id="result"></div>

    <script>
        function fetchData() {
            $.ajax({
                url: "{{ route('data.belajar') }}",
                method: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    // Check if data is not empty before updating the HTML
                    if (data) {
                        $('#result').html('<p>ID: ' + data.id + '</p><p>Nama: ' + data.nama + '</p>');
                    }
                }
            });
        }

        // Load initial data
        fetchData();

        // Refresh data every 5 seconds (adjust as needed)
        setInterval(fetchData, 5000);

        // Contoh penggunaan jQuery
        $(document).ready(function() {
            // Kode jQuery Anda di sini
            console.log('jQuery berhasil dimuat!');
        });
    </script>

</body>
</html>
