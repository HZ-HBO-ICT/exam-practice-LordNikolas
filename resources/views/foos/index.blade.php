@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">News</p>
                <p class="subtitle is-3">The latest foos on the HZ</p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-full">
                    <div class="content">

                        <div class="has-text-right">
                            <a href="/foos/create" class="button is-primary">Add a new foo...</a>
                        </div>

                        <div class="column is-12">
                            @foreach($foos as $foo)
                                <div class="panel">
                                    <a class="panel-block" href="{{ route('foos.show', $foo) }}">
                                        <article class="media">
                                            <figure class="media-left">
                                            </figure>
                                            <div class="media-content">
                                                <div class="content">
                                                    <p>
                                                        <strong>{{ $foo->name }}</strong>
                                                        <small>{{ $foo->thud }}</small>
                                                        <small>{{ $foo->kazaam }}</small>
                                                        <br>
                                                        {{ $foo->wombat }}
                                                    </p>
                                                    <div class="field has-addons">
                                                        <p class="control">
                                                            <a href="{{route('foos.edit', $foo)}}" class="button">
                                                             <span class="icon is-small">
                                                                  <i class="fa-solid fa-pen-to-square"></i>
                                                             </span>
                                                            </a>
                                                        </p>
                                                        <p class="control">
                                                        <form method="POST" action="{{ route('foos.destroy', $foo) }}">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" class="button">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </button>
                                                        </form>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
    </section>
@endsection
