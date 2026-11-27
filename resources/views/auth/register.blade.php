<x-layout title="Registrati">
    <form method="POST" action="{{ route('register') }}" class="stack">
        @csrf
        <label>Nome
            <input type="text" name="name" value="{{ old('name') }}" >
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </label>
        <label>Email
            <input type="text" name="email" value="{{ old('email') }}" >
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </label>
        <label>Password (almeno 8 caratteri)
            <input type="password" name="password" >
            @error('password') <span class="error">{{ $message }}</span> @enderror
        </label>
        {{-- La regola "confirmed" cerca un campo chiamato password_confirmation --}}
        <label>Conferma password
            <input type="password" name="password_confirmation" >
        </label>
        <button type="submit">Registrati</button>
    </form>
</x-layout>
