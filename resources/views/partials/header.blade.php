
<?php  

$links = config('comics.navbar');

?>
<header>
    <div class="upper-blu">
        <div class="d-flex container justify-content-end gap-3">
            <p>dc power <sup>tm</sup> visa®</p>
            <p>additional dc sites <i class="fa-solid fa-caret-down"></i> </p>
        </div>
    </div>
    <div class="my-navbar container d-flex  align-items-center justify-content-between">
        <a href="#">
            <img class="logo-dc" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </a>
        <nav>
            <ul class="ul-header d-flex flex-grow">
                @foreach ($links as $link)
                <li class="{{Route::currentRouteName() == $link['url'] ? 'active' : ''}}">
                    <a href="{{$link['url'] == 'comics' ? '/' : $link['url']}}">{{$link['text']}}</a>
                    
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>


<style scoped lang="sccs">
  .my-navbar{
    padding: 10px
  }

</style>

