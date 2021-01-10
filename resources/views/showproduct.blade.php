<div class="container">
        <h1> Product Informations </h1>
        <p><b> Name : </b> {{$product->name}}</p>
        <p><b> Description : </b> {{$product->description}}</p>
        <p><b> Price : </b> {{$product->price}}</p>
        <p><b> Image : </b></p>
        <img src="{{$product->image_path}}" alt="">
</div>