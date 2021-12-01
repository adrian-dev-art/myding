<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="text-white">
                Myding
                <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 text-white" :errors="$errors" />

        <form method="POST" action="/user/{{$user->id}}" enctype="multipart/form-data">
            @method('put')
            @csrf

            <!-- Name -->
            <div class="mt-4 ">
                <x-label for="name" :value="__('Name')"  />

                <x-input id="name" class="block mt-1 bg-purple-900 text-white w-full @error('name') is-invalid @enderror" type="text" name="name" :value="$user->name,old('name')"  autofocus />
            </div>
            <div class="mt-4">
                <x-label for="username" :value="__('Username')" class="text-white"/>

                <x-input id="username" class="bg-purple-900 text-white block mt-1 w-full @error('username') is-invalid @enderror" type="text" name="username"  :value="$user->username,old('username')"   />
            </div>
            
            <div class="mt-4">
                <x-label for="organization" :value="__('Organization')" />

                <x-input id="organization" class="bg-purple-900 text-white block mt-1 w-full @error('organization') is-invalid @enderror" type="text" name="organization" :value="$user->username,old('username')"   />
            </div>
            <div class="mt-4">
                <x-label for="company" :value="__('Company')" />

                <x-input id="company" class="bg-purple-900 text-white block mt-1 w-full @error('company') is-invalid @enderror" type="text" name="company" :value="$user->company,old('company')"   />
            </div>
            <div class="mt-4">
                <x-label for="phone_number" :value="__('Phone Number')" />

                <x-input id="phone_number" class="bg-purple-900 text-white block mt-1 w-full @error('phone_number') is-invalid @enderror" type="text" name="phone_number" :value="$user->phone_number,old('phone_number')"   />
            </div>
            <div class="mt-4">
                <x-label for="school" :value="__('School')" />

                <x-input id="school" class="bg-purple-900 text-white block mt-1 w-full @error('school') is-invalid @enderror" type="text" name="school" :value="$user->school,old('school')"   />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="bg-purple-900 text-white block mt-1 w-full @error('email') is-invalid @enderror" type="email" name="email" :value="$user->email,old('email')"  />
            </div>
            
            {{-- <div class="mt-4">
                <x-label for="profile_picture" :value="__('Profile Picture')" />

                <input class="form-control  @error('profile_picture') is-invalid @enderror" type="file" id="profile_picture" name="profile_picture" :value="$user->profile_picture">

            </div> --}}

           

            {{-- <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="bg-purple-900 text-white block mt-1 w-full @error('password') is-invalid @enderror"
                                type="password"
                                name="password"
                                 autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="bg-purple-900 text-white block mt-1 w-full @error('password_confirmation') is-invalid @enderror"
                                type="password"
                                name="password_confirmation" required />
            </div> --}}


                <x-button class=" mt-5 ">
                    {{ __('Update') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
