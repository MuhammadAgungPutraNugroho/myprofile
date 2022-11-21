@extends('layout.main')
@section('container')
<section class="section contact-me">
    <div class="container">
      <div class="section-heading">
        @foreach($title as $t)
          <h2>{{ $t['title'] }}</h2>
          <div class="line-dec"></div>
          <span>{{ $t['deskripsi'] }}</span>
        @endforeach
      </div>
      <div class="row text-center">
        @foreach($contact as $c)
          <div class="col-md-4">
            <a href="{{ $c['link'] }}" target="_blank">
            <div class="service-item">
                <div class="service-icon mb-0">
                  <img src="/assets/images/{{ $c['gambar'] }}" width="100%" alt="E-Mail">
                </div>
            </div>
          </a>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  
@endsection