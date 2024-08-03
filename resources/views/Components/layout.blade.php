<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- <style>
        h1{
            color: blue;
        }
    </style> --}}
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet"/>
    

</head>

<body>
    <table border="1" width="100%">
        <tr height="100" style="background-color:#cbc;">
            <td colspan="2"> Header</td>
        </tr>
        <tr height="400">
            <td width="20%">
               <x-nav/>
            </td>
        <td>
            01.page:
            {{request()->path('/')}}

            <br> 02.url :
            {{request()->url('/')}}

            <br> 03.host :
            {{request()->host('/')}}

            <br> 04.httphost :
            {{request()->httphost('/')}}

            <br> 05.schemeAndHttpHost :
            {{request()->schemeAndHttpHost('/')}}

            <br> 06.method :
            {{request()->method('/')}}

            <br> 07.header :
            {{request()->header('/')}}

            <br> 08.hasHeader :
            {{request()->hasHeader('/')}}

            <br> 09.ip :
            {{request()->ip('/')}}

            {{-- <br> ip :
            {{request()->ip('/')}}

            <br> getAcceptableContentTypes :
            {{request()->getAcceptableContentTypes('/')}}

            <br> all :
            {{request()->all('/')}}  --}}

            <br> 10.collect :
            {{request()->collect('/')}}

            <br> 11.input :
            {{request()->input('/')}}

            <br> 12.query :
            {{request()->query('/')}}

            <br> 13.boolean :
            {{request()->boolean('/')}}

            <br> 14.date :
            {{request()->date('/')}}

            <br> 15.flash :
            {{request()->flash('/')}}

            
            <br> 16.old :
            {{request()->old('/')}}

            <br> 17.cookie :
            {{request()->cookie('/')}}

            <br> 18.file :
            {{request()->file('/')}}

            <br>
            <br>
            
            {{-- <br> 19.getAcceptableContentTypes :
            {{request()->getAcceptableContentTypes('/')}} --}}

            {{$slot}}
           
        </td>
        </tr>
        <tr height="100" style="background-color:#ccc;">
            <td colspan="2"></td>
        </tr>
    </table>
</body>
</html>