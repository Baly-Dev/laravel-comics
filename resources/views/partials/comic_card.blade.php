<div class="card">
    <div class="card-header">
        <a href="{{route('comicDetail', ['id' => $key])}}">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        </a>
    </div>
    <div class="card-body">
        <h4>{{$comic['series']}}</h4>
    </div>
</div>