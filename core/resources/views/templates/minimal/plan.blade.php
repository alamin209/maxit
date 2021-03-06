@extends(activeTemplate() .'layouts.master')
@section('style')
@stop
@section('content')
           <span id="pricing"></span>
       <div>
         <!-- Pricing 2 -->
         <div id="pricing-pricing-2" title="pricing/pricing-2.html">
           <section class="slice slice-lg">
             <div class="container">
               <div class="mb-5 text-center">
                 <h3 class=" mt-4">Pricing plans</h3>
                 <div class="fluid-paragraph mt-3">
                   <p class="lead lh-180">We'll make sure we build everything you need from now on</p>
                 </div>
               </div>
               <div class="pricing-container">
                 <div class="text-center mb-7">
                   <div class="btn-group" role="group">
                     <button type="button" class="btn btn-secondary active" data-pricing="monthly">Monthly billing</button>
                     <button type="button" class="btn btn-secondary" data-pricing="yearly">Yearly billing</button>
                   </div>
                 </div>
                 <div class="pricing card-group flex-column flex-lg-row mb-3">
                   <div class="card card-pricing text-center px-3 mb-5 mb-lg-0">
                     <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white">Starter</span>
                     <div class="card-header py-5 border-0">
                       <div class="h1 text-primary text-center mb-0" data-pricing-value="12">$<span class="price">3</span><span class="h6 ml-2">/ per month</span></div>
                     </div>
                     <div class="card-body delimiter-top">
                       <ul class="list-unstyled mb-4">
                         <li>Up to 5 users</li>
                         <li>Basic support on Github</li>
                         <li>Monthly updates</li>
                         <li>Free cancelation</li>
                       </ul><button type="button" class="btn btn-sm btn-neutral mb-3">Order now</button>
                     </div>
                   </div>
                   <div class="card card-pricing popular scale-110 text-center px-3 mb-5 mb-lg-0">
                     <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white">Professional</span>
                     <div class="card-header py-5 border-0">
                       <div class="h1 text-primary text-center mb-0" data-pricing-value="24">$<span class="price">6</span><span class="h6 ml-2">/ per month</span></div>
                     </div>
                     <div class="card-body delimiter-top">
                       <ul class="list-unstyled mb-4">
                         <li>Up to 5 users</li>
                         <li>Basic support on Github</li>
                         <li>Monthly updates</li>
                         <li>Free cancelation</li>
                       </ul><button type="button" class="btn btn-sm btn-neutral mb-3">Order now</button>
                     </div>
                   </div>
                   <div class="card card-pricing text-center px-3 mb-5 mb-lg-0">
                     <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white">Business</span>
                     <div class="card-header py-5 border-0">
                       <div class="h1 text-primary text-center mb-0" data-pricing-value="36">$<span class="price">9</span><span class="h6 ml-2">/ per month</span></div>
                     </div>
                     <div class="card-body delimiter-top">
                       <ul class="list-unstyled mb-4">
                         <li>Up to 5 users</li>
                         <li>Basic support on Github</li>
                         <li>Monthly updates</li>
                         <li>Free cancelation</li>
                       </ul><button type="button" class="btn btn-sm btn-neutral mb-3">Order now</button>
                     </div>
                   </div>
                   <div class="card card-pricing text-center px-3 mb-5 mb-lg-0">
                     <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white">Enterprise</span>
                     <div class="card-header py-5 border-0">
                       <div class="h1 text-primary text-center mb-0" data-pricing-value="48">$<span class="price">12</span><span class="h6 ml-2">/ per month</span></div>
                     </div>
                     <div class="card-body delimiter-top">
                       <ul class="list-unstyled mb-4">
                         <li>Up to 5 users</li>
                         <li>Basic support on Github</li>
                         <li>Monthly updates</li>
                         <li>Free cancelation</li>
                       </ul><button type="button" class="btn btn-sm btn-neutral mb-3">Order now</button>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </section>
         </div>
       </div>
@endsection



