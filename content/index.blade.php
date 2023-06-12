@extends('template.'.config('settings.template').'.content.layout')
@section('content')
    <div>
        @inject('list', 'List')
        @php($news = $list->findByName("News")->contents)
        @forelse ($news as $item)
            <div class="news">
                <h3>{{$item->title}}</h3>
                <a href="{{$item->path}}">View</a>
            </div>
        @empty
            <p>Não há notícias</p>
        @endforelse
    </div>
@stop