@extends('layouts.app')

@section('header')
        <section class="templatemo-top-section">
          <div class="templatemo-header">
            <img class="templatemo-header-img" src="img/header.png" alt="Header">
            <h1 class="templatemo-site-name">Motor</h1>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <div class="templatemo-nav-container">
              <nav class="templatemo-nav">
                <ul>
                <li><a href="http://127.0.0.1:8000/" >Home</a></li>
                 <li><a href="childprofile" class="active">Profile</a></li>
               </ul>
             </nav> 
           </div>
         </div>
         <div class="templatemo-welcome">
          <div class="container">
            <div class="row">
              <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                <img src="img/welcome-img.png" class="img-responsive welcome-img" alt="Welcome">
              </div>
              <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                <h2 class="text-uppercase">
                  <span class="welcome-title-1">Sekilas</span>
                  <span class="welcome-title-2">Profil Saya</span>
                </h2>
                <p class="welcome-message">Motor is free Bootstrap v3.3.4 responsive web template provided 
                by <span class="blue">template</span><span class="green">mo</span>.com website. You can download, 
                modify and use this for your website projects.</p>
                <a href="#" class="welcome-read-more">Read More</a>
              </div>
            </div>    
          </div>
        </div>
      </section>
    <!--Main content-->
@endsection

@section('content')

    <section class="container margin-bottom-50">
       <div class="row">
        <h2 class="col-lg-12 text-center text-uppercase margin-bottom-30">M. Thosin Yuhaililul Hilmi</h2>
        <p class="col-lg-12 text-center margin-bottom-30">NIM : 2031710032<br>
                                                          Kelas : MI 2F<br>
                                                          TTL : Malang, 29 April 2001<br>
                                                          Alamat : Tegalsari, Ambulu, Jember<br></p>
      </div>
    </section> 


    <!-- Main content -->

@endsection

@section('sidebar')

@section('footer')

