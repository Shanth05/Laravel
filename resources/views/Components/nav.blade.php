<!-- <li><a href="/home" style="{{true?'color:red':''}}">Home</a></li> -->


<li><a href="/home"    style="{{request()->is('home')?'color:red':''}}">Home</a></li>
<li><a href="/photos"  style="{{request()->is('photos')?'color:red':''}}">Photo</a></li>
<li><a href="/about"   style="{{request()->is('about')?'color:red':''}}">About</a></li>
<li><a href="/contact" style="{{request()->is('contact')?'color:red':''}}">Contact</a></li>
<li><a href="/post"    style="{{request()->is('post')?'color:red':''}}">Blog</a></li>