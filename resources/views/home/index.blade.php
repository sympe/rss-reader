<body>
  @foreach ($items as $item)
    <div class="item">
      <h2><a href="{{ $item->get_permalink() }}">{{ $item->get_title() }}</a></h2>
      <p>{{ $item->get_description() }}</p>
    </div>
  @endforeach
  <div id="app">
    <example-component></example-component>
  </div>
  <script src="js/app.js"></script>
</body>