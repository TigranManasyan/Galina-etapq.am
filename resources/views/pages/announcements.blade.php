@extends('layouts.app')
@section('title') {{ __('announcement.title')  }} @endsection
@section('content')
    <main class="main">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp " data-wow-delay="0.1s">
                    <h2 class="section-title bg-white text-center text-primary px-3">{{ __('announcement.title') }}</h2>
                </div>
                <div class="announcements mt-3">

                    @foreach($announcements as $announcement)
                        <div class="modal fade" id="exampleModal_{{ $announcement->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ $announcement['body_'.app()->getLocale()] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card w-25">
                            <div class="card-body">
                                <h4><a href="">{{ $announcement['title_' . app()->getLocale()] }}</a></h4>
                                <p>{{ $announcement->published_at }}</p>
                                <button type="button" data-toggle="modal" data-target="#exampleModal_{{ $announcement->id }}" class="btn btn-sm btn-primary">Ավելին</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
