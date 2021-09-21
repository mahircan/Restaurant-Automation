<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Menü</h6>
                    <h2>Sizin için hazırladığımız güzel tatlar</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">

                @foreach($data as $data)

                <div class="item">
                    <div style="background-image: url('/foodimage/{{$data->image}}');"
                         class='card'>

                        <div class='info'>
                            <h1 class='title'>{{$data->title}}</h1>
                            <p class='description'>{{$data->description}}</p>
                            <div class="main-text-button">
                                <div class="scroll-to-section"><a href="#reservation">Rezervasyon Yap <i class="fa fa-angle-down"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->
