@extends('admin.layouts.master')

@section('head-tag')
<title>برند</title>

@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">خانه </a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش </a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">نظرات </a></li>
      <li class="breadcrumb-item active font-size-12" aria-current="page">نمایش نظرات </li>
    </ol>
</nav>

<section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                    نمایش نظرات
                </h5>
            </section>

            <secton class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.market.comment.index') }}"  class="btn btn-info btn-sm">بازگشت</a>
            </secton>

            <section class="card mb-3">
                <section class="card-header text-white bg-custom-yellow">
                    زهرا سهرابی - 999441874845
                </section>

                <section class="card-body">
                    <h5 class="card-title"> کد کالا:1548795326 apple watch  مشخصات کالا:ساعت هوشمند</h5>
                    <p class="card-text">بنظر من ساعت خوبیه ولی وزنش زیاده و شارژش زود خالی میشه</p>
                </section>

            </section>

            <section>
                <form action="" method="POST">
                    <section class="row">

                        <section class="col-12 ">
                            <div class="form-group">
                                <label for="">پاسخ ادمین</label>
                                <textarea class="form-control form-control-sm" rows= "4"></textarea>
                            </div>
                        </section>

                        <section class="col-12">
                            <button class="btn btn-primary btn-sm">ثبت</button>
                        </section>
                    </section>
                </form>
            </section>

        </section>
    </section>
</section>

@endsection
