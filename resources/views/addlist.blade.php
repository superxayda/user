<h2>Add Forms</h2>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<form action="{{ route('blog.store') }}" method="post">
    @csrf
  <div>  
    <input type="text" id="ftitle" name="ftitle" ><br>
    <input type="text" id="fcontent" name="fcontent"><br><br>
    <button type="submit">add</button>
  </div>
</form> 
