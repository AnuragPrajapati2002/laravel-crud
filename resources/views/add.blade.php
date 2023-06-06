<h3>Add User</h3>
<form action="/saveData" method="POST">
   
    @csrf
    <label>Name</label>
        <input type="text" name="name" placeholder="Enter the name"/><br>
        <span>@error('name'){{$message}}@enderror</span><br><br>
    <label>Surname</label>
        <input type="text" name="surname" placeholder="Enter the surname" /><br>
        <span>@error('surname'){{$message}}@enderror</span><br><br>
    <button type="submit">Add</button>
 </form>