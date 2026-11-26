<x-layout title="Autori">
    <table>
        <tr><th>Nome Cognome</th><th>Nazionalità</th><th>N. libri</th></tr>
    @foreach ($authors as $author)
        <tr>
            <td><a href="{{ route('authors.show', $author) }}">
                {{ $author->full_name }}</a></td>
            <td>{{ $author->nationality }}</td>
            <td>{{ $author->books_count }}</td>
        </tr>
    @endforeach
    </table>
</x-layout>
