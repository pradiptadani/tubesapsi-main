<x-app-layout>
    @include('partials.header')
    <section>
        <div class="max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-2 lg:items-center lg:gap-x-16">
                <div class="mx-auto lg:pl-12 max-w-lg lg:mx-0 ltr:lg:text-left rtl:lg:text-right">
                    <h2 class="text-3xl font-extrabold sm:text-4xl">Upgrade Experience with Internship and MBKM</h2>
                    <ul class="w-full text-md text-gray-600">
                        <li class="mt-1.5">Apply your Recognition Data to Academic </li>
                        <li class="mt-1.5">Find and Apply your Location KP Data to Academic</li>
                        <li class="mt-1.5">Find and Create your Report of Location KP and Recognition </li>
                    </ul>

                    <a href="{{ route('dashboard') }}"
                        class="mt-4 inline-block rounded bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400 ">
                        Get Started Today
                    </a>
                </div>

                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="https://industri.ft.uns.ac.id/lab-lsp/">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <img class="h-6 w-6" src="https://industri.ft.uns.ac.id/wp-content/uploads/2022/06/lsp.png"
                                alt="LSP UNS">
                        </span>

                        <h2 class="mt-2 font-bold text-sm">Production System</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            <br> Production system/process and efficiency.
                        </p>
                    </a>

                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="https://industri.ft.uns.ac.id/posi/">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <img class="h-6 w-6" src="https://industri.ft.uns.ac.id/wp-content/uploads/2020/04/posi.png"
                                alt="POSI UNS">
                        </span>

                        <h2 class="mt-2 font-bold text-sm">Information System<br>and Optimization</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            Information system and optimization.
                        </p>
                    </a>

                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="https://industri.ft.uns.ac.id/laboratorium-lpske/">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <img class="h-6 w-6"
                                src="https://industri.ft.uns.ac.id/wp-content/uploads/2022/06/lpske.png"
                                alt="LPSKE UNS">
                        </span>

                        <h2 class="mt-2 font-bold text-sm">Work Design<br>and Ergonomics</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            Ergonomics, work system design, and environmental management.
                        </p>
                    </a>

                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="https://industri.ft.uns.ac.id/laboratorium-lsk/">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <img class="h-6 w-6" src="https://industri.ft.uns.ac.id/wp-content/uploads/2022/06/lsk.png"
                                alt="LSK UNS">
                        </span>

                        <h2 class="mt-2 font-bold text-sm">Quality System</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            <br>Standardization, quality assurance, data analysis, etc.
                        </p>
                    </a>

                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="https://industri.ft.uns.ac.id/laboratorium-silogbis/">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <img class="h-6 w-6"
                                src="https://industri.ft.uns.ac.id/wp-content/uploads/2022/06/silog.png"
                                alt="SILOGBIS UNS">
                        </span>

                        <h2 class="mt-2 font-bold text-sm">Logistic and<br>Business System</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            Logistics and business management.
                        </p>
                    </a>

                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="https://industri.ft.uns.ac.id/laboratorium-p3/">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <img class="h-6 w-6" src="https://industri.ft.uns.ac.id/wp-content/uploads/2022/06/p3.png"
                                alt="LPPD UNS">
                        </span>

                        <h2 class="mt-2 font-bold text-sm">Product Design<br>and Development</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            Product planning and design.
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
