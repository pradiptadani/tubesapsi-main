<x-lecture-layout>
    <section>
        <div class="mt-6 space-y-6">
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Account Information') }}
            </h2>
            <div class="w-full flex gap-8">
                <div class="flex-1">
                    <p class="ml-1 mb-1 font-semibold">Username</p>
                    <div class="p-2 border rounded-lg">{{ $user->name }}</div>
                </div>

                <div class="flex-1">
                    <p class="ml-1 mb-1 font-semibold">Email</p>
                    <div class="p-2 border rounded-lg">{{ $user->email }}</div>
                </div>
                <div class="flex-1">
                    <p class="ml-1 mb-1 font-semibold">Role</p>
                    <div class="p-2 border rounded-lg">{{ $user->roles->name }}</div>
                </div>
            </div>
            <div class="w-full flex gap-8">
                <div class="flex-1">
                    <p class="ml-1 mb-1 font-semibold">Full Name</p>
                    <div class="p-2 border rounded-lg">{{ $user->lectures->lectureName }}</div>
                </div>
                <div class="flex-1">
                    <p class="ml-1 mb-1 font-semibold">Expertise</p>
                    <div class="p-2 border rounded-lg">{{ $user->lectures->lectureDepartment }}</div>
                </div>
            </div>
        </div>
    </section>

</x-lecture-layout>
