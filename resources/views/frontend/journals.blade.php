@extends('layouts.app')

@section('content')
<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">المجلات المشاركة في المنصة</h1>
              
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="grid-option">
              <form>
                <select class="custom-select">
                  <option selected>الكل</option>
                  <option value="1">من الاجدد للاقدم</option>
                  <option value="2">نسبة القبول</option>
                 
                </select>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="assets/img/property-1.jpg" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h3 class="card-title-a">
                      <a href="{{url('/more')}}">مجلة الآداب
                      </a>
                    </h3>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">%نسبة القبول | 40 </span>
                    </div>
                    <a href="{{url('/more')}}" class="link-a">اضغط للعرض
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">مجلد</h4>
                        <span>20
                        
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">عدد</h4>
                        <span>20</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">مقال</h4>
                        <span>40</span>
                      </li>
                     
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
		  
		  
		    <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="assets/img/property-2.jpg" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h3 class="card-title-a">
                      <a href="{{url('/more')}}">مجلة الاقتصاد والبيئة
                      </a>
                    </h3>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">%نسبة القبول | 50 </span>
                    </div>
                    <a href="{{url('/more')}}" class="link-a">اضغط للعرض
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">مجلد</h4>
                        <span>20
                        
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">عدد</h4>
                        <span>20</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">مقال</h4>
                        <span>40</span>
                      </li>
                     
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
		  
		  
		    <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="assets/img/property-3.jpg" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h3 class="card-title-a">
                      <a href="{{url('/more')}}">مجلة جسور المعرفة
                      </a>
                    </h3>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">%نسبة القبول | 50 </span>
                    </div>
                    <a href="{{url('/more')}}" class="link-a">اضغط للعرض
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">مجلد</h4>
                        <span>20
                        
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">عدد</h4>
                        <span>20</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">مقال</h4>
                        <span>40</span>
                      </li>
                     
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
		  
      </div>
    </section><!-- End Property Grid Single-->

  </main><!-- End #main -->
@endsection