<x-layout>
    <div class="max-w-4xl mx-auto">
        <!-- Page Header -->
        <div class="mb-8 animate-fadeIn">
            <h1 class="text-4xl font-bold gradient-text mb-2">Thông Tin Sinh Viên</h1>

        </div>

        <!-- Student Information Card -->
        <div class="card">
            <!-- Profile Header -->
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-t-xl -m-6 mb-6 p-8 text-white">
                <div class="flex items-center gap-6">
                    <!-- Avatar -->
                    <div class="flex-shrink-0">
                        <div
                            class="w-24 h-24 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center border-4 border-white/30">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Name and ID -->
                    <div class="flex-1">
                        <h2 class="text-3xl font-bold mb-2">{{ $name }}</h2>
                        <p class="text-blue-100 text-lg">MSSV: {{ $mssv }}</p>
                    </div>

                    <!-- Status Badge -->
                    <div>
                        <span
                            class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-green-500 text-white">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Hoạt đọng của sinh viên
                        </span>
                    </div>
                </div>
            </div>

            <!-- Information Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Personal Information -->
                <div class="space-y-4">
                    <h3 class="text-xl font-bold text-slate-800 mb-4 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        thông tin cá nhân
                    </h3>

                    <div class="space-y-3">
                        <div class="flex items-start">
                            <div class="w-32 text-slate-600 font-medium">Tên đầy đủ:</div>
                            <div class="flex-1 text-slate-800 font-semibold">{{ $name }}</div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-32 text-slate-600 font-medium">Mã số sinh viên:</div>
                            <div class="flex-1 text-slate-800 font-semibold">{{ $mssv }}</div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-32 text-slate-600 font-medium">Ngày sinh:</div>
                            <div class="flex-1 text-slate-800">01/01/2000</div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-32 text-slate-600 font-medium">Giới tính:</div>
                            <div class="flex-1 text-slate-800">Male</div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-32 text-slate-600 font-medium">Email:</div>
                            <div class="flex-1 text-blue-600">
                                {{ strtolower(str_replace(' ', '.', $name)) }}@student.edu.vn
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-32 text-slate-600 font-medium">Số điện thoại:</div>
                            <div class="flex-1 text-slate-800">0123-456-789</div>
                        </div>
                    </div>
                </div>

                <!-- Academic Information -->
                <div class="space-y-4">
                    <h3 class="text-xl font-bold text-slate-800 mb-4 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                        Thông tin học tập
                    </h3>

                    <div class="space-y-3">
                        <div class="flex items-start">
                            <div class="w-32 text-slate-600 font-medium">Chuyên ngành:</div>
                            <div class="flex-1 text-slate-800 font-semibold">Khoa học máy tính</div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-32 text-slate-600 font-medium">Khoa:</div>
                            <div class="flex-1 text-slate-800">Công nghệ thông tin</div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-32 text-slate-600 font-medium">Khóa học:</div>
                            <div class="flex-1 text-slate-800">1234</div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-32 text-slate-600 font-medium">Lớp:</div>
                            <div class="flex-1 text-slate-800">LT20IT</div>
                        </div>

                    </div>
                </div>
            </div>


        </div>

    </div>
</x-layout>