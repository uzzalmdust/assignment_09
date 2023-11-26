<section class="py-5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <h1 class="text-primary"> About Me</h1><hr />
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-9 col-lg-6 col-xl-5">
                <div class="mx-auto mb-5">
                    <h2 class="display-5 fw-bold mt-2 mb-4">Dedicatedly, I am a Laravel Developer.</h2>
                    
                    <p class="lead text-muted mb-4">As a programmer I have grabbed some programming languages and 
                        markup languages like PHP, JavaScript, HTML, CSS etc. These skills is shown beside. </p>
                </div>
            </div>
            <div class="col-12 col-md-9 col-lg-6 col-xl-5 offset-xl-2">
                <div class="px-4 py-5 px-lg-5 bg-light rounded mx-auto">
                    @foreach($data as $key=>$item)
                        <div class="mb-5">
                        <div class="d-flex">
                        <span
                            class="d-flex flex-shrink-0 me-3 me-lg-5 justify-content-center align-items-center rounded-circle bg-primary text-white"
                            style="width: 48px;height: 48px">{{ ++$key }}</span>
                        <div>
                            <p class="lead text-muted fw-bold">{{ $item['name'] }}</p>
                        </div>

                    </div>
                    <div class="progress ms-5">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $item['rate'] }}%" aria-valuenow="{{ $item['rate'] }}"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>