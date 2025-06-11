@extends('layouts.main')

@section('title', 'Blog Single')

@section('content')
    @push('css')
        <style>
            /* CSS untuk Animasi Gelombang Suara */
            .wave-bar {
                display: inline-block;
                width: 5px;
                height: 30px;
                margin: 0 2px;
                background-color: #007bff;
                animation: sound-wave 1.2s infinite ease-in-out;
            }

            .wave-bar:nth-child(2) {
                animation-delay: -1.1s;
            }

            .wave-bar:nth-child(3) {
                animation-delay: -1.0s;
            }

            .wave-bar:nth-child(4) {
                animation-delay: -0.9s;
            }

            .wave-bar:nth-child(5) {
                animation-delay: -0.8s;
            }

            @keyframes sound-wave {

                0%,
                40%,
                100% {
                    transform: scaleY(0.4);
                }

                20% {
                    transform: scaleY(1.0);
                }
            }

            /* CSS untuk Balon Chat */
            .ai-bubble,
            .user-bubble {
                padding: 10px 15px;
                border-radius: 20px;
                margin-bottom: 10px;
                max-width: 85%;
                word-wrap: break-word;
            }

            .ai-bubble {
                background-color: #f1f0f0;
                align-self: flex-start;
                text-align: left;
            }

            .user-bubble {
                background-color: #007bff;
                color: white;
                align-self: flex-end;
                margin-left: auto;
                text-align: left;
            }

            #ai-chat-body {
                display: flex;
                flex-direction: column;
            }

            /* ============================================================== */
            /* GAYA UNTUK ASISTEN AI (MOBILE FIRST) */
            /* ============================================================== */

            /* Gaya Dasar untuk Tombol Mikrofon Mengambang */
            #start-ai-btn {
                position: fixed;
                bottom: 20px;
                right: 20px;
                width: 60px;
                height: 60px;
                z-index: 1000;
            }

            /* Gaya Dasar untuk Jendela Chat */
            #ai-chat-window {
                display: none;
                position: fixed;
                bottom: 90px;
                right: 20px;
                width: 350px;
                /* Ukuran default untuk mobile */
                max-width: 90%;
                height: 500px;
                /* Ukuran default untuk mobile */
                background-color: white;
                z-index: 999;
                flex-direction: column;
                transition: all 0.3s ease-in-out;
                /* Animasi transisi */
            }


            /* ============================================================== */
            /* GAYA UNTUK LAYAR DESKTOP (LEBIH BESAR) */
            /* ============================================================== */

            /* Terapkan gaya ini jika lebar layar 768px atau lebih */
            @media (min-width: 768px) {
                #start-ai-btn {
                    bottom: 30px;
                    right: 30px;
                }

                #ai-chat-window {
                    width: 600px;
                    /* Lebar lebih besar untuk desktop */
                    height: 700px;
                    /* Tinggi lebih besar untuk desktop */
                    bottom: 100px;
                    right: 30px;
                }
            }
        </style>
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

        <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

        <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

        <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">


        <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @endpush

    {{-- ================================================================= --}}
    {{-- ============== BAGIAN UNTUK ASISTEN SUARA AI ================== --}}
    {{-- ================================================================= --}}

    <button id="start-ai-btn" class="btn btn-primary rounded-circle shadow">
        <i class="fas fa-microphone fa-lg"></i>
    </button>

    <div id="ai-chat-window" class="shadow-lg rounded">

        <div class="p-3 d-flex justify-content-between align-items-center"
            style="background-color: #001f3f; color: white; border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem;">
            <h6 class="mb-0">Pemandu Wisata Pribadi Anda</h6>
            <button id="close-ai-btn" type="button" class="close" style="color: white; opacity: 1;">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div id="ai-chat-body" class="p-3" style="flex-grow: 1; overflow-y: auto;">
            <div class="ai-bubble">Halo! Ada yang bisa saya bantu ceritakan tentang {{ $destination->title }}?</div>
        </div>

        <div id="ai-chat-footer" class="p-3 text-center d-flex flex-column align-items-center justify-content-center"
            style="border-top: 1px solid #eee;">

            <button id="ask-mic-btn" class="btn btn-primary rounded-circle mb-2" style="width: 50px; height: 50px;">
                <i class="fas fa-microphone"></i>
            </button>

            <div id="ai-status-text" style="color: #888; font-style: italic;">Tekan mikrofon untuk bertanya</div>

            <div id="sound-wave-animation" style="display: none; margin-top: 10px;">
                <div class="wave-bar"></div>
                <div class="wave-bar"></div>
                <div class="wave-bar"></div>
                <div class="wave-bar"></div>
                <div class="wave-bar"></div>
            </div>
        </div>
    </div>

    <main class="container px-3 pt-[20px] pb-5">
        {{-- Judul & Alamat di Tengah --}}
        <div class="text-center">

            {{-- Judul Destinasi --}}
            <h1 class="text-4xl font-bold mb-2">{{ $destination->title }}</h1>

            {{-- Alamat Destinasi --}}
            <h5 class="text-lg text-gray-600 mb-6">{{ $destination->address }}</h5>
        </div>

        {{-- Gambar Destinasi --}}
        <div class="d-flex justify-content-center">
            <img src="{{ asset('images/kuta.jpg') }}" alt="Gambar Destinasi" class="rounded-lg shadow-md mb-4 img-fluid"
                style="max-width: 600px; width: 100%; height: auto;" />
        </div>



        {{-- Deskripsi --}}
        <div class="text-justify text-gray-700 leading-relaxed mb-24">
            <p>{{ $destination->created_at }} {{ $destination->desc }} </p>
        </div>
    </main>

    @push('script')
        <!-- Scripts -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>
        <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
        <script src="{{ asset('js/scrollax.min.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="{{ asset('js/google-map.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script>
            // Membungkus semua logika di dalam DOMContentLoaded
            document.addEventListener('DOMContentLoaded', function() {

                // ========================================================
                // LOGIKA UNTUK ASISTEN SUARA AI
                // ========================================================

                // 1. Ambil semua elemen UI yang kita butuhkan
                const startAiBtn = document.getElementById('start-ai-btn');
                const closeAiBtn = document.getElementById('close-ai-btn');
                const aiChatWindow = document.getElementById('ai-chat-window');
                const aiChatBody = document.getElementById('ai-chat-body');
                const aiStatusText = document.getElementById('ai-status-text');
                const soundWaveAnimation = document.getElementById('sound-wave-animation');

                // 2. Ambil data konteks dari halaman Blade
                // Sekarang aman untuk mengambil elemen ini karena DOM sudah siap
                const destinationTitle = document.querySelector('h1').textContent;
                const destinationDesc = document.querySelector('.text-justify p').textContent;

                // 3. Inisialisasi Web Speech API (webkitSpeechRecognition)
                const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
                if (SpeechRecognition) {
                    const recognition = new SpeechRecognition();
                    recognition.lang = 'id-ID'; // Set bahasa ke Indonesia
                    recognition.interimResults = false;
                    recognition.continuous = false; // Berhenti merekam setelah ada jeda

                    // === Event Listeners untuk UI ===

                    startAiBtn.addEventListener('click', () => {
                        aiChatWindow.style.display = 'flex';
                        startAiBtn.style.display = 'none';
                    });

                    closeAiBtn.addEventListener('click', () => {
                        aiChatWindow.style.display = 'none';
                        startAiBtn.style.display = 'block';
                    });

                    document.getElementById('ask-mic-btn').addEventListener('click', () => {
                        try {
                            recognition.start();
                        } catch (e) {
                            console.error("Recognition bisa jadi sudah berjalan.", e);
                        }
                    });

                    // === Event Listeners untuk Speech Recognition ===

                    recognition.onstart = () => {
                        aiStatusText.textContent = 'Sedang mendengarkan...';
                        soundWaveAnimation.style.display = 'block';
                    };

                    recognition.onend = () => {
                        aiStatusText.textContent = 'Tekan untuk bertanya lagi';
                        soundWaveAnimation.style.display = 'none';
                    };

                    recognition.onerror = (event) => {
                        aiStatusText.textContent = 'Maaf, saya tidak menangkap suara Anda. Coba lagi.';
                        console.error('Speech recognition error:', event.error);
                    };

                    recognition.onresult = (event) => {
                        const transcript = event.results[0][0].transcript;
                        addBubbleToChat(transcript, 'user');
                        askTheGuide(transcript);
                    };

                } else {
                    // Beri tahu user jika browser tidak mendukung
                    aiStatusText.textContent = 'Browser Anda tidak mendukung pengenalan suara.';
                    console.error("Speech Recognition tidak didukung oleh browser ini.");
                }

                // === Fungsi-fungsi Helper ===

                async function askTheGuide(promptText) {
                    aiStatusText.textContent = 'Sedang memproses jawaban...';
                    soundWaveAnimation.style.display = 'none';
                    const payload = {
                        prompt: promptText,
                        context: {
                            title: destinationTitle,
                            description: destinationDesc
                        }
                    };
                    try {
                        const response = await fetch('http://127.0.0.1:8001/voice-process', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify(payload)
                        });
                        if (!response.ok) {
                            throw new Error(`API Error: ${response.statusText}`);
                        }
                        const result = await response.json();
                        if (result.status === 'success') {
                            const textAnswer = result.data.text_answer;
                            const base64Audio = result.data.audio_base64;
                            addBubbleToChat(textAnswer, 'ai');
                            if (base64Audio && base64Audio !== "dev_mode_audio_disabled") {
                                playAudio(base64Audio);
                            }
                        } else {
                            addBubbleToChat(`Maaf, terjadi kesalahan: ${result.message}`, 'ai');
                        }
                    } catch (error) {
                        console.error('Error calling API:', error);
                        addBubbleToChat(
                            'Waduh, sepertinya ada masalah koneksi ke pemandu wisata saya. Coba sesaat lagi ya.',
                            'ai');
                    }
                }

                function addBubbleToChat(text, sender) {
                    const bubble = document.createElement('div');
                    bubble.textContent = text;
                    bubble.classList.add(sender === 'user' ? 'user-bubble' : 'ai-bubble');
                    aiChatBody.appendChild(bubble);
                    aiChatBody.scrollTop = aiChatBody.scrollHeight;
                }

                function playAudio(base64String) {
                    const audioUrl = "data:audio/mp3;base64," + base64String;
                    const audio = new Audio(audioUrl);
                    audio.play();
                }

            }); // <-- Jangan lupa tanda kurung penutupnya
        </script>
        <script>
            document.getElementById('toggleSearch').addEventListener('click', function() {
                const bar = document.getElementById('searchBar');
                bar.style.display = bar.style.display === 'none' ? 'flex' : 'none';
            });

            // ========================================================
            // LOGIKA UNTUK ASISTEN SUARA AI
            // ========================================================

            // 1. Ambil semua elemen UI yang kita butuhkan
            const startAiBtn = document.getElementById('start-ai-btn');
            const closeAiBtn = document.getElementById('close-ai-btn');
            const aiChatWindow = document.getElementById('ai-chat-window');
            const aiChatBody = document.getElementById('ai-chat-body');
            const aiStatusText = document.getElementById('ai-status-text');
            const soundWaveAnimation = document.getElementById('sound-wave-animation');

            // 2. Ambil data konteks dari halaman Blade
            // Kita akan mengambilnya langsung dari elemen yang sudah ada saat diperlukan
            const destinationTitle = document.querySelector('h1').textContent;
            const destinationDesc = document.querySelector('.text-justify p').textContent;

            // 3. Inisialisasi Web Speech API (webkitSpeechRecognition)
            const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
            const recognition = new SpeechRecognition();
            recognition.lang = 'id-ID'; // Set bahasa ke Indonesia
            recognition.interimResults = false;
            recognition.continuous = false; // Berhenti merekam setelah ada jeda (sesuai permintaan Anda)

            // === Event Listeners untuk UI ===

            // Tampilkan jendela chat saat tombol FAB ditekan
            startAiBtn.addEventListener('click', () => {
                aiChatWindow.style.display = 'flex';
                startAiBtn.style.display = 'none'; // Sembunyikan tombol FAB
            });

            // Sembunyikan jendela chat saat tombol close ditekan
            closeAiBtn.addEventListener('click', () => {
                aiChatWindow.style.display = 'none';
                startAiBtn.style.display = 'block'; // Tampilkan lagi tombol FAB
            });

            // Mulai mendengarkan saat area footer (atau tombol lain) ditekan
            document.getElementById('ask-mic-btn').addEventListener('click', () => {
                try {
                    recognition.start();
                } catch (e) {
                    console.error("Recognition already started.", e);
                }
            });

            // === Event Listeners untuk Speech Recognition ===

            recognition.onstart = () => {
                aiStatusText.textContent = 'Sedang mendengarkan...';
                soundWaveAnimation.style.display = 'block';
            };

            recognition.onend = () => {
                aiStatusText.textContent = 'Tekan untuk bertanya lagi';
                soundWaveAnimation.style.display = 'none';
            };

            recognition.onerror = (event) => {
                aiStatusText.textContent = 'Maaf, saya tidak menangkap suara Anda. Coba lagi.';
                console.error('Speech recognition error:', event.error);
            };

            recognition.onresult = (event) => {
                const transcript = event.results[0][0].transcript;

                // Tampilkan pertanyaan user di chat
                addBubbleToChat(transcript, 'user');

                // Kirim data ke API FastAPI
                askTheGuide(transcript);
            };

            // === Fungsi-fungsi Helper ===

            // Fungsi untuk memanggil API FastAPI Anda
            async function askTheGuide(promptText) {
                aiStatusText.textContent = 'Sedang memproses jawaban...';
                soundWaveAnimation.style.display = 'none';

                const payload = {
                    prompt: promptText,
                    context: {
                        title: destinationTitle,
                        description: destinationDesc
                    }
                };

                try {
                    // Ganti URL ini jika API Anda berjalan di port atau alamat lain
                    const response = await fetch('http://127.0.0.1:8001/voice-process', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(payload)
                    });

                    if (!response.ok) {
                        throw new Error(`API Error: ${response.statusText}`);
                    }

                    const result = await response.json();

                    if (result.status === 'success') {
                        const textAnswer = result.data.text_answer;
                        const base64Audio = result.data.audio_base64;

                        // Tampilkan jawaban AI
                        addBubbleToChat(textAnswer, 'ai');

                        // Mainkan audio jika tidak dalam dev mode
                        if (base64Audio && base64Audio !== "dev_mode_audio_disabled") {
                            playAudio(base64Audio);
                        }

                    } else {
                        addBubbleToChat(`Maaf, terjadi kesalahan: ${result.message}`, 'ai');
                    }

                } catch (error) {
                    console.error('Error calling API:', error);
                    addBubbleToChat('Waduh, sepertinya ada masalah koneksi ke pemandu wisata saya. Coba sesaat lagi ya.',
                        'ai');
                }
            }

            // Fungsi untuk menambahkan balon chat ke UI
            function addBubbleToChat(text, sender) {
                const bubble = document.createElement('div');
                bubble.textContent = text;
                bubble.classList.add(sender === 'user' ? 'user-bubble' : 'ai-bubble');
                aiChatBody.appendChild(bubble);
                // Auto-scroll ke bawah
                aiChatBody.scrollTop = aiChatBody.scrollHeight;
            }

            // Fungsi untuk memainkan audio dari Base64
            function playAudio(base64String) {
                const audioUrl = "data:audio/mp3;base64," + base64String;
                const audio = new Audio(audioUrl);
                audio.play();
            }
        </script>

        <style>
            .ai-bubble,
            .user-bubble {
                padding: 10px 15px;
                border-radius: 20px;
                margin-bottom: 10px;
                max-width: 85%;
                word-wrap: break-word;
            }

            .ai-bubble {
                background-color: #f1f0f0;
                align-self: flex-start;
                text-align: left;
            }

            .user-bubble {
                background-color: #007bff;
                color: white;
                align-self: flex-end;
                margin-left: auto;
                /* Mendorong bubble ke kanan */
                text-align: left;
            }

            #ai-chat-body {
                display: flex;
                flex-direction: column;
            }
        </style>
    @endpush
@endsection
