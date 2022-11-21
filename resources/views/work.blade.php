@extends('layout.main')
     @section('container')
     <section class="section my-work" >
        <div class="container">
          <div class="section-heading">
            @foreach($title as $t)
              <h2>{{ $t['title'] }}</h2>
              <div class="line-dec"></div>
              <span>{{ $t['deskripsi'] }}</span>
            @endforeach
          </div>
          <div class="row">
            <div class="isotope-wrapper">
              <form class="isotope-toolbar">
                @foreach($kategori as $k)
                <label>
                  <input type="radio" data-type="{{ $k['kategori'] }}" checked="" name="isotope-filter" />
                  <span>{{ $k['title'] }}</span>
                </label>
                @endforeach
              </form>
              <div class="isotope-box">
                @foreach($works as $w)
                <div class="isotope-item" data-type="{{ $w['kategori'] }}">
                  <figure class="snip1321">
                    <img src="/assets/images/{{ $w['logo'] }}" alt="{{ $w['nama'] }}" />
                    <figcaption>
                      <a href="{{ $w['link'] }}" target="_blank">
                        <h4>{{ $w['nama'] }}</h4>
                        <p class="text-dark">
                          {{ $w['deskripsi'] }}
                        </p>
                      </a>
                    </figcaption>
                  </figure>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>
        @endsection