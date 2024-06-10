<x-admin-layout>
    <div class="w-full py-2">
        <div>
            <div class="text-gray-900">
                <div class="w-full flex justify-between py-4 border-b-2">
                    <div class="px-4">
                        <p class="text-3xl font-bold">List All Recognitions Data</p>
                    </div>
                    <div>
                        <a class="inline-block rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
                            href="{{ route('admin.recognition.approval.all') }}">
                            Approve Recognition List
                        </a>
                    </div>
                </div>
                <div class="w-fulloverflow-x-auto">
                    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                        <thead class="ltr:text-left rtl:text-right">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Student Name</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Reason</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Proof</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">MBKM Activity</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Courses Conversion
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Date</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Action</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($recognitions as $recognition)
                                <tr class="text-center">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                        {{ $recognition->user->name }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        {{ $recognition->recognitionReason }}</td>
                                    <td
                                        class="whitespace-nowrap px-4 py-2 text-gray-700 flex justify-center items-center">
                                        <img src="{{ asset('uploads/recognition/' . $recognition->recognitionProof) }}"
                                            alt="Proof Image" class="w-20 h-20">
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                        {{ $recognition->MBKMCourses->mbkmCoursesName }} -
                                        {{ $recognition->MBKMCourses->mbkmCoursesDuration }}
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                        {{ $recognition->Courses->coursesName }}
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                        {{ $recognition->recognitionDate }}
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        <div>
                                            <form id="approval-form-{{ $recognition->recognitionId }}"
                                                action="{{ route('admin.recognition.approval', ['recognition' => $recognition->recognitionId]) }}"
                                                method="POST">
                                                @method('PUT')
                                                @csrf
                                                <button type="button"
                                                    onclick="confirmApproval({{ $recognition->recognitionId }})"
                                                    class="inline-block rounded border border-indigo-600 bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
                                                    Approve
                                                </button>
                                            </form>
                                        </div>
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
<script>
    function confirmApproval(recognitionId) {
        if (confirm("Are you sure you want to approve this recognition?")) {
            document.getElementById('approval-form-' + recognitionId).submit();
        }
    }
</script>
