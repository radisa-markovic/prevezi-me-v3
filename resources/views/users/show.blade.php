<x-layout>
    <h1>
        {{ $user->name }}
    </h1>
    <p>
        Obavio {{ count($user->rides) }} vožnji.
    </p>
</x-layout>