<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;600&display=swap" rel="stylesheet">
    <link rel="icon" href="/assets/readToInnovateLogo.png">
    <link rel="stylesheet" href="{{asset('/css/stylesheet.css?v=').time()}}">
    <title>Read To Innovate</title>
</head>
<body dir="rtl" class="bg-gray-100">
<div id="app" v-cloak>
    <div class="mt-10 lg:mx-16 mx-4">
        <h1 class="text-4xl FD4848">
            قصص المتسابقين
        </h1>
        {{--pageination--}}
        <div v-if="!applicant.hasOwnProperty('name')"
             class="flex items-center my-6">

            <div @click="currentPage != 1 ? currentPage = currentPage - 1 : currentPage ; getApplicants()"
                 class="bg-white ring-2 ring-red-400 px-3 py-2 cursor-pointer">
                <svg viewBox="0 0 10 16" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" class="fill-current text-gray-900 w-2">
                    <g id="Page-1" stroke="none" stroke-width="2" fill="none" fill-rule="evenodd"
                       stroke-linecap="round"
                       stroke-linejoin="round">
                        <g id="Artboard" transform="translate(-587.000000, -177.000000)" stroke="#FD4848"
                           stroke-width="2">
                            <g id="Arrow---Right-2" transform="translate(588.000000, 178.000000)">
                                <polyline id="Path" points="0.5 0 7.5 7 0.5 14"></polyline>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>

            <p class="text-base font-mono text-black mx-4 items-center">
                Page @{{ currentPage }} of @{{ lastPage }}
            </p>

            <div @click="currentPage < lastPage ? currentPage = currentPage+1 : currentPage; getApplicants()"
                 class="bg-white ring-2 ring-red-400 px-3 py-2 cursor-pointer">
                <svg viewBox="0 0 10 16" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" class="fill-current text-gray-900 w-2">
                    <g id="Page-1" stroke="none" stroke-width="2" fill="none" fill-rule="evenodd"
                       stroke-linecap="round"
                       stroke-linejoin="round">
                        <g id="Artboard" transform="translate(-587.000000, -97.000000)" stroke="#FD4848"
                           stroke-width="2">
                            <g id="Arrow---Left-2" transform="translate(588.000000, 98.000000)">
                                <polyline id="Path" points="7.5 14 0.5 7 7.5 0"></polyline>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
        {{--rating--}}
        <div v-if="!applicant.hasOwnProperty('name')"
             class="flex items-center my-6">
            <div @click="getApplicants('1')"
                 :class="filtering == 1 ? ['blue','text-white'] : 'bg-white'"
                 class="bg-white font-mono ring-2 ring-red-400 px-3 py-1 cursor-pointer">
                liked
            </div>
            <div @click="getApplicants('0')"
                 :class="filtering == 0 ? ['blue','text-white'] : 'bg-white'"
                 class="font-mono ring-2 ring-red-400 px-3 py-1 cursor-pointer">
                disliked
            </div>
            <div @click="getApplicants(); filtering = null"
                 :class="filtering == null ? ['blue','text-white'] : 'bg-white'"
                 class="bg-white font-mono ring-2 ring-red-400 px-3 py-1 cursor-pointer">
                all
            </div>

        </div>
        {{--applicant id--}}
{{--        <div class="flex justify-between items-center">--}}
{{--            <div v-if="applicant.hasOwnProperty('name')"--}}
{{--                 class="flex items-center mt-6">--}}
{{--                <button @click="id = applicant.id-1 ;getApplicants()"--}}
{{--                        class="bg-white ring-2 ring-red-400 px-3 py-2 cursor-pointer">--}}
{{--                    <svg viewBox="0 0 10 16" version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                         xmlns:xlink="http://www.w3.org/1999/xlink" class="fill-current text-gray-900 w-2">--}}
{{--                        <g id="Page-1" stroke="none" stroke-width="2" fill="none" fill-rule="evenodd"--}}
{{--                           stroke-linecap="round"--}}
{{--                           stroke-linejoin="round">--}}
{{--                            <g id="Artboard" transform="translate(-587.000000, -177.000000)" stroke="#FD4848"--}}
{{--                               stroke-width="2">--}}
{{--                                <g id="Arrow---Right-2" transform="translate(588.000000, 178.000000)">--}}
{{--                                    <polyline id="Path" points="0.5 0 7.5 7 0.5 14"></polyline>--}}
{{--                                </g>--}}
{{--                            </g>--}}
{{--                        </g>--}}
{{--                    </svg>--}}
{{--                </button>--}}

{{--                <p class="text-base font-mono text-black mx-4 items-center">--}}
{{--                    ID: @{{ applicant.id }}--}}
{{--                </p>--}}

