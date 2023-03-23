@extends('frontend.masterD')
@section('main')


       @include('frontend.home.home_slider')
        <!--End hero slider-->
       @include('frontend.home.home_f_category')

        <!--End category slider-->
        @include('frontend.home.home_banner')

        <!--End banners-->

        @include('frontend.home.home_new_product')



        <!--Products Tabs-->
        @include('frontend.home.home_f_product')


@endsection