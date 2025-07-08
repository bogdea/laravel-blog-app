<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class LoginModal extends Component
{
public $show = false;
public $mode = 'signup';
public $username='';
public $password='';

protected $listeners = [
    'openLoginModal' => 'open',
    'logout' => 'logout',
];


public function open() {
    $this->show =  true;
}

public function close() {
    $this-> show = false;
}

public function switchToSignUp() {
    $this->mode = 'signup';
}

public function switchToLogin() {
    $this->mode = 'login';
}

public function register() {
    $this->validate([
        'username' => 'required|min:3|max:16|unique:users,username',
        'password' => 'required|min:6',
    ]);

    $user = \App\Models\User::create([
        'username' => $this->username,
        'password' => \Hash::make($this->password),
    ]);

    \Auth::login($user);

    $this->close();

    return redirect('/');
}

public function login() {
    $this->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    if (\Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
        session()->regenerate();
        $this->close();
    }

    return redirect('/');
}

public function logout() {
    \Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    return redirect('/');
}

    public function render()
    {
        return view('livewire.auth.login-modal');
    }
}
