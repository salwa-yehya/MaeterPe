<style>

#hamburger-menu{
  display: none;

}


#hamburger-input{
  display: none;
}

@media screen and (max-width: 740px) {
 .group1 ul{
  display: none;

 }
 .group2 ul{
  display: none;
  
 }

 .overlay{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    transition: opacity .35s, visibility .35s, height .35s;
    overflow: hidden;
    background: black;
    z-index: -1;
}



#hamburger-input{
  display: none;
}

#hamburger-menu {
    position: fixed;
    top: 65px;
    left: 20px;
    width: 20px;
    height: 20px;
    display: block;
    border: none;
    padding: 0px;
    margin: 0px;
    font-family: 'Cabin', Sans-serif;
    background: linear-gradient(
      to bottom, 
      #AA6C49, #AA6C49 20%, 
      white 20%, white 40%, 
      #AA6C49 40%, #AA6C49 60%, 
      white 60%, white 80%, 
      #AA6C49 80%, #AA6C49 100%
    );
}

#hamburger-menu #sidebar-menu {
    visibility: hidden;
    position: fixed;
    top: 0;
    left: -250px;
    width: 200px;
    height: 100%;
    background-color: #3D0E61;
    transition: 0.3s;
    padding: 0px 10px;
    box-sizing: border-box;
}

#hamburger-menu h3 {
  color: #B9FAF8;
  font-size: 2.2rem;
}

#hamburger-menu ul {
  padding-left: 0px;
}

#hamburger-menu li {
  display: block;
  list-style-type: none;
  line-height: 3rem;
}

#hamburger-menu a {
  color: #B9FAF8;
  font-size: 1.3rem;
  text-decoration: none;
}

#hamburger-menu a:hover {
  text-decoration: underline;
}

#hamburger-input:checked + #hamburger-menu #sidebar-menu {
    visibility: visible;
    left: 0;
}
#hamburger-input:checked ~ .overlay{
   visibility: visible;
  opacity: 0.4;
}
  
}

</style>

<header >
<div class="search">       
       <i class="fa-solid fa-magnifying-glass searchBtn"></i>
       <input type="checkbox" id="hamburger-input" class="burger-shower" />
<label id="hamburger-menu" for="hamburger-input">
  <nav id="sidebar-menu">
    <ul>
        
      <li><a href="/shop">Mirrors</a></li>
        <li><a href="{{url('/customize')}}">Customize</a></li>
        <li><a href="/about">About </a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
  </nav>
</label>

<div class="overlay"></div>
   </div>

    <div class="group1">
      <ul>
        
      <li><a href="/shop">Mirrors</a></li>
        <li><a href="{{url('/customize')}}">Customize</a></li>

      </ul>
    </div>

    <div><a class="logo" href="/home"><img src="./img/Butterlogo-removebg-preview.png" alt="" 
      width="80px"></a></div>

    <div class="group2">
      <ul>
      <li><a href="/about">About </a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>

      
    </div>



    {{-- <div>
      <i class="fa-solid fa-bars"></i>

    </div> --}}



  

    <div class="nav-cart">
    <a href="#"><i class="fa-solid fa-cart-shopping "></i></a>
    </div>

    
  </header>

