  <!-- Start Featured Product -->
 
<section class="bg-success">
    <div class="container py-5">
    <div class="row mt-5 container ">
                    <div class="col-md-6 ">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">All</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Men's</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none" href="#">Women's</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none" href="#">Electronics</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 pb-4">
                        <div class="d-flex">
                            <select class="form-control">
                                <option>Featured</option>
                                <option>A to Z</option>
                                <option>Item</option>
                            </select>
                        </div>
                    </div>
                </div>
        </div>
        
            
</section>

<section class="bg-success">
    <div class="container ">
        <div class="row text-center py-3 text-white">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Featured Product</h1>
                <p>
                Here you can discover some of the Hottest products on the market! We're always on the lookout for the latest and greatest items, and we're excited to share them with you. Check out our featured products below:
                </p>
            </div>
        </div>
        <div class="row">




    <!-- Database connection start Here -->
            @foreach ($products as $product)
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100" width="300">
                    <a href="{{route('product')}}">
                    <img src="{{asset('storage/products'.'/'.$product->image)}}" height="400"width="100%">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                            </li>
                           </li>
                        </ul>
                        <a href="{{route('product')}}" class="h2 text-decoration-none text-dark"></a>
                        <p class="card-text">
                        
                        </p>
                        <p class=" text-danger text-bold">Price  /- BDT</p>
                        <p class="text-muted">Reviews (24)</p>
                    </div>
                </div>
            </div>
            @endforeach;

</section>


<!-- End Featured Product -->