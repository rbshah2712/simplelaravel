@extends('frontend.sub_master')
@section('sub')
@section('title')
Portfolio
@endsection
@php
  $PortfolioPage = App\Models\portfolio::latest()->get();  
@endphp
<div class="services_section layout_padding">
<div class="container">
<div class="col-12">
    <div class="card card-primary">
      <div class="card-header">
        <h4 class="card-title services_taital">Portfolio</h4>
      </div>
      <div class="card-body">
        <div class="row">
          @if(count($PortfolioPage) > 0)
            @foreach($PortfolioPage as $portfolio)
            <h4 class="card-title services_taital">{{$portfolio->title}}</h4>
            <?php
            $PortfolioSub = DB::table('portfolio_images')->select('portfolio_images')->where('portfolio_id','=',$portfolio->id)->get(); 
            foreach($PortfolioSub as $item) { ?>
            <div class="col-sm-2">
                <a href="{{$item->portfolio_images}}" data-toggle="lightbox" data-title="{{$portfolio->title}}" data-gallery="gallery">
                <img src="{{$item->portfolio_images}}" class="img-fluid mb-2" alt="{{$portfolio->title}}"/>
            </a>
            </div>
            <?php
            }
           ?>
          <div class="col-sm-2">
            <a href="{{$portfolio->portfolio_image}}" data-toggle="lightbox" data-title="{{$portfolio->title}}" data-gallery="gallery">
              <img src="{{$portfolio->portfolio_image}}" class="img-fluid mb-2" alt="{{$portfolio->title}}"/>
            </a>
          </div>
          @endforeach
          @else
          <p>No Records to Display</p>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
</div>
  @endsection