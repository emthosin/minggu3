@extends('layouts.app')

@section('header')
<section class="templatemo-top-section">
          <div class="templatemo-header">
            <img class="templatemo-header-img" src="img/header.png" alt="Header">
            <h1 class="templatemo-site-name">PWL</h1>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <div class="templatemo-nav-container">
              <nav class="templatemo-nav">
                <ul>
                 <li><a href="http://127.0.0.1:8000/" class="active">Home</a></li>
                 <li><a href="childprofile">Profile</a></li>
               </ul>
             </nav> 
           </div>
         </div>
         <div class="templatemo-welcome welcome-slider">
          <div class="container">
            <div class="row">
              <div class="flexslider">
                <ul class="slides">
                  <li>
                    <div class="about-slider">
                      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <img src="img/about/1.jpg" class="img-responsive" alt="Image">
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
                        <h2 class="text-uppercase welcome-title">
                          <span class="welcome-title-1">Halaman Home</span>
                      		<span class="welcome-title-2">Berita (Artikel) 1</span>
                        </h2>
                        <p class="welcome-message">JAKARTA - Pemerintah masih memperpanjang Pemberlakuan Pembatasan Kegiatan Masyarakat (PPKM) meskipun levelnya perlahan turun seiring melandainya angka kasus positif Covid-19 di Tanah Air.</p>
                      </div>              
                    </div>  
                  </li>
                  <li>
                    <div class="about-slider">
                      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <img src="img/about/1.jpg" class="img-responsive" alt="Image">
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
                        <h2 class="text-uppercase welcome-title">
                          <span class="welcome-title-1">Halaman Home Lagi</span>
                          <span class="welcome-title-2">Berita (Artikel) 2</span>
                        </h2>
                        <p class="welcome-message">Seiring penurunan level tersebut, pelonggaran pun dilakukan terhadap sejumlah sektor, mulai dari pembukaan kembali pusat perbelanjaan atau mal hingga pembukaan bioskop di wilayah PPKM level 2 dan 3.</p>
                      </div>              
                    </div>  
                  </li>
                </ul>
              </div>                          
            </div>    
          </div>
        </div>
      </section>
@endsection

@section('content')
<section class="container margin-bottom-50">    
     <div class="about-container">     
        <div class="about-container-left">
         <img src="img/about/2.jpg" alt="Image" class="img-responsive">
       </div>
           
         <div class="about-container-right">
         <h2 class="about-title">Konten</h2>
         <p class="about-description">Menurut Reza, pembukaan kembali mal seharusnya memang bisa menjadi sentimen positif untuk saham-saham di sektor ritel. Dia juga menyebutkan beberapa saham-saham sektor ritel yang bisa menjadi pilihan para investor saat ini, mulai dari PT Supra Boga Lestari Tbk (RANC), PT Matahari Putra Prima Tbk (MPPA), PT Ace Hardware Indonesia Tbk (ACES), PT Ramayana Lestari Sentosa Tbk (RALS), PT Sumber Alfaria Trijaya Tbk (AMRT).</p>
         <p class="about-description">Tidak hanya itu, Reza juga memasukkan beberapa saham sektor mal atau properti yang bisa dimanfaatkan di tengah penurunan level PPKM, seperti PT Pakuwon Jati Tbk (PWON), PT Lippo Karawaci Tbk (LPKR), dan PT Summarecon Agung Tbk (SMRA).</p>
         <a href="#" class="about-link">Duised sitDamet</a>
        </div>
           
     </div>
   </section> 
@endsection

@section('sidebar')

@section('footer')
