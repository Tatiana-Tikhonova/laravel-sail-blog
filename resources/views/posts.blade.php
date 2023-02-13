<x-layout>
    <x-button class="test">something</x-button>
    @foreach ($posts as $post)

    <article class="{{ $loop -> even ? 'evenclass' : 'oddclass' }}">
        <h2>
            <a href="/posts/{{$post->slug}}">
                {{$post->title}}
            </a>
        </h2>
        <p><?= $post->excerpt; ?></p>
    </article>

    @endforeach
</x-layout>