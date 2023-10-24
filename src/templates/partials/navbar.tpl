<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">{$websiteName}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBar01"
      aria-controls="navBar01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navBar01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarHomeworkDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Labs
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarHomeworkDropdown">
          {for $i=2 to 16}
            {assign var="weekNumber" value=$i}
            <li><a class="dropdown-item" href="/weeks/{$weekNumber}">Week {$i}</a></li>
          {/for}
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarWeeksDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Assignments
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarWeeksDropdown">
          {for $i=1 to 6}
            <li><a class="dropdown-item" href="/handout/{$i}">Handout {$i}</a></li>
          {/for}
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>