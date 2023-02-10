@extends('layouts.app')
@section('title')
    Homepage
@endsection

@section('content')
<div class="row w-100" >
    <div class="col" style="padding: 22px;padding-top: 0">
        <div class="jumbotron shadowBlack" style="padding: 25px;min-height: 241px;max-height: 241px">
            <h4 class="display-5">Welecome to MCB Bank</h4>
            <p  class="lead alert alert-warning"><b>Latest Notification:</b>
                hi</p>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide my-2 rounded-1 shadowBlack" data-ride="carousel" >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/1.jpg" alt="First slide" style="max-height: 250px">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/2.jpg" alt="Second slide" style="max-height: 250px">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/3.jpg" alt="Third slide" style="max-height: 250px">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="col">
        <div class="row" style="padding: 22px;padding-top: 0">
            <div class="col">
                <div class="card shadowBlack ">
                    <img class="card-img-top" src="images/acount.jpg" style="max-height: 155px;min-height: 155px" alt="Card image cap">
                    <div class="card-body">
                        <a href="accounts.html" class="btn btn-outline-success btn-block">Account Summary</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadowBlack ">
                    <img class="card-img-top" src="images/transfer.jpg" alt="Card image cap" style="max-height: 155px;min-height: 155px">
                    <div class="card-body">
                        <a href="transfer.html" class="btn btn-outline-success btn-block">Transfer Money</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding: 22px">
            <div class="col">
                <div class="card shadowBlack ">
                    <img class="card-img-top" src="images/bell.gif" style="max-height: 155px;min-height: 155px" alt="Card image cap">
                    <div class="card-body">
                        <a href="notice.html" class="btn btn-outline-primary btn-block">Check Notification</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadowBlack ">
                    <img class="card-img-top" src="images/contacts.gif" alt="Card image cap" style="max-height: 155px;min-height: 155px">
                    <div class="card-body">
                        <a href="feedback.html" class="btn btn-outline-primary btn-block">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @if(Session::has('add_product_success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>{{Session::get('add_product_success')}}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(Session::has('delete_product_success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <p>{{Session::get('delete_product_success')}}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(Session::has('edit_product_success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <p>{{Session::get('edit_product_success')}}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @foreach($products as $product)
        <div class="card w-50 mx-auto my-5 text-dark">
            <div class="card-header">
                <h1 class="text-center">{{$product->product_name}} - {{$product->product_category}}</h1>
            </div>
            <div class="card-body">
                <p class="text-center fs-3">{{$product->product_description}}</p>
                <a href="/produit/{{$product->id}}">Voir en détail</a>
            </div>
            <div class="card-footer">
                <p class="text-end text-primary text-bolder fs-2 fw-bold">{{$product->product_price}} €</p>
            </div>
        </div>
    @endforeach
    {{$products->links()}}
@endsection

