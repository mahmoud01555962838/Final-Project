<div class="custom-product">
     <div class="col-sm-4">
        <div class="trending-wrapper">
            @foreach($products as $item)
            <div class="searched-item">
              <img class="trending-image" src="{{$item['photo']}}">
              <div class="">
                <h2>{{$item['name']}}</h2>
                <h5>{{$item['description']}}</h5>
              </div>
            </div>
            @endforeach
          </div>
     </div>
</div>
