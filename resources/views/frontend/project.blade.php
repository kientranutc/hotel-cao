@extends('frontend.layouts.master')
@section('title','Product')
@section('meta_keyword', 'Product')
@section('meta_description', 'Product')
@section('meta_author','Product')

@section('link')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/news_detail.css')}}">
@stop
@section('content')
    <div class="projects">
        <div class="projects-title">
            <div class="container">
                <h3 class="text-center">@lang('category.title.project')</h3>
            </div>
        </div>
        <div class="projects-content">
            <div class="container">
                <div class="row gallery">
                    @forelse($projectList as $row)
                        <div class="col-sm-4 wowload fadeInUp">
                            <a href="{{URL::route('project-detail', ['id'=>$row['id'], 'slug' => $row['slug_'.$local]])}}" title="Click để xem chi tiết" class="gallery-image item">
                                <img src="{{$row['image']}}" class="img-responsive">
                                <div class="info-project">
                                    <p>{{$row['title_'.$local]}}</p>
                                </div>
                            </a>
                        </div>
                    @empty
                    @endforelse

                </div>
            </div>
        </div>
    </div>
    <div class="pagination-news">
        <div class="row">
            <div class="col-md-12 text-center">
                {{
                 $projectList->links()
                 }}
            </div>
        </div>
    </div>
@stop