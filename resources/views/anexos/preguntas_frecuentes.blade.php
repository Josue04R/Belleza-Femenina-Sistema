@extends('layouts.app3')

@section('title', 'Preguntas Frecuentes')

@section('content')

<style>
    .faq-section {
        background-color: #fdf6f9;
        padding: 4rem 2rem;
        margin-top: 6rem;
        color: #333;
    }

    .section-title {
        color: #912f5d;
        font-weight: bold;
        margin-bottom: 2.5rem;
        font-size: 2rem;
    }

    .accordion-button {
        background-color: #fff0f5;
        font-weight: bold;
        color: #912f5d;
        border: none;
        box-shadow: none;
        padding: 1rem 1.25rem;
    }

    .accordion-button:not(.collapsed) {
        background-color: #fce6ef;
        color: #7a274d;
        box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .125);
    }

    .accordion-item {
        border: 1px solid #f0cadd;
        border-radius: 0.5rem;
        margin-bottom: 1rem;
        overflow: hidden;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }

    .accordion-body {
        background-color: #fff;
        padding: 1.25rem;
        font-size: 1rem;
        color: #444;
    }

    .btn-purple {
        background-color: #912f5d;
        color: white;
        border: none;
        padding: 0.75rem 2rem;
        border-radius: 0.5rem;
        font-size: 1.1rem;
        transition: background-color 0.3s ease;
    }

    .btn-purple:hover {
        background-color: #7a274d;
        color: #fff;
    }

    .text-center h4.section-title {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
    }

    @media (max-width: 576px) {
        .faq-section {
            padding: 2rem 1rem;
        }

        .accordion-button {
            font-size: 1rem;
        }

        .btn-purple {
            width: 100%;
        }
    }
</style>

<div class="faq-section">
    <div class="container">
        <h2 class="section-title text-center">Preguntas Frecuentes</h2>

        <div class="accordion" id="faqAccordion">
            
            @for ($i = 1; $i <= 10; $i++)
                @php
                    $preguntas = [
                        '¿Cuál es el tiempo de entrega de los productos?',
                        '¿Cómo elijo la talla adecuada para mí?',
                        '¿Puedo hacer devoluciones si el producto no me queda?',
                        '¿Qué tipos de fajas ofrecen?',
                        '¿Los productos son originales y de buena calidad?',
                        '¿Cómo puedo pagar mis compras?',
                        '¿Ofrecen envío a todo El Salvador?',
                        '¿Cómo cuido y lavo mis fajas para que duren más?',
                        '¿Puedo combinar diferentes estilos y tallas en un solo pedido?',
                        '¿Tienen promociones o descuentos especiales?',
                    ];

                    $respuestas = [
                        'Los envíos son rápidos y seguros a todo El Salvador, generalmente entregamos en un plazo de 2 a 4 días hábiles.',
                        'Te recomendamos revisar nuestra tabla de tallas disponible en cada producto. Si tienes dudas, contáctanos para asesoría personalizada y recomendaciones según tu medida.',
                        'Sí, aceptamos devoluciones dentro de los 7 días siguientes a la entrega, siempre que el producto esté en condiciones originales, sin uso y con su empaque intacto.',
                        'Ofrecemos fajas moldeadoras, reductoras, postparto, deportivas y de control ligero para diferentes necesidades y estilos de vida.',
                        'Sí, trabajamos únicamente con proveedores confiables que garantizan productos 100% originales, cómodos y duraderos.',
                        'Aceptamos pagos por transferencia bancaria, depósitos, y pago a través de nuestra línea de WhatsApp para mayor comodidad.',
                        'Sí, realizamos envíos rápidos y seguros a todas las zonas del país, incluyendo áreas urbanas y rurales.',
                        'Recomendamos lavar a mano con jabón suave, evitar el uso de blanqueadores y secar a la sombra para mantener la elasticidad y color.',
                        'Sí, puedes seleccionar distintos estilos y tallas en un mismo pedido para adaptarlo a tus necesidades.',
                        'Sí, periódicamente ofrecemos promociones especiales. Síguenos en redes sociales y contáctanos para estar al día con nuestras ofertas.',
                    ];
                @endphp

                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{ $i }}">
                        <button class="accordion-button {{ $i != 1 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse{{ $i }}" aria-expanded="{{ $i == 1 ? 'true' : 'false' }}"
                            aria-controls="collapse{{ $i }}">
                            {{ $preguntas[$i - 1] }}
                        </button>
                    </h2>
                    <div id="collapse{{ $i }}" class="accordion-collapse collapse {{ $i == 1 ? 'show' : '' }}"
                        aria-labelledby="heading{{ $i }}" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            {{ $respuestas[$i - 1] }}
                        </div>
                    </div>
                </div>
            @endfor
        </div>

        <div class="text-center mt-5">
            <h4 class="section-title">¿Tienes otra pregunta?</h4>
            <p>Contáctanos y con gusto te ayudaremos.</p>
            <a href="https://wa.me/50375833922" target="_blank" class="btn btn-purple btn-lg shadow">💬 Escríbenos por WhatsApp</a>
        </div>
    </div>
</div>

@endsection
