@extends('layouts.app')

@section('js')
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.min.js"></script>

    <script>
        function membership_form() {
            return {
                open: false,
                options: @json($technologies),
                selectedOptions: [],
                name: '',
                email: '',
                phone: '',
                years_of_experience: '',
                filePath: '',
                pond: null,
                isUploading: false,

                init() {
                    FilePond.registerPlugin(FilePondPluginImagePreview, FilePondPluginFileValidateType, FilePondPluginFileValidateSize);

                    this.pond = FilePond.create(this.$refs.filepond, {
                        acceptedFileTypes: ['image/png', 'image/jpeg', 'image/jpg'],
                        instantUpload: true,
                        allowProcess: true,
                        maxFileSize: '1MB',
                        showUploadButton: false,
                        server: {
                            process: {
                                url: '{{ route('api.v1.upload-profile-picture') }}',
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                onload: (response) => {
                                    const responseData = JSON.parse(response);
                                    const filePathInput = document.getElementById('file_path');
                                    if (filePathInput && responseData.path) {
                                        filePathInput.value = responseData.path;
                                    }

                                    console.log(filePathInput.value)
                                },
                                onerror: (error) => {
                                    console.error('File upload error:', error);
                                }
                            }
                        }
                    });
                },

                isFormValid() {
                    const name = document.querySelector('input[name="name"]').value;
                    const email = document.querySelector('input[name="email"]').value;
                    const phone = document.querySelector('input[name="phone"]').value;
                    const yearsOfExperience = document.querySelector('input[name="years_of_experience"]').value;
                    const filePath = document.getElementById('file_path')?.value;

                    return name &&
                           email &&
                           phone &&
                           yearsOfExperience &&
                           this.selectedOptions.length > 0 && filePath
                },

                toggleOption(option) {
                    if (this.selectedOptions.includes(option)) {
                        this.selectedOptions = this.selectedOptions.filter(item => item !== option);
                    } else {
                        this.selectedOptions.push(option);
                    }
                },

                async handleSubmit(event) {
                    event.preventDefault();

                    if (!this.isFormValid) {
                        alert('Please fill in all required fields');
                        return;
                    }

                    this.isUploading = true;

                    try {
                        this.$el.submit();
                    } catch (error) {
                        console.error('Form submission failed:', error);
                        this.isUploading = false;
                    }
                }
            }

        }
    </script>
