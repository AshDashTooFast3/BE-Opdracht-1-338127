@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allergenen info</title>
</head>

<body class="mt-4">
    <div class="container d-flex justify-content-center ">

        <div class="col-md-10">

            <h1>{{ $title }}</h1>

            @if (session('success'))
                <div class="alert alert-success alert-dimissable fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" aria-label="sluiten" data-bs-dismiss="alert"></button>
                </div>
                <meta http-equiv="refresh" content="3;url={{ route('home') }}">
            @endif

            <!-- Leverancier info als normale tekst boven de tabel -->
            <p>
                @forelse ($productenInfo as $PRODinfo)
                    Naam: {{ $PRODinfo->Productnaam }}<br>
                    Barcode: {{ $PRODinfo->ProductBarcode }}
                    @break
                @empty
                    Geen product informatie beschikbaar.
                @endforelse
            </p>

            <table class="table table-hover table-striped">
                <thead>
                    <th>Naam</th>
                    <th>Omschrijving</th>
                </thead>
                <tbody>
                    @forelse ($allergenenInfo as $AGinfo)
                        <tr>
                            <td>{{ $AGinfo->Naam }}</td>
                            <td>{{ $AGinfo->Omschrijving }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Geen allergenen bekend</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
          <a class="btn btn-primary" href="{{ route('home') }}">Terug naar alle producten</a>
        </div>
    </div>
</body>

</html>