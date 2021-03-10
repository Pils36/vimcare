@extends('layouts.dashboard')

@section('content')

<?php use \App\Http\Controllers\User; ?>
<?php use \App\Http\Controllers\ReplyRating; ?>

<style>
    body{
        font-family: "Montserrat";
    }
    p{
        font-weight: 700;
    }
    .description{
        font-weight: 700;
        color: darkorange !important;
    }
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Service Reviews
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Service Reviews</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      

      <div class="row">

        <div class="col-md-12">

          @if (session('success'))

          <div class="alert alert-success " role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              
          @elseif(session('error'))

          <div class="alert alert-error " role="alert">
            <strong>{{ session('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>


          @endif

          
        </div>

        @if (count($data['myreviews']) > 0)

        @foreach ($data['myreviews'] as $item)


        <div class="col-md-12">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">

                @if($user = \App\User::where('ref_code', $item->ref_code)->first())
                
                @isset($user)

                <img class="img-circle" src="{{ $user->avatar }}" alt="User Image">

                <span class="username"><a href="#">{{ $user->name }}</a>
                  
                  <small style="font-weight: normal;">(Email: {{ (strlen($user->email) > 10) ? substr($user->email, 0, 7)."*****" : $user->email }})</small>
                </span>
                    
                @endisset
                    
                @else

                <img class="img-circle" src="https://res.cloudinary.com/pilstech/image/upload/v1600186029/vimnewlogo_pndv6i.png" alt="User Image">
                <span class="username"><a href="#">Anonymous</a></span>
                @endif

                <span class="description">Quality of Service - {{ $item->rating }} <br> @for ($i = 1; $i <= $item->rating; $i++)
                  <img src="https://img.icons8.com/fluent/15/000000/christmas-star.png" style="width: 10px; height: 10px;"/>
              @endfor</span>



                
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimize"><i class="fa fa-minus"></i>
                </button>
                {{--  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>  --}}
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                    <p>Maintenance Service: <br> {{ ucwords($item->service_maintenance) }}</p>
                </div>
                
            </div>
              <!-- Attachment -->
              <div class="attachment-block clearfix">
                <img class="attachment-img" src="https://res.cloudinary.com/pilstech/image/upload/v1612450240/Carlogo_vvgp9w.jpg" alt="Attachment Image">

                <div class="attachment-pushed">

                  <div class="attachment-text">
                    {!! $item->comment !!}
                  </div>
                  <!-- /.attachment-text -->
                </div>
                <!-- /.attachment-pushed -->
              </div>
              <!-- /.attachment-block -->
            </div>
            <!-- /.box-body -->


              @if($item->reply != null)


              <div class="box-footer box-comments">

                @if($postReply = \App\ReplyRating::where('post_id', $item->post_id)->orderBy('created_at', 'DESC')->get()) 
                
                  @if (count($postReply) > 0)

                    @foreach ($postReply as $replies)

                    <div class="box-comment">
                      <!-- User image -->
                      <img class="img-circle img-sm" src="https://res.cloudinary.com/pilstech/image/upload/v1602595088/3d-worker-hammer-question-24315963_qalye5.jpg" alt="User Image">

                      

                      <div class="comment-text">
                            <span class="username">
                              @if($getname = \App\ReplyRating::join('rating', 'rating.post_id', '=', 'replyrating.post_id')->join('users', 'users.ref_code', '=', 'replyrating.ref_code')->where('replyrating.post_id', $replies->post_id)->first()) 

                              {{ $getname->name }}


                              @endif

                              <span class="text-muted pull-right">{{ date('h:i A', strtotime($replies->created_at))." | ".$replies->created_at->diffForHumans() }}</span>
                            </span><!-- /.username -->
                            {!! $replies->reply !!}
                      </div>
                      <!-- /.comment-text -->
                    </div>
                    
                    <!-- /.box-comment -->
                        
                    @endforeach
                      
                  @else

                  <div class="box-comment">No reply yet</div>
                      
                  @endif

                  @endif


                


              </div>
              <!-- /.box-footer -->
              <div class="box-footer">
                <form action="{{ route('reviewresponse', $item->post_id) }}" method="post">
                  @csrf
                  @if(Auth::user()->businesslogo != null)
                      <img class="img-responsive img-circle img-sm" src="{{ Auth::user()->businesslogo }}" alt="Alt Text">

                      @else

                      <img class="img-responsive img-circle img-sm" src="https://res.cloudinary.com/pilstech/image/upload/v1600186029/vimnewlogo_pndv6i.png" alt="Alt Text">
                  @endif
                  
                  <!-- .img-push is used to add margin to elements next to floating images -->
                  <div class="img-push">
                    <input type="text" name="message" class="form-control input-sm" placeholder="Press enter to post comment">
                  </div>
                </form>
              </div>
              <!-- /.box-footer -->

              @endif


          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
            
        @endforeach
            
        @else

        <div class="col-md-12">
          <!-- Box Comment -->
          <div class="box box-widget">
            
            <div class="box-body">
              
              <div class="row">
                  <div class="col-md-12">
                      <p style="text-align: center">No Service Review</p>
                  </div>
                  
              </div>
              

              
              <!-- /.attachment-block -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
            
        @endif
        
        

        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection