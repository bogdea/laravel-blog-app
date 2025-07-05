<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class LoginModal extends Component
{
public $show = false;
public $mode = 'signup';
public $username='';
public $password='';

protected $listeners = ['openLoginModal' => 'open'];


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

    public function render()
    {
        return view('livewire.auth.login-modal');
    }
}
