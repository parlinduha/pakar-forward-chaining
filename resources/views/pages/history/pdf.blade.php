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
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
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
    <div class="header">
        History Report
    </div>

    <div class="address">
        <img src="C:\laragon\www\pakar-forward-chaining\public\images\logo.png" alt="Logo"><br>
        <b style="color:cornflowerblue">SDN PELA Mampang 03 Pagi Jakarta</b> <br>
        <i>Jl. Pondok Karya IX No.9 A, RT.8/RW.4, Pela Mampang, <br> Kec. Mampang Prpt., Kota Jakarta Selatan, <br>
            Daerah
            Khusus
            Ibukota Jakarta 12720</i>
    </div>

    <div class="date">
        Date: {{ now()->format('Y-m-d') }}
    </div>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Hasil</th>
                <th>Solusi Kerusakan</th>
                <th>Create</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formattedActivities as $activity)
                <tr>
                    <td>{{ $activity['name'] }}</td>
                    <td>{{ $activity['email'] }}</td>
                    <td>{{ $activity['hasil'] }}</td>
                    <td>{{ $activity['solusi_kerusakan'] }}</td>
                    <td>{{ $activity['created_at'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        This report was generated on {{ now()->format('Y-m-d H:i:s') }}
    </div>
</body>

</html>
