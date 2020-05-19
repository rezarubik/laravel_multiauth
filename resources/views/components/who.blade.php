<!-- // todo User -->
@if(Auth::guard('web')->check())
<p class="text-success">
    You are Logged In as a <strong>User</strong>
</p>
@else
<p class="text-danger">
    You are Logged Out As a <strong>User</strong>
</p>
@endif
<!-- // todo admin -->
@if(Auth::guard('admin')->check())
<p class="text-success">
    You are Logged In as a <strong>Admin</strong>
</p>
@else
<p class="text-danger">
    You are Logged Out As a <strong>Admin</strong>
</p>
@endif