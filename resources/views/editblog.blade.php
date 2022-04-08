<h2>Edit Forms</h2>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<form action="{{ route('blog.update', $blogView->id) }}" method="POST">
    @csrf
  <div class="form-group">
    
    <input type="text" id="fedittitle" name="fedittitle" ><br>
    <input type="hidden" name="_method" value="PUT">
    <input type="text" id="feditcontent" name="feditcontent"><br><br>
    <button type="submit" class="btn btn-info">SUBMIT</button>
</div>
</form> 

<form action="{{ route('blog.destroy',$blogview->id ) }}" method="POST">
  <div class="form-group">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" class="btn btn-danger">DELETE</button>
</div>
</form>