@endsection
@section('content')
    <div class="relative h-screen overflow-auto bg-gradient-to-b from-gray-100 via-white to-white">

        <!-- Main Content -->
        <div class="relative isolate px-6 lg:px-8">
            <!-- Decorative Blur Effect -->
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#FBD72B] to-[#F9484A] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
        </div>

        <div class="text-gray-600 body-font relative">
            <div class="container px-5 py-32 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Membership page-ku vanthuteenga, sariyana decision!</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Form-a fill panni anuppunga... apram enga admins verify panni next step-ku kootitu povanga!</p>
                </div>
                <form x-data="membership_form()" @submit="handleSubmit" action="{{ route('membership.store') }}" method="POST">
                    @csrf
                    <div class="lg:w-3/4 md:w-2/3 mx-auto bg-white p-4 rounded-xl">
                        @if(session('success'))
                            <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if($errors)
                            @foreach($errors->all() as $error)
                                    <div class="mb-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg">
                                        {{ $error }}
                                    </div>
                            @endforeach
                        @endif

                        <div class="flex flex-wrap -m-2">
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">Name
                                        <span class="text-red-500">*</span></label>
                                    <input id="name" name="name" type="text"
                                           value="{{ old('name') }}"
                                           class="block w-full px-4 py-2 mt-2 text-gray-700 border border-gray-300 rounded-md focus:border-red-400 focus:ring-red-300 focus:ring-opacity-40 focus:outline-none focus:ring @error('name') border-red-500 @enderror">
                                </div>
                            </div>
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <label for="email" class="leading-7 text-sm text-gray-600">Email
                                        <span class="text-red-500">*</span></label>
                                    </label>
                                    <input id="email" name="email" type="text" value="{{ old("email") }}" class="block w-full px-4 py-2 mt-2 text-gray-700 border border-gray-300 rounded-md focus:border-red-400 focus:ring-red-500 focus:ring-opacity-40 focus:outline-none focus:ring" v>
                                </div>
                            </div>
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <label for="phone" class="leading-7 text-sm text-gray-600">Phone
                                        <span class="text-red-500">*</span></label>
                                    <input id="phone" name="phone" type="text" value="{{ old('phone') }}" class="block w-full px-4 py-2 mt-2 text-gray-700 border border-gray-300 rounded-md focus:border-red-400 focus:ring-red-500  focus:ring-opacity-40 focus:outline-none focus:ring">
                                </div>
                            </div>
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <label for="company" class="leading-7 text-sm text-gray-600">Current Company
                                    </label>
                                    <input id="company" name="current_company" type="text" value="{{ old('current_company') }}" class="block w-full px-4 py-2 mt-2 text-gray-700 border border-gray-300 rounded-md focus:border-red-400 focus:ring-red-500  focus:ring-opacity-40 focus:outline-none focus:ring">
                                </div>
                            </div>
                            <div class="p-2 w-1/2">
                                <label for="company" class="leading-7 text-sm text-gray-600">Github Profile
                                </label>
                                <div class="flex items-center mt-2">
                                    <p class="py-2.5 px-3 text-gray-500 bg-gray-100 border border-r-0 rtl:rounded-r-lg rtl:rounded-l-none rtl:border-l-0 rtl:border-r rounded-l-lg">@</p>
                                    <input type="text" placeholder="Just your username, e.g. taylorotwell" class="block w-full rounded-l-none rtl:rounded-l-lg rtl:rounded-r-none placeholder-gray-400/70 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 d" />
                                </div>
                            </div>
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <label for="company" class="leading-7 text-sm text-gray-600">LinkedIn Profile
                                    </label>
                                    <input id="company" name="current_company" type="text" placeholder="Your linkedIn Profile URl,e.g. https://www.linkedin.com/in/taylorotwell" value="{{ old('current_company') }}" class="block w-full px-4 py-2 mt-2 text-gray-700 border border-gray-300 rounded-md focus:border-red-400 focus:ring-red-500  focus:ring-opacity-40 focus:outline-none focus:ring placeholder:text-sm">
                                </div>
                            </div>
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <label for="years_of_experience" class="leading-7 text-sm text-gray-600">Years of Experience
                                        <span class="text-red-500">*</span></label></label>
                                    <select id="years_of_experience" name="years_of_experience"
                                            class="block w-full px-4  py-2.5 mt-2 text-gray-700 border border-gray-300 rounded-md focus:border-red-400 focus:ring-red-500  focus:ring-opacity-40 focus:outline-none focus:ring">
                                        <option value="" disabled selected>Select experience</option>
                                        <option value="0">New to Laravel</option>
                                        <option value="1-2">1-2 years</option>
                                        <option value="3-5">3-5 years</option>
                                        <option value="6-9">6-9 years</option>
                                        <option value="10+">10+ years</option>
                                    </select>
                                </div>
                            </div>
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <label for="technologies" class="leading-7 text-sm text-gray-600">Technologies
                                        <span class="text-red-500">*</span></label>
                                    <input type="hidden" name="technologies" x-model="selectedOptions">
                                    <div class="mt-2 relative">
                                        <button type="button" @click="open = !open" class="relative w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2.5 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 sm:text-sm">
                                            <span class="block truncate" x-text="selectedOptions.length ? selectedOptions.join(', ') : 'Select options'"></span>
                                            <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                             fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                  d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                                  clip-rule="evenodd" />
                                                        </svg>
                                                    </span>
                                        </button>

                                        <div x-show="open" @click.away="open = false" class="absolute z-10 mt-1 w-full bg-white shadow-lg max-h-60 rounded-md py-2 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm" style="display: none;">
                                            <template x-for="option in options" :key="option">
                                                <div @click="toggleOption(option)" class="cursor-pointer select-none relative py-2 pl-3 pr-9 hover:bg-red-600 hover:text-white">
                                                    <span x-text="option" :class="{ 'font-semibold': selectedOptions.includes(option) }" class="block truncate"></span>
                                                    <span x-show="selectedOptions.includes(option)" class="absolute inset-y-0 right-0 flex items-center pr-4 text-red   -600 hover:text-white">
                                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                    clip-rule="evenodd" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </template>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="profile_picture" class="leading-7 text-sm text-gray-600">Profile Picture</label>
                                    <input type="file" x-ref="filepond" class="filepond" name="file" required>
                                    <input type="hidden" name="file_path" id="file_path">
                                </div>
                            </div>

                          <div class="px-2 pt-2 w-full">
                              <div class="flex items-start mb-6">
                                  <div class="flex items-center h-5">
                                      <input name="is_available_freelance" id="is_available_freelance" type="checkbox"
                                             value="1" {{ old('is_available_freelance') ? 'checked' : '' }}
                                             class="w-4 h-4 rounded border-neutral-300 bg-neutral-50 focus:ring-3 focus:ring-blue-300">
                                  </div>
                                  <div class="ml-3 text-sm">
                                      <label for="is_available_freelance" class="text-neutral-900">Are you interested in being listed as a recognised Laravel Developer in Chennai?</label>
                                  </div>
                              </div>
                          </div>

                            <div class="px-2 w-full">
                                <div class="flex items-start mb-6">
                                    <div class="flex items-center h-5">
                                        <input name="receive_meetup_info" id="receive_meetup_info" type="checkbox"
                                               value="1" {{ old('receive_meetup_info') ? 'checked' : '' }}
                                               class="w-4 h-4 rounded border-neutral-300 bg-neutral-50 focus:ring-3 focus:ring-blue-300">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="receive_meetup_info" class="text-neutral-900">Are you willing to receive information / calls regarding meetups in Chennai?</label>
                                    </div>
                                </div>
                            </div>

                            <div class="px-2 w-full">
                                <div class="flex items-start mb-6">
                                    <div class="flex items-center h-5">
                                        <input name="is_speaker" id="is_speaker" type="checkbox"
                                               value="1" {{ old('is_speaker') ? 'checked' : '' }}
                                               class="w-4 h-4 rounded border-neutral-300 bg-neutral-50 focus:ring-3 focus:ring-blue-300">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="is_speaker" class="text-neutral-900">Are you interested in being a speaker?</label>
                                    </div>
                                </div>
                            </div>

                            <div class="px-2 w-full">
                                <div class="flex items-start mb-6">
                                    <div class="flex items-center h-5">
                                        <input name="is_volunteer" id="is_volunteer" type="checkbox"
                                               value="1" {{ old('is_volunteer') ? 'checked' : '' }}
                                               class="w-4 h-4 rounded border-neutral-300 bg-neutral-50 focus:ring-3 focus:ring-blue-300">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="is_volunteer" class="text-neutral-900">Are you interested in volunteering?</label>
                                    </div>
                                </div>
                            </div>

                            <div class="p-2 w-full">
                                <button  type="submit" :disabled="!isFormValid"
                                         x-text="isUploading ? 'Uploading...' : 'Submit'"
                                        class="flex mx-auto text-white bg-[#F9484A] border-0 py-2 px-8 focus:outline-none hover:bg-[#e61c1e] rounded text-lg disabled:opacity-50">
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection

