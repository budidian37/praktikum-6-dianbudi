<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menu Makanan</title>
    <style>
        table {
            border-collapse: collapse;
            border: 2px solid black;
        }

        th,
        td {
            border: 2px solid black;
        }
        .submit{
            margin-top: 10px;
            margin-left: 10px;
            height: 30px;
            width: 150px;
            background-color: grey;
        }
        label{
            padding-left: 55px;
        }

        nu
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Makanan</th>
            <th>Minuman</th>
        </tr>
        <tr>
            <td>1. Nasi & Ikan Nila Bakar</td>
            <td>1. Es Teh</td>
        </tr>
        <tr>
            <td>2. Nasi & Ikan Lele Bakar</td>
            <td>2. Es Jeruk</td>
        </tr>
        <tr>
            <td>3. Nasi & Ayam Goreng</td>
            <td>3. Jeruk Panas</td>
        </tr>
        <tr>
            <td>4. Nasi & Bebek Goreng</td>
            <td>4. Teh Panas</td>
        </tr>
    </table>

    <form action="/menu/proses" method="POST">
        @csrf
        <h3>Pilih Menu Yang Tersedia</h3>

        <label>Makanan</label>
        <br>
        <input type="text" name="makanan">
        <br>
        <label>Minuman</label>
        <br>
        <input type="text" name="minuman">
        <br>
        <input class="submit" type="submit" value="Pesan">
</body>

</html>