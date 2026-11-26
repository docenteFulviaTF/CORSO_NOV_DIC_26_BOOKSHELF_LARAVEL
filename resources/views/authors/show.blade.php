<x-layout :title="$author->full_name">
    <p>Nazionalità: {{$author->nationality}}</p>
    <p>Anno di nascita: {{$author->birth_year}}</p>
    <p>Num. libri presenti in biblioteca:</p>
    <ul>
    @forelse ($author->books as $book)
        <li><a href="{{ route('books.show', $book) }}">
            {{ $book->title }}</a> ({{ $book->year }})</li>
    @empty
        <li>Nessun libro.</li>
    @endforelse
    </ul>
</x-layout>
