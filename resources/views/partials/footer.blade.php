    <footer class="bg-black text-white py-12">
        <div class="w-full mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Newsletter Signup Section -->
                <div class="lg:col-span-1">
                    <h3 class="text-lg font-bold mb-4">JOIN OUR COMMUNITY</h3>
                    <p class="text-sm text-gray-300 mb-6">
                        Sign up for our mailing list and get 15% off your first order.<br>
                        Join our community and stay up to date with Palm Angels'<br>
                        new arrivals, promotions and events.
                    </p>

                    <!-- Email Signup Form -->
                    <form action="" method="POST" class="mb-6">
                        {{-- @csrf --}}
                        <div class="relative">
                            <input type="email" name="email" placeholder="Your Email" required
                                class="w-full bg-transparent border-b border-gray-600 py-3 pr-10 text-white placeholder-gray-400 focus:outline-none focus:border-white transition-colors">
                            <button type="submit" class="absolute right-0 top-1/2 transform -translate-y-1/2">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>
                    </form>

                    <!-- Category Checkboxes -->
                    <div class="flex gap-3 mb-6">
                        <label class="flex items-center space-x-3 cursor-pointer">
                            <input type="checkbox" name="categories[]" value="womenswear"
                                class="w-4 h-4 bg-transparent border border-gray-600 rounded focus:ring-white focus:ring-2">
                            <span class="text-sm">Womenswear</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer">
                            <input type="checkbox" name="categories[]" value="menswear"
                                class="w-4 h-4 bg-transparent border border-gray-600 rounded focus:ring-white focus:ring-2">
                            <span class="text-sm">Menswear</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer">
                            <input type="checkbox" name="categories[]" value="kids"
                                class="w-4 h-4 bg-transparent border border-gray-600 rounded focus:ring-white focus:ring-2">
                            <span class="text-sm">Kids</span>
                        </label>
                    </div>

                    <!-- Privacy Consent -->
                    <div class="space-y-3 text-xs text-gray-400">
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <input type="checkbox" name="privacy_consent" required
                                class="w-4 h-4 mt-0.5 bg-transparent border border-gray-600 rounded focus:ring-white focus:ring-2">
                            <span>
                                *I have read the <a href=""
                                    class="underline hover:text-white">Privacy Policy</a> and consent to the processing
                                of my personal data for marketing purposes (Newsletters, News and Promotions)
                            </span>
                        </label>
                        <label class="flex items-start space-x-3 cursor-pointer">
                            <input type="checkbox" name="profiling_consent"
                                class="w-4 h-4 mt-0.5 bg-transparent border border-gray-600 rounded focus:ring-white focus:ring-2">
                            <span>
                                I consent to the collection and processing of my personal data for profiling purposes
                            </span>
                        </label>
                    </div>
                </div>

                <!-- Help Section -->
                <div class="lg:col-span-1">
                    <h3 class="text-lg font-bold mb-6">HELP</h3>
                    <ul class="space-y-4">
                        <li><a href=""
                                class="text-gray-300 hover:text-white transition-colors">Customer Care</a></li>
                        <li><a href=""
                                class="text-gray-300 hover:text-white transition-colors">Shipping & Delivery</a></li>
                        <li><a href=""
                                class="text-gray-300 hover:text-white transition-colors">Returns & Refunds</a></li>
                        <li><a href=""
                                class="text-gray-300 hover:text-white transition-colors">Contact Us</a></li>
                        <li><a href=""
                                class="text-gray-300 hover:text-white transition-colors">Order Tracking</a></li>
                    </ul>
                </div>

                <!-- Legal Area Section -->
                <div class="lg:col-span-1">
                    <h3 class="text-lg font-bold mb-6">LEGAL AREA</h3>
                    <ul class="space-y-4">
                        <li><a href=""
                                class="text-gray-300 hover:text-white transition-colors">Terms and Conditions</a></li>
                        <li><a href=""
                                class="text-gray-300 hover:text-white transition-colors">Privacy Policy</a></li>
                        <li><a href=""
                                class="text-gray-300 hover:text-white transition-colors">Cookie Policy</a></li>
                        <li><a href=""
                                class="text-gray-300 hover:text-white transition-colors">Accessibility</a></li>
                        <li><a href=""
                                class="text-gray-300 hover:text-white transition-colors">Sitemap</a></li>
                    </ul>
                </div>

                <!-- Country/Language/Social Section -->
                <div class="lg:col-span-1">
                    <div class="space-y-6">
                        <!-- Country -->
                        <div>
                            <p class="text-sm font-semibold">Country: <span class="font-normal">United Kingdom</span>
                            </p>
                        </div>

                        <!-- Language -->
                        <div>
                            <p class="text-sm font-semibold">Language: <span class="font-normal">English</span></p>
                        </div>

                        <!-- Social Media -->
                        <div>
                            <p class="text-sm font-semibold mb-3">Follow us on:</p>
                            <div class="flex space-x-4">
                                <a href="https://instagram.com/palmangels" target="_blank"
                                    class="text-gray-300 hover:text-white transition-colors">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                    </svg>
                                </a>
                                <a href="https://twitter.com/palmangels" target="_blank"
                                    class="text-gray-300 hover:text-white transition-colors">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                                    </svg>
                                </a>
                                <a href="https://youtube.com/palmangels" target="_blank"
                                    class="text-gray-300 hover:text-white transition-colors">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright Section -->
            <div class="border-t border-gray-800 mt-12 pt-8">
                <div class="text-xs text-gray-400 space-y-2">
                    <p>Copyright © 2025 Palm Angels™</p>
                    <p>Licensee: Progetto 17 S.r.l. Registered Office: Piazza Arcole, 4 - 20143 Milano, Italy. Company
                        Registration Number: 12228160961</p>
                    <p>Site managed by The Level S.r.l</p>
                </div>
            </div>
        </div>

        <!-- Back to Top Button -->
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
            class="fixed bottom-8 right-8 bg-white text-black p-3 rounded-full shadow-lg hover:bg-gray-100 transition-colors"
            aria-label="Back to top">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18">
                </path>
            </svg>
        </button>
    </footer>