{{--                <button @click="id = applicant.id+1;getApplicants()"--}}
{{--                        class="bg-white ring-2 ring-red-400 px-3 py-2 cursor-pointer">--}}
{{--                    <svg viewBox="0 0 10 16" version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                         xmlns:xlink="http://www.w3.org/1999/xlink" class="fill-current text-gray-900 w-2">--}}
{{--                        <g id="Page-1" stroke="none" stroke-width="2" fill="none" fill-rule="evenodd"--}}
{{--                           stroke-linecap="round"--}}
{{--                           stroke-linejoin="round">--}}
{{--                            <g id="Artboard" transform="translate(-587.000000, -97.000000)" stroke="#FD4848"--}}
{{--                               stroke-width="2">--}}
{{--                                <g id="Arrow---Left-2" transform="translate(588.000000, 98.000000)">--}}
{{--                                    <polyline id="Path" points="7.5 14 0.5 7 7.5 0"></polyline>--}}
{{--                                </g>--}}
{{--                            </g>--}}
{{--                        </g>--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <a href="/dashboard/applicants">--}}
{{--                <div v-if="applicant.hasOwnProperty('name')"--}}
{{--                     class="flex items-center mt-6">--}}
{{--                    <p class="text-base FD4848 font-mono text-black mx-4 items-center">--}}
{{--                        Back--}}
{{--                    </p>--}}
{{--                    <button class="bg-white ring-2 ring-red-400 px-3 py-2 cursor-pointer">--}}
{{--                        <svg viewBox="0 0 10 16" version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                             xmlns:xlink="http://www.w3.org/1999/xlink" class="fill-current text-gray-900 w-2">--}}
{{--                            <g id="Page-1" stroke="none" stroke-width="2" fill="none" fill-rule="evenodd"--}}
{{--                               stroke-linecap="round"--}}
{{--                               stroke-linejoin="round">--}}
{{--                                <g id="Artboard" transform="translate(-587.000000, -97.000000)" stroke="#FD4848"--}}
{{--                                   stroke-width="2">--}}
{{--                                    <g id="Arrow---Left-2" transform="translate(588.000000, 98.000000)">--}}
{{--                                        <polyline id="Path" points="7.5 14 0.5 7 7.5 0"></polyline>--}}
{{--                                    </g>--}}
{{--                                </g>--}}
{{--                            </g>--}}
{{--                        </svg>--}}
{{--                    </button>--}}

{{--                </div>--}}
{{--            </a>--}}

{{--        </div>--}}

    </div>
    <div v-if="!applicant.hasOwnProperty('name')" class="grid lg:grid-cols-3 grid-cols-1 gap-6 lg:mx-16 mx-4 mb-10">

        <div v-for="applicant in applicants" @click="id = applicant.id; getApplicants()"
             class="bg-white border-2 hover:border-red-400 p-4">

            <div class="flex justify-between">
                <div>
                    <h1 class="text-lg font-bold">
                        الاسم:
                        @{{ applicant.name }}
                    </h1>
                    <h1 class="text-lg mt-2 text-gray-700">
                        @{{ applicant.city }}، @{{ applicant.age }}، @{{ applicant.school }}
                    </h1>
                    <h1 class="text-lg mt-2 text-gray-700">
                        الايميل:
                        @{{ applicant.email }}
                    </h1>
                    <h1 class="text-lg mt-2 text-gray-700">
                        رقم الهاتف:
                        @{{ applicant.phone }}
                    </h1>
                    <h1 class="text-lg font-bold mt-2">
                        القصة:
                    </h1>
                </div>

                <div @click="rate(applicant.rating == 0 ? 1 : 0,applicant.id)">
                    <img class="w-10 h-10 cursor-pointer" :src="'/assets/heart'+applicant.rating+'.svg'" alt="">
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
                    <h1 class="text-xl mt-2 text-gray-700">
                        @{{ applicant.city }}، @{{ applicant.age }}، @{{ applicant.school }}
                    </h1>
                    <h1 class="text-xl mt-2 text-gray-700">
                        الايميل:
                        @{{ applicant.email }}
                    </h1>
                    <h1 class="text-xl mt-2 text-gray-700">
                        رقم الهاتف:
                        @{{ applicant.phone }}
                    </h1>
                </div>
                <div class="flex">
                    <div @click="showMessage = true" class="cursor-pointer justify-self-center">
                        <img class="w-10 h-10" src="/assets/trashcan.svg" alt="">
                    </div>
                    <div @click="rate(applicant.rating == 0 ? 1 : 0,applicant.id)"
                         class="cursor-pointer justify-self-center">
                        <img class="w-10 h-10 mr-8" :src="heart" alt="">
                    </div>

                </div>

            </div>
            <p class="mt-6 text-2xl break-words leading-relaxed">
                @{{ applicant.story }}

            </p>
            <div v-if="showMessage" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title"
                 role="dialog"
                 aria-modal="true">
                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                    <!-- Heroicon name: outline/exclamation -->
                                    <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                    </svg>
                                </div>
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                        Delete story
                                    </h3>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">
                                            Are you sure you want to delete this participant's story?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <button @click="deleteStory(applicant.id);" type="button"
                                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                Delete
                            </button>
                            <button @click="showMessage = false" type="button"
                                    class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


</div>


<script src="/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    let vue = new Vue({
        el: '#app',
        data: {
            applicants: [],
            filtering: null,
            applicant: {},
            id: '',
            showMessage: false,
            heart: '',
            currentPage: 1,
            lastPage: null,
        },
        methods: {
            getApplicants(filter) {
                axios.get(`/dashboard/applicants/api/${this.id}`, {
                    params: {
                        page: this.currentPage
                    }
                }).then(response => {

                    this.applicants = response.data.data
                    this.currentPage = response.data.current_page
                    this.lastPage = response.data.last_page

                    if (this.id != '') {

                        this.applicant = response.data[0]
                        this.heart = `/assets/heart${this.applicant.rating}.svg`
                    }
                    if (filter) {
                        this.filtering = filter
                        this.applicants = this.applicants.filter(application => application.rating == filter);
                    }


                })
            },
            rate(rating, id) {
                axios.post(`/dashboard/applicants/api/${id}`, {
                    rating: rating
                })
                this.heart = `/assets/heart${rating}.svg`
            },
            deleteStory(id) {

                axios.delete(`/dashboard/applicant/api/${id}`).then(response => {
                    console.log(response)
                    location.reload()
                }).catch(function (error) {
                    // handle error
                    console.log(error);
                })
            }
        },
        computed: {
            // filteredApplicants() {
            //     if (this.filtering == null)
            //         return this.applicants;
            //     // return this.applicants;
            //     this.applicants.filter(application => application.rating == this.filtering);
            //
            // },
        },
        mounted() {
            this.getApplicants()
        }
    })
</script>
</body>
</html>