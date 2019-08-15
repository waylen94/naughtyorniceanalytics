@if (count($news))
  <ul class="list-unstyled">
    @foreach ($news as $new)
      <li class="media">
        <div class="media-left">
          <a href="{{ route('users.show', [$new->user_id]) }}">
            <img class="media-object img-thumbnail mr-3" style="width: 52px; height: 52px;" src="{{ $new->user->avatar }}" title="{{ $new->user->name }}">
          </a>
        </div>

        <div class="media-body">

          <div class="media-heading mt-0 mb-1">
            <a href="{{ route('news.show', [$new->id]) }}" title="{{ $new->title }}">
              {{ $new->title }}
            </a>
            <a class="float-right" href="{{ route('news.show', [$new->id]) }}">
              <span class="badge badge-secondary badge-pill"> {{ $new->reply_count }} </span>
            </a>
          </div>

          <small class="media-body meta text-secondary">

            <a class="text-secondary" href="{{ route('users.show', [$new->user_id]) }}" title="{{ $new->user->name }}">
              <i class="far fa-user"></i>
              {{ $new->user->name }}
            </a>
            <span> • </span>
            <i class="far fa-clock"></i>
            <span class="timeago" title="latest actived at：{{ $new->updated_at }}">{{ $new->updated_at->diffForHumans() }}</span>
          </small>

        </div>
      </li>

      @if ( ! $loop->last)
        <hr>
      @endif

    @endforeach
  </ul>

@else
  <div class="empty-block">暂无数据 ~_~ </div>
@endif