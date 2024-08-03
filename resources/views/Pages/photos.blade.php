<x-layout>Photos
    <h1>Js</h1>

<table border="2">
    <tr>
        <th>Subject</th>
        <th>Marks</th>
    </tr>
@foreach ($marks as $key=>$value)
<tr>
    <td>{{$key}}</td>
    <td>{{$value}}</td>
</tr>
@endforeach
</table>

</x-layout>