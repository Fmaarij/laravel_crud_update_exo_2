<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Page</title>
</head>

<body>
    <div class="d-flex flex-row  gap-3 ">
        <section class="sect4 bg-info Text-white-50">
            <h1>Update les données</h1>
            <form action="/crudEdit/{{ $member->id }}/updateMember" method="post" enctype="multipart/form-data"
                class="d-flex flex-column">
                @csrf
                @method('PUT')
                <label for="">Nom</label>
                <input type="text" value="{{ $member->nom }}" name="nom">
                <label for="">Age</label>
                <input type="number" value="{{ $member->age }}" name="age">
                <label for="">genre</label>
                <input type="text" value="{{ $member->genre }}" name="genre">
                <button type="submit">Update</button>

            </form>
        </section>
    </div>
</body>

</html>
