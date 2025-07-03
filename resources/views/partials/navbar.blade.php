    <!-- Navbar -->
    <nav class="w-full bg-white shadow-md py-3">
        <div class="flex items-center justify-between px-5 w-full mx-auto">
            <!-- LEFT: Logo + Menu -->
            <div class="flex items-center space-x-10">
                <!-- Logo -->
                <div class="text-2xl font-black tracking-wide text-blue-600">Palm Angels</div>

                <!-- Nav Menu -->
                <ul class="flex space-x-6 items-center font-semibold text-sm uppercase">

                    <!-- SALE dropdown -->
                    <li class="group relative">
                        <a href="#" class="text-red-600">Sale</a>

                        <!-- Dropdown: fixed position to escape local scope -->
                        <div class="fixed left-0 top-[58px] w-screen bg-white shadow-md z-50 hidden group-hover:block">
                            <div class="max-w-7xl mx-auto px-10 py-8">
                                <h4 class="font-bold text-lg mb-4">SALE</h4>
                                <ul class=" gap-6 text-sm h-96">
                                    <li><a href="#" class="hover:text-red-500">Men Sale</a></li>
                                    <li><a href="#" class="hover:text-red-500">Women Sale</a></li>
                                    <li><a href="#" class="hover:text-red-500">Kids Sale</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <!-- MEN dropdown -->
                    <li class="group relative">
                        <a href="#" class="hover:text-blue-500">Men</a>
                        <div class="fixed left-0 top-[58px] w-screen bg-white shadow-md z-50 hidden group-hover:block">
                            <div class="max-w-7xl mx-auto px-10 py-8">
                                <h4 class="font-bold text-lg mb-4">Men Collection</h4>
                                <ul class="grid grid-cols-3 gap-6 text-sm h-96">
                                    <li><a href="#" class="hover:text-blue-500">Shirts</a></li>
                                    <li><a href="#" class="hover:text-blue-500">Jeans</a></li>
                                    <li><a href="#" class="hover:text-blue-500">Sneakers</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li><a href="#" class="hover:text-blue-500">New In</a></li>
                    <li><a href="#" class="hover:text-blue-500">Woman</a></li>
                    <li><a href="#" class="hover:text-blue-500">Eyewear</a></li>
                    <li><a href="#" class="hover:text-blue-500">Kids</a></li>
                </ul>
            </div>

            <!-- RIGHT: Icons -->
            <div class="flex items-center space-x-5 text-xl text-gray-700">
                <a href="#" class="hover:text-blue-600"><i class="bi bi-search"></i></a>
                <a href="#" class="hover:text-blue-600"><i class="bi bi-heart"></i></a>
                <a href="#" class="hover:text-blue-600"><i class="bi bi-person"></i></a>
                <a href="#" class="hover:text-blue-600"><i class="bi bi-bag"></i></a>
            </div>
        </div>
    </nav>