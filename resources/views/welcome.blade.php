<x-layout>
    {{-- @php
        dump($marks)
    @endphp --}}

<table>
@foreach ($marks as $key=>$value)
    <tr>
        <td>{{$key}}</td>
        <td>{{$value}}</td>
    </tr>
@endforeach
</table>
    
    Home
</x-layout>
<x-layout>About</x-layout>
<x-layout>Contact</x-layout>
<x-layout>Post</x-layout>
<x-layout>Blogs</x-layout>