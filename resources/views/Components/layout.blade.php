<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
           {{request()->is('/')}}
            {{true}}
            <br>
            {{request()->host('/')}}
            <br>
            {{request()->httphost('/')}}
            <br>
            {{request()->routeIs('/')}}

            {{$slot}}
           
        </td>
        </tr>
        <tr height="100" style="background-color:#ccc;">
            <td colspan="2"></td>
        </tr>
    </table>
</body>
</html>