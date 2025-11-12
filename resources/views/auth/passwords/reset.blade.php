@extends('layouts.app')

@section('content')
<style>
    .reset-password-container {
        display: flex;
        height: 100vh;
        width: 100%;
        font-family: 'Montserrat', sans-serif;
        position: relative;
    }
    
    .back-button {
        position: absolute;
        top: 30px;
<<<<<<< HEAD
        left: 0;
=======
        right: 0;
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399
        padding: 10px 30px;
        background: white;
        color: #6b1a1a;
        border: 2px solid #6b1a1a;
<<<<<<< HEAD
        border-left: none;
=======
        border-right: none;
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        text-decoration: none;
        z-index: 10;
<<<<<<< HEAD
        border-bottom-right-radius: 20px;
        border-top-right-radius: 20px;
=======
        border-bottom-left-radius: 20px;
        border-top-left-radius: 20px;
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399
    }

    .back-button:hover {
        background: #6b1a1a;
        color: white;
        text-decoration: none;
    }
    
    .reset-left {
        flex: 1;
<<<<<<< HEAD
        background: #ffffff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 40px;
    }
    
    .reset-right {
        flex: 1;
=======
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399
        background: linear-gradient(135deg, #6b1a1a 0%, #4a0e0e 100%);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 40px;
        color: white;
<<<<<<< HEAD
        border-top-left-radius: 50px;
        border-bottom-left-radius: 50px;
=======
        border-top-right-radius: 50px;
        border-bottom-right-radius: 50px;
    }
    
    .reset-right {
        flex: 1;
        background: #ffffff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 40px;
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399
    }
    
    .left-logo-placeholder {
        width: 120px;
        height: 120px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        color: rgba(255, 255, 255, 0.5);
        text-align: center;
    }
    
    .system-title {
<<<<<<< HEAD
        font-size: 32px;
        font-weight: 700;
        letter-spacing: 2px;
        margin-bottom: 25px;
    }
    
    .system-subtitle {
        font-size: 32px;
        font-weight: 700;
        margin-top: -20px;
    }
    
    .system-description {
        font-size: 20px;
        margin-bottom: 15px;
        font-weight: 300 !important;
        text-align: center;
=======
        font-size: 35px;
        font-weight: 700;
        letter-spacing: 2px;
        margin-bottom: 35px;
    }
    
    .system-subtitle {
        font-size: 35px;
        font-weight: 700;
        margin-top: -30px;
    }
    
    .system-description {
        font-size: 22px;
        font-weight: 300;
        text-align: center;
        line-height: 1.6;
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399
    }
    
    .logo-placeholder {
        width: 100px;
        height: 100px;
        background: #f0f0f0;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        color: #999;
        text-align: center;
        margin-bottom: 30px;
    }
    
    .reset-title {
        font-size: 36px;
        font-weight: 600;
        margin-bottom: 15px;
        color: #333;
    }
    
    .reset-subtitle {
        font-size: 14px;
        color: #666;
        margin-bottom: 40px;
        text-align: center;
    }
    
    .reset-form {
        width: 100%;
        max-width: 380px;
    }
    
    .form-input {
        width: 100%;
        padding: 15px 20px;
        border: 2px solid #e0e0e0;
<<<<<<< HEAD
        border-radius: 8px;
=======
        border-radius: 25px;
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399
        margin-bottom: 25px;
        font-size: 14px;
        transition: border-color 0.3s;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }
    
    .form-input:focus {
        outline: none;
        border-color: #6b1a1a;
    }
    
    .form-input.is-invalid {
        border-color: #dc3545;
    }
    
    .invalid-feedback {
        color: #dc3545;
        font-size: 12px;
        margin-top: -20px;
        margin-bottom: 15px;
        display: block;
    }
    
    .btn-reset {
        width: 100%;
        padding: 15px;
        background: #6b1a1a;
        color: white;
        border: none;
        border-radius: 15px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.3s;
        text-transform: uppercase;
        font-family: 'Montserrat', sans-serif;
    }
    
    .btn-reset:hover {
        background: #4a0e0e;
    }
    
    @media (max-width: 768px) {
        .reset-password-container {
            flex-direction: column;
        }
        
<<<<<<< HEAD
        .reset-right {
=======
        .reset-left {
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399
            order: -1;
            min-height: 300px;
            border-radius: 0;
        }
        
        .back-button {
            top: 15px;
            left: 15px;
        }
        
        .system-title {
            font-size: 28px;
        }
        
        .system-subtitle {
            font-size: 24px;
        }
        
        .system-description {
            font-size: 18px;
        }
    }
</style>

<div class="reset-password-container">
    <a href="{{ route('password.otp') }}" class="back-button">
        BACK
    </a>
    
    <div class="reset-left">
<<<<<<< HEAD
        <div class="logo-placeholder">
            <img src="{{asset('assets/images/marsu-logo.png')}}" alt="" height="120">
        </div>
        
=======
        <div class="left-logo-placeholder">
            <img src="{{asset('assets/images/marsu-logo.png')}}" alt="" height="120">
        </div>
        
        <h2 class="system-title">MARSU</h2>
        <h3 class="system-subtitle">Library Management System</h3>
        
        <p class="system-description">"Your premier digital library <br> for borrowing and reading <br> books"</p>
    </div>
    
    <div class="reset-right">
        <div class="logo-placeholder">
            <img src="{{asset('assets/images/marsu-logo.png')}}" alt="" height="100">
        </div>
        
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399
        <h1 class="reset-title">Reset Password</h1>
        <p class="reset-subtitle">Please enter your new password</p>
        
        {{-- <form method="POST" action="{{ route('password.update') }}" class="reset-form"> --}}
<<<<<<< HEAD
        <form method="POST" class="reset-form">
=======
        <form method="POST" action="{{ route('password.update') }}" class="reset-form">
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399
            @csrf
            
            <input type="hidden" name="token" value="{{ $token ?? '' }}">
            
            <input 
                id="password" 
                type="password" 
                class="form-input{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                name="password" 
                placeholder="New Password"
                required 
                autofocus
            >
            
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            
            <input 
                id="password-confirm" 
                type="password" 
                class="form-input" 
                name="password_confirmation" 
                placeholder="Confirm Password"
                required
            >
            
            <button type="submit" class="btn-reset">
                Reset Password
            </button>
        </form>
    </div>
<<<<<<< HEAD
    
    <div class="reset-right">
        <div class="left-logo-placeholder">
            <img src="{{asset('assets/images/marsu-logo.png')}}" alt="" height="120">
        </div>
        
        <h2 class="system-title">MARSU</h2>
        <h3 class="system-subtitle">Library Management System</h3>
        
        <p class="system-description">"Your premier digital library <br> for borrowing and reading <br> books"</p>
    </div>
=======
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399
</div>
@endsection