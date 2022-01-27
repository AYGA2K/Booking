@extends('layouts.app')
@section('content')

<main class="flex-shrink-0">
    <!-- Navigation-->
    
    <!-- Page content-->
    <section class="py-5">
        <div class="container px-5">
            <!-- Contact form-->
            <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h1 class="fw-bolder">Get in touch</h1>
                    <p class="lead fw-normal text-muted mb-0">We'd love to hear from you</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
 
                            {!! Form::open(['action' => 'App\Http\Controllers\contact@store', 'methode'=>'POST' ]) !!}
                            <!-- Name input-->
                     
                            <div class=" mb-3 "  >
                                {{Form::label('name', 'name')}}
                                {{Form::text('name', '', ['class' => 'form-control'])}}
                            </div>
                            <div class=" mb-3 "  >
                                {{Form::label('email', 'email')}}
                                {{Form::text('email', '', ['class' => 'form-control'])}}
                            </div>
                            
                            <div class=" mb-3 "  >
                                {{Form::label('phone', 'phone')}}
                                {{Form::text('phone', '', ['class' => 'form-control'])}}
                            </div>
                            
                            <div class=" mb-3 "  >
                                {{Form::label('message', 'message')}}
                                {{Form::text('message', '', ['class' => 'form-control'])}}
                            </div>
                            
                            
                        
                            <div class="d-grid "  >     
                            {{Form::submit('Submit', ['class'=>'btn btn-primary   '  ])}}
                            </div>
                          
                           
                            {!! Form::close() !!}
                        
                    </div>
                </div>
            </div>
            <!-- Contact cards-->
            <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5">
                <div class="col">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-dots"></i></div>
                    <div class="h5 mb-2">Chat with us</div>
                    <p class="text-muted mb-0">Chat live with one of our support specialists.</p>
                </div>
                <div class="col">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                    <div class="h5">Ask the community</div>
                    <p class="text-muted mb-0">Explore our community forums and communicate with other users.</p>
                </div>
                <div class="col">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-question-circle"></i></div>
                    <div class="h5">Support center</div>
                    <p class="text-muted mb-0">Browse FAQ's and support articles to find solutions.</p>
                </div>
                <div class="col">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
                    <div class="h5">Call us</div>
                    <p class="text-muted mb-0">Call us during normal business hours at (555) 892-9403.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Footer-->
<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2021</div></div>
            <div class="col-auto">
                <a class="link-light small" href="#!">Privacy</a>
                <span class="text-white mx-1">&middot;</span>
                <a class="link-light small" href="#!">Terms</a>
                <span class="text-white mx-1">&middot;</span>
                <a class="link-light small" href="#!">Contact</a>
            </div>
        </div>
    </div>
</footer>


    
@endsection

