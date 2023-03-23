
{{-- X --}}
@section ('css')

 <!-- Link Checkout CSS -->
 <link rel="stylesheet" href="{{asset('css/checkout.css')}}">

@endsection
<style>
  @import url('https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  scroll-behavior: smooth;

}
 @font-face {
  font-family: font ;
  src: url(../FontsFree-Net-vanitas-bold.ttf);
 }

body {
  width: 100% !important;
  min-height: 100vh;
  font-family: 'object-fit: contain, object-position: 50% 50%';
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #333;
}

h1 {
  font-size: 45px;
  line-height: 55px;
  color: #333;
  font-family: 'object-fit: contain, object-position: 50% 50%';
  font-weight: 400;
}

h2 {
  padding-top: 30px;
  font-size: 50px;
  line-height: 54px;
  color: #000;
  font-family: font ;
  font-family: 'object-fit: contain, object-position: 50% 50%';

}

h4 {
  font-size: 25px;
  color: #222;
  font-family: 'object-fit: contain, object-position: 50% 50%';

}
h5{
color: #000;
  font-weight: 500;
  font-size: 22px;
  font-family: 'object-fit: contain, object-position: 50% 50%';
}
h6 {
  font-weight: 700px;
  font-size: 12px;
  font-family: 'object-fit: contain, object-position: 50% 50%';

}

p {
  font-size: 19px;
  color: #444;
  margin: 15px 0 20px 0;
  font-family: 'object-fit: contain, object-position: 50% 50%';

}

.section-p1 {
  padding: 60px 80px;
  
}

.section-p2 {
  padding-top: 60px;
}
.section-p3 {
  padding: 60px 10px ;
}
.section-m1 {
  margin: 40px 0;
}

button.but {
  /* font-family: 'object-fit: contain, object-position: 50% 50%'; */
  font-size: 14px;
  font-weight: 400;
  padding: 15px 30px;
  color: #BD4B4B;
  background-color: #f8f5f4;
  border-radius: 4px;
  cursor: pointer;
  border: none;
  outline: none;
  transition: 0.2s;
  display: flex;
  justify-content: space-around;
  align-items: center;
}

.pro_F_cont {
  margin: 50px;
}

.pro_title_flex {
  display: flex;
  justify-content: space-around;


}

.pro_title {
  position: relative;

}

.pro_title_sale {
  position: relative;
}

.pro_title::before {
  content: '';
  position: absolute;
  left: 0;
  bottom: -13px;
  background-color: #BD4B4B;
  height: 1px;
  box-sizing: border-box;
  width: 180px;
  margin: 6px;

}
.line {
  padding: 5px;
  color: #BD4B4B;
}

.pro_p {

  font-size: 16px;
  color: #AA6C49;
  margin-top: 30px;
}


/* _____________________Category______________________ */
#Category {
  letter-spacing: 2px;
  text-transform: uppercase;
  /* font-family: "Vanitas", Sans-serif; */
  text-align: left;
  background: #Fff;
}

.image-flex {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 3rem;

}

.category_title {
  text-align: center;
  position: relative;
  color: #000000;


}
.card::before{
  background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.281), rgba(0, 0, 0, 0.7));

}



.card-img-top:hover {
  transform: scale(1.02);
}




  </style>
       @php
            $categories = App\Models\Category::orderBy('category_name' , 'ASC')->get();
       @endphp

        <section class="product-tabs section-padding position-relative">
          <div class="container">
              <div class="section-title style-2 wow animate__animated animate__fadeIn">
            <h3 style="   font-family: 'object-fit: contain, object-position: 50% 50%'; margin-left: 100px
                  ">Mirrors Category </h3>
              </div>
       

           <div class="image-flex" >
          @foreach ($categories as $category)
          <div class="card" style="width: 18rem;">
            <a href="{{url('product/category/'.$category->id.'/'.$category->category_name)}}"><img id="card-img-top" class="card-img-top" src="{{$category->category_image}}" alt="Card image cap"></a>
            <div class="card-body">
              <h5 class="card-title category_title">{{$category->category_name}}</h5>
              {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
              {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
          </div>
        
          @endforeach
        </div>
        </div>
      </section><!-- =======End Category ======= -->
    