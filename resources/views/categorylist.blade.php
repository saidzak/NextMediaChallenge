
<div class="container">
    @include('navbar')
      <table class="table">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Parent</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
  
              @foreach ($categories as $category)            
            <tr>
              <th>{{$category->name}}</th>
              <td>{{$category->parent}}</td>
              <td>
                  <a href="{{ url('/categories/show' , $category->id ) }}" class="btn btn-sm btn-info">Show</a>
                  <a href="{{ url('/categories/edit', $category->id) }}" class="btn btn-sm btn-warning">Edit</a>
                  <a href="{{ url('/categories/destroy' , $category->id ) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
            </tr>
            @endforeach
  
          </tbody>
        </table>
  </div>