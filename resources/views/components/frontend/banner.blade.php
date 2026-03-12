       <div class="bd-ud-breadcrumb__area bg-css" data-background="{{asset($breadcrumb->image ?? 'frontend/assets/img/bg/ud-breadcrumb.jpg')}}">
           <div class="bd-ud-breadcrumb-shape-1 p-absolute w-img">
               <img src="{{asset('frontend/assets/img/shape/breadcrumb-shape-1.png')}}" alt="breadcrumb-shape-1">
           </div>
           <div class="bd-ud-breadcrumb-shape-2 p-absolute w-img">
               <img src="{{asset('frontend/assets/img/shape/breadcrumb-shape-2.png')}}" alt="breadcrumb-shape-1">
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xl-12">
                       <div class="bd-ud-breadcrumb__wrapper">
                           <div class="bd-ud-breadcrumb__title">
                               <h2>{{$title}}</h2>
                               <p class="about-hero-subtitle text-white">
                                  {{$breadcrumb->subHeading ?? 'We are committed to delivering innovative solutions that drive success for our clients.'}}
                               </p>
                           </div>
                           <div class="bd-ud-breadcrumb__menu">
                               <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                   <ul class="trail-items">
                                       <li class="trail-item trail-begin"><span><a href="{{route('index')}}">Nexiva</a></span>
                                       </li>
                                       <li class="trail-item trail-end"><span>{{ $title }}</span></li>
                                   </ul>
                               </nav>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
