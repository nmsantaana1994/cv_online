<section id="proyectos" class="section-padding" style="background: #f8fafc;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Proyectos Destacados</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                Casos de éxito que demuestran mi capacidad para resolver problemas complejos
            </p>
        </div>
        
        <div class="row g-4">
            @php
                $proyectos = [
                    [
                        'titulo' => 'Doble5 - PWA Gaming',
                        'img' => '/placeholder.svg?height=300&width=500&text=Doble5%20PWA%20Gaming&bg=667eea&color=white',
                        'categoria' => 'Progressive Web App',
                        'desc' => 'Aplicación de juegos multijugador en tiempo real con Vue.js y Firebase. Funciona completamente offline y soporta notificaciones push.',
                        'demo' => 'https://doble5.vercel.app',
                        'code' => 'https://github.com/nmsantaana1994/doble5',
                        'tech' => ['Vue.js 3', 'Firebase', 'PWA', 'Realtime DB', 'Vercel'],
                        'features' => [
                            'Multijugador en tiempo real',
                            'Funciona 100% offline',
                            'Notificaciones push',
                            'Responsive design',
                            'Instalable como app nativa'
                        ],
                        'color' => 'primary',
                        'gradient' => 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)'
                    ],
                    [
                        'titulo' => 'GlobalMed Dashboard',
                        'img' => '/placeholder.svg?height=300&width=500&text=GlobalMed%20Healthcare&bg=28a745&color=white',
                        'categoria' => 'Healthcare Management',
                        'desc' => 'Sistema completo de gestión hospitalaria con manejo masivo de datos médicos, reportes avanzados y interfaz intuitiva.',
                        'demo' => '#',
                        'code' => '#',
                        'tech' => ['Laravel 5.8', 'AG Grid', 'MySQL', 'Chart.js', 'Bootstrap'],
                        'features' => [
                            'Manejo de +10k registros',
                            'Reportes en tiempo real',
                            'Interfaz médica especializada',
                            'Exportación de datos',
                            'Sistema de roles avanzado'
                        ],
                        'color' => 'success',
                        'gradient' => 'linear-gradient(135deg, #28a745 0%, #20c997 100%)'
                    ],
                    [
                        'titulo' => 'CentralFarm E-commerce',
                        'img' => '/placeholder.svg?height=300&width=500&text=CentralFarm%20E-commerce&bg=ffc107&color=black',
                        'categoria' => 'E-commerce Platform',
                        'desc' => 'Plataforma de e-commerce farmacéutico con gestión de inventario automatizada, sistema de pedidos y panel administrativo completo.',
                        'demo' => '#',
                        'code' => '#',
                        'tech' => ['Laravel 10', 'Blade', 'MySQL', 'Bootstrap 5', 'JavaScript'],
                        'features' => [
                            'Gestión de inventario automática',
                            'Sistema de pedidos complejo',
                            'Panel administrativo',
                            'Integración con proveedores',
                            'Reportes de ventas'
                        ],
                        'color' => 'warning',
                        'gradient' => 'linear-gradient(135deg, #ffc107 0%, #fd7e14 100%)'
                    ]
                ];
            @endphp
            
            @foreach($proyectos as $index => $p)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                <div class="card-custom h-100 overflow-hidden position-relative">
                    <!-- Project Image with Overlay -->
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <!-- Background Gradient -->
                        <div class="position-absolute w-100 h-100" style="background: {{ $p['gradient'] }}; opacity: 0.9;"></div>
                        
                        <!-- Project Mockup -->
                        <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                            <div class="text-center text-white">
                                <div class="mb-3">
                                    @if($p['categoria'] == 'Progressive Web App')
                                        <i class="fas fa-mobile-alt" style="font-size: 4rem; opacity: 0.8;"></i>
                                    @elseif($p['categoria'] == 'Healthcare Management')
                                        <i class="fas fa-heartbeat" style="font-size: 4rem; opacity: 0.8;"></i>
                                    @else
                                        <i class="fas fa-shopping-cart" style="font-size: 4rem; opacity: 0.8;"></i>
                                    @endif
                                </div>
                                <h4 class="fw-bold mb-2">{{ $p['titulo'] }}</h4>
                                <div class="d-flex justify-content-center gap-2 flex-wrap">
                                    @foreach(array_slice($p['tech'], 0, 3) as $tech)
                                    <span class="badge bg-white bg-opacity-20 px-2 py-1 small">{{ $tech }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        
                        <!-- Category Badge -->
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-white text-{{ $p['color'] }} px-3 py-2 fw-bold">{{ $p['categoria'] }}</span>
                        </div>
                        
                        <!-- Hover Overlay -->
                        <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(0,0,0,0.8); opacity: 0; transition: all 0.3s ease;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                            <div class="text-center text-white">
                                <h5 class="fw-bold mb-3">Vista Previa</h5>
                                <div class="d-flex gap-2 justify-content-center">
                                    @if($p['demo'] !== '#')
                                    <a href="{{ $p['demo'] }}" target="_blank" class="btn btn-light btn-sm">
                                        <i class="fas fa-external-link-alt me-1"></i>Demo
                                    </a>
                                    @endif
                                    
                                    @if($p['code'] !== '#')
                                    <a href="{{ $p['code'] }}" target="_blank" class="btn btn-outline-light btn-sm">
                                        <i class="fab fa-github me-1"></i>Código
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body d-flex flex-column">
                        <p class="card-text text-muted mb-3">{{ $p['desc'] }}</p>
                        
                        <div class="mb-3">
                            <h6 class="fw-bold mb-2 small text-{{ $p['color'] }}">Características principales:</h6>
                            <ul class="list-unstyled">
                                @foreach(array_slice($p['features'], 0, 3) as $feature)
                                <li class="small mb-1">
                                    <i class="fas fa-check text-{{ $p['color'] }} me-2"></i>{{ $feature }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <!-- Tech Stack -->
                        <div class="mb-3">
                            <h6 class="fw-bold mb-2 small">Stack Tecnológico:</h6>
                            <div class="d-flex flex-wrap gap-1">
                                @foreach($p['tech'] as $tech)
                                <span class="badge bg-{{ $p['color'] }} bg-opacity-10 text-{{ $p['color'] }} px-2 py-1 small">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>
                        
                        <div class="mt-auto">
                            <div class="d-flex gap-2">
                                @if($p['demo'] !== '#')
                                <a href="{{ $p['demo'] }}" target="_blank" class="btn btn-{{ $p['color'] }} flex-fill">
                                    <i class="fas fa-external-link-alt me-1"></i>Ver Demo
                                </a>
                                @else
                                <button class="btn btn-{{ $p['color'] }} flex-fill" disabled>
                                    <i class="fas fa-eye me-1"></i>Próximamente
                                </button>
                                @endif
                                
                                @if($p['code'] !== '#')
                                <a href="{{ $p['code'] }}" target="_blank" class="btn btn-outline-{{ $p['color'] }} flex-fill">
                                    <i class="fab fa-github me-1"></i>Código
                                </a>
                                @else
                                <button class="btn btn-outline-secondary flex-fill" disabled>
                                    <i class="fas fa-lock me-1"></i>Privado
                                </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Additional Projects Teaser -->
        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="400">
            <div class="card-custom p-4 d-inline-block">
                <div class="row align-items-center g-3">
                    <div class="col-auto">
                        <div class="bg-primary bg-opacity-10 text-primary p-3 rounded-circle">
                            <i class="fas fa-plus fs-4"></i>
                        </div>
                    </div>
                    <div class="col">
                        <h5 class="fw-bold mb-1">¿Quieres ver más proyectos?</h5>
                        <p class="text-muted mb-0">Tengo más casos de éxito que compartir contigo</p>
                    </div>
                    <div class="col-auto">
                        <div class="d-flex gap-2">
                            <a href="https://github.com/nmsantaana1994" target="_blank" class="btn btn-outline-primary">
                                <i class="fab fa-github me-2"></i>GitHub
                            </a>
                            <a href="#contacto" class="btn btn-gradient-primary">
                                <i class="fas fa-comments me-2"></i>Hablemos
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.card-custom:hover .position-absolute[onmouseover] {
    opacity: 1 !important;
}

/* Project card hover effects */
#proyectos .card-custom {
    transition: all 0.3s ease;
}

#proyectos .card-custom:hover {
    transform: translateY(-10px);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    #proyectos .card-custom .position-absolute[onmouseover] {
        display: none;
    }
}
</style>
