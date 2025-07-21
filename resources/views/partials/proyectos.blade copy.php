<section id="proyectos" class="py-5 bg-light">
    <div class="container">
        <h2 class="fw-bold mb-4">Proyectos Destacados</h2>
        <div class="row g-4">
            @php
                $proyectos = [
                ['titulo'=>'Doble5', 'img'=>'/images/doble5-demo.png', 'desc'=>'PWA en Vue.js + Firebase', 'demo'=>'https://doble5.vercel.app', 'code'=>'https://github.com/nmsantaana1994/doble5'],
                // añade más
                ];
            @endphp

            @foreach($proyectos as $p)
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ $p['img'] }}" class="card-img-top" alt="{{ $p['titulo'] }}">
                    <div class="card-body d-flex flex-column">
                        <p class="h5 card-title">{{ $p['titulo'] }}</p>
                        <p class="card-text">{{ $p['desc'] }}</p>
                        <div class="mt-auto">
                            <a href="{{ $p['demo'] }}" target="_blank" class="btn btn-primary me-2">
                                <i class="bi bi-play-circle"></i> Demo
                            </a>
                            <a href="{{ $p['code'] }}" target="_blank" class="btn btn-outline-secondary">
                                <i class="bi bi-github"></i> Código
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
