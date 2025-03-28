<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <a href=""><img src="{{ asset('image/prf.jpg') }}"
                        class="rounded-circle mt-3 col-md-6 float-md-end mb-3 ms-md-3" width="200" alt="" srcset=""></a>
            </div>
            <div class="col-7 p-5">
                <h5>Subandrio</h5>
                <article>Let me introduce myself, my name is Subandrio, but people usually call me Rio. I am a fourth-semester student, and I am currently passionate about web development using Laravel. Building websites is something I truly enjoy, as it constantly pushes me to learn and create better, more optimized websites. I hope that this first step will help me enhance my skills and enable me to develop even more engaging and dynamic websites in the future.
                </article>
            </div>
            <hr>
            <div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h2 class="text-center">My Skills</h2>
        <div class="row mt-4">
            <div class="col-md-4 text-center">
                <i class="bi bi-code-slash display-4"></i>
                <h4>Web Development</h4>
                <p>Laravel, React, Vue.js, Tailwind CSS</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="bi bi-database display-4"></i>
                <h4>Backend & Database</h4>
                <p>PHP, MySQL, PostgreSQL, Firebase</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="bi bi-brush display-4"></i>
                <h4>UI/UX Design</h4>
                <p>Figma, Adobe XD, Bootstrap</p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h2 class="text-center">My Recent Projects</h2>
        <div class="row mt-4">
            @foreach ($projects as $project)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/' . $project->image) }}" class="card-img-top"
                            alt="{{ $project->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p class="card-text">{{ Str::limit($project->description, 100) }}</p>
                            <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary">View Project</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container mt-5 text-center">
        <h2>Contact Me</h2>
        <p>Feel free to reach out for collaboration or freelance work.</p>
        <p>
            <i class="bi bi-envelope"></i> Email: subandrio@example.com <br>
            <i class="bi bi-linkedin"></i> LinkedIn: linkedin.com/in/subandrio <br>
            <i class="bi bi-github"></i> GitHub: github.com/subandrio
        </p>
    </div>




</x-layout>