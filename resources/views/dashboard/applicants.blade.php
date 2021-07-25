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
    <div class="mt-10 mx-10">
        <h1 class="text-4xl FD4848">
            قصص المتسابقين
        </h1>
        <div v-if="!applicant.hasOwnProperty('name')"
             class="flex items-center my-6">
            <div class="bg-white ring-2 ring-red-400 px-3 py-2 cursor-pointer">
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
                Page @{{ currentPage }}
            </p>
            {{--            @click="paginate"--}}
            <div class="bg-white ring-2 ring-red-400 px-3 py-2 cursor-pointer">
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

        <div class="flex justify-between items-center">
            <div v-if="applicant.hasOwnProperty('name')"
                 class="flex items-center mt-6">
                <button @click="getApplicants(applicant.id - 1)"
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
                </button>

                <p class="text-base font-mono text-black mx-4 items-center">
                    ID: @{{ applicant.id }}
                </p>

                <button @click="getApplicants(applicant.id + 1)"
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
                </button>
            </div>
            <a href="/dashboard/applicants">
                <div v-if="applicant.hasOwnProperty('name')"
                     class="flex items-center mt-6">
                    <p class="text-base FD4848 font-mono text-black mx-4 items-center">
                        Back
                    </p>
                    <button class="bg-white ring-2 ring-red-400 px-3 py-2 cursor-pointer">
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
                    </button>

                </div>
            </a>

        </div>

    </div>
    <div class="grid lg:grid-cols-3 grid-cols-1 gap-6 mx-16 mb-10">

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
    d
    <div v-if="applicant.hasOwnProperty('name')">
        <div class="bg-white border-2 border-red-300 mx-10 lg:p-6 p-4 mb-10">
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
                <div @click="rate(applicant.rating == 0 ? 1 : 0,applicant.id)" class="cursor-pointer">
                    <img class="w-10 h-10" :src="heart" alt="">
                </div>
            </div>
            <p class="mt-6 text-2xl break-words leading-relaxed">
                @{{ applicant.story }}

            </p>
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
            currentPage: 1,
            heart: ''
        },
        methods: {
            getApplicants(filter) {
                axios.get(`/dashboard/applicants/api/${this.id}`).then(response => {
                    // console.log(this.id)
                    this.applicants = response.data.data
                    console.log(this.applicants)
                    if (this.id != '') {
                        this.applicant = response.data[0]
                        this.heart = `/assets/heart${this.applicant.rating}.svg`
                    }
                    if (filter) {
                        console.log(parseInt(filter))
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
                // this.getApplicants(this.applicant.id)
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