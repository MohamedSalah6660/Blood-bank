@extends('client.layouts.app')


@section('content')
<strong>
<div class="text-center" style="margin-top: 20px">All Articles</div>
</strong>

<div class='row'>
        <div class='col-md-12' id="posts">

    @foreach ($posts->chunk(3) as  $posts)
          <div class="row">
 
    @foreach($posts as $post)

        <div class="col-xs-12 col-sm-4">
            <div class="card">
              <a class="img-card" href="{{ route('showpost',
                array('post_title'=>$post->title)) }}">
                <img  alt="" src="{{ asset('/storage/image/'.$post->thumbnail) }}"></a>
               
                <br />
                <div class="card-content">
                    <h4 class="card-title">
                        <a>
                        {{$post->title }}
                        </a>
                    </h4>
                 <h4>{{ optional($post->category)->name }}</h4>
                </div>
                <div class="card-read-more">
                         <a href="{{ route('showpost',
                    array('post_title'=>$post->title)) }}"
                     class="btn btn-link btn-block">
Read Article
                    </a>
                </div>
            </div>
        </div>
        @endforeach  
     </div>
     @endforeach
   </div>
 </div>






@endsection
