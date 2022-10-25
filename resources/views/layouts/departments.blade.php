<!-- feature_part start-->
<section class="feature_part padding_top">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-4 align-self-center">
                <div class="single_feature_text ">
                    <h2>Nos Services</h2>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="feature_item">
                    <div class="row">
                        @foreach ($departments as $department)
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_feature">
                                    <div class="card bg-primary text-white text-center">
                                        <div class="card-header">
                                            {{ $department->department }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature_part start-->
