
<div class="container">
  @include('navbar')
  <a href="{{url('/products/sortbyname')}}" style="margin-right: 3%">Sort By Name</a>
  <a href="{{url('/products/sortbyprice')}}" >Sort By Price</a>


    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-left: 3%">Filter By Category</button>
    <ul class="dropdown-menu">

      @foreach ($categories as $category)
      <li><a class="dropdown-item" href="{{url('/products/category',$category->id)}}">{{$category->name}}</a></li>
      @endforeach
      
      
    </ul>


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
            <td><img src="{{$product->image}}"></td>
            <td>
                <a href="{{ url('/products/show' , $product->id ) }}" class="btn btn-sm btn-info">Show</a>
                <a href="{{ url('/products/edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <a href="{{ url('/products/destroy' , $product->id ) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
          </tr>
          @endforeach

        </tbody>
      </table>
</div>