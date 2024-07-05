<header>
    <div class="container-big">
      <div class="mc-row">
        <div class="col-33">
          <div class="categories">
            @foreach ($data['menu'] as $voice)
            <a href="{{ $voice['link'] }}">{{ $voice['title'] }}</a>
            @endforeach
          </div>
        </div>
        <div class="col-33 text-center">
          <a href="">
            <img class="logo" src="{{ Vite::asset('resources/img/boolean-logo.png') }}" alt="logo" />
          </a>
        </div>
        <div class="col-33">
          <div class="container-icon">
            <img class="icon" src="{{ Vite::asset('resources/img/user.png') }}" alt="user" />
            <img class="icon" src="{{ Vite::asset('resources/img/like.png') }}" alt="like" />
            <img class="icon" src="{{ Vite::asset('resources/img/shopping-bag.png') }}" alt="shop" />
          </div>
        </div>
      </div>
    </div>
  </header>