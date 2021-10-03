@extends('index')

@section('content')

    <div id="app" v-cloak>
        <div v-if="!applicant.hasOwnProperty('name')" class="grid lg:grid-cols-4 grid-cols-1 gap-6 mt-10">
            <div v-for="applicant in applicants" @click="id = applicant.id; getApplicants()"
                 class="bg-white border-2 hover:border-red-400 p-4">

                <div class="flex justify-between">
                    <div>
                        <h1 class="text-xl font-bold">
                            الاسم:
                            @{{ applicant.name }}
                        </h1>

                        <h1 class="text-xl font-bold mt-2">
                            القصة:
                        </h1>
                    </div>

                </div>
                <p class="mt-3 text-xl break-words">
                    @{{ applicant.story.substr(0, 100) }}
                    <span class="text-base FD4848 cursor-pointer hover:text-red-200">
                                    تكملة القصة...
                </span>
                </p>

            </div>
        </div>


        <div v-if="applicant.hasOwnProperty('name')">
            <div class="mt-5 bg-white border-2 border-red-300 lg:mx-16 mx-4 lg:p-6 p-4 mb-10">
                <div class="flex justify-between items-start">
                    <div>
                        <h1 class="text-5xl font-bold">
                            @{{ applicant.name }}
                        </h1>

                    </div>
                    {{--                    <div class="flex">--}}
                    {{--                        <div @click="showMessage = true" class="cursor-pointer justify-self-center">--}}
                    {{--                            <img class="w-10 h-10" src="/assets/trashcan.svg" alt="">--}}
                    {{--                        </div>--}}
                    {{--                        <div @click="rate(applicant.rating == 0 ? 1 : 0,applicant.id)"--}}
                    {{--                             class="cursor-pointer justify-self-center">--}}
                    {{--                            <img class="w-10 h-10 mr-8" :src="heart" alt="">--}}
                    {{--                        </div>--}}

                    {{--                    </div>--}}

                </div>
                <p class="mt-6 text-2xl break-words leading-relaxed">
                    @{{ applicant.story }}

                </p>
                {{--                <div v-if="showMessage" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title"--}}
                {{--                     role="dialog"--}}
                {{--                     aria-modal="true">--}}
                {{--                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">--}}

                {{--                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"--}}
                {{--                             aria-hidden="true"></div>--}}

                {{--                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"--}}
                {{--                              aria-hidden="true">&#8203;</span>--}}

                {{--                        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">--}}
                {{--                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">--}}
                {{--                                <div class="sm:flex sm:items-start">--}}
                {{--                                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">--}}
                {{--                                        <!-- Heroicon name: outline/exclamation -->--}}
                {{--                                        <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"--}}
                {{--                                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
                {{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
                {{--                                                  d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>--}}
                {{--                                        </svg>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">--}}
                {{--                                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">--}}
                {{--                                            Delete story--}}
                {{--                                        </h3>--}}
                {{--                                        <div class="mt-2">--}}
                {{--                                            <p class="text-sm text-gray-500">--}}
                {{--                                                Are you sure you want to delete this participant's story?--}}
                {{--                                            </p>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">--}}
                {{--                                <button @click="deleteStory(applicant.id);" type="button"--}}
                {{--                                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">--}}
                {{--                                    Delete--}}
                {{--                                </button>--}}
                {{--                                <button @click="showMessage = false" type="button"--}}
                {{--                                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">--}}
                {{--                                    Cancel--}}
                {{--                                </button>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

            </div>

        </div>


    </div>

@endsection
