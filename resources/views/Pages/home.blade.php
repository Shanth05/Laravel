<x-layout>
    <h1 style="color: red">HTML</h1>
    <h1 style="color: red">CSS</h1>
    <h1>Js</h1>

    Home
    {{-- {{$marks}} --}}
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