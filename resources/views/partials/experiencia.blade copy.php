@section('css')
<style>
    /*Hover en las cards de experiencia*/
    .hover-shadow {
        transition: box-shadow .3s ease;
    }
    .hover-shadow:hover {       
        box-shadow: 0 .5rem 1rem rgba(0,0,0,0.15);
    }
    
</style>
@endsection

<section id="experiencia" class="py-5">
    <div class="container">
        <h2 class="fw-bold mb-4">Experiencia Profesional</h2>
        <div class="row g-4">
            @foreach([
                ['empresa'=>'Foodservice', 'cargo'=>'Senior Full Stack', 'periodo'=>'Jul 2024 – Presente', 'desc'=>'Liderazgo en proyectos Laravel & Vue, optimización de rendimiento.'],
                ['empresa'=>'GlobalMed', 'cargo'=>'Freelance Developer', 'periodo'=>'2022 – Presente', 'desc'=>'Desarrollo de PWA en Vue y sistemas Laravel 5.8 con AG Grid.'],
                ['empresa'=>'CentralFarm', 'cargo'=>'Freelance Developer', 'periodo'=>'2025 – Presente', 'desc'=>'Rediseño completo en Laravel 10 & Blade para gestión de pedidos.'],
            ] as $exp)
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-shadow">
                    <div class="card-body">
                        <p class="h5 card-title">{{ $exp['cargo'] }} @ <span class="text-primary">{{ $exp['empresa'] }}</span></p>
                        <p class="h6 text-muted">{{ $exp['periodo'] }}</p>
                        <p class="card-text mt-3">{{ $exp['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>