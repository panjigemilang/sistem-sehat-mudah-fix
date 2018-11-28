@extends('layouts.baseTamplate')
@section('content')
<!--    CONTENT-->

<body>

<!--    HALO INI FIKRI NYOBA GANTI-->
    
    <!--    SECTION 1 - FORM-->
    <section>
        <div class="main-page">
            <div class="row">
                <div id="join-us" class="col-lg-6 col-md-12 col-sm-12">
                    <h1 class="display-1" style="color: white;">Join Us!</h1>
                    <h2 id="description">To get more <span>information</span> and <span> updated notification.</span> You <span> can also ask<br> </span>your favorite <span>doctor</span> about your disease</h2>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="form-cover">
                        <form id="form-register">
                            <div class="form-group">
                                <label class="label-form">First Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="Enter First name">
                            </div>
                            <div class="form-group">
                                <label class="label-form">Last Name</label>
                                <input type="text" class="form-control" id="lname" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group">
                                <label class="label-form">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-success btn-lg">Subscribe!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- END OF SECTION 1 --}}

    {{-- SECTION 2 --}}
    <section id="sec2">
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <h1 id="ht">Featured Thread</h1>
                </div>
            </div>
        </div>
        <div class="row thread_box">
            @if (isset($thread))  
            @foreach ($thread as $thread)   
            <div class="col-lg-6 col-md-6 col-sm-6">                  
                <h1>{{$thread->judulThread}}</h1>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="desc">
                    <h3>{{$thread->deskripsiThread}}</h3>
                </div>
                <div class="cat">
                    <h4>{{$thread->kategori}}</h4>
                </div>
            </div>
            @endforeach                
            @endif                     
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h1 id="ht" style="text-align: center;">Hitung BMI</h1>
                <div id="bmi">
                    <form id="form-bmi">
                        <div class="form-group">
                            <label class="label-form">Berat</label>
                            <br>
                            <input type="text" class="control-bmi" placeholder="kg">
                        </div>
                        <div class="form-group">
                            <label class="label-form">Tinggi</label>
                            <input type="text" class="control-bmi" placeholder="cm">
                        </div>
                        <!--                            SPACE -->
                        <br>
                        <div style="border: 1px solid #ead2d2; width: 70%; margin: 0 auto;"></div>
                        <br>
                        <!--                            SPACE -->
                        <div class="form-group htg">
                            <button type="button" class="btn btn-success btn-lg">Hitung</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12">
                <h1 id="ht">New Thread</h1>
                <div class="thread">
                    <div id="ui stackable cards">
                        <h1>halo</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
{{-- END OF SECTION 2 --}}

<!--    END OF CONTENT-->
@endsection
