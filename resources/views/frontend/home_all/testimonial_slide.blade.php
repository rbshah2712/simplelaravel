 @php
 $testiSlide_front = App\Models\TestimonialSlide::latest()->get();
 @endphp
  <div class="client_section layout_padding">
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php 
          $count = 0;
          foreach($testiSlide_front as $key=>$val){?>
          <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $count;?>" class="<?php if($count == $key){ echo "active";} ?>"></li>
          <?php
          $count++;
            }
        ?>
        </ol>
        
        <div class="carousel-inner">
         
          <?php 
          $count = 0;
          foreach($testiSlide_front as $key=>$val){?>
        
          <div class="carousel-item <?php if($count == 0){ echo "active"; } ?>">
            <h1 class="what_taital">what our clients Says:</h1>
            <div class="client_section_2 layout_padding">
              <ul>
                <li><img src="{{asset('frontend/assets/images/round-1.png')}}" class="round_1"></li>
                <li><img src="{{$val->testi_image}}" class="image_11"></li>
                <li><img src="{{asset('frontend/assets/images/round-2.png')}}" class="round_2"></li>
              </ul>
              <h5>{{$val->title}}</h5>
              <p class="dummy_text">{{$val->testi_desc}}</p>
            </div>
          </div>
          <?php
          $count++;
            }
        ?>
        </div>
       
      </div>
    </div>
  </div>