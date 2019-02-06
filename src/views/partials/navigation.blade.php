<?php 

$lang = app()->getLocale();

?>


@foreach( $pages as $page)
    <li style="font-weight: bold;" class="dropdown-item {{  Request::is($page->uri_wildcard) ? 'dropdown-item hs-has-sub-menu' : '' }} {{ count($page->children) ? ($page->isChild() ? 'dropdown-item hs-has-sub-menu' : 'dropdown-item hs-has-sub-menu') : '' }}">
      <a id="nav-link--features--pop-ups" class="nav-link" href="{{ url($page->uri) }}" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--features--pop-ups">{{ $page->trans('title',$lang) }} </a>
      

      @if(count($page->children))
          <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-5 g-mt-8--lg--scrolling animated fadeIn" id="nav-submenu--features--pop-ups" aria-labelledby="nav-link--features--pop-ups">
            @include('partials.navigation', ['pages' => $page->children])
          </ul>
      @endif
    </li>
@endforeach

<style type="text/css">
    
    

</style>