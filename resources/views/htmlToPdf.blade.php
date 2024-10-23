<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
</head>
<body>
    <button id="download">Download PDF</button>
    <div id="content">
        <h1>Laporan Bulanan</h1>
        <p>Ini adalah laporan bulanan untuk bulan Oktober 2024.</p>
    </div>

    <script>
        document.getElementById('download').addEventListener('click', function () {
            var element = document.getElementById('content'); // Elemen yang akan dikonversi
            html2pdf()
                .from(element)
                .save(); // Menyimpan PDF dengan nama default
        });
    </script>
</body>
</html>
