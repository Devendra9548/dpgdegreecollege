@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/front/css/banner.css">
<link rel="stylesheet" href="/assets/front/css/case-studies.css">
<link rel="stylesheet" href="/assets/front/css/singleblog.css">
<style>
    .left-clm
    {
        box-shadow:none !important;
    }
    .main-blog .left-clm .main-content {
        padding: 0px !important;
        margin-bottom:90px!important;
    }
    @media only screen and (max-width:768px){
        .main-blog .left-clm .main-content {
            padding: 15px !important;
            margin-bottom:0px!important;
        }
    }
</style>
@endsection
@section('body')
<x-mainbanner img="/assets/front/imgs/career/career-banner.webp" pagename="Privacy Policy" />

<section class="main-blog py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 left-clm">
                <div class="main-content">

                    <p>here.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection