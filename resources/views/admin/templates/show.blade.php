{{$template->name}}
<br>
@foreach($template->fields as $field)
    {{$field->name}} <br>
@endforeach