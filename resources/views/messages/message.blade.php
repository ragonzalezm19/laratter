<img src="{{ $message->image }}" alt="" class="img-thumbnail">
<p class="card-text">
  <div class="text-muted">Escrito por: <a href="/user/{{ $message->user->username }}"> {{ $message->user->name }} </a></div>
  {{ $message->content}}
  <a href="/messages/{{$message->id}}">Leer más</a>
</p>

<div class="card-text text-muted float-right">
  {{ $message->created_at }}
</div>