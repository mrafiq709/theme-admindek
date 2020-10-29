# Scuti/Admindek
This is admin template base on Admindek theme(https://colorlib.com/polygon/admindek/default/index.html) .

# How to install

### Step 1: Install via composer

```php
composer require scuti/admindek
```

### Step 2: Publish admindek theme

```php
php artisan vendor:publish --tag=scuti-admindek --force
```

### Step 3: Make a route to display show admin and enjoy!

```
Route::get('/admin', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/login', function () {
    return view('layouts.auth');
});

Route::get('/password/reset', function () {
    return view('auth.passwords.reset');
})->name('password.reset');

Route::get('/profile', function () {
    return view('auth.profile.profile');
})->name('profile');

Route::get('admin/users', function () {
    return view('admin.users.index');
})->name('users');

Route::get('admin/users/new', function () {
    return view('admin.users.create');
})->name('user-create');
```
# theme-admindek

