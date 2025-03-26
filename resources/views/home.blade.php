<x-layout>
        <div class="container text-center mt-5">
        <h1>Selamat Datang di Portofolio Saya</h1>
        <p class="lead">Saya seorang Web Developer yang fokus pada Laravel.</p>

        <img src="{{ asset('images/profile.jpg') }}" class="rounded-circle mt-3" width="200" alt="Foto Profil">

        <div class="mt-4">
            <a href="{{ route('projects') }}" class="btn btn-primary">Lihat Proyek</a>
            <a href="{{ route('contact') }}" class="btn btn-outline-secondary">Hubungi Saya</a>
        </div>
    </div>
    <div class="container mt-5">
    <h2 class="text-center">Keahlian Saya</h2>
    <div class="row mt-4">
        <div class="col-md-4 text-center">
            <i class="bi bi-code-slash display-4"></i>
            <h4>Web Development</h4>
            <p>Membuat website modern dan responsif dengan Laravel & Vue.js.</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="bi bi-database display-4"></i>
            <h4>Database Management</h4>
            <p>Merancang database yang efisien menggunakan MySQL & PostgreSQL.</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="bi bi-brush display-4"></i>
            <h4>UI/UX Design</h4>
            <p>Merancang antarmuka yang menarik dan mudah digunakan.</p>
        </div>
    </div>
</div>

</x-layout>
