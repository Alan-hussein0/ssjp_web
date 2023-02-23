@extends('layouts.app')

@section('content')
<section class="property-single nav-arrow-b bg-dark">
    <div class="container">
      <div class="row">
        <div class="sufee-login d-flex align-content-center flex-wrap">
            <div class="container">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="index.html">
                            <img class="align-content" src="images/logo.png" alt="">
                        </a>
                    </div>
                    <div class="login-form">
                        <form>
                            <div class="form-group">
                                <label>عنوان المجلة</label>
                                <input type="email" class="form-control" placeholder="عنوان المجلة">
                            </div>

                            <div class="form-group">
                                <label>وصف المجلة</label>
                                <input type="password" class="form-control" placeholder="وصف المجلة">
                            </div>

                            <div class="form-group">
                                <label>ISSN</label>
                                <input type="password" class="form-control" placeholder="ISSN الطباعة">
                            </div>

                            <div class="form-group">
                                <label>EISSN</label>
                                <input type="password" class="form-control" placeholder="EISSN الرقمي">
                            </div>

                            <div class="form-group">
                                <label>سنة ظهور المجلة</label>
                                <input type="password" class="form-control" placeholder="سنة ظهور المجلة">
                            </div>
                            
                            <div class="form-group ">
                                <label class="pb-2" for="city">مواضيع المجلة</label>
                                <select class="form-control form-select form-control-a">
                                    <option>المحاسبة</option>
                                    <option>ادارة الاعمال</option>
                                
                                </select>
                            </div>

                            <div class="form-group">
                                <label>البريد الالكتروني للاتصال</label>
                                <input type="password" class="form-control" placeholder="example@example.com">
                            </div>
                            
                            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">إضافة مجلة</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</section>
@endsection