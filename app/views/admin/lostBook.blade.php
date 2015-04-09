@extends('admin.master')
@section('head')
		
    @endsection
@section('content')

	<section class="content">
	<?php
    $new=DB('lost_book')::where('id',2)->first();.
		$old=DB::table('books')->where('id',$new->book_id)->first();
    $usr=DB::table('users')->where('id',$new->user_id)->pluck('name');
    $pub=DB::table('publications')->where('id',$old->publication_id)->pluck('name');
		?>
		<div class="row">
            <div class="col-md-6">
              <!-- small box -->
              	<div class="small-box bg-aqua">
                	<div class="inner">
                  		<h3>{{ $old->title }}</h3>
                  		<p>{{ $old->authors }}</p>
                	</div>
                  
                	<a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal" >More info <i class="fa fa-arrow-circle-right"></i></a>
                
              </div>
            </div>
        </div>

        <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span style="margin-left:35%">Old Book</span> <span class="pull-right" style="margin-right:15%">New Book</span></h4>
      </div>
      <div class="modal-body">
          <div class="row">
            <div class="col-md-4">
              Name of the Book:
            </div>
            <div class="col-md-4">
              {{ $old->title }}
            </div>
            <div class="col-md-4">
              {{ $new->title }}
            </div>
          </div> 
          <br />
          <div class="row">
            <div class="col-md-4">
              Authors of the book:
            </div>
            <div class="col-md-4">
              {{ $old->authors }}
            </div>
            <div class="col-md-4">
              {{ $new->authors }}
            </div>
          </div> 
          <br />
          <div class="row">
            <div class="col-md-4">
              Edition of book:
            </div>
            <div class="col-md-4">
              {{ $old->edition }}
            </div>
            <div class="col-md-4">
              {{ $new->edition }}
            </div>
          </div> 
          <br />
          <div class="row">
            <div class="col-md-4">
              ISBN of the book:
            </div>
            <div class="col-md-4">
              {{ $old->ISBN }}
            </div>
            <div class="col-md-4">
             {{ $new->ISBN }}
            </div>
          </div> 
          <br />
          <div class="row">
            <div class="col-md-4">
              Publication of the book:
            </div>
            <div class="col-md-4">
              {{ $new->publication }}
            </div>
            <div class="col-md-4">
             {{ $pub }}
            </div>
          </div> 
          <br />
          <div class="row">
            <div class="col-md-4">
              Code of the book:
            </div>
            <div class="col-md-4">
              {{ $new->code }}
            </div>
            <div class="col-md-4">
             {{ $old->code  }}
            </div>
          </div> 
          <br />          
      </div>
      <div class="modal-footer">
        
        Book lost by  <strong>{{ $usr }}</strong>

      </div>
    </div>
  </div>
</div>
    </section>
	@endsection

@section('script')
		
    @endsection    