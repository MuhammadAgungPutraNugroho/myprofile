{{-- @dd($datas) --}}
<div class="responsive-nav">
    <i class="fa fa-bars" id="menu-toggle"></i>
    <div id="menu" class="menu">
      <i class="fa fa-times" id="menu-close"></i>
      <div class="container">
        <div class="image">
          <a href="#"><img src="assets/images/profil.jpg" alt="" /></a>
        </div>
        <div class="author-content">
          @foreach($datas as $data)
            <h4>{{ $data['names'] }}</h4>
            <span>{{ $data["work"] }}</span>
          @endforeach
        </div>
        <nav class="main-nav" role="navigation">
          <ul class="main-menu">
            <li><a href="/">About Me</a></li>
            <li><a href="/skills">My Skills</a></li>
            <li><a href="/experience">My Experience</a></li>
            <li><a href="/template">Template</a></li>
            <li><a href="/contact">Contact Me</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>