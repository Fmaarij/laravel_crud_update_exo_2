<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>home page</title>
</head>

<body>

    <div class="row">
        <section class="sect1 col">
            <h1>DB all</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Age</th>
                    <th>genre</th>
                </tr>
                @foreach ($members as $member)
                    <tr>
                        <td>{{ $member->id }}</td>
                        <td>{{ $member->nom }}</td>
                        <td>{{ $member->age }}</td>
                        <td>{{ $member->genre }}</td>
                    </tr>
                @endforeach
            </table>
        </section>
        <hr>
        <section class="sect2 col">
            <h1>Chercher par genre</h1>
            <label for="" name="genre">Genre</label>
            <select id="">
                <option value="homme" name="homme"><a href="{{ route('homme') }}"> Homme</a></option>
                <option value="femme" name='femme'><a href="{{ route('femme') }}">Femme</a></option>
            </select>

            <table>
                <tr>
                    <th>Nom</th>
                    <th>genre</th>
                </tr>
                {{-- {{dd($members)}} --}}
                @foreach ($members as $item)
                    @if ($item->genre == 'Homme')
                        <tr>
                            <td>{{ $item->nom }}</td>
                            <td>{{ $item->genre }}</td>
                        </tr>
                    {{-- @elseif($item->genre == 'Femme')
                        <tr>
                            <td>{{ $item->nom }}</td>
                            <td>{{ $item->genre }}</td>
                        </tr> --}}
                    @endif
                @endforeach
            </table>
        </section>
    </div>

</body>

</html>





{{--
<hr>
