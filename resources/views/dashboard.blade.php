@extends('layouts.master')

@section('container')

<section class="main py-3">
    <div class="containerr py-5">
        <div class="row py-5">
            <div class="col-lg-6 py-5 offset-lg-1">
                <h3>Hi There!<br>
                Its My Portofolio Prototype
                </h3>
                <h6>
                    ACyn
                </h6>
                <input type="button" value="Button ?" class="bt1 mt-5">

            </div>
        </div>
    </div>
</section>
<section class="about py-5">
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-5 py-5 offeset-lg-1">
                <img src="image/nrt.png" alt="">
            </div>
            <div class="col-lg-7 pt-3">
                <h1>Blank</h1>
                <p>Prototype Requirement is Blank</p>
                <p class="py-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis iste fugit est ex optio nesciunt consectetur nostrum adipisci in consequatur inventore illum excepturi incidunt reprehenderit, enim, recusandae officiis iure cupiditate.</p>
                <div class="progress">
                    <div class="pro-value">
                        <p>Progress on <span class="text-white float-right">25%</span></p>
                    </div>
                </div>
                <input type="button" class="btn1 mt-4" value="Contact">
            </div>
        </div>
    </div>
</section>
<section class="services py-5 bg-light">
    <div class="container py-5">
        <h1 class="text-center pb-5">Services</h1>
        <div class="row pb-3">
            <div class="col-lg-4 mb-3">
                <div class="card text-center py-3">
                    <div class="card-body">
                        <div class="circle">
                            <span><i class="fas fa-desktop"></i></span>
                        </div>
                        <h4 class="font-weight-bold pb-2">Project Manager</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quaerat est voluptas voluptates saepe dignissimos recusandae, obcaecati, vel assumenda iure, eveniet commodi sequi reiciendis dolore? Veniam voluptatem est excepturi rerum?</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card text-center py-3">
                    <div class="card-body">
                        <div class="circle">
                            <span><i class="fas fa-desktop"></i></span>
                        </div>
                        <h4 class="font-weight-bold pb-2">IT Support</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quaerat est voluptas voluptates saepe dignissimos recusandae, obcaecati, vel assumenda iure, eveniet commodi sequi reiciendis dolore? Veniam voluptatem est excepturi rerum?</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card text-center py-3">
                    <div class="card-body">
                        <div class="circle">
                            <span><i class="fas fa-desktop"></i></span>
                        </div>
                        <h4 class="font-weight-bold pb-2">Game Developer</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quaerat est voluptas voluptates saepe dignissimos recusandae, obcaecati, vel assumenda iure, eveniet commodi sequi reiciendis dolore? Veniam voluptatem est excepturi rerum?</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card text-center py-3">
                    <div class="card-body">
                        <div class="circle">
                            <span><i class="fas fa-desktop"></i></span>
                        </div>
                        <h4 class="font-weight-bold pb-2">3D Artist</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quaerat est voluptas voluptates saepe dignissimos recusandae, obcaecati, vel assumenda iure, eveniet commodi sequi reiciendis dolore? Veniam voluptatem est excepturi rerum?</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card text-center py-3">
                    <div class="card-body">
                        <div class="circle">
                            <span><i class="fas fa-desktop"></i></span>
                        </div>
                        <h4 class="font-weight-bold pb-2">Sound Engineer</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quaerat est voluptas voluptates saepe dignissimos recusandae, obcaecati, vel assumenda iure, eveniet commodi sequi reiciendis dolore? Veniam voluptatem est excepturi rerum?</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card text-center py-3">
                    <div class="card-body">
                        <div class="circle">
                            <span><i class="fas fa-desktop"></i></span>
                        </div>
                        <h4 class="font-weight-bold pb-2">Cyber Researcher</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quaerat est voluptas voluptates saepe dignissimos recusandae, obcaecati, vel assumenda iure, eveniet commodi sequi reiciendis dolore? Veniam voluptatem est excepturi rerum?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection