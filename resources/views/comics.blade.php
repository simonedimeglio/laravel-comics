@extends('templates.base')

@section('title', 'Comics')

@section('content')
<!-- DUMP FOR DEBUG -->
<!-- @dump($comicsList[$arrayIndex]) -->

<div class="jumbo"></div>
<div class="sub-jumbo"></div>
<div class="container-fluid single-comics-content">
    <div class="container">
        <img class="current-comics-img" src="{{ $comicsList[$arrayIndex]['thumb'] }}">
        <div class="row">
            <div class="col-9">
                <div class="title">{{ $comicsList[$arrayIndex]['title'] }}</div>
                <div class="price-box">
                    <div class="price-box-sx">
                        <div class="price-section">U.S. Price: <span>{{ $comicsList[$arrayIndex]['price'] }}</span></div>
                        <div class="availability">AVAILABLE</div>
                    </div>
                    <div class="price-box-dx">Check Availability</div>
                </div>
                <p>{{ $comicsList[$arrayIndex]['description'] }}</p>

            </div>
            <div class="col-3">
                <div class="adv-txt">
                    ADVERTISEMENT
                </div>
                <div class="adv-img">
                    <img src="/images/adv.jpg" alt="Adv">
                </div>
            </div>
        </div>
    </div>
    <div class="talent-and-specs">
        <div class="row">
            <div class="col talent">
                <h1>Talent</h1>
                <div class="row">
                    <div class="col key">Art By: </div>
                    <div class="col value">
                        @foreach($comicsList[$arrayIndex]['artists'] as $artist)
                        {{ $artist }},
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col key">Written by: </div>
                    <div class="col value">
                        @foreach($comicsList[$arrayIndex]['writers'] as $writers)
                        {{ $writers }},
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col specs">
                <h1>Specs</h1>
                <div class="row">
                    <div class="col key">Series: </div>
                    <div class="col value">
                        {{ $comicsList[$arrayIndex]['series'] }}
                    </div>
                </div>
                <div class="row">
                    <div class="col key">U.S. Price: </div>
                    <div class="col custom-value">
                        {{ $comicsList[$arrayIndex]['price'] }}
                    </div>
                </div>
                <div class="row">
                    <div class="col key">On Sale Date: </div>
                    <div class="col custom-value">
                        {{ $comicsList[$arrayIndex]['sale_date'] }}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</div>
@endsection