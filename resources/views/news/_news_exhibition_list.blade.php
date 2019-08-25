@if (count($news))
<div class="row">
      <div class="col-md-6">
         <div class="card text-white bg-primary flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-white">{{($news->items())[0]->title}}</strong>
               <h6 class="mb-0">
                  <a class="text-white" href="#">40 Percent of People Can’t Afford Basics</a>
               </h6>
               <div class="mb-1 text-white-50 small">Nov 12</div>
               <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
               <a class="btn btn-outline-light btn-sm" role="button" href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/arch" style="width: 200px; height: 250px;">
         </div>
      </div>
      <div class="col-md-6">
         <div class="card text-white bg-success flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-white">{{($news->items())[1]->title}}</strong>
               <h6 class="mb-0">
                  <a class="text-white" href="#">Food for Thought: Diet and Brain Health</a>
               </h6>
               <div class="mb-1 text-white-50 small">Nov 11</div>
               <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
               <a class="btn btn-outline-light btn-sm" href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 200px; height: 250px;">
         </div>
      </div>
</div>


   <div class="row">
      <div class="col-md-4">
         <div class="card mb-4">
            <img class="card-img-top" src="//placeimg.com/290/180/any" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">{{($news->items())[2]->title}}</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="#" class="btn btn-outline-dark btn-sm">Go somewhere</a>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card mb-4 border-dark">
            <img class="card-img-top" src="//placeimg.com/290/180/any" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">{{($news->items())[3]->title}}</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="#" class="btn btn-dark btn-sm">Go somewhere</a>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card mb-4 text-white bg-dark">
            <img class="card-img-top" src="//placeimg.com/290/180/any" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">{{($news->items())[4]->title}}</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="#" class="btn btn-outline-light btn-sm">Go somewhere</a>
            </div>
         </div>
      </div>
   </div>
   

  </ul>

@else
  <div class="empty-block">暂无数据 ~_~ </div>
@endif