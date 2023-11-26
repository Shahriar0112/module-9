@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="jumbotron bg-primary text-white">
        <div class="container">
            <h1 class="display-4">Welcome to My Portfolio</h1>
            <p class="lead">Hi, I am Mohammad Hasan Shahriar. I am working in a Corporate Office of an renowned Textiles Company.</p>
            <hr class="my-4">
            
            <a class="btn btn-light btn-lg" href="/projects" role="button">View Projects</a>

            
            <div class="mt-4">
                <a href="https://github.com/your-github" target="_blank" class="text-light"><i class="fab fa-github fa-2x mx-2"></i></a>
                <a href="https://linkedin.com/in/your-linkedin" target="_blank" class="text-light"><i class="fab fa-linkedin fa-2x mx-2"></i></a>
                <a href="https://twitter.com/your-twitter" target="_blank" class="text-light"><i class="fab fa-twitter fa-2x mx-2"></i></a>
              
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>About Me</h2>
                <p class="lead">I'm completed my Graduation in IT from Asia Pasific University, Bangladesh.</p>
                <ul>
                    <li><strong>Education:</strong> BSc in IT</li>
                    <li><strong>Work Experience:</strong> 9 Years</li>
                    
                </ul>
            </div>
            <div class="col-md-6">
                
            </div>
        </div>
    </div>
@endsection
