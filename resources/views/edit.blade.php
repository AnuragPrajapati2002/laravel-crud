<h3>Edit User</h3>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value={{$data['id']}} />
    <label>Name</label>
        <input type="text" name="name" placeholder="Enter the name" value="{{$data['name']}}" /><br><br>
    <label>Surname</label>
        <input type="text" name="surname" placeholder="Enter the surname" value="{{$data['surname']}}" /><br><br>
    <button type="submit">Edit</button>
 </form>
