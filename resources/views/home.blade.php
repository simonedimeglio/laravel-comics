@extends('templates.base')

@section('title', 'HomePage')

@section('content')
    <div class="jumbo"></div>
    <div class="container-fluid home-page-content">
        <div class="container">
            <div class="current-series">CURRENT SERIES</div>
                <div class="row">
                    @foreach($comicsList as $singleComics) 
                    <div class="col-2 comics-box">
                        <a href="{{ route('comics', [ 'id' => $loop->iteration ]) }}">
                            <div class="comics-details">
                                <img class="comics-thumb" src="{{ $singleComics['thumb'] }}" />
                                <div class="comics-title">{{ $singleComics["title"] }}</div>
                            </div>
                        </a>
                    </div>            
                    @endforeach
                </div>
            <div class="load-more-button">LOAD MORE</div>
        </div>
        <div class="mid-bar">
            <div class="container">
                <ul>
                    <li>
                        <img src="/images/buy-comics-digital-comics.png" alt="Digital Comics">
                        <span>DIGITAL COMICS</span>
                    </li>
                    <li>
                        <img src="/images/buy-comics-merchandise.png" alt="DC Merchandise">
                        <span>DC MERCHANDISE</span>
                    </li>
                    <li>
                        <img src="/images/buy-comics-subscriptions.png" alt="Subscription">
                        <span>SUBSCRIPTION</span>
                    </li>
                    <li>
                        <img src="/images/buy-comics-shop-locator.png" alt="Comic Shop Locator">
                        <span>COMIC SHOP LOCATOR</span>
                    </li>
                    <li>
                        <img src="/images/buy-dc-power-visa.svg" alt="DC Power Visa">
                        <span>DC POWER VISA</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection