<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Kontak</title>
</head>

<body>
    <h2>Pesan Kontak Baru</h2>
    <p><strong>Nama:</strong> {{ $name ?? 'Tidak ada nama' }}</p>
    <p><strong>Email:</strong> {{ $email ?? 'Tidak ada email' }}</p>
    <p><strong>Pesan:</strong></p>
    <p>{{ $messageContent ?? 'Tidak ada pesan' }}</p>
</body>

</html>
