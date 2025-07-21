<section id="experiencia" class="section-padding" style="background: #f8fafc;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Experiencia Profesional</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                Mi trayectoria construyendo soluciones que transforman negocios
            </p>
        </div>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Timeline -->
                <div class="position-relative">
                    <!-- Timeline Line -->
                    <div class="position-absolute start-50 translate-middle-x" style="width: 2px; height: 100%; background: linear-gradient(to bottom, #667eea, #764ba2); top: 0;"></div>
                    
                    @foreach([
                        [
                            'empresa' => 'Foodservice',
                            'cargo' => 'Senior Full Stack Developer',
                            'periodo' => 'Jul 2024 – Presente',
                            'ubicacion' => 'Remoto',
                            'desc' => 'Lidero el desarrollo de aplicaciones web críticas para la gestión de servicios alimentarios, optimizando procesos que manejan miles de transacciones diarias.',
                            'logros' => [
                                'Reduje el tiempo de carga de la aplicación principal en 60%',
                                'Implementé arquitectura de microservicios con Laravel',
                                'Lideré equipo de 3 desarrolladores junior',
                                'Integré sistema de pagos con múltiples proveedores'
                            ],
                            'tech' => ['Laravel 10', 'Vue.js 3', 'MySQL', 'Redis', 'AWS'],
                            'color' => 'primary'
                        ],
                        [
                            'empresa' => 'GlobalMed',
                            'cargo' => 'Freelance Full Stack Developer',
                            'periodo' => '2022 – Presente',
                            'ubicacion' => 'Freelance',
                            'desc' => 'Desarrollo de PWA para gestión médica y sistemas de administración hospitalaria con tecnologías modernas.',
                            'logros' => [
                                'Creé PWA que funciona 100% offline',
                                'Implementé AG Grid para manejo de 10k+ registros',
                                'Desarrollé API REST con autenticación JWT',
                                'Optimicé consultas SQL reduciendo tiempo 80%'
                            ],
                            'tech' => ['Vue.js', 'Laravel 5.8', 'AG Grid', 'PWA', 'MySQL'],
                            'color' => 'success'
                        ],
                        [
                            'empresa' => 'CentralFarm',
                            'cargo' => 'Freelance Developer',
                            'periodo' => '2025 – Presente',
                            'ubicacion' => 'Freelance',
                            'desc' => 'Rediseño completo del sistema de gestión de pedidos farmacéuticos, modernizando la arquitectura y mejorando la experiencia de usuario.',
                            'logros' => [
                                'Migré sistema legacy a Laravel 10',
                                'Implementé diseño responsive moderno',
                                'Automaticé procesos de inventario',
                                'Integré sistema de notificaciones en tiempo real'
                            ],
                            'tech' => ['Laravel 10', 'Blade', 'Bootstrap 5', 'JavaScript', 'MySQL'],
                            'color' => 'warning'
                        ]
                    ] as $index => $exp)
                    
                    <div class="row mb-5" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                        <div class="col-12">
                            <div class="d-flex align-items-center mb-3">
                                <!-- Timeline Dot -->
                                <div class="position-absolute start-50 translate-middle bg-{{ $exp['color'] }} rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; z-index: 2;">
                                    <i class="fas fa-briefcase text-white"></i>
                                </div>
                                
                                <!-- Content Card -->
                                <div class="card-custom w-100 p-4 {{ $index % 2 == 0 ? 'ms-auto' : 'me-auto' }}" style="width: calc(50% - 30px) !important; margin-{{ $index % 2 == 0 ? 'left' : 'right' }}: calc(50% + 30px) !important;">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <div>
                                            <h4 class="fw-bold mb-1">{{ $exp['cargo'] }}</h4>
                                            <h5 class="text-{{ $exp['color'] }} mb-1">{{ $exp['empresa'] }}</h5>
                                            <div class="d-flex align-items-center text-muted small">
                                                <i class="fas fa-calendar-alt me-2"></i>{{ $exp['periodo'] }}
                                                <span class="mx-2">•</span>
                                                <i class="fas fa-map-marker-alt me-2"></i>{{ $exp['ubicacion'] }}
                                            </div>
                                        </div>
                                        <span class="badge bg-{{ $exp['color'] }} bg-opacity-10 text-{{ $exp['color'] }} px-3 py-2">
                                            {{ $index == 0 ? 'Actual' : 'Completado' }}
                                        </span>
                                    </div>
                                    
                                    <p class="mb-3">{{ $exp['desc'] }}</p>
                                    
                                    <div class="mb-3">
                                        <h6 class="fw-bold mb-2">Logros Destacados:</h6>
                                        <ul class="list-unstyled">
                                            @foreach($exp['logros'] as $logro)
                                            <li class="mb-1">
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                <small>{{ $logro }}</small>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    
                                    <div>
                                        <h6 class="fw-bold mb-2">Tecnologías:</h6>
                                        <div class="d-flex flex-wrap gap-2">
                                            @foreach($exp['tech'] as $tech)
                                            <span class="badge bg-light text-dark px-2 py-1 rounded-pill">{{ $tech }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5" data-aos="fade-up">
            <a href="/cv-nicolas-santaana.pdf" target="_blank" class="btn btn-outline-custom btn-lg">
                <i class="fas fa-download me-2"></i>Descargar CV Completo
            </a>
        </div>
    </div>
</section>

@section('css')
@parent
<style>
    /* Timeline responsive adjustments */
    @media (max-width: 768px) {
        #experiencia .card-custom {
            width: 100% !important;
            margin-left: 0 !important;
            margin-right: 0 !important;
        }
        
        #experiencia .position-absolute.start-50 {
            left: 20px !important;
            transform: none !important;
        }
    }
</style>
@endsection
