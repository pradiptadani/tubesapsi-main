<x-admin-layout>
    <div class="w-full py-2">
        <div>
            <div class="text-gray-900">
                <div class="w-full flex justify-between py-4 border-b-2">
                    <div class="px-4">
                        <p class="text-3xl font-bold">List All Locations KP Data</p>
                    </div>
                    <div>
                        <a class="inline-block rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
                            href="{{ route('admin.location.approval.all') }}">
                            Approve Locations List
                        </a>
                    </div>
                </div>
                <div class="w-fulloverflow-x-auto">
                    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                        <thead class="ltr:text-left rtl:text-right">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Student Name</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Location Name</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Location Reason</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Status</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Reports</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            @foreach ($locations as $location)
                                <tr class="text-center">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                        {{ $location->user->name }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        {{ $location->locationName }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        {{ $location->locationReason }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        {{ $location->locationStatus }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        <a href="{{route('admin.location.reports',['report'=>$location->locationId])}}">
                                            <button type="button"
                                                class="inline-block rounded border border-indigo-600 bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
                                                See Report
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
