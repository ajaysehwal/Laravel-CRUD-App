<h1>update data</h1>
<form action="/edit" method="POST">
  
    <input type="text" name='name' placeholder="Enter your name"  value={{$data1->name}}> <br>
    <br>
    @csrf
    <input type="hidden" name='id' value={{$data1->id}}>
    <input type="text" name='email' placeholder="Enter your email" value={{$data1->email}}    > <br>
    <br> <input type="text" name='address' placeholder="Enter your address" value={{$data1->address}}
    > <br>
    <br>
    <input type="submit" > <br>
    <br>

</form>