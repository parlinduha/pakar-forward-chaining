<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>History Report</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
        }

        .header h3 {
            margin-left: 20px;
        }

        .address {
            text-align: right;
            margin-bottom: 20px;
        }

        img {
            width: 50px !important;
            height: 50px !important;
        }

        .date {
            text-align: right;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid hsl(0, 0%, 24%);
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #323030;
            color: #ffffff;
        }

        .footer {
            text-align: center;
            font-style: italic;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="header" style="display: flex; align-items: center;">
        <img src="C:\laragon\www\pakar-forward-chaining\public\images\logo.png" alt="Logo"
            style="width: 50px; height: 50px;">
        <h3>PEMERINTAH PROVINSI DAERAH KHUSUS IBUKOTA JAKARTA<br>DINAS PENDIDIKAN DASAR<br>SDN PELA 03 PAGI</h3>
        <span>Jl. Pondok Karya IX No.9 A, Pela Mampang, Jakarta 12720</span>
    </div>
    <hr>

    <div class="date">
        Jakarta, {{ now()->format('d M Y') }} <br>
    </div>

    Nama pengguna<span style="color: #676e71"> {{ $formattedActivity['name'] }} </span> <br>
    Email pengguna<span style="color: #676e71"> {{ $formattedActivity['email'] }} </span><br>
    <p>Dengan hormat,</p>
    <p>Berdasarkan gejala yang telah anda pilih maka untuk hasil diagnosa anda adalah sebagai
        berikut : </p>
    <!-- ... Rest of your HTML ... -->

    <h5>Hasil Diagnosa</h5>
    <table>
        <thead style="border: 1px solid #000; padding: 8px; text-align: left;"ead>
            <tr>
                <th style="border: 1px solid #000; padding: 8px; text-align: left;">Name</th>
                <th style="border: 1px solid #000; padding: 8px; text-align: left;">Email</th>
                <th style="border: 1px solid #000; padding: 8px; text-align: left;">Hasil</th>
                <th style="border: 1px solid #000; padding: 8px; text-align: left;">Solusi </th>
                <th style="border: 1px solid #000; padding: 8px; text-align: left;">Waktu</th>
            </tr>
        </thead>
        <tbody>
            @if ($formattedActivity)
                <tr>
                    <td style="border: 1px solid #000; padding: 8px; text-align: left;">
                        {{ $formattedActivity['name'] }}</td>
                    <td style="border: 1px solid #000; padding: 8px; text-align: left;">
                        {{ $formattedActivity['email'] }}</td>
                    <td style="border: 1px solid #000; padding: 8px; text-align: left;">
                        {{ $formattedActivity['hasil'] }}</td>
                    <td style="border: 1px solid #000; padding: 8px; text-align: left;">
                        {{ $formattedActivity['solusi_kerusakan'] }}</td>
                    <td style="border: 1px solid #000; padding: 8px; text-align: left;">
                        {{ \Carbon\Carbon::parse($formattedActivity['created_at'])->format('d M Y') }}
                    </td>
                </tr>
            @else
                <tr>
                    <td style="border: 1px solid #000; padding: 8px; text-align: left;" colspan="5">No data
                        available.</td>
                </tr>
            @endif
        </tbody>
    </table>

    <!-- ... Rest of your HTML ... -->

    <h5>Gejala Anda</h5>
    <table>
        <thead style="border: 1px solid #000; padding: 8px; text-align: left;"ead>
            <tr>
                <th style="border: 1px solid #000; padding: 8px; text-align: left;">Nama Gejala</th>
            </tr>
        </thead>
        <tbody>
            @if ($formattedActivity && isset($formattedActivity['selectedGejalaNames']))
                @foreach ($formattedActivity['selectedGejalaNames'] as $gejala)
                    <tr>
                        <td style="border: 1px solid #000; padding: 8px; text-align: left;">{{ $gejala }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td style="border: 1px solid #000; padding: 8px; text-align: left;">No gejala selected.</td>
                </tr>
            @endif
        </tbody>
    </table>

    <!-- ... Rest of your HTML ... -->

    <div class="footer">
        This report was generated on {{ now()->format('Y-m-d H:i:s') }}
    </div>
</body>

</html>
