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
                <h3>Programming Language</h3>
              </div>
            </div>
            @foreach($programming as $p)
            <div class="col-md-4">
              <div class="service-item">
                <div class="service-icon"><img src="/assets/images/{{ $p['gambar'] }}" alt=""></div>
                <h4>{{ $p['nama'] }}</h4>
                <h6>{{ $p['level'] }}</h6>
              </div>
            </div>
            @endforeach
          </div>
          <div class="row text-center">
            <div class="col-md-12">
              <div class="container text-center">
                <h3>Framework</h3>
              </div>
            </div>
            @foreach($framework as $f)
            <div class="col-md-4">
              <div class="service-item">
                <div class="service-icon"><img src="/assets/images/{{ $f['gambar'] }}" alt=""></div>
                <h4>{{ $f['nama'] }}</h4>
              </div>
            </div>
            @endforeach
          </div>
          <div class="row text-center">
            <div class="col-md-12">
              <div class="container text-center">
                <h3>Database</h3>
              </div>
            </div>
            @foreach($database as $d)
            <div class="col-md-4">
              <div class="service-item">
                <div class="service-icon"><img src="/assets/images/{{ $d['gambar'] }}" alt=""></div>
                <h4>{{ $d['nama'] }}</h4>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
    @endsection
