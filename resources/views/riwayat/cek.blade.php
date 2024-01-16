<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Visualisasi2</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <style>body { transform: rotate(180deg); }</style>
</head>

<body>

    <div class="container text-center">
        <div class="container mt-5">
            <h2>apa namanya</h2>
        </div>

        <div class="row">
            <div class="col">

                <table class="table table-bordered border-primary">
                    <thead class="table-light table-bordered border-primary">
                        <tr>
                            <th>No</th>
                            <th>SeqNo</th>
                            <th>P/N</th>
                            <th>DcCode</th>
                            <th>Type</th>
                            <th class="act-qty">Act/Qty</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr id="row19line3">
                            <td>
                                <div id="partNumber-container">
                                    <span></span>
                                </div>
                            </td>
                                <td>
                                    <div id="partNumber-container">
                                        <span id="seqnumber19line3"></span>
                                    </div>
                                </td>
                                <td>
                                    <div id="partNumber-container">
                                        <span class="text-nowrap" id="partNumber19line3"></span>
                                    </div>
                                </td>
                                <td>
                                    <div id="partNumber-container">
                                        <span id="dccode19line3"></span>
                                    </div>
                                </td>
                                <td>
                                    <div id="partNumber-container">
                                        <span class="text-nowrap"id="flangeStatus19line3"></span>
                                    </div>
                                </td>
                                <td class="act-qty">
                                    <div id="partNumber-container">
                                        <span id="actualqty19line3"><span> <span id="qty19line3"></span>
                                    </div>
                                </td>
                                <td>
                                    <div id="partNumber-container">
                                        <span id="status19line3"></span>
                                    </td>
                            </td>
                            </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script>

function fetchData19line3() {
    $.ajax({
        url: "{{ route('data.visual19line3') }}",
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data19line3) {
            if (data19line3) {
                $('#dccode19line3').text(data19line3.DCCODE);
                var flangeStatus = (data19line3.FlangeNon == 1) ? 'Flange' : 'Non-Flange';
                var status = (data19line3.status == 1) ? 'prod' : (data19line3.status == 2) ? 'com' : '';

                var partNumberArray = data19line3.PartNumber.split('-');
                var formattedPartNumber = partNumberArray.slice(0, 2).join('-');
                if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                    formattedPartNumber += '-' + partNumberArray[2];
                }

                $('#seqnumber19line3').text(data19line3.SeqNo);
                $('#partNumber19line3').text(formattedPartNumber);
                $('#flangeStatus19line3').text(flangeStatus);
                $('#line19line3').text(data19line3.Line);

                var actQtyText = data19line3.act + '/' + data19line3.qty;
                $('#actualqty19line3').text(actQtyText);

                $('#status19line3').text(status);

                var row = $('#row19line3');


                row.removeClass("table-danger table-primary table-success");
                if (data19line3.status == 2) {
                    if (flangeStatus === "Flange") {
                        row.addClass("table-danger");
                    } else if (flangeStatus === "Non-Flange") {
                        row.addClass("table-primary");
                    }
                }
                    if (data19line3.status == 1) {
                    row.removeClass("table-danger table-primary");
                    row.addClass("table-success");
                    }
            }
        }
    });
}



fetchData19line3();

setInterval(fetchData19line3, 3000);


$(document).ready(function () {
    console.log('jQuery berhasil dimuat!');
});
</script>

</html>
