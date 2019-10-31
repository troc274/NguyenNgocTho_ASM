@extends('layouts.site')
@section('content')
<section class="home-slider home-slider-background">
    <figure class="swiper-slide item"><img src="./img/banner/banner.jpg">
      <figcaption>
        <div class="title-banner text-center Mali">ROSY BRIDAL</div>
        <div class="title-sub text-center Mali">CƯỚI LÀ PHẢI "BEAUTI"</div>
        <div class="line"></div>
        <div class="content-banner text-center">Nếu màu hồng là thể hiện cho tình yêu và lãng mạng. Thì Rosy tượng trưng cho sự diệu dàng, êm đềm và hạnh phúc của cập đôi vợ chồng mới cưới. Bền lâu và ấm áp sau này</div>
      </figcaption>
    </figure>
  </section>
  <!-- Dịch vụ-->
  <section class="home-clients home-services-background" id="catalog-section-2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="home-services-title">
            <h3 class="home-about-us-title">Dịch vụ</h3>
            <div><img class="home-about-us-img-title" src="./img/flower-line.png" alt=""></div>
          </div>
          <div class="row home-services-option">
            <div class="col-9 col-sm-12 col-md-6 col-lg-4 text-center home-services-item home-services-item-1">
              <figure><img src="./img/bride-dress.png" alt="Áo cưới"/></figure>
              <div>
                <p>Áo cưới</p>
                <div class="home-services-decription">{{$content[0]->content}}</div>
              </div>
            </div>
            <div class="col-9 col-sm-12 col-md-6 col-lg-4 text-center home-services-item home-services-item-2">
              <figure><img src="./img/make-up.png" alt="Trang điểm"/></figure>
              <div>
                <p>Trang điểm</p>
                <div class="home-services-decription">{{$content[1]->content}}</div>
              </div>
            </div>
            <div class="col-9 col-sm-12 col-md-6 col-lg-4 text-center home-services-item home-services-item-3">
              <figure><img src="./img/cut-hair.png" alt="Tạo mẫu tóc"/></figure>
              <div>
                <p>Tạo mẫu tóc</p>
                <div class="home-services-decription">{{$content[2]->content}}</div>
              </div>
            </div>
            <div class="col-9 col-sm-12 col-md-6 col-lg-4 text-center home-services-item home-services-item-4">
              <figure><img src="./img/camera.png" alt="Chụp ảnh"/></figure>
              <div>
                <p>Chụp ảnh</p>
                <div class="home-services-decription">{{$content[3]->content}}</div>
              </div>
            </div>
            <div class="col-9 col-sm-12 col-md-6 col-lg-4 text-center home-services-item home-services-item-5">
              <figure><img src="./img/cover-image.png" alt="Sửa ảnh"/></figure>
              <div>
                <p>Sửa ảnh</p>
                <div class="home-services-decription">{{$content[4]->content}}</div>
              </div>
            </div>
            <div class="col-9 col-sm-12 col-md-6 col-lg-4 text-center home-services-item home-services-item-6">
              <figure><img src="./img/wedding-rings.png" alt="Dịch vụ khác"/></figure>
              <div>
                <p>Dịch vụ khác</p>
                <div class="home-services-decription">{{$content[5]->content}}</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Váy cưới-->
  <section class="home-demo-dress" id="catalog-section-3">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="home-demo-dress-title">
            <h3 class="home-about-us-title">Trang phục</h3>
            <div><img class="home-about-us-img-title" src="./img/flower-line.png" alt=""></div>
          </div>
          <div class="row home-demo-dress-option justify-content-center">
            @foreach ($title as $key => $item)
              <div class="col-4 col-md-2 home-demo-dress-item {{$key==0?"actived":""}}" data-taget="#collapse-demo-dress-id-{{$key+1}}">{{$item}}</div>
            @endforeach
            {{-- <div class="col-4 col-md-2 home-demo-dress-item" data-taget="#collapse-demo-dress-id-2">Vest nam</div>
            <div class="col-4 col-md-2 home-demo-dress-item" data-taget="#collapse-demo-dress-id-3">Bê tráp</div>
            <div class="col-4 col-md-2 home-demo-dress-item" data-taget="#collapse-demo-dress-id-4">Phụ kiện</div> --}}
          </div>
          <div class="row">
            <div class="col">
              @foreach ($product as $key => $value)
                <div class="collapse-demo-dress collapse {{$key==0?'show':''}}" id="collapse-demo-dress-id-{{$key+1}}">
                  <div class="row justify-content-center products">
                    @foreach ($value as $item)
                      <div class="col-12 col-sm-6 col-md-3 col-lg-3"><a href="{{ route('home.product.detail', ["id"=>$item->id]) }}">
                        <figure data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-easing="ease-out-cubic" data-aos-anchor-placement="center-bottom">
                          <div class="img-related"><img src="{{ asset($item->image) }}" alt="bride"/></div>
                          <figcaption>
                            <h6 class="name">{{ $item->name }}</h6>
                            <h6 class="price">{{ $item->price() }}<span>VNĐ</span></h6>
                          </figcaption>
                        </figure></a>
                      </div>
                    @endforeach
                  </div>
                </div>
              @endforeach
            </div>
          </div>
          <div class="home-demo-dress-more" id="see-more"><a href="{{route('home.product', ['id' => $product[0][0]->category_id, "category"=>$product[0][0]->category->slug()]) }}">Xem thêm</a></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Thư viện-->
  <section class="home-library" id="catalog-section-4">
    <div class="container-fluid home-library-img">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="home-library-title">
            <h3 class="home-about-us-title">Thư viện</h3>
            <div><img class="home-about-us-img-title" src="./img/flower-line.png" alt=""></div>
          </div>
          <div class="row library-container">
            @foreach ($photos as $item)
              <div class="col-4 col-sm-4 col-md-4 col-lg-2 home-library-img-item" data-target="0" href="{{asset( $item->content )}}"><a class="home-library-shown">
                <figure><img src="{{asset( $item->content )}}" alt="library"/>
                  <div class="home-library-hover">
                    <div></div>
                  </div>
                </figure></a>
              </div>
            @endforeach
          </div>
          <div class="home-demo-dress-more" id="see-more"><a href="">Xem thêm</a></div>
        </div>
      </div>
    </div>
  </section>
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>
      <div class="pswp__ui pswp__ui--hidden">
        <div class="pswp__top-bar">
          <div class="pswp__counter"></div>
          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
          <button class="pswp__button pswp__button--share" title="Share"></button>
          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div>
        </div>
        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
        <div class="pswp__caption">
          <div class="pswp__caption__center"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Câu chuyện tình yêu-->
  <section class="home-take" id="catalog-section-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="home-love-story-title">
            <h3 class="home-about-us-title">Bản giá dịch vụ chụp hình</h3>
            <div><img class="home-about-us-img-title" src="./img/flower-line.png" alt=""></div>
          </div>
          <div class="row justify-content-center">
            @foreach ($takes as $item)
              <div class="col-sm-9 col-md-4 home-story-blog mb-4"><a class="take-photo" href="#">
                <figure><img src="{{ asset($item->image) }}" alt="image blog 1"></figure>
                <figcaption>
                  <h4 class="text-center">{{ $item->name }}</h4>
                  <h6 class="price">{{ $item->price() }}<span>VNĐ</span></h6>
                </figcaption></a></div>
            @endforeach
          </div>
          {{-- <div class="home-demo-dress-more" id="see-blog"><a href="{{route('home.bridal')}}">Xem thêm</a></div> --}}
        </div>
      </div>
    </div>
  </section>
  <section class="home-news home-about-us-background" id="catalog-section-1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12" id="content-height">
          <div class="home-about-us">
            <h3 class="home-about-us-title">Về chúng tôi</h3>
            <div><img class="home-about-us-img-title" src="./img/flower-line.png" alt=""></div>
          </div>
          <div class="row home-about-us-img">
            <div class="col-10 col-sm-6 col-md-5 col-lg-4 home-about-us-responsive home-about-us-responsive-left" id="content-1">
              <figure attr-name="Huyền Huyền" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="1000"><img class="home-about-us-img-item home-about-us-img-1" src="./img/person/huyenhuyen3.jpg" alt=""></figure>
            </div>
            <div class="col-12 col-sm-12 col-md-4 home-about-us-responsive-middle" data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="1300">
              <figure><img class="home-about-us-img-2" src="./img/logo/logo.png" alt=""></figure>
            </div>
            <div class="col-10 col-sm-6 col-md-6 col-lg-4 home-about-us-responsive home-about-us-responsive-right" id="content-2">
              <figure attr-name="Dũng Phạm" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="1000"><img class="home-about-us-img-item home-about-us-img-3" src="./img/person/quocdung.jpg" alt=""></figure>
            </div>
          </div>
          <div class="row home-us-total" id="home-us-total-id">
            <div class="col-10 col-sm-5 col-md-5 col-lg-4 home-about-us-content home-about-us-content-left" id="content-info-1">
              <div class="text-right">
                <p>19/11/1991</p><i class="fa fa-star-o"></i>
              </div>
              <div class="text-right">
                <p>Make-up chuyên nghiệp</p><i class="fa fa-star-o"></i>
              </div>
              <div class="text-right">
                <p>5 năm kinh nghiệm trong nghề </p><i class="fa fa-star-o"></i>
              </div>
              <div class="text-right">
                <p>Quản lí Rosy</p><i class="fa fa-star-o"></i>
              </div>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-4"></div>
            <div class="col-10 col-sm-5 col-md-5 col-lg-4 home-about-us-content home-about-us-content-right" id="content-info-2">
              <div><i class="fa fa-star-o"></i>
                <p>25/05/1991</p>
              </div>
              <div><i class="fa fa-star-o"></i>
                <p>Nhà tạo mẫu tóc</p>
              </div>
              <div><i class="fa fa-star-o"></i>
                <p>10 năm kinh nghiệm trong nghề</p>
              </div>
              <div><i class="fa fa-star-o"></i>
                <p>Từng tác nghiệp Nhật, Singapore</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Liên hệ-->
  <section class="home-contact" id="catalog-section-6">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="home-contact-title">
            <h3 class="home-about-us-title">Liên hệ</h3>
            <div><img class="home-about-us-img-title" src="./img/flower-line.png" alt=""></div>
          </div>
          <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-7 col-lg-7 home-contact-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.398483866508!2d106.72759587972352!3d10.844826701095814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527d905b818d9%3A0x2301f033189c1857!2zMjE0IMSQxrDhu51uZyBIaeG7h3AgQsOsbmgsIEhp4buHcCBCw6xuaCBDaMOhbmgsIFRo4bunIMSQ4bupYywgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1559379499992!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            <div class="col-10 col-sm-9 col-md-5 col-lg-5 home-info-contact">
              <div class="home-contact-icon home-contact-icon-map"><i class="fa fa-map-marker"></i>
                <p>214 Hiệp Bình, Hiệp Bình Chánh, Thủ Đức, TP. Hồ Chí Minh</p>
              </div>
              <div class="home-contact-icon"><i class="fa fa-envelope"></i>
                <p>rosystudio214hb@gmail.com</p>
              </div>
              <div class="home-contact-icon"><i class="fa fa-phone"></i>
                <p>(+84) 961515934 - (+84)978811934</p>
              </div>
              <div class="home-contact-icon"><i class="fa fa-facebook-square"></i>
                <p>Rosy Studio</p>
              </div>
              <div class="home-contact-btn"> 
                <button>Liên hệ ngay</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection