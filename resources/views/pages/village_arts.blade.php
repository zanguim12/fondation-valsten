<!-- village_arts/index.blade.php -->
@extends('layouts.app')

@section('content')
     <!-- Portfolio Grid-->
     <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center p-5">
                <h2 class="section-heading text-uppercase ">Villages des Arts</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row">
                @foreach ($events as $portfolio)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal{{ $portfolio->id }}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ $portfolio->image_path }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{ $portfolio->title }}</div>
                                <div class="portfolio-caption-subheading text-muted">{{ $portfolio->short_description }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            @foreach ($events as $portfolio)
                <!-- Portfolio Modal -->
                <div class="portfolio-modal modal fade" id="portfolioModal{{ $portfolio->id }}" tabindex="-1" aria-labelledby="portfolioModal{{ $portfolio->id }}Label" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center pb-5">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{ $portfolio->title }}</h2>
                                            <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                <div class="divider-custom-line"></div>
                                            </div>
                                            <p class="mb-4">{{ $portfolio->long_description }}</p>
                                            <button class="btn btn-primary" data-bs-dismiss="modal">
                                                <i class="fas fa-times fa-fw"></i>
                                                Close Window
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center mt-4">
                {{ $events->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </section>
    @endsection
