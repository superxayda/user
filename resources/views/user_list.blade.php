<h1>list user</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


{{-- @foreach ($UserDatas as $UserData)
    

<div>
    {{ $UserData->name }}
    {{ $UserData->email }}

    <a href="{{route('user.edit', $UserData->id) }}">
        <button type="button" class="btn btn-success">EDIT</button>

    </a> --}}
    
{{-- @endforeach    --}}

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($UserDatas as $UserData)

      <tr>
        <th scope="row">{{ $UserData->id }}</th>
        <td>
            {{ $UserData->name }}
                    
        </td>
        <td>
            {{ $UserData->email }}
        </td>
        <td>
            <a href="{{route('user.edit', $UserData->id) }}">
                <button type="button" class="btn btn-success">EDIT</button>
    
            </a>

        </td>
      </tr>
      @endforeach
      {{-- <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr> --}}
    </tbody>
  </table>
  
  
    <div>
        <a href="http://127.0.0.1:8000/user/create">
            <button type="button" class="btn btn-primary">Add New User</button>
    
        </a>
    </div>
    
</div>




