@extends('layouts.app')

@section('content')

<section class="absolute top-0 h-screen w-full bg-gray-900 z-0">

    <div class="absolute h-full w-full opacity-70" style="background-image: url('https://media.istockphoto.com/vectors/cute-vector-kawaii-penguin-chicks-with-scholar-hatspencils-notebooks-vector-id1280525680?b=1&k=20&m=1280525680&s=612x612&w=0&h=4YpcCoo0BoZKvYelOcrtRSW_OZXpGpnlyzXHpYYgmUo=')"></div>
    <div class="container mx-auto px-4 h-full">
        <div class="flex flex-col content-center items-center justify-center h-screen">

            <img class="relative" src='https://i.postimg.cc/jSRcN6XR/schoolmanager.png' />

            <div class="relative w-full lg:w-3/12 px-4 mt-5">
                <div class="bg-gray-300 border-0 drop-shadow-lg rounded-lg flex flex-col">
                    <p class="text-gray-600 text-center text-base font-bold mt-3 mb-3">
                        Introduce tus credenciales
                    </p>

                    <form method="POST" action="{{ route('login') }}" class="px-4 lg:px-10">
                        @csrf
                        {{-- <div class="flex flex-col mb-3">
                            <label class="uppercase text-gray-700 text-xs font-bold mb-2">Correo electronico</label>
                            <input type="email" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full text-xs font-bold @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="flex flex-col mb-3">
                            <label class="uppercase text-gray-700 text-xs font-bold mb-2">Contraseña</label>
                            <input type="password" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full text-xs font-bold @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label class="inline-flex items-center cursor-pointer appearance-none focus:outline-none mb-3">
                            <input type="checkbox" class="form-checkbox text-gray-800 ml-1 w-5 h-5 appearance-none focus:outline-none" >
                            <span class="ml-2 text-sm font-semibold text-gray-700">Mantener credenciales</span>
                        </label>

                        <div class="mb-2">
                            <button type="submit" class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full">
                                Iniciar sesión  
                            </button>
                        </div> --}}
                        <div>
                            <login-form />
                        </div>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection