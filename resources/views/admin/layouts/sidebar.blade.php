<nav class="col-md-2 d-none d-md-block bg-light sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link @if (\Request::is('admin')) active @endif" href="/admin/">
          <span data-feather="home"></span>
          Dashboard <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if (Request::is('admin/accounts','admin/accounts/*')) active @endif" href="/admin/accounts/">
          <span data-feather="users"></span>
          Accounts
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if (\Request::is('admin/pages','admin/pages/*')) active @endif" href="/admin/pages/">
          <span data-feather="file"></span>
          Pages
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if (\Request::is('admin/support','admin/support/*')) active @endif" href="/admin/support/">
          <span data-feather="help-circle"></span>
          Support Tickets
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if (\Request::is('admin/settings','admin/settings/*')) active @endif" href="/admin/settings/">
          <span data-feather="settings"></span>
          Settings
        </a>
      </li>
    </ul>
  </div>
</nav>