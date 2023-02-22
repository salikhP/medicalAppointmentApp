<x-app-layout>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manage Appointments') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-5 text-lg">
                        {{ __("Here you can manage all appointments") }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12" style="margin-top: -70px">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="table-header" style="display: flex">
                        <h2 class="mr-5" style="font-size: 18px">All appointments:</h2>
                    </div>
                    <table class="p-5">
                        <tr>
                            <th>id</th>
                            <th>doctor</th>
                            <th>patient</th>
                            <th>service</th>
                            <th>appointment time</th>
                            <th>status</th>
                            <th>action</th>

                        </tr>

                        @foreach($table as $row)
                            <tr>
                                <td class="p-6 text-lg">{{ $row->id }}</td>
                                <td>{{ $row->doctor_name }}</td>
                                <td>{{ $row->patient_name }}</td>
                                <td>{{ $row->service }}</td>
                                <td>{{ $row->time_date }}</td>
                                <td>{{ $row->status }}</td>

                                <td>
                                    @if($row->status == 'waiting')
                                        <button type="button" class="bg-green-700 hover:bg-white text-white hover:text-green-700 font-bold py-2 px-4 border border-green-700 rounded mt-8 mb-7">
                                            Accept
                                        </button>
                                        <button type="button" class="bg-red-700 hover:bg-white text-white hover:text-red-700 font-bold py-2 px-4 border border-red-700 rounded mt-8 mb-7">
                                            Decline
                                        </button>
                                    @else
                                        <button type="button" class="bg-red-700 hover:bg-white text-white hover:text-red-700 font-bold py-2 px-4 border border-red-700 rounded mt-8 mb-7">
                                            Remove appointment
                                        </button>
                                    @endif

                                </td>

                                {{--action<td>
                                    <div class="align-middle" style="display: flex; justify-content: center">
                                        <a href="{{ route('appointments.edit', ['id' => $row[0]]) }}"
                                           class="bg-yellow-600 hover:bg-white text-white hover:text-yellow-600 font-bold py-2 px-4 border border-yellow-600 rounded mt-8 mr-5 mb-7"
                                        >EDIT</a>
                                        <form
                                            action="{{ route('appointments.destroy', ['id' => $row[0]]) }}"
                                            method="post"
                                        >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-700 hover:bg-white text-white hover:text-red-700 font-bold py-2 px-4 border border-red-700 rounded mt-8 mb-7"
                                                    onclick="return confirm('Are you sure you want to delete your appointment?')"
                                            >DELETE</button>
                                        </form>
                                    </div>
                                </td>--}}
                            </tr>
                            {{--@empty
                                <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3 mb-5" role="alert">
                                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                                    <p>You did not have appointments yet.</p>
                                </div>
                            @endforelse--}}
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>



    {{-- search field --}}
    {{--<div class="py-12" style="min-width: 825px">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        <div class="inline-flex flex-row">
                            <form action="{{ route('appointments.search') }}" method="get" accept-charset="utf-8">
                                <input type="text" class="border-black rounded-2xl" name="search_name" style="width: 600px" placeholder="Enter the doctor's name">
                                <button type="submit" class="ml-8 inline-block bg-teal-400 rounded-2xl" style="padding: 10px 20px">Search</button>
                            </form>
                        </div>
                        <div class="mt-5 alert alert-danger text-red-700 mb-1">
                            @error('search_name')
                            <span class="">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
</x-app-layout>
