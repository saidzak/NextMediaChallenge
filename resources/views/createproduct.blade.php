<div class="card">
    <div class="card-body">
    
    
      <form action="{{url('/products/store')}}" method="post">
        @csrf
            <div class="card mb-3 ">
                <div class="card-header ">
                  Product Informations
                </div>
                <div class="card-body">

                        <div class="col-md-6 mb-3">
                          <label>Name</label>
                          <input type="text" class="form-control" name="name">
                        </div>

                        <div class="col-md-6 mb-3">
                          <label>Description</label>
                          <input type="text" class="form-control" name="description">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Price</label>
                            <input type="number" step="0.01" class="form-control" name="price">
                        </div>

                        <div class="col-md-6 mb-3">
                          <label>Category</label>
                          @foreach ($categories as $category)
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="{{$category->name}}" name="category">
                              <label class="form-check-label">{{$category->name}}</label>
                            </div>
                          @endforeach
                      </div>

                        <div class="col-md-6 mb-3">
                            <label>Image</label>
                            <input class="form-control" type="file" name="image" accept="image/x-png,image/gif,image/jpeg">
                          </div>
                </div>
            </div>
    
            
            <div class="form-row">
              <input type="submit" class="btn btn-info col-md-12" value="Save">
            </div>
          </form>
    
    
          
    </div>
    </div>