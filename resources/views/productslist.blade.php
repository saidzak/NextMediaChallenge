
<div class="container">
  @include('navbar')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($products as $product)            
          <tr>
            <th>{{$product->name}}</th>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->category}}</td>
            <td><img src="{{$product->image_path}}"></td>
            <td>
                <a href="{{ url('/products/show' , $product->id ) }}" class="btn btn-sm btn-info">Show</a>
                <a href="{{ url('/products/edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <a href="{{ url('/products/destroy' , $product->id ) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
          </tr>
          @endforeach

        </tbody>
      </table>
</div>