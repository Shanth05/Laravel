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

        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>

    </head>

    <body>
        <table border="1" width="100%">
            <tr height="100" style="background-color:rgb(236, 233, 36);">
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
            <tr height="100" style="background-color:#f3f725;">
                <td colspan="2"></td>
            </tr>
        </table>

        {{--
        Internal js
        <script>
            alert("Welcome JS");
        </script> --}}
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Accordion Item #1
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Accordion Item #2
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Accordion Item #3
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>

        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        
    </body>
</html>