<section class="sect4 bg-info Text-white-50">
    <h1>Update les données</h1>
    <form action="/crudEdit/{{$member->id}}/updateMember" method="post" enctype="multipart/form-data" class="d-flex flex-column">
        @csrf
        @method('PUT')
        <label for="">Nom</label>
        <input type="text" value="{{$member->nom}}" name="nom" >
        <label for="">Age</label>
        <input type="number" value="{{$member->age}}" name="age">
        <label for="">genre</label>
        <input type="text" value="{{$member->genre}}" name="genre" >
        <button type="submit">Update</button>

    </form>
</section>