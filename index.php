<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homestead Aura - Professional Home Decor Services San Antonio, TX</title>
    <meta name="description" content="Professional home decor and interior styling services in San Antonio, TX. Transform your space with expert design. Call +1-293-382-3922">
    <link rel="stylesheet" href="css/styles.css">
    <!-- Lucide Icons via CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
    <!-- Header -->
    <header id="header" class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm-px-6 lg-px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <a href="index.html" class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-xl">HA</span>
                    </div>
                    <span class="font-bold text-xl text-gray-900">Homestead Aura</span>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden md-flex items-center space-x-8">
                    <a href="index.html" class="text-gray-700 hover-text-blue-600 transition-colors">Home</a>
                    <a href="about.html" class="text-gray-700 hover-text-blue-600 transition-colors">About</a>
                    <a href="services.html" class="text-gray-700 hover-text-blue-600 transition-colors">Services</a>
                    <a href="contact.html" class="text-gray-700 hover-text-blue-600 transition-colors">Contact</a>
                </nav>

                <!-- Phone CTA -->
                <div class="hidden md-flex items-center space-x-4">
                    <a href="tel:+12933823922" class="flex items-center space-x-2 bg-blue-600 text-white px-6 py-2 rounded-lg hover-bg-blue-700 transition-colors">
                        <i data-lucide="phone" class="w-4 h-4"></i>
                        <span>+1-293-382-3922</span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md-hidden p-2 text-gray-700">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md-hidden py-4 border-t border-gray-200 hidden">
                <nav class="flex flex-col space-y-4">
                    <a href="index.html" class="text-gray-700 hover-text-blue-600 transition-colors">Home</a>
                    <a href="about.html" class="text-gray-700 hover-text-blue-600 transition-colors">About</a>
                    <a href="services.html" class="text-gray-700 hover-text-blue-600 transition-colors">Services</a>
                    <a href="contact.html" class="text-gray-700 hover-text-blue-600 transition-colors">Contact</a>
                    <a href="tel:+12933823922" class="flex items-center space-x-2 bg-blue-600 text-white px-6 py-2 rounded-lg hover-bg-blue-700 transition-colors justify-center">
                        <i data-lucide="phone" class="w-4 h-4"></i>
                        <span>+1-293-382-3922</span>
                    </a>
                </nav>
            </div>
        </div>
    </header>

    <main class="flex-grow">
        <!-- Hero Section with Image -->
        <section class="relative bg-gradient-to-br from-blue-600 to-blue-800 text-white py-20 lg-py-24">
            <div class="max-w-7xl mx-auto px-4 sm-px-6 lg-px-8">
                <div class="grid grid-cols-1 lg-grid-cols-2 gap-12 items-center">
                    <div>
                        <h1 class="text-4xl md-text-5xl lg-text-6xl font-bold mb-6">
                            Transform Your Home with Professional Interior Styling
                        </h1>
                        <p class="text-xl mb-8 text-blue-100">
                            Expert home decor and interior design services to create beautiful, functional spaces in San Antonio, TX.
                        </p>
                        <div class="flex flex-col sm-flex-row gap-4 mb-6">
                            <a href="#request-consultation" class="inline-block bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover-bg-blue-50 transition-colors text-center">
                                Request Free Consultation
                            </a>
                            <a href="tel:+12933823922" class="inline-flex items-center justify-center space-x-2 bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold hover-bg-blue-800 transition-colors border-2 border-white">
                                <i data-lucide="phone" class="w-5 h-5"></i>
                                <span>Call Now</span>
                            </a>
                        </div>
                        <p class="text-sm text-blue-200 max-w-md">
                            Homestead Aura is an independent home decor service provider. Consultation availability and pricing depend on project scope and requirements.
                        </p>
                    </div>
                    <div class="relative">
                        <div class="relative rounded-lg overflow-hidden shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1648147870253-c45f6f430528?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtb2Rlcm4lMjBob21lJTIwaW50ZXJpb3IlMjBkZXNpZ24lMjBsaXZpbmclMjByb29tfGVufDF8fHx8MTc3MTUyMTk5NXww&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral" alt="Professional home decor services San Antonio" class="w-full h-450 object-cover">
                            <!-- Trust Badge Overlay -->
                            <div class="absolute bottom-4 left-4 right-4 bg-white-95 backdrop-blur-sm rounded-lg p-4 shadow-lg">
                                <div class="flex items-center justify-around text-center">
                                    <div class="flex-1">
                                        <div class="text-2xl font-bold text-blue-600">Expert</div>
                                        <div class="text-xs text-gray-600">Designers</div>
                                    </div>
                                    <div class="w-px h-12 bg-gray-300"></div>
                                    <div class="flex-1">
                                        <div class="text-2xl font-bold text-blue-600">Local</div>
                                        <div class="text-xs text-gray-600">San Antonio</div>
                                    </div>
                                    <div class="w-px h-12 bg-gray-300"></div>
                                    <div class="flex-1">
                                        <div class="text-2xl font-bold text-blue-600">Free</div>
                                        <div class="text-xs text-gray-600">Consultation</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Trust Indicators -->
        <section class="py-12 bg-white border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm-px-6 lg-px-8">
                <div class="grid grid-cols-2 md-grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <i data-lucide="award" class="w-8 h-8 text-blue-600"></i>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-1">Professional Design</h3>
                        <p class="text-sm text-gray-600">Expert styling services</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <i data-lucide="palette" class="w-8 h-8 text-blue-600"></i>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-1">Custom Solutions</h3>
                        <p class="text-sm text-gray-600">Tailored to your style</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <i data-lucide="home" class="w-8 h-8 text-blue-600"></i>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-1">Full Home Styling</h3>
                        <p class="text-sm text-gray-600">Complete transformations</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <i data-lucide="sparkles" class="w-8 h-8 text-blue-600"></i>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-1">Quality Results</h3>
                        <p class="text-sm text-gray-600">Beautiful spaces</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Our Services Section -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm-px-6 lg-px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md-text-4xl font-bold text-gray-900 mb-4">Our Design Services</h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                        Homestead Aura provides professional home decor and interior styling services for homeowners in San Antonio and surrounding areas. Our team works with you to create personalized design solutions that reflect your unique style.
                    </p>
                </div>

                <div class="grid grid-cols-1 md-grid-cols-2 lg-grid-cols-3 gap-8 mb-12">
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <i data-lucide="home" class="w-6 h-6 text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Room Makeovers</h3>
                        <p class="text-gray-600">
                            Complete room transformations including color consultation, furniture arrangement, and decor selection.
                        </p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <i data-lucide="palette" class="w-6 h-6 text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Color Consultation</h3>
                        <p class="text-gray-600">
                            Expert color palette selection to create harmonious and inviting spaces throughout your home.
                        </p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <i data-lucide="sofa" class="w-6 h-6 text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Furniture Styling</h3>
                        <p class="text-gray-600">
                            Professional furniture selection and arrangement to maximize space and functionality.
                        </p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <i data-lucide="lamp" class="w-6 h-6 text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Lighting Design</h3>
                        <p class="text-gray-600">
                            Strategic lighting solutions to enhance ambiance and highlight your home's best features.
                        </p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <i data-lucide="shopping-bag" class="w-6 h-6 text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Accessory Selection</h3>
                        <p class="text-gray-600">
                            Curated selection of decorative accessories, artwork, and finishing touches for your space.
                        </p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <i data-lucide="briefcase" class="w-6 h-6 text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Home Staging</h3>
                        <p class="text-gray-600">
                            Professional home staging services to prepare your property for sale or rental.
                        </p>
                    </div>
                </div>

                <p class="text-center text-gray-600">
                    All projects are customized to your budget and timeline preferences.
                </p>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm-px-6 lg-px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md-text-4xl font-bold text-gray-900 mb-4">Design Portfolio</h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                        Browse examples of our professional home decor projects throughout San Antonio
                    </p>
                </div>

                <div class="grid grid-cols-1 sm-grid-cols-2 lg-grid-cols-3 gap-6">
                    <div class="group relative overflow-hidden rounded-lg shadow-lg aspect-4-3 bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1648147870253-c45f6f430528?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtb2Rlcm4lMjBob21lJTIwaW50ZXJpb3IlMjBkZXNpZ24lMjBsaXZpbmclMjByb29tfGVufDF8fHx8MTc3MTUyMTk5NXww&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral" alt="Modern living room design" class="w-full h-full object-cover transition-transform duration-300 group-hover-scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black-60 to-transparent opacity-0 group-hover-opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <p class="font-semibold">Modern Living Room Design</p>
                            </div>
                        </div>
                    </div>

                    <div class="group relative overflow-hidden rounded-lg shadow-lg aspect-4-3 bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1766928210443-0be92ed5884a?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxlbGVnYW50JTIwaG9tZSUyMGRlY29yJTIwYmVkcm9vbSUyMGRlc2lnbnxlbnwxfHx8fDE3NzE1MjE5OTZ8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral" alt="Elegant bedroom styling" class="w-full h-full object-cover transition-transform duration-300 group-hover-scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black-60 to-transparent opacity-0 group-hover-opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <p class="font-semibold">Elegant Bedroom Styling</p>
                            </div>
                        </div>
                    </div>

                    <div class="group relative overflow-hidden rounded-lg shadow-lg aspect-4-3 bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1613545564245-62b2c9ef8055?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxiZWF1dGlmdWwlMjBraXRjaGVuJTIwaW50ZXJpb3IlMjBkZXNpZ258ZW58MXx8fHwxNzcxNTIxOTk3fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral" alt="Beautiful kitchen design" class="w-full h-full object-cover transition-transform duration-300 group-hover-scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black-60 to-transparent opacity-0 group-hover-opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <p class="font-semibold">Beautiful Kitchen Design</p>
                            </div>
                        </div>
                    </div>

                    <div class="group relative overflow-hidden rounded-lg shadow-lg aspect-4-3 bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1649663724528-3bd2ce98b6e3?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxsdXh1cnklMjBob21lJTIwaW50ZXJpb3IlMjBkZWNvcmF0aW9ufGVufDF8fHx8MTc3MTUyMTk5Nnww&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral" alt="Luxury interior decoration" class="w-full h-full object-cover transition-transform duration-300 group-hover-scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black-60 to-transparent opacity-0 group-hover-opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <p class="font-semibold">Luxury Interior Decoration</p>
                            </div>
                        </div>
                    </div>

                    <div class="group relative overflow-hidden rounded-lg shadow-lg aspect-4-3 bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1721824321715-a5d405404f58?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjBob21lJTIwZGVjb3JhdG9yJTIwc3R5bGluZyUyMHJvb218ZW58MXx8fHwxNzcxNTIxOTk2fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral" alt="Professional room styling" class="w-full h-full object-cover transition-transform duration-300 group-hover-scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black-60 to-transparent opacity-0 group-hover-opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <p class="font-semibold">Professional Room Styling</p>
                            </div>
                        </div>
                    </div>

                    <div class="group relative overflow-hidden rounded-lg shadow-lg aspect-4-3 bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1682973441491-6b41b7af1c6f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxob21lJTIwc3RhZ2luZyUyMHByb2Zlc3Npb25hbCUyMHNlcnZpY2V8ZW58MXx8fHwxNzcxNTIxOTk2fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral" alt="Home staging service" class="w-full h-full object-cover transition-transform duration-300 group-hover-scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black-60 to-transparent opacity-0 group-hover-opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <p class="font-semibold">Home Staging Service</p>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="text-center text-sm text-gray-600 mt-8">
                    *Images represent professional home decor services. Actual results may vary based on budget, space, and design preferences.
                </p>
            </div>
        </section>

        <!-- Why Choose Homestead Aura -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm-px-6 lg-px-8">
                <h2 class="text-3xl md-text-4xl font-bold text-gray-900 mb-12 text-center">Why Choose Homestead Aura</h2>
                
                <div class="grid grid-cols-1 md-grid-cols-2 gap-8 mb-12">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                                <i data-lucide="check-circle" class="w-6 h-6 text-white"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Professional Design Expertise</h3>
                            <p class="text-gray-600">Our team brings years of interior design experience to every project.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                                <i data-lucide="check-circle" class="w-6 h-6 text-white"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Personalized Design Plans</h3>
                            <p class="text-gray-600">Custom solutions tailored to your unique style, preferences, and budget.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                                <i data-lucide="check-circle" class="w-6 h-6 text-white"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Transparent Pricing</h3>
                            <p class="text-gray-600">Clear, upfront pricing with no hidden fees or surprise charges.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                                <i data-lucide="map-pin" class="w-6 h-6 text-white"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Locally Serving San Antonio</h3>
                            <p class="text-gray-600">Proudly serving homeowners throughout San Antonio and surrounding communities.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                                <i data-lucide="phone" class="w-6 h-6 text-white"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Excellent Communication</h3>
                            <p class="text-gray-600">Stay informed throughout your project with clear, responsive communication.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                                <i data-lucide="sparkles" class="w-6 h-6 text-white"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Quality & Attention to Detail</h3>
                            <p class="text-gray-600">Meticulous attention to every element to create stunning results.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm-px-6 lg-px-8">
                <h2 class="text-3xl md-text-4xl font-bold text-gray-900 mb-12 text-center">What Our Clients Say</h2>
                
                <div class="grid grid-cols-1 md-grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i>
                        </div>
                        <p class="text-gray-700 mb-4">
                            "Homestead Aura completely transformed our living room! Their design expertise and attention to detail exceeded our expectations. Highly recommend!"
                        </p>
                        <div class="border-t pt-4">
                            <p class="font-semibold text-gray-900">Jennifer L.</p>
                            <p class="text-sm text-gray-600">San Antonio, TX</p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i>
                        </div>
                        <p class="text-gray-700 mb-4">
                            "Professional, creative, and easy to work with. They helped us stage our home for sale and it looked amazing. Great communication throughout!"
                        </p>
                        <div class="border-t pt-4">
                            <p class="font-semibold text-gray-900">David M.</p>
                            <p class="text-sm text-gray-600">San Antonio, TX</p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i>
                            <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i>
                        </div>
                        <p class="text-gray-700 mb-4">
                            "The team helped us choose the perfect color scheme and furniture layout. Our home feels brand new. Worth every penny!"
                        </p>
                        <div class="border-t pt-4">
                            <p class="font-semibold text-gray-900">Maria S.</p>
                            <p class="text-sm text-gray-600">San Antonio, TX</p>
                        </div>
                    </div>
                </div>

                <p class="text-center text-sm text-gray-600 mt-8">
                    *Client testimonials represent individual experiences. Results may vary based on project scope and design preferences.
                </p>
            </div>
        </section>

        <!-- How It Works -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm-px-6 lg-px-8">
                <h2 class="text-3xl md-text-4xl font-bold text-gray-900 mb-12 text-center">How It Works</h2>
                
                <div class="grid grid-cols-1 md-grid-cols-4 gap-8 mb-12">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">1</div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Initial Consultation</h3>
                        <p class="text-gray-600">Share your vision, style preferences, and project goals with our team.</p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">2</div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Design Proposal</h3>
                        <p class="text-gray-600">Receive a customized design plan with mood boards and recommendations.</p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">3</div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Review & Refine</h3>
                        <p class="text-gray-600">Collaborate with us to perfect every detail of your design.</p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">4</div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Implementation</h3>
                        <p class="text-gray-600">Watch your vision come to life with professional execution.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Area Section -->
        <section class="py-16 bg-blue-600 text-white">
            <div class="max-w-7xl mx-auto px-4 sm-px-6 lg-px-8">
                <div class="text-center mb-8">
                    <h2 class="text-3xl md-text-4xl font-bold mb-4">Serving San Antonio and Surrounding Areas</h2>
                    <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                        Professional home decor services for homeowners throughout the greater San Antonio region
                    </p>
                </div>
                
                <div class="grid grid-cols-2 md-grid-cols-4 gap-4 text-center max-w-4xl mx-auto">
                    <div class="bg-blue-700-50 rounded-lg p-4">
                        <i data-lucide="map-pin" class="w-6 h-6 mx-auto mb-2"></i>
                        <p class="font-semibold">Downtown San Antonio</p>
                    </div>
                    <div class="bg-blue-700-50 rounded-lg p-4">
                        <i data-lucide="map-pin" class="w-6 h-6 mx-auto mb-2"></i>
                        <p class="font-semibold">North San Antonio</p>
                    </div>
                    <div class="bg-blue-700-50 rounded-lg p-4">
                        <i data-lucide="map-pin" class="w-6 h-6 mx-auto mb-2"></i>
                        <p class="font-semibold">Stone Oak</p>
                    </div>
                    <div class="bg-blue-700-50 rounded-lg p-4">
                        <i data-lucide="map-pin" class="w-6 h-6 mx-auto mb-2"></i>
                        <p class="font-semibold">Alamo Heights</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-4xl mx-auto px-4 sm-px-6 lg-px-8">
                <h2 class="text-3xl md-text-4xl font-bold text-gray-900 mb-12 text-center">Frequently Asked Questions</h2>
                
                <div class="space-y-6">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Is the initial consultation really free?</h3>
                        <p class="text-gray-700">
                            Yes, we offer a complimentary initial consultation where we discuss your design needs, style preferences, and project goals. There's no obligation to proceed.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">What is your design process?</h3>
                        <p class="text-gray-700">
                            We start with understanding your vision, then create customized design proposals with mood boards, color palettes, and product recommendations. You review and approve before implementation.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">How long does a typical project take?</h3>
                        <p class="text-gray-700">
                            Timeline varies based on project scope. A single room makeover may take 2-4 weeks, while full home styling can take 6-12 weeks. We provide estimated timelines during consultation.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Do you work within specific budgets?</h3>
                        <p class="text-gray-700">
                            Absolutely! We create custom design solutions tailored to your budget. Let us know your budget range and we'll work within it.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Can I keep my existing furniture?</h3>
                        <p class="text-gray-700">
                            Yes! We can incorporate your existing furniture and decor into the new design. We'll help you determine what to keep, rearrange, or replace.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lead Form Section -->
        <section id="request-consultation" class="py-16 bg-white">
            <div class="max-w-3xl mx-auto px-4 sm-px-6 lg-px-8">
                <div class="text-center mb-8">
                    <h2 class="text-3xl md-text-4xl font-bold text-gray-900 mb-4">Get Your Free Design Consultation</h2>
                    <p class="text-lg text-gray-600">
                        Fill out the form below and our team will contact you to schedule your complimentary consultation
                    </p>
                </div>
                <div id="lead-form-container"></div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="footer" class="bg-gray-900 text-gray-300">
        <div class="max-w-7xl mx-auto px-4 sm-px-6 lg-px-8 py-12">
            <div class="grid grid-cols-1 md-grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="col-span-1 md-col-span-2">
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-xl">HA</span>
                        </div>
                        <span class="font-bold text-xl text-white">Homestead Aura</span>
                    </div>
                    <p class="text-gray-400 mb-4">
                        Professional home decor and interior styling services for homeowners in San Antonio and surrounding areas.
                    </p>
                    <div class="space-y-2">
                        <a href="tel:+12933823922" class="flex items-center space-x-2 hover-text-white transition-colors">
                            <i data-lucide="phone" class="w-4 h-4"></i>
                            <span>+1-293-382-3922</span>
                        </a>
                        <a href="mailto:decor@homesteadaura.site" class="flex items-center space-x-2 hover-text-white transition-colors">
                            <i data-lucide="mail" class="w-4 h-4"></i>
                            <span>decor@homesteadaura.site</span>
                        </a>
                        <div class="flex items-start space-x-2">
                            <i data-lucide="map-pin" class="w-4 h-4 mt-1 flex-shrink-0"></i>
                            <span>10221 Desert Sands St Ste 204, San Antonio, TX 78216, United States</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="font-semibold text-white mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="index.html" class="hover-text-white transition-colors">Home</a></li>
                        <li><a href="about.html" class="hover-text-white transition-colors">About Us</a></li>
                        <li><a href="services.html" class="hover-text-white transition-colors">Services</a></li>
                        <li><a href="contact.html" class="hover-text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Legal -->
                <div>
                    <h3 class="font-semibold text-white mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li><a href="privacy.html" class="hover-text-white transition-colors">Privacy Policy</a></li>
                        <li><a href="terms.html" class="hover-text-white transition-colors">Terms & Conditions</a></li>
                        <li><a href="disclaimer.html" class="hover-text-white transition-colors">Disclaimer</a></li>
                        <li><a href="cookies.html" class="hover-text-white transition-colors">Cookie Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; <span id="current-year"></span> Homestead Aura. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>
    <script src="js/form.js"></script>
    <script src="js/cookie-consent.js"></script>
</body>
</html>
