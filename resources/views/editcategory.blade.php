<div class="card">
    <div class="card-body">
    
    
      <form action="{{url('/categories/update',$category->id)}}" method="post">
        @csrf
            <div class="card mb-3 ">
                <div class="card-header ">
                  Edit Category Informations
                </div>
                <div class="card-body">

                        <div class="col-md-6 mb-3">
                          <label>Name</label>
                          <input type="text" class="form-control" name="name" value="{{$category->name}}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Parent</label>
                            <select class="form-control" name="parent">
  
                              @foreach ($categories as $cat)
                                @if ($cat->name != $category->name)
                                   <option value="{{$cat->name}}">{{$cat->name}}</option> 
                                @endif            
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