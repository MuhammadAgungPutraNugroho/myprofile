     @extends('layout.main')
     @section('container')
     <section class="section about-me" data-section="section1">
        <div class="container">
          <div class="section-heading">
            @foreach($title as $t)
              <h2>{{ $t['title'] }}</h2>
              <div class="line-dec"></div>
              <span>{{ $t['deskripsi'] }}</span>
            @endforeach
          </div>
          <div class="left-image-post">
            <div class="row">
              <div class="col-md-12">
                @foreach($bio as $b)
                <div class="right-text">
                  <h4>{{ $b['kategori'] }}</h4>
                  <ul>{{ $b['title'] }}</ul>
                        <li>{{ $b['deskripsi'] }} {{ $b['tahun'] }}</li>
                </div>
                @endforeach
                {{-- @foreach($bio as $e)
                <div class="right-text">
                    <h4>{{ $e->kategori }}</h4>
                      <ul>{{ $e->title }}</ul>
                        <li>{{ $e->deskripsi }} {{ $e->tahun }}</li>
                </div>
                @endforeach --}}
              </div>
            </div>
          </div>
        </div>
      </section>
        @endsection
