@extends('layouts.app')

@section('head')
    <title>Kafou - Our Partners</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
@endsection

@section('content')
    @php
        $keys = \App\Helpers\PageContentHelper::getPageContent('home');
        $clientsImages = [];
        foreach ($keys as $key => $value) {
            if (strpos($key, 'our_clients_images') !== false) {
                $decoded = json_decode($value, true);
                if (is_array($decoded)) {
                    foreach ($decoded as $img) {
                        $clientsImages[] = $img;
                    }
                } else {
                    $clientsImages[] = $value;
                }
            }
        }
    @endphp

    {{-- Make sure jQuery is loaded --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- Main intro section --}}
    <div class="scrollify main-section flex-center">
        <div class="section-content">
            <h1 class="section-title">Our Clients</h1>
        </div>
        <div class="scroll-indicator-container">
            <a href="#partnersContainer" class="scroll-indicator">
                ↓ Scroll to explore our clients
            </a>
        </div>
    </div>

    {{-- Hidden data for JavaScript --}}
    <script type="application/json" id="partnersData">
        {!! json_encode($clientsImages) !!}
    </script>

    <script type="text/javascript">
        window.assetUrl = "{{ asset('storage/') }}";
    </script>

    {{-- Container for dynamic sections --}}
    <div id="partnersContainer"></div>

    <style>
        .scroll-indicator-container {
            position: absolute;
            bottom: 40px;
            left: 0;
            right: 0;
            text-align: center;
        }

        .scroll-indicator {
            display: inline-block;
            padding: 10px 20px;
            cursor: pointer;
            color: #fff;
            text-decoration: none;
            transition: transform 0.3s ease;
        }

        .scroll-indicator:hover {
            transform: translateY(5px);
        }

        /* Additional styles for the partner images */
        .partner-logo-container {
            width: 100%;
            height: 150px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .partner-logo-container:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .partner-logo-image {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            filter: brightness(0.8) contrast(1.1);
            transition: filter 0.3s ease;
        }

        .partner-logo-image:hover {
            filter: brightness(1) contrast(1);
        }

        .partner-logo-fallback {
            color: #666;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .partner-card {
            /*background: rgba(255, 255, 255, 0.1);*/
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            /*backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);*/
        }

        .partner-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.2);
            /*background: rgba(255, 255, 255, 0.15);*/
        }

        .partners-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-top: 40px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .flex-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /*.partners-section {
            min-height: auto; !* Override for partner sections *!
            padding: 80px 20px; !* More vertical padding *!
        }*/

        .partners-grid {
            gap: 40px; /* Increased from 30px */
        }

        /* Large screens: 8 images (4x4 grid) */
        @media (min-width: 1025px) {
            .partners-grid {
                grid-template-columns: repeat(4, 1fr);
                gap: 25px;
            }

            .partner-logo-container {
                height: 220px;
            }
        }

        /* Medium screens: 4 images (2x2 grid) */
        @media (max-width: 1024px) and (min-width: 769px) {
            .partners-grid {
                grid-template-columns: repeat(4, 1fr);
                gap: 30px;
            }

            .partner-logo-container {
                height: 180px;
            }
        }

        /* Small screens: 4 images (2x2 grid) */
        @media (max-width: 768px) {
            .partners-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }

            .partner-logo-container {
                height: 150px;
                padding: 20px;
            }
        }

        /* Extra small screens: 2 images (1x2 grid) */
        @media (max-width: 480px) {
            .partners-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .partner-logo-container {
                height: 150px;
                padding: 15px;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function getChunkSize() {
                const width = window.innerWidth;
                if (width >= 1025) {
                    return 8;
                } else if (width >= 769) {
                    return 4;
                } else {
                    return 4;
                }
            }

            // Function to create partner sections
            function createPartnerSections() {
                const partnersData = JSON.parse(document.getElementById('partnersData').textContent);
                const chunkSize = getChunkSize();
                const container = document.getElementById('partnersContainer');

                // Clear existing sections
                container.innerHTML = '';

                // Check if we have data
                if (!partnersData || partnersData.length === 0) {
                    console.log('No partners data found');
                    container.innerHTML = '<div class="no-partners-message">No partners to display at this time.</div>';
                    return;
                }

                console.log('sections with chunk size:', chunkSize, 'Total partners:', partnersData.length);

                // Create chunks
                for (let i = 0; i < partnersData.length; i += chunkSize) {
                    const chunk = partnersData.slice(i, i + chunkSize);

                    const sectionHtml = `
                    <div class="scrollify flex-center partners-section">
                        <div class="section-content">
                            <div class="partners-grid">
                                ${chunk.map(partner => `
                                    <div class="partner-card">
                                        <div class="partner-logo-container">
                                            <img class="partner-logo-image"
                                                 src="${window.assetUrl}/${partner}"
                                                 alt="Partner Logo"
                                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                                            <div class="partner-logo-fallback" style="display:none;">
                                                Partner Logo
                                            </div>
                                        </div>
                                    </div>
                                `).join('')}
                            </div>
                        </div>
                    </div>
                `;

                    container.insertAdjacentHTML('beforeend', sectionHtml);
                }
            }

            // Initial creation
            createPartnerSections();

            // Recreate sections on window resize with debounce
            let resizeTimeout;
            window.addEventListener('resize', function() {
                clearTimeout(resizeTimeout);
                resizeTimeout = setTimeout(function() {
                    createPartnerSections();
                }, 300);
            });
        });
    </script>
@endsection
