<x-layout :title="$book->title">
    <table>
    <tr><th>Autori</th>
        <td>
             
        @forelse ($book->authors as $author)
            <a href="{{ route('authors.show', $author) }}">
            {{ $author->full_name }}</a>@if (! $loop->last), @endif
        @empty
             <span>Autore sconosciuto</span> {{-- libro id 11 il giorno della civetta --}}
        @endforelse 
        {{-- @if (! $loop->last), aggiunge una virgola a tutti gli elementi dell'array authors tranne all'ultimo --}}
        </td>
    </tr>
    <tr><th>Genere</th><td>{{ $book->genre?->name ?? '-' }}</td></tr>
    <tr><th>Anno</th><td>{{ $book->year ?? '-' }}</td></tr>
    <tr><th>Pagine</th><td>{{ $book->pages ?? '-' }}</td></tr>
    <tr><th>ISBN</th><td>{{ $book->isbn ?? '-' }}</td></tr>
    <tr><th>Inserito da</th><td>{{ $book->user?->name ?? '-' }}</td></tr>
    </table>
    @if ($book->is_long)
     <p>Attenzione: libro lungo da leggere!!</p>
    @endif
    @if ( $book->genre){{-- id 16 --}}
        <p><a href="#">Altri libri del genere {{ $book->genre?->name ?? '-' }}</a></p>
    @endif
    <p><a href="{{ route('books.index') }}">Torna all'elenco</a></p>
</x-layout>
