@extends('layout.main')
    @section('container')
    <section class="section my-services">
        <div class="container">
          <div class="section-heading">
            @foreach($title as $t)
              <h2>{{ $t['title'] }}</h2>
              <div class="line-dec"></div>
              <span>{{ $t['deskripsi'] }}</span>
            @endforeach
          </div>
          <div class="row text-center">
            <div class="col-md-12">
              <div class="container text-center">
                <h3>Template Landing Page</h3>
              </div>
            </div>
            @foreach($landingpage as $p)
            <div class="col-md-4">
            <a href="{{ $p['link'] }}" target="_blank">
              <div class="service-item">
                {{-- <div class="service-icon"><img src="/assets/images/{{ $p['gambar'] }}" alt=""></div> --}}
                <h4>{{ $p['nama'] }}</h4>
              </div>
            </a>
            </div>
            @endforeach
          </div>
          <div class="row text-center">
            <div class="col-md-12">
              <div class="container text-center">
                <h3>Template Desain Panel Admin</h3>
              </div>
            </div>
            @foreach($paneladmin as $f)
            <div class="col-md-4">
              <div class="service-item">
                {{-- <div class="service-icon"><img src="/assets/images/{{ $f['gambar'] }}" alt=""></div> --}}
                <a href="{{ $f['link'] }}" target="_blank"><h4>{{ $f['nama'] }}</h4></a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
    @endsection
