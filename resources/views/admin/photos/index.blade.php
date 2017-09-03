@foreach ($photos as $photo)
    <img height="100" src="{{$photo->url}}"/>
    </br>
@endforeach