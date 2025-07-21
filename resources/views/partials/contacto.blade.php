<section id="contacto" class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Trabajemos Juntos</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                ¿Tienes un proyecto en mente? Me encantaría escuchar tu idea y ayudarte a hacerla realidad
            </p>
        </div>
        
        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-lg-8" data-aos="fade-right">
                <div class="card-custom p-4">
                    <h4 class="fw-bold mb-4">Cuéntame sobre tu proyecto</h4>
                    <form id="contactForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="nombre" class="form-label fw-bold">Nombre *</label>
                                <input type="text" class="form-control form-control-lg" id="nombre" required>
                            </div>
                            <div class="col-md-6">
                                <label for="empresa" class="form-label fw-bold">Empresa</label>
                                <input type="text" class="form-control form-control-lg" id="empresa">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-bold">Email *</label>
                                <input type="email" class="form-control form-control-lg" id="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="telefono" class="form-label fw-bold">Teléfono</label>
                                <input type="tel" class="form-control form-control-lg" id="telefono">
                            </div>
                            <div class="col-12">
                                <label for="tipoProyecto" class="form-label fw-bold">Tipo de Proyecto *</label>
                                <select class="form-select form-select-lg" id="tipoProyecto" required>
                                    <option value="">Selecciona una opción</option>
                                    <option value="web-completa">Aplicación Web Completa</option>
                                    <option value="pwa">Progressive Web App (PWA)</option>
                                    <option value="ecommerce">E-commerce</option>
                                    <option value="api">API / Backend</option>
                                    <option value="mantenimiento">Mantenimiento / Optimización</option>
                                    <option value="consultoria">Consultoría Técnica</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="presupuesto" class="form-label fw-bold">Presupuesto Estimado</label>
                                <select class="form-select form-select-lg" id="presupuesto">
                                    <option value="">Selecciona un rango</option>
                                    <option value="500-1500">$500 - $1,500 USD</option>
                                    <option value="1500-3000">$1,500 - $3,000 USD</option>
                                    <option value="3000-5000">$3,000 - $5,000 USD</option>
                                    <option value="5000+">$5,000+ USD</option>
                                    <option value="por-definir">Por definir</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="mensaje" class="form-label fw-bold">Describe tu proyecto *</label>
                                <textarea class="form-control" id="mensaje" rows="5" placeholder="Cuéntame más detalles sobre tu proyecto, objetivos, funcionalidades que necesitas, etc." required></textarea>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="acepto" required>
                                    <label class="form-check-label" for="acepto">
                                        Acepto que mis datos sean utilizados para contactarme sobre este proyecto *
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-gradient-primary btn-lg w-100">
                                    <i class="fas fa-paper-plane me-2"></i>Enviar Mensaje
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Contact Info -->
            <div class="col-lg-4" data-aos="fade-left">
                <div class="h-100">
                    <!-- Quick Contact -->
                    <div class="card-custom p-4 mb-4">
                        <h5 class="fw-bold mb-3">Contacto Directo</h5>
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary bg-opacity-10 text-primary p-3 rounded me-3">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <div class="fw-bold">Email</div>
                                <a href="mailto:nico@example.com" class="text-decoration-none">nico@example.com</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success bg-opacity-10 text-success p-3 rounded me-3">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div>
                                <div class="fw-bold">WhatsApp</div>
                                <a href="https://wa.me/1234567890" target="_blank" class="text-decoration-none">+1 (234) 567-8900</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="bg-info bg-opacity-10 text-info p-3 rounded me-3">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <div class="fw-bold">Horario</div>
                                <small class="text-muted">Lun - Vie: 9:00 - 18:00 (GMT-3)</small>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Links -->
                    <div class="card-custom p-4 mb-4">
                        <h5 class="fw-bold mb-3">Sígueme</h5>
                        <div class="d-flex gap-3">
                            <a href="https://www.linkedin.com/in/nicosantaana/" target="_blank" class="btn btn-outline-primary btn-lg">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://github.com/nmsantaana1994" target="_blank" class="btn btn-outline-dark btn-lg">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="https://twitter.com/nicosantaana" target="_blank" class="btn btn-outline-info btn-lg">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Response Time -->
                    <div class="card-custom p-4" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
                        <div class="text-center">
                            <i class="fas fa-bolt fs-1 mb-3"></i>
                            <h5 class="fw-bold mb-2">Respuesta Rápida</h5>
                            <p class="mb-0">Te respondo en menos de 24 horas, generalmente en pocas horas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Aquí puedes agregar la lógica para enviar el formulario
        // Por ejemplo, usando fetch para enviar a una API de Laravel
        
        // Simulación de envío exitoso
        const btn = form.querySelector('button[type="submit"]');
        const originalText = btn.innerHTML;
        
        btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Enviando...';
        btn.disabled = true;
        
        setTimeout(() => {
            btn.innerHTML = '<i class="fas fa-check me-2"></i>¡Mensaje Enviado!';
            btn.classList.remove('btn-gradient-primary');
            btn.classList.add('btn-success');
            
            setTimeout(() => {
                btn.innerHTML = originalText;
                btn.disabled = false;
                btn.classList.remove('btn-success');
                btn.classList.add('btn-gradient-primary');
                form.reset();
            }, 3000);
        }, 2000);
    });
});
</script>
