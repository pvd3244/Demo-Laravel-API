<div>
    <div><a class="{{ request()->is('home') ? 'active' : '' }}" href="/home">Home</a></div>
    <div><a class="{{ request()->is('account') ? 'active' : '' }}" href="/account">Account</a></div>
</div>