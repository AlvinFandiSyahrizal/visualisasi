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
                    <th>Status</th>
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
                        <td><div id="partNumber-container10">
                            <p class="enlarged-text mb-3" id="flangestatusline10">
                            <span id="line10"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container11">
                            <p class="enlarged-text mb-3" id="partNumber11"></p>
                        </div></td>
                        <td><div id="partNumber-container11">
                            <p class="enlarged-text mb-3" id="flangestatusline11">
                            <span id="flangeStatus11"></span>
                        </div></td>
                        <td><div id="partNumber-container11">
                            <p class="enlarged-text mb-3" id="flangestatusline11">
                            <span id="line11"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container12">
                            <p class="enlarged-text mb-3" id="partNumber12"></p>
                        </div></td>
                        <td><div id="partNumber-container12">
                            <p class="enlarged-text mb-3" id="flangestatusline12">
                            <span id="flangeStatus12"></span>
                        </div></td>
                        <td><div id="partNumber-container12">
                            <p class="enlarged-text mb-3" id="flangestatusline12">
                            <span id="line12"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container13">
                            <p class="enlarged-text mb-3" id="partNumber13"></p>
                        </div></td>
                        <td><div id="partNumber-container13">
                            <p class="enlarged-text mb-3" id="flangestatusline13">
                            <span id="flangeStatus13"></span>
                        </div></td>
                        <td><div id="partNumber-container13">
                            <p class="enlarged-text mb-3" id="flangestatusline13">
                            <span id="line13"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container14">
                            <p class="enlarged-text mb-3" id="partNumber14"></p>
                        </div></td>
                        <td><div id="partNumber-container14">
                            <p class="enlarged-text mb-3" id="flangestatusline14">
                            <span id="flangeStatus14"></span>
                        </div></td>
                        <td><div id="partNumber-container14">
                            <p class="enlarged-text mb-3" id="flangestatusline14">
                            <span id="line14"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container15">
                            <p class="enlarged-text mb-3" id="partNumber15"></p>
                        </div></td>
                        <td><div id="partNumber-container15">
                            <p class="enlarged-text mb-3" id="flangestatusline15">
                            <span id="flangeStatus15"></span>
                        </div></td>
                        <td><div id="partNumber-container15">
                            <p class="enlarged-text mb-3" id="flangestatusline15">
                            <span id="line15"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container16">
                            <p class="enlarged-text mb-3" id="partNumber16"></p>
                        </div></td>
                        <td><div id="partNumber-container16">
                            <p class="enlarged-text mb-3" id="flangestatusline16">
                            <span id="flangeStatus16"></span>
                        </div></td>
                        <td><div id="partNumber-container16">
                            <p class="enlarged-text mb-3" id="flangestatusline16">
                            <span id="line16"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container17">
                            <p class="enlarged-text mb-3" id="partNumber17"></p>
                        </div></td>
                        <td><div id="partNumber-container17">
                            <p class="enlarged-text mb-3" id="flangestatusline17">
                            <span id="flangeStatus17"></span>
                        </div></td>
                        <td><div id="partNumber-container17">
                            <p class="enlarged-text mb-3" id="flangestatusline17">
                            <span id="line17"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container18">
                            <p class="enlarged-text mb-3" id="partNumber18"></p>
                        </div></td>
                        <td><div id="partNumber-container18">
                            <p class="enlarged-text mb-3" id="flangestatusline18">
                            <span id="flangeStatus18"></span>
                        </div></td>
                        <td><div id="partNumber-container18">
                            <p class="enlarged-text mb-3" id="flangestatusline18">
                            <span id="line18"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container19">
                            <p class="enlarged-text mb-3" id="partNumber19"></p>
                        </div></td>
                        <td><div id="partNumber-container19">
                            <p class="enlarged-text mb-3" id="flangestatusline19">
                            <span id="flangeStatus19"></span>
                        </div></td>
                        <td><div id="partNumber-container19">
                            <p class="enlarged-text mb-3" id="flangestatusline19">
                            <span id="line19"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container20">
                            <p class="enlarged-text mb-3" id="partNumber20"></p>
                        </div></td>
                        <td><div id="partNumber-container20">
                            <p class="enlarged-text mb-3" id="flangestatusline20">
                            <span id="flangeStatus20"></span>
                        </div></td>
                        <td><div id="partNumber-container20">
                            <p class="enlarged-text mb-3" id="flangestatusline20">
                            <span id="line20"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container21">
                            <p class="enlarged-text mb-3" id="partNumber21"></p>
                        </div></td>
                        <td><div id="partNumber-container21">
                            <p class="enlarged-text mb-3" id="flangestatusline21">
                            <span id="flangeStatus21"></span>
                        </div></td>
                        <td><div id="partNumber-container21">
                            <p class="enlarged-text mb-3" id="flangestatusline21">
                            <span id="line21"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container22">
                            <p class="enlarged-text mb-3" id="partNumber22"></p>
                        </div></td>
                        <td><div id="partNumber-container22">
                            <p class="enlarged-text mb-3" id="flangestatusline22">
                            <span id="flangeStatus22"></span>
                        </div></td>
                        <td><div id="partNumber-container22">
                            <p class="enlarged-text mb-3" id="flangestatusline22">
                            <span id="line22"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container23">
                            <p class="enlarged-text mb-3" id="partNumber23"></p>
                        </div></td>
                        <td><div id="partNumber-container23">
                            <p class="enlarged-text mb-3" id="flangestatusline23">
                            <span id="flangeStatus23"></span>
                        </div></td>
                        <td><div id="partNumber-container23">
                            <p class="enlarged-text mb-3" id="flangestatusline23">
                            <span id="line23"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container24">
                            <p class="enlarged-text mb-3" id="partNumber24"></p>
                        </div></td>
                        <td><div id="partNumber-container24">
                            <p class="enlarged-text mb-3" id="flangestatusline24">
                            <span id="flangeStatus24"></span>
                        </div></td>
                        <td><div id="partNumber-container24">
                            <p class="enlarged-text mb-3" id="flangestatusline24">
                            <span id="line24"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container25">
                            <p class="enlarged-text mb-3" id="partNumber25"></p>
                        </div></td>
                        <td><div id="partNumber-container25">
                            <p class="enlarged-text mb-3" id="flangestatusline25">
                            <span id="flangeStatus25"></span>
                        </div></td>
                        <td><div id="partNumber-container25">
                            <p class="enlarged-text mb-3" id="flangestatusline25">
                            <span id="line25"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container25">
                            <p class="enlarged-text mb-3" id="partNumber25"></p>
                        </div></td>
                        <td><div id="partNumber-container25">
                            <p class="enlarged-text mb-3" id="flangestatusline25">
                            <span id="flangeStatus25"></span>
                        </div></td>
                        <td><div id="partNumber-container25">
                            <p class="enlarged-text mb-3" id="flangestatusline25">
                            <span id="line25"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container26">
                            <p class="enlarged-text mb-3" id="partNumber26"></p>
                        </div></td>
                        <td><div id="partNumber-container26">
                            <p class="enlarged-text mb-3" id="flangestatusline26">
                            <span id="flangeStatus26"></span>
                        </div></td>
                        <td><div id="partNumber-container26">
                            <p class="enlarged-text mb-3" id="flangestatusline26">
                            <span id="line26"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container27">
                            <p class="enlarged-text mb-3" id="partNumber27"></p>
                        </div></td>
                        <td><div id="partNumber-container27">
                            <p class="enlarged-text mb-3" id="flangestatusline27">
                            <span id="flangeStatus27"></span>
                        </div></td>
                        <td><div id="partNumber-container27">
                            <p class="enlarged-text mb-3" id="flangestatusline27">
                            <span id="line27"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container28">
                            <p class="enlarged-text mb-3" id="partNumber28"></p>
                        </div></td>
                        <td><div id="partNumber-container28">
                            <p class="enlarged-text mb-3" id="flangestatusline28">
                            <span id="flangeStatus28"></span>
                        </div></td>
                        <td><div id="partNumber-container28">
                            <p class="enlarged-text mb-3" id="flangestatusline28">
                            <span id="line28"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container29">
                            <p class="enlarged-text mb-3" id="partNumber29"></p>
                        </div></td>
                        <td><div id="partNumber-container29">
                            <p class="enlarged-text mb-3" id="flangestatusline29">
                            <span id="flangeStatus29"></span>
                        </div></td>
                        <td><div id="partNumber-container29">
                            <p class="enlarged-text mb-3" id="flangestatusline29">
                            <span id="line29"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container30">
                            <p class="enlarged-text mb-3" id="partNumber30"></p>
                        </div></td>
                        <td><div id="partNumber-container30">
                            <p class="enlarged-text mb-3" id="flangestatusline30">
                            <span id="flangeStatus30"></span>
                        </div></td>
                        <td><div id="partNumber-container30">
                            <p class="enlarged-text mb-3" id="flangestatusline30">
                            <span id="line30"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container31">
                            <p class="enlarged-text mb-3" id="partNumber31"></p>
                        </div></td>
                        <td><div id="partNumber-container31">
                            <p class="enlarged-text mb-3" id="flangestatusline31">
                            <span id="flangeStatus31"></span>
                        </div></td>
                        <td><div id="partNumber-container31">
                            <p class="enlarged-text mb-3" id="flangestatusline31">
                            <span id="line31"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container32">
                            <p class="enlarged-text mb-3" id="partNumber32"></p>
                        </div></td>
                        <td><div id="partNumber-container32">
                            <p class="enlarged-text mb-3" id="flangestatusline32">
                            <span id="flangeStatus32"></span>
                        </div></td>
                        <td><div id="partNumber-container32">
                            <p class="enlarged-text mb-3" id="flangestatusline32">
                            <span id="line32"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container33">
                            <p class="enlarged-text mb-3" id="partNumber33"></p>
                        </div></td>
                        <td><div id="partNumber-container33">
                            <p class="enlarged-text mb-3" id="flangestatusline33">
                            <span id="flangeStatus33"></span>
                        </div></td>
                        <td><div id="partNumber-container33">
                            <p class="enlarged-text mb-3" id="flangestatusline33">
                            <span id="line33"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container34">
                            <p class="enlarged-text mb-3" id="partNumber34"></p>
                        </div></td>
                        <td><div id="partNumber-container34">
                            <p class="enlarged-text mb-3" id="flangestatusline34">
                            <span id="flangeStatus34"></span>
                        </div></td>
                        <td><div id="partNumber-container34">
                            <p class="enlarged-text mb-3" id="flangestatusline34">
                            <span id="line34"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container35">
                            <p class="enlarged-text mb-3" id="partNumber35"></p>
                        </div></td>
                        <td><div id="partNumber-container35">
                            <p class="enlarged-text mb-3" id="flangestatusline35">
                            <span id="flangeStatus35"></span>
                        </div></td>
                        <td><div id="partNumber-container35">
                            <p class="enlarged-text mb-3" id="flangestatusline35">
                            <span id="line35"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container36">
                            <p class="enlarged-text mb-3" id="partNumber36"></p>
                        </div></td>
                        <td><div id="partNumber-container36">
                            <p class="enlarged-text mb-3" id="flangestatusline36">
                            <span id="flangeStatus36"></span>
                        </div></td>
                        <td><div id="partNumber-container36">
                            <p class="enlarged-text mb-3" id="flangestatusline36">
                            <span id="line36"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container37">
                            <p class="enlarged-text mb-3" id="partNumber37"></p>
                        </div></td>
                        <td><div id="partNumber-container37">
                            <p class="enlarged-text mb-3" id="flangestatusline37">
                            <span id="flangeStatus37"></span>
                        </div></td>
                        <td><div id="partNumber-container37">
                            <p class="enlarged-text mb-3" id="flangestatusline37">
                            <span id="line37"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container38">
                            <p class="enlarged-text mb-3" id="partNumber38"></p>
                        </div></td>
                        <td><div id="partNumber-container38">
                            <p class="enlarged-text mb-3" id="flangestatusline38">
                            <span id="flangeStatus38"></span>
                        </div></td>
                        <td><div id="partNumber-container38">
                            <p class="enlarged-text mb-3" id="flangestatusline38">
                            <span id="line38"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container39">
                            <p class="enlarged-text mb-3" id="partNumber39"></p>
                        </div></td>
                        <td><div id="partNumber-container39">
                            <p class="enlarged-text mb-3" id="flangestatusline39">
                            <span id="flangeStatus39"></span>
                        </div></td>
                        <td><div id="partNumber-container39">
                            <p class="enlarged-text mb-3" id="flangestatusline39">
                            <span id="line39"></span>
                        </div></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div id="partNumber-container40">
                            <p class="enlarged-text mb-3" id="partNumber40"></p>
                        </div></td>
                        <td><div id="partNumber-container40">
                            <p class="enlarged-text mb-3" id="flangestatusline40">
                            <span id="flangeStatus40"></span>
                        </div></td>
                        <td><div id="partNumber-container40">
                            <p class="enlarged-text mb-3" id="flangestatusline40">
                            <span id="line40"></span>
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
        function fetchData11() {
        $.ajax({
            url: "{{ route('data.visual11') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data11) {
                if (data11) {
                    var flangeStatus = (data11.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data11.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber11').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus11').text(flangeStatus);
                    $('#line11').text(data11.Line);
                }
            }
        });
    }
        function fetchData12() {
        $.ajax({
            url: "{{ route('data.visual12') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data12) {
                if (data12) {
                    var flangeStatus = (data12.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data12.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber12').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus12').text(flangeStatus);
                    $('#line12').text(data12.Line);
                }
            }
        });
    }
        function fetchData13() {
        $.ajax({
            url: "{{ route('data.visual13') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data13) {
                if (data13) {
                    var flangeStatus = (data13.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data13.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber13').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus13').text(flangeStatus);
                    $('#line13').text(data3.Line);
                }
            }
        });
    }
        function fetchData14() {
        $.ajax({
            url: "{{ route('data.visual14') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data14) {
                if (data14) {
                    var flangeStatus = (data14.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data14.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber14').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus14').text(flangeStatus);
                    $('#line14').text(data14.Line);
                }
            }
        });
    }
        function fetchData15() {
        $.ajax({
            url: "{{ route('data.visual15') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data15) {
                if (data15) {
                    var flangeStatus = (data15.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data15.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber15').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus15').text(flangeStatus);
                    $('#line15').text(data15.Line);
                }
            }
        });
    }
        function fetchData16() {
        $.ajax({
            url: "{{ route('data.visual16') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data16) {
                if (data16) {
                    var flangeStatus = (data16.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data16.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber16').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus16').text(flangeStatus);
                    $('#line16').text(data16.Line);
                }
            }
        });
    }
        function fetchData17() {
        $.ajax({
            url: "{{ route('data.visual17') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data17) {
                if (data17) {
                    var flangeStatus = (data17.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data17.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber17').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus17').text(flangeStatus);
                    $('#line17').text(data17.Line);
                }
            }
        });
    }
        function fetchData18() {
        $.ajax({
            url: "{{ route('data.visual18') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data18) {
                if (data18) {
                    var flangeStatus = (data18.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data18.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber18').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus18').text(flangeStatus);
                    $('#line18').text(data18.Line);
                }
            }
        });
    }
        function fetchData19() {
        $.ajax({
            url: "{{ route('data.visual19') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data19) {
                if (data19) {
                    var flangeStatus = (data19.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data19.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber19').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus19').text(flangeStatus);
                    $('#line19').text(data19.Line);
                }
            }
        });
    }
        function fetchData20() {
        $.ajax({
            url: "{{ route('data.visual20') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data20) {
                if (data20) {
                    var flangeStatus = (data20.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data20.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber20').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus20').text(flangeStatus);
                    $('#line20').text(data20.Line);
                }
            }
        });
    }
        function fetchData21() {
        $.ajax({
            url: "{{ route('data.visual21') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data21) {
                if (data21) {
                    var flangeStatus = (data21.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data21.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber21').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus21').text(flangeStatus);
                    $('#line21').text(data21.Line);
                }
            }
        });
    }
        function fetchData22() {
        $.ajax({
            url: "{{ route('data.visua22') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (dat22) {
                if (data22) {
                    var flangeStatus = (data22.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data22.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber22').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus22').text(flangeStatus);
                    $('#line22').text(data22.Line);
                }
            }
        });
    }
        function fetchData23() {
        $.ajax({
            url: "{{ route('data.visual23') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data23) {
                if (data23) {
                    var flangeStatus = (data23.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data23.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber23').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus23').text(flangeStatus);
                    $('#line23').text(data23.Line);
                }
            }
        });
    }
        function fetchData24() {
        $.ajax({
            url: "{{ route('data.visual24') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data24) {
                if (data24) {
                    var flangeStatus = (data24.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data24.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber24').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus24').text(flangeStatus);
                    $('#line24').text(data24.Line);
                }
            }
        });
    }
        function fetchData25() {
        $.ajax({
            url: "{{ route('data.visual25') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data25) {
                if (data25) {
                    var flangeStatus = (data25.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data25.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber25').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus25').text(flangeStatus);
                    $('#line25').text(data25.Line);
                }
            }
        });
    }
        function fetchData26() {
        $.ajax({
            url: "{{ route('data.visual26') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data26) {
                if (data26) {
                    var flangeStatus = (data26.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data26.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber26').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus26').text(flangeStatus);
                    $('#line26').text(data26.Line);
                }
            }
        });
    }
        function fetchData27() {
        $.ajax({
            url: "{{ route('data.visual27') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data27) {
                if (data27) {
                    var flangeStatus = (data27.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data27.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber27').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus27').text(flangeStatus);
                    $('#line27').text(data27.Line);
                }
            }
        });
    }
        function fetchData28() {
        $.ajax({
            url: "{{ route('data.visual28') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data28) {
                if (data28) {
                    var flangeStatus = (data28.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data28.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber28').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus28').text(flangeStatus);
                    $('#line28').text(data28.Line);
                }
            }
        });
    }
        function fetchData29() {
        $.ajax({
            url: "{{ route('data.visual29') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data29) {
                if (data29) {
                    var flangeStatus = (data29.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data29.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber29').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus29').text(flangeStatus);
                    $('#line29').text(data29.Line);
                }
            }
        });
    }
        function fetchData30() {
        $.ajax({
            url: "{{ route('data.visual30') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data30) {
                if (data30) {
                    var flangeStatus = (data30.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data30.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber30').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus30').text(flangeStatus);
                    $('#line30').text(data30.Line);
                }
            }
        });
    }
        function fetchData31() {
        $.ajax({
            url: "{{ route('data.visual31') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data31) {
                if (data31) {
                    var flangeStatus = (data31.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data31.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber31').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus31').text(flangeStatus);
                    $('#line31').text(data31.Line);
                }
            }
        });
    }
        function fetchData32() {
        $.ajax({
            url: "{{ route('data.visua32') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data32) {
                if (data32) {
                    var flangeStatus = (data32.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data32.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber32').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus32').text(flangeStatus);
                    $('#line32').text(data32.Line);
                }
            }
        });
    }
        function fetchData33() {
        $.ajax({
            url: "{{ route('data.visual33') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data33) {
                if (data33) {
                    var flangeStatus = (data33.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data33.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber33').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus33').text(flangeStatus);
                    $('#line33').text(data33.Line);
                }
            }
        });
    }
        function fetchData34() {
        $.ajax({
            url: "{{ route('data.visual2]34') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data34) {
                if (data34) {
                    var flangeStatus = (data34.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data34.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber34').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus34').text(flangeStatus);
                    $('#line34').text(data34.Line);
                }
            }
        });
    }
        function fetchData35() {
        $.ajax({
            url: "{{ route('data.visual35') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data35) {
                if (data35) {
                    var flangeStatus = (data35.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data35.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber35').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus35').text(flangeStatus);
                    $('#line35').text(data35.Line);
                }
            }
        });
    }
        function fetchData36() {
        $.ajax({
            url: "{{ route('data.visual36') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data36) {
                if (data36) {
                    var flangeStatus = (data36.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data36.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber36').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus36').text(flangeStatus);
                    $('#line36').text(data36.Line);
                }
            }
        });
    }
        function fetchData37() {
        $.ajax({
            url: "{{ route('data.visual37') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data37) {
                if (data37) {
                    var flangeStatus = (data37.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data37.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber37').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus37').text(flangeStatus);
                    $('#line37').text(data37.Line);
                }
            }
        });
    }
        function fetchData38() {
        $.ajax({
            url: "{{ route('data.visual38') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data38) {
                if (data38) {
                    var flangeStatus = (data38.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data38.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber38').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus38').text(flangeStatus);
                    $('#line38').text(data38.Line);
                }
            }
        });
    }
        function fetchData39() {
        $.ajax({
            url: "{{ route('data.visual39') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data39) {
                if (data39) {
                    var flangeStatus = (data39.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data39.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber39').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus39').text(flangeStatus);
                    $('#line39').text(data39.Line);
                }
            }
        });
    }
        function fetchData40() {
        $.ajax({
            url: "{{ route('data.visual40') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data40) {
                if (data40) {
                    var flangeStatus = (data40.FlangeNon == 1) ? 'Flange' : 'Non-Flange';

                    // Format PartNumber for better display
                    var partNumberArray = data40.PartNumber.split('-');
                    var formattedPartNumber = partNumberArray.slice(0, 2).join('-');

                    // Check if the third part exists before appending it
                    if (partNumberArray.length > 2 && partNumberArray[2].length > 0) {
                        formattedPartNumber += '-' + partNumberArray[2];
                    }

                    $('#partNumber40').text(formattedPartNumber);

                    // Menetapkan teks pada elemen HTML dengan ID 'flangeStatus' dan 'line'
                    $('#flangeStatus40').text(flangeStatus);
                    $('#line40').text(data40.Line);
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
    fetchData11();
    fetchData12();
    fetchData13();
    fetchData14();
    fetchData15();
    fetchData16();
    fetchData17();
    fetchData18();
    fetchData19();
    fetchData20();
    fetchData21();
    fetchData22();
    fetchData23();
    fetchData24();
    fetchData25();
    fetchData26();
    fetchData27();
    fetchData28();
    fetchData29();
    fetchData30();
    fetchData31();
    fetchData32();
    fetchData33();
    fetchData34();
    fetchData35();
    fetchData36();
    fetchData37();
    fetchData38();
    fetchData39();
    fetchData40();
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
    setInterval(fetchData11, 3000);
    setInterval(fetchData12, 3000);
    setInterval(fetchData13, 3000);
    setInterval(fetchData14, 3000);
    setInterval(fetchData15, 3000);
    setInterval(fetchData16, 3000);
    setInterval(fetchData17, 3000);
    setInterval(fetchData18, 3000);
    setInterval(fetchData19, 3000);
    setInterval(fetchData20, 3000);
    setInterval(fetchData21, 3000);
    setInterval(fetchData22, 3000);
    setInterval(fetchData23, 3000);
    setInterval(fetchData24, 3000);
    setInterval(fetchData25, 3000);
    setInterval(fetchData26, 3000);
    setInterval(fetchData27, 3000);
    setInterval(fetchData28, 3000);
    setInterval(fetchData29, 3000);
    setInterval(fetchData30, 3000);
    setInterval(fetchData31, 3000);
    setInterval(fetchData32, 3000);
    setInterval(fetchData33, 3000);
    setInterval(fetchData34, 3000);
    setInterval(fetchData35, 3000);
    setInterval(fetchData36, 3000);
    setInterval(fetchData37, 3000);
    setInterval(fetchData38, 3000);
    setInterval(fetchData39, 3000);
    setInterval(fetchData40, 3000);

    $(document).ready(function () {
        console.log('jQuery berhasil dimuat!');
    });
</script>


</html>
