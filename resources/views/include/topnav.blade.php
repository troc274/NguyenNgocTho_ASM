<header class="header-customize">
    <div class="container" id="header-normal">
        <nav class="navbar navbar-expand-lg nav-custom-center"><a class="navbar-brand" href="#"> <img src="{{ asset('./img/logo/logo.png')}}" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header" aria-controls="header" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse row" id="header">
            <div class="col-5 d-inline-flex justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item catalog-item"><a class="nav-link" href="{{ route('home') }}">Trang chủ</a></li>
                @foreach ($menu as $key => $item)
                    <li class="nav-item catalog-item" ><a class="nav-link" href="{{route('home.product', ['id' => $item->id, "category"=> $item->slug()]) }}"> {{$item->name}}</a></li>
                   <?php  if($key == 1) break; ?>
                @endforeach
            </ul>
            </div>
            <div class="col-2"></div>
            <div class="col-5 d-inline-flex justify-content-start">
            <ul class="navbar-nav navbar-right">
                <li class="nav-item header-custimize-li"></li>
                @foreach ($menu as $key => $item)
                    <?php  if($key <= 1) continue; ?>
                    <li class="nav-item catalog-item" ><a class="nav-link" href="{{route('home.product', ['id' => $item->id, "category"=> $item->slug()]) }}"> {{$item->name}}</a></li>
                @endforeach
                <li class="nav-item catalog-item" data-target="#catalog-section-6"><a class="nav-link" href="{{route('home.product.take')}}">Bảng giá</a></li>
            </ul>
            </div>
        </div>
        </nav>
    </div>
    <div id="header-mobile"></div>
</header>