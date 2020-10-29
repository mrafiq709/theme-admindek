@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/icofont.css') }}" type="text/css" media="all">
@yield('styles_page')
@endsection
@section('scripts')
<script type="9fef68816305b81b29a5d613-text/javascript" src="{{ asset('assets/js/modernizr.js') }}"></script>

<script type="9fef68816305b81b29a5d613-text/javascript" src="{{ asset('assets/js/css-scrollbars.js') }}"></script>

<script src="{{ asset('assets/js/underscore-min.js') }}" type="9fef68816305b81b29a5d613-text/javascript"></script>

<script src="{{ asset('assets/js/moment.min.js') }}" type="9fef68816305b81b29a5d613-text/javascript"></script>

<script type="9fef68816305b81b29a5d613-text/javascript" src="{{ asset('assets/js/validate.js') }}"></script>

<script type="9fef68816305b81b29a5d613-text/javascript" src="{{ asset('assets/js/script.js') }}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="9fef68816305b81b29a5d613-text/javascript"></script>

<script type="88add89075ed2b878b934720-text/javascript" src="{{ asset('assets/js/select2.full.min.js') }}"></script>

<script type="88add89075ed2b878b934720-text/javascript" src="{{ asset('assets/js/bootstrap-multiselect.js') }}">
</script>
<script type="88add89075ed2b878b934720-text/javascript" src="{{ asset('assets/js/jquery.multi-select.js') }}"></script>
<script type="88add89075ed2b878b934720-text/javascript" src="{{ asset('assets/js/jquery.quicksearch.js') }}"></script>

<script type="88add89075ed2b878b934720-text/javascript" src="{{ asset('assets/js/select2-custom.js') }}"></script>

<script type="9fef68816305b81b29a5d613-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script src="{{ asset('assets/js/rocket-loader.min.js') }}" data-cf-settings="9fef68816305b81b29a5d613-|49" defer=""></script>
@yield('scripts_page')
@endsection
@section('body')

<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">

  @include('partials.header')
  <!-- begin: If not in use please delete both, part show message  -->
  @include('partials.sidebar_message')
  @include('partials.show_chat')
  <!-- end -->

  <div class="pcoded-main-container">
    <div class="pcoded-wrapper">

      @include('partials.siderbar')

      <div class="pcoded-content">
        @include('partials.breadcrumbs')
        <div class="pcoded-inner-content">
          <div class="main-body">
            <div class="page-wrapper">
              <div class="page-body">
                @yield('content')
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="styleSelector">
      </div>

    </div>
  </div>
</div>
@endsection
