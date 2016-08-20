<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 31-07-2016
 * Time: 07:58 PM
 */
?>
@extends('front.template.main')

@section('title', $article->title)

@section('content')

   <div class="row primer-div-articulo">
       <div class="col-sm-2"></div>
       <div class="col-sm-8 primera-parte">
           <div class="col-sm-6">
               <h5>{{ $article->category->name }}</h5>
               <h2>{{ $article->title }}</h2>
               <p>{{ date("d F Y", strtotime($article->created_at)) }}</p>
               <p>{{ $article->subtitle }}</p>
           </div>
           <div class="col-sm-6">
               <img src="{{ asset('images/articles/' . $default  ) }}" alt="{{ $article->title }}" class="img-responsive">
           </div>
       </div>
       <div class="col-sm-2"></div>
   </div>
    <div class="row segundo-div-articulo">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            {!! $article->content !!}

        </div>
        <div class="col-sm-3"></div>
    </div>
    <div class="row">
        <div class="col-sm-2"></div>

        <div id="links" class="col-sm-8">
            <?php $i = 0; ?>
            @if (count($gallery) > 0)
                @foreach($gallery as $gal)
                    <a href="{{ asset('images/articles/' . $gal  ) }}" title="{{ $article->title }}-{{ $i }}" data-gallery>
                        <img src="{{ asset('images/articles/' . $gal  ) }}" alt="{{ $article->title }}-{{ $i }}" class="img-responsive img-article">
                    </a>
                    <?php $i++; ?>
                @endforeach
            @endif
        </div>


        <div class="col-sm-2"></div>
    </div>
   <br><br>

   <div id="blueimp-gallery" class="blueimp-gallery">
       <!-- The container for the modal slides -->
       <div class="slides"></div>
       <!-- Controls for the borderless lightbox -->
       <h3 class="title"></h3>
       <a class="prev">‹</a>
       <a class="next">›</a>
       <a class="close">×</a>
       <a class="play-pause"></a>
       <ol class="indicator"></ol>
       <!-- The modal dialog, which will be used to wrap the lightbox content -->
       <div class="modal fade">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" aria-hidden="true">&times;</button>
                       <h4 class="modal-title"></h4>
                   </div>
                   <div class="modal-body next"></div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-default pull-left prev">
                           <i class="glyphicon glyphicon-chevron-left"></i>
                           Previous
                       </button>
                       <button type="button" class="btn btn-primary next">
                           Next
                           <i class="glyphicon glyphicon-chevron-right"></i>
                       </button>
                   </div>
               </div>
           </div>
       </div>
   </div>

@endsection

@section('js')

    <script type="text/javascript">
        @if ($second != null)
        var img =   '<br/><img src="{{ asset('images/articles/' . $second  ) }}" alt="{{ $article->title }}-second" class="img-responsive"><br/>';
        $(function(){
            $("body > div.row.segundo-div-articulo > div.col-sm-6 > p:nth-child(1)").after(img);
        });
        @endif
    </script>

@endsection
