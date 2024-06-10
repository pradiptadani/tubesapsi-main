<x-app-layout>
    <section class="@auth mt-0 @else mt-16 @endauth">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
                    <img alt="" src="https://pbs.twimg.com/media/FP5Rd-qaAAgJfhs?format=jpg&name=large"
                        class="absolute inset-0 h-full w-full object-cover" />
                </div>

                <div class="lg:py-24">
                    <h2 class="text-3xl font-bold sm:text-4xl">Welcome to Industrial Engineering Courses</h2>

                    <p class="mt-4 text-gray-600">
                        This Program will help students for MBKM program and KP
                    </p>

                    <a href="{{ route('register') }}"
                        class="mt-8 inline-block rounded bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400">
                        Register as Student
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="max-w-screen-xl px-4 pt-8 sm:px-6 sm:py-12 lg:pxt8 lg:py-16">
            <div class="max-t-xl">
                <h2 class="text-3xl font-bold sm:text-4xl">What makes us special</h2>

                <p class="mt-4 text-gray-700">
                    Our program can help students, admins, and lecturers for easier KP and MBKM recognition.
                </p>
            </div>

            <div class="mt-8 grid grid-cols-1 gap-8 md:mt-16 md:grid-cols-2 md:gap-12 lg:grid-cols-3">
                <div class="flex items-start gap-4">
                    <span class="shrink-0 rounded-lg bg-gray-800 p-4">
                        <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg>
                    </span>

                    <div>
                        <h2 class="text-lg font-bold">What is MBKM?</h2>

                        <p class="mt-1 text-sm text-gray-700">
                            MBKM stands for "Merdeka Belajar - Kampus Merdeka," an initiative launched by the Indonesian
                            Ministry of Education, Culture, Research, and Technology. This policy aims to transform
                            higher education in Indonesia by providing students with more flexible and autonomous
                            learning opportunities.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <span class="shrink-0 rounded-lg bg-gray-800 p-4">
                        <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg>
                    </span>

                    <div>
                        <h2 class="text-lg font-bold">What is KP?</h2>

                        <p class="mt-1 text-sm text-gray-700">
                            Kerja Praktek (KP), also known as Praktik Kerja Lapangan (PKL) or internship, is a work
                            placement program for university students, usually required as part of their academic
                            curriculum. This program allows students to gain practical experience in their field of
                            study by working in a real-world professional environment.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <span class="shrink-0 rounded-lg bg-gray-800 p-4">
                        <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg>
                    </span>

                    <div>
                        <h2 class="text-lg font-bold">Benefits of MBKM and KP</h2>

                        <p class="mt-1 text-sm text-gray-700">
                            Kerja Praktek is an integral part of higher education designed to bridge the gap between
                            academic learning and professional practice, equipping students with essential skills and
                            experiences for their future careers.
                        </p>
                    </div>
                </div>
                </svg>
                </span>
            </div>
        </div>
    </section>
</x-app-layout>
