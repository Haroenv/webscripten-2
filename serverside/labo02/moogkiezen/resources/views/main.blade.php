<!DOCTYPE HTML>
<html>
  <head>
    <title>Concertagenda - Overzicht</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <!--[if lte IE 8]><link rel="stylesheet" href="{{ asset('css/ie8.css') }}" /><![endif]-->
  </head>
  <body id="top">

    <!-- Header -->
      <header id="header">
        <h1><a href="{{ url('/') }}"><strong>Concertagenda</strong></a></h1>
      </header>

    <!-- Main -->
      <div id="main">
        <!-- Event table -->
          <section id="event_table">
            <header class="major">
              <h2>Overzicht concerten</h2>
            </header>
            <form method="post" action="{{ url('/search/') }}">
              <div class="row uniform 50%">
                <div class="6u 12u$(xsmall)"></div>
                <div class="3u 12u$(xsmall)">
                  <input type="text" name="q" id="q" value="@if ($search){{$search}}@endif" placeholder="Zoekterm" />
                </div>
                <div class="3u 12u$(xsmall)">
                  <input type="submit" value="Zoeken" class="special fit small" style="height: 3.4em"/>
                </div>
              </div>
              {{ csrf_field() }}
            </form>
            <div class="table-wrapper">
@if ($events)
              <table>
                <thead>
                  <tr>
                    <th>Datum</th>
                    <th>Naam en locatie</th>
                    <th>Prijs</th>
                  </tr>
                </thead>
                <tbody>
@foreach ($events as $event)
                  <tr>
                    <td>{{ date('j M Y - G\\ui',strtotime($event->start_date)) }}</td>
                    <td>{{ $event->title }} ({{$event->location}})
                      @if ($event->fav == 0)
                        <a href="{{ url('/switch/') . '/'.$event->id}}" class="icon fa-star"></a>
                      @endif
                      <br/>
                      <a href="{{ url('/switch/') . '/'.$event->id}}">
                        @if ($event->fav == 1)
                          voeg toe aan favorieten
                        @else
                          verwijder van favorieten
                        @endif
                      </a>
                    </td>
                    <td>
                      @if ($event->price == 0.00)
                        gratis
                      @else
                        € {{ number_format($event->price, 2, ',', ' ') }}
                      @endif
                    </td>
                  </tr>
@endforeach
                </tbody>
              </table>
@else
              <p>Geen concerten gevonden.</p>
@endif
            </div>
          </section>
      </div>

    <!-- Footer -->
      <footer id="footer">
        <ul class="icons">
          <li><a href="https://twitter.com/odiseehogesch" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
          <li><a href="https://www.facebook.com/odiseehogeschool" class="icon fa-facebook-square"><span class="label">Facebook</span></a></li>
          <li><a href="http://www.odisee.be/" class="icon fa-globe"><span class="label">Website</span></a></li>
          <li><a href="mailto:events%40odisee.be" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
          <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
      </footer>

    <!-- Scripts -->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/jquery.poptrox.min.js') }}"></script>
      <script src="{{ asset('js/skel.min.js') }}"></script>
      <script src="{{ asset('js/util.js') }}"></script>
      <!--[if lte IE 8]><script src="{{ asset('js/ie/respond.min.js') }}"></script><![endif]-->
      <script src="{{ asset('js/main.js') }}"></script>

  </body>
</html>
