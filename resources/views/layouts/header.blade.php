<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">WordList</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('words.index')}}">Список слів</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('words.create')}}">Додати нові слова</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('words.show')}}">Редагувати слова</a>
      </li>

      </li>
    </ul>
  </div>
</nav>
