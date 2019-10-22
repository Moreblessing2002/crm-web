<a href="./examples/profile.html" class="dropdown-item">
    <i class="ni ni-single-02"></i>
    <span>My profile</span>
</a>
<a href="./examples/profile.html" class="dropdown-item">
    <i class="ni ni-settings-gear-65"></i>
    <span>Settings</span>
</a>
<a href="./examples/profile.html" class="dropdown-item">
    <i class="ni ni-calendar-grid-58"></i>
    <span>Activity</span>
</a>
    <a href="./examples/profile.html" class="dropdown-item">
    <i class="ni ni-support-16"></i>
    <span>Support</span>
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="{{ route('logout') }}"
   onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
    <i class="ni ni-user-run"></i>
    <span>{{ __('Logout') }}</span>
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>