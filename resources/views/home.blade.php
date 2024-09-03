
<x-layout>
   
    <div class="container">

        <div class="herosection">
           <div class="row">
            <div class="col-12 col-md-6">
                
                <div class="col-11 mx-auto p-3">
                    <h1>Let's talk with a real human.</h1>
                    <p class="h5 py-3 bannertext"> Develop your carrer ဆိုတာ သင့်အတွက် လူသား လက်တွဲဖော် သူငယ်ချင်းကောင်းတစ်ယောက်ပါ။  DYC နဲ့ ပြောဖို့ ညာဘက်အောက်ထောင့်က Message ခလုတ်လေးကို နှိပ်လိုက်ရင် စီးပွားရေး ၊ ပညာရေး အကုန် ပြောဆို ဆွေးနွေးလို့ ရပါပြီ။စိတ်ညစ်ရင်လည်း ရင်ဖွင့်လို့ ရပါသေးတယ်။လူသားစစ်စစ်နဲ့ ပြောရမှာဖြစ်လို့ Chat GPT ထက် ပိုကောင်းပါတယ်။</p>
                    <div class="py-4 livedemobuttoncontainer d-flex justify-content-between">
                        
                            
                            <a href="/donate" class="btn btn-primarys text-white">Donate</a>
                        
                       
                            <a href="/about" class="text-decoration-none">
                                <i class="fa-solid fa-play mx-2 fs-2 text-primarys"></i>
                                What is DYC?
                            </a>
                       
                    </div>
                </div>
                
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/img/operator.png') }}" width="80%" alt="">
            </div>
           </div>
        </div>


        {{-- <div class="videocontainer col-12">
            
            <iframe width="100%" height="300" src="https://www.youtube.com/embed/ukEZyKdTOCE?si=05zz0Y9k2WTrUHdk" frameborder="0" allowfullscreen>
            </iframe>

        

        </div> --}}

    </div>

    <div class="container">
        <div class="logosection mb-5">
            <div class="row justify-content-between align-items-center bg-primarys logocontainers">
                <div class="col-2 py-4 text-center d-flex justify-content-center align-items-center">
                    dulingo
                </div>
                <div class="col-2 py-4 text-center d-flex justify-content-center align-items-center"><i class="fa-brands fa-microsoft mx-1 fs-2"></i>magicleap</div>
                <div class="col-2 py-4 text-center d-flex justify-content-center align-items-center"><i class="fa-brands fa-microsoft mx-1 fs-2"></i>Microsoft</div>
                <div class="col-2 py-4 text-center d-flex justify-content-center align-items-center"><i class="fa-brands fa-microsoft mx-1 fs-2"></i>Codecov</div>
                <div class="col-2 d-none d-lg-flex py-4 text-center d-flex justify-content-center align-items-center"><i class="fa-brands fa-microsoft mx-1 fs-2"></i>Testing</div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="searchcoursecontainer">
            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="row justify-content-center">
                        <p class="text-center">Search Courses</p>
                    
                        <div class="col-12 d-flex  justify-content-center">
                            <form action="/courses" class="searchform d-flex flex-wrap">
                                 
                                    <div class="form-group searchdiv my-1">
                                        <i class="fa-solid fa-magnifying-glass searchicon"></i>
                                        <input type="search" name="videotitle" class="searchbox form-control mx-1" id="" placeholder="Search For over 50+ courses">
                                     </div>
                               
                               
                                    <button type="submit" class="btn btn-primarys text-white mx-1 my-1">Search</button>
                               
                            </form>
                        </div>
                    </div>

                    
                </div>

                <div class="col-12 py-3">
                    <div class="row">
                        <div class="col-12 col-md-6 displayfixer p-3">
                            <img src="{{ asset('assets/img/3.png') }}" width="80%" alt="">
                        </div>

                        <div class="col-12 col-md-6 d-flex flex-wrap p-3">
                            <div class="titlecontainer ms-3">
                                <h3>Benifits From Our Online</h3>
                                <h3>Learning</h3>
                            </div>
                           
                            
                                <div class="benifits d-flex justify-content-between align-items-center">
                                    <div class="col-2 displayfixer">
                                        <i class="fa-solid fa-graduation-cap benifiticons"></i>
                                    </div>
                                    <div class="benifitstext p-1">
                                        <h6>Online Degrees</h6>
                                        <p> နိုင်ငံတကာ အဆင့်မှီ စီးပွားရေး ပညာတတ်တွေနဲ့ပြောရမှာဖြစ်လို့ စီပွားရေးအတွက် အရမ်းအကျိုးရှိခြင်း။</p>
                                    </div>
                                </div>

                                <div class="benifits d-flex justify-content-between align-items-center">
                                    <div class="col-2 displayfixer">
                                        <i class="fa-solid fa-book-open benifiticons"></i>
                                    </div>
                                    <div class="benifitstext p-1">
                                        <h6>Short Courses</h6>
                                        <p>PFA ကျွမ်းကျင် နှလုံးသား နူးညံ့သူ၊ ချောမောပြေပြစ်သူတွေနဲ့ ပြောရမှာ ဖြစ်လို့ အထီးကျန်မှု့ ၊ စိတ်ဖိစီးမှု့တွေ သက်သာသွားခြင်း။</p>
                                    </div>
                                </div>

                                <div class="benifits d-flex justify-content-between align-items-center">
                                    <div class="col-2 displayfixer">
                                        <i class="fa-solid fa-user benifiticons"></i>
                                       
                                    </div>
                                    <div class="benifitstext p-1">
                                        <h6>Training From Expects</h6>
                                        <p>ဘဝအကြောင်းကို အတွေ့အကြုံရင့်ကျက်သူတွေနဲ့ ပြောရမှာဖြစ်လို့ ဘဝ အခက်အခဲတွေပြေလည်သွားခြင်း။</p>
                                    </div>
                                </div>

                                <div class="benifits d-flex justify-content-between align-items-center">
                                    <div class="col-2 displayfixer">
                                        <i class="fa-solid fa-play benifiticons"></i>
                                        
                                    </div>
                                    <div class="benifitstext p-1">
                                        <h6>1.5k video Courses</h6>
                                        <p>ကိုယ်ပိုင် စီးပွားရေးလုပ်လိုသူတွေအတွက် သက်မွေးပညာ Lesson Videos တွေ Website မှာတင်ထားပေးလို့ ကိုယ်ပိုင်စီးပွားရေးလုပ်လိုသူတွေအတွက် များစွာအကျိုးရှိခြင်း။</p>
                                    </div>
                                </div>
                               
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="popularcourses bg-thirds p-3">
            <h1 class="text-center text-bold">Our Popular Courses</h1>
            <div class="col-8 mx-auto">
                <p class="text-center">Our courses are trusted by professionals worldwide to deliver real, measurable results.</p>
            </div>

            <div class="row justify-content-center align-items-center">
                @forelse ($videos as $video)
            
                <div class="card m-3 p-2 col-11 col-md-4 col-lg-3">
                    <a href="./courses/{{$video->videoslug}}" class="text-center text-dark text-decoration-none d-inline-block">
                    <img src="{{ asset($video->videothumbnail) }}" width="100px" class="card-img-top" alt="...">
                    <div class="card-body py-2 px-1">
                        <h6 class="card-title text-start">
                            
                            {{$video->videotitle}}
                            
                        </h6>
                        <p class="text-start">{{$video->created_at->diffForHumans()}}</p>
                    
                    
                      
                    </div>
                </a>
                </div>
            
            @empty
                
            @endforelse

            </div>
        </div>

        <div class="instructor p-5">
            <div class="row">
                <h1 class="text-center my-5">Other Benifit</h1>
                <div class="col-12 col-md-6 p-3">
                    
                    <div class="col-12">
                        <h2>ဒီ Website မှာ တ​ခြား ဘာတွေသုံးလို့ရသေးလဲ?</h2>
                       
                    </div>
                    
                   
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="col-12 py-2 d-flex justify-content-start">
                            <ul class="list-unstyled">
                                <li class="my-1">💝 ဘဝလက်တွဲဖော်သူငယ်ချင်ကောင်းကို Live chat မှ တစ်ဆင့်ရနိုင်ခြင်း</li>
                                <li class="my-1">💝 သက်မွေးပညာ Video များ ကြည့်ရှု့နိုင်ခြင်း</li>
                                <li class="my-1">💝 Freelance Coach များငှားရမ်းနိုင်ခြင်း</li>
                                <li class="my-1">💝 စီးပွားရေးပညာများ သင်ကြားနိုင်ခြင်း</li>
                                <li class="my-1">💝 ဝန်ထမ်းများ ငှားရမ်းနိုင်ခြင်း
                                </li>
                                <li class="my-1">💝 အလုပ်နဲ့ကိစ္စများ တိုင်ပင်နိုင်ခြင်း</li>
                                <li class="my-1">💝 Instructor များနှင့် စကားပြောနိုင်ခြင်း</li>
                                <li class="my-1">💝 အကြံဥာဏ် များရယူနိုင်ခြင်း ( Consultant Service)</li>
                            </ul>
                        </div>
                        
                    </div>

                    {{-- <button type="button" class="btn btn-primarys text-white">Donate</button> --}}
                    <a href="/donate" class="btn btn-primarys text-white">Donate</a>
    
                </div>
                <div class="col-12 col-md-6 p-3 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/5.png') }}" width="80%" alt="">
                </div>
            </div>
        </div>

        
    </div>


 

   
   
   
    
</x-layout>

    
 





