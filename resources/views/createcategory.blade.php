<div class="card">
    <div class="card-body">
    
    
      <form action="{{url('/categories/store')}}" method="post">
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
                          <label>Parent</label>
                          <select class="form-control" name="parent">

                            <option value="Null">Null</option>
                            @foreach ($categories as $category)            
                              <option value="{{$category->name}}">{{$category->name}}</option>
                            @endforeach

                          </select>  
                        </div>

                </div>
            </div>
    
            
            <div class="form-row">
              <input type="submit" class="btn btn-info col-md-12" value="Save">
            </div>
          </form>
    
    
          
    </div>
    </div>