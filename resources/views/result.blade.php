@foreach ($json_decode['items'] as $item)
    {{ $item['volumeInfo']['title']}}
@endforeach