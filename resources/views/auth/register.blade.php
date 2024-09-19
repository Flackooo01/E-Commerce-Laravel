{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div>
            <x-input-label for="name" :value="__('Phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Address -->
        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="Address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/Form.css')}}">


    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/7b9bcf59a2.js" crossorigin="anonymous"></script>

    <!-- icon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('/admin_panel/images/Background/Background.jpg')}}"></link>

    <!-- Google Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <!-- Signup Form Js -->
    <!-- <script src="javascript/Signup-form.js"></script> -->
</head>
<body onload="slider()">

    {{-- navbar --}}
    @include('components.main_components.formNavbar')

    <div class="center">
        <div class="container-form">
            <div class="text">Register</div>

            <form action="{{ route('register') }}"  method="POST">
                @csrf
                <div class="data">
                    <label >Fullname</label>
                    <input type="text" name="name" required>
                </div>

                <div class="data">
                    <label >Email</label>
                    <input type="email" name="email" required>
                </div>

                <div class="data">
                    <label >Phone</label>
                    <input type="email" name="phone" required>
                </div>

                <div class="data">
                    <label >Address</label>
                    <input type="email" name="email" required>
                </div>

                <div class="data">
                    <label >Password</label>
                    <input type="password" name="password" required>
                </div>

                <div class="data">
                    <label >Confirm Password</label>
                    <input type="password" name="password_confirmation" required>
                </div>

                <div class="btn-login">
                    <div class="inner"></div>
                    <button type="submit">{{ __('Register') }}</button>
                </div>

                <div class="signup-link">You Already have an account?<a href="{{route('login')}}">Login now</a></div>
            </form>
        </div>
    </div>

    <script src="javascript/script.js"></script>
    <script src="../javascript/Paging.js"></script>


</body>
</html>